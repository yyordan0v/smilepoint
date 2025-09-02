<?php

declare(strict_types=1);

namespace App\Filament\Resources\Users\Schemas;

use App\Models\User;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

final class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(3)
                    ->columnSpanFull()
                    ->schema([
                        Section::make('Account Details')
                            ->description('User account and authentication information')
                            ->icon('heroicon-o-user-circle')
                            ->columnSpan(2)
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('name')
                                            ->label('Full Name')
                                            ->placeholder('John Doe')
                                            ->required()
                                            ->maxLength(255)
                                            ->prefixIcon('heroicon-o-user'),

                                        TextInput::make('email')
                                            ->label('Email Address')
                                            ->placeholder('john@example.com')
                                            ->email()
                                            ->required()
                                            ->maxLength(255)
                                            ->unique(ignoreRecord: true)
                                            ->prefixIcon('heroicon-o-envelope'),
                                    ]),

                                TextInput::make('password')
                                    ->label('Password')
                                    ->password()
                                    ->revealable()
                                    ->required(fn (string $context): bool => $context === 'create')
                                    ->minLength(8)
                                    ->dehydrated(fn (?string $state): bool => filled($state))
                                    ->helperText(fn (string $context): string => $context === 'edit'
                                            ? 'Leave blank to keep current password'
                                            : 'Minimum 8 characters required'
                                    )
                                    ->prefixIcon('heroicon-o-key'),
                            ]),

                        Section::make('Account Status')
                            ->description('Email verification and account state')
                            ->icon('heroicon-o-shield-check')
                            ->columnSpan(1)
                            ->schema([
                                TextEntry::make('email_verified_status')
                                    ->label('Email Verification')
                                    ->state(fn (?User $record): string => $record?->email_verified_at ? 'Verified' : 'Not verified')
                                    ->badge()
                                    ->color(fn (?User $record): string => $record?->email_verified_at ? 'success' : 'warning'),

                                TextEntry::make('created_at')
                                    ->label('Member Since')
                                    ->state(fn (?User $record): string => $record?->created_at?->format('M j, Y') ?? 'New user'),

                                TextEntry::make('updated_at')
                                    ->label('Last Updated')
                                    ->state(fn (?User $record): string => $record?->updated_at?->diffForHumans() ?? 'Never'),
                            ]),
                    ]),
            ]);
    }
}
