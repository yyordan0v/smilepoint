<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use App\Models\User;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('markAsVerified')
                ->label('Mark as Verified')
                ->icon('heroicon-o-check-circle')
                ->color('success')
                ->visible(fn (User $record): bool => ! $record->hasVerifiedEmail())
                ->requiresConfirmation()
                ->modalHeading('Mark Email as Verified')
                ->modalDescription('This will manually mark the user\'s email as verified without sending an email.')
                ->modalSubmitActionLabel('Mark Verified')
                ->action(function (User $record): void {
                    $record->markEmailAsVerified();

                    Notification::make()
                        ->title('Email marked as verified')
                        ->body('The user\'s email has been marked as verified.')
                        ->success()
                        ->send();
                }),

            DeleteAction::make(),
        ];
    }
}
