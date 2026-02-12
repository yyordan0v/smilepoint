# Action Pattern Guidelines

You MUST follow these guidelines when creating, modifying, or refactoring business logic in this Laravel project.

## Core Rule

Every discrete business operation MUST be an Action class. Controllers, commands, jobs, and listeners are thin adapters that delegate to Actions.

## Action Class Structure

```php
<?php

declare(strict_types=1);

namespace App\Actions\{Domain};

final readonly class {Verb}{Noun}Action
{
    public function __construct(
        // Services and child actions resolved from the container
    ) {}

    public function handle(/* runtime data */): mixed
    {
        return DB::transaction(function () {
            //
        });
    }
}
```

### Non-negotiable rules

- Always `final readonly`
- Always `declare(strict_types=1)`
- One public method: `handle()`
- One action = one task. If the class name needs "And" (`CreateAndNotifyUserAction`), split it
- Class name is `{Verb}{Noun}Action` — e.g. `CreateUserAction`, `SendInvoiceAction`, `VerifyEmailAction`
- Wrap database mutations in `DB::transaction()`

## Dependency Injection

```php
// CORRECT — services in constructor, runtime data in handle()
final readonly class CreateOrderAction
{
    public function __construct(
        private ProcessPaymentAction $processPayment,
        private SendOrderConfirmationAction $sendConfirmation,
    ) {}

    public function handle(User $user, CartData $cart): Order { ... }
}
```

### Rules

- Constructor: inject services, repositories, and child actions (resolved by container)
- `handle()` parameters: runtime data specific to this invocation (models, DTOs, scalars)
- NEVER instantiate actions with `new`. Always resolve from the container via type-hinting or `app()`
- NEVER inject `Request`, `Session`, or HTTP-layer objects into an Action

## Directory Structure

```
app/Actions/
├── Authentication/
│   ├── CreateUserAction.php
│   ├── VerifyEmailAction.php
│   └── ResetPasswordAction.php
├── Billing/
│   ├── ProcessPaymentAction.php
│   ├── CreateSubscriptionAction.php
│   └── IssueRefundAction.php
└── Orders/
    ├── CreateOrderAction.php
    ├── CancelOrderAction.php
    └── CalculateShippingAction.php
```

Organize by domain subdirectory. The namespace mirrors the directory: `App\Actions\Billing\ProcessPaymentAction`.

## Controller Integration

Controllers are thin HTTP adapters. They validate input, call the action, and return a response.

```php
final class CreateOrderController extends Controller
{
    public function __invoke(
        CreateOrderRequest $request,
        CreateOrderAction $action,
    ): RedirectResponse {
        $order = $action->handle(
            user: $request->user(),
            cart: CartData::from($request->validated()),
        );

        return redirect()->route('orders.show', $order);
    }
}
```

### Rules

- HTTP validation stays in `FormRequest`
- The controller transforms HTTP input into domain objects/DTOs and passes them to the action
- The controller transforms the action's return value into an HTTP response
- NEVER put business logic in the controller

## Livewire Integration

```php
final class CreateOrder extends Component
{
    public function save(CreateOrderAction $action): void
    {
        $this->validate();

        $action->handle(
            user: auth()->user(),
            cart: CartData::from($this->all()),
        );

        $this->redirect(route('orders.index'));
    }
}
```

## Action Composition

Complex workflows are built by composing actions. Parent actions inject and call child actions.

```php
final readonly class OnboardUserAction
{
    public function __construct(
        private CreateUserAction $createUser,
        private CreateTeamAction $createTeam,
        private SendWelcomeEmailAction $sendWelcomeEmail,
    ) {}

    public function handle(RegisterData $data): User
    {
        return DB::transaction(function () use ($data) {
            $user = $this->createUser->handle($data->email, $data->name, $data->password);
            $this->createTeam->handle($user, $data->teamName);
            $this->sendWelcomeEmail->handle($user);

            return $user;
        });
    }
}
```

### Rules

- Inject child actions via constructor
- Wrap the full composition in `DB::transaction()` if any child mutates data
- For async sub-operations, dispatch the child action as a job instead of calling `handle()` directly

## Validation Inside Actions

Use in-action validation ONLY for business rules that must be enforced regardless of entry point. Throw domain exceptions, never return booleans.

```php
final readonly class CreateUserAction
{
    public function handle(string $email, string $name): User
    {
        if (User::where('email', $email)->exists()) {
            throw new EmailAlreadyTakenException($email);
        }

        return User::create(['email' => $email, 'name' => $name]);
    }
}
```

Format/shape validation (required, max length, email format) stays in the HTTP layer (`FormRequest`).

## Testing

Actions are plain PHP classes — test them directly.

```php
it('creates a user', function () {
    $user = app(CreateUserAction::class)->handle(
        email: 'jane@example.com',
        name: 'Jane Doe',
        password: 'secure-password',
    );

    expect($user->name)->toBe('Jane Doe');
    $this->assertDatabaseHas('users', ['email' => 'jane@example.com']);
});
```

When testing composed actions, mock child actions to isolate the unit under test.

## When NOT to Create an Action

- Trivial wrappers: `FindUserByIdAction` that just calls `User::find($id)` adds noise
- Pure reads with no side effects — use query scopes, query builders, or dedicated Query classes
- Simple attribute access or formatting — use accessors, casts, or Value Objects

**Create an Action when
**: the operation has business logic, side effects (DB writes, API calls, notifications), is called from multiple contexts, or benefits from explicit testability.

## Forbidden Patterns

| Do NOT do this                           | Do this instead                                 |
|------------------------------------------|-------------------------------------------------|
| `Auth::user()` inside an action          | Pass `User $user` as a parameter                |
| `request()->input('x')` inside an action | Pass validated data as parameters               |
| `return redirect()` from an action       | Return domain data; let the controller redirect |
| `new CreateUserAction()`                 | Type-hint or `app(CreateUserAction::class)`     |
| Multiple public methods on an action     | Split into separate action classes              |
| `CreateAndNotifyUserAction`              | `CreateUserAction` + `SendWelcomeEmailAction`   |
| Business logic in a controller           | Extract to an action                            |
| God action (>50 lines of logic)          | Compose smaller child actions                   |