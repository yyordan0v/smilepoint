<?php

declare(strict_types=1);

namespace App\Filament\Resources\Users\Tables;

use App\Models\User;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Notifications\Notification;
use Filament\Support\Enums\FontWeight;
use Filament\Support\Enums\IconPosition;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

final class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->weight(FontWeight::Bold),

                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->copyable()
                    ->icon(Heroicon::ClipboardDocument)
                    ->iconPosition(IconPosition::After)
                    ->disabledClick()
                    ->copyMessage('Email copied!')
                    ->searchable(),

                TextColumn::make('created_at')
                    ->label('Joined')
                    ->since()
                    ->dateTimeTooltip(),

                TextColumn::make('updated_at')
                    ->label('Last Activity')
                    ->since()
                    ->dateTimeTooltip()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->recordActions([
                EditAction::make(),

                Action::make('markVerified')
                    ->label('Mark Verified')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->size('sm')
                    ->visible(fn (User $record): bool => ! $record->hasVerifiedEmail())
                    ->requiresConfirmation()
                    ->modalHeading('Mark as Verified')
                    ->modalDescription('Mark this user\'s email as verified without sending an email.')
                    ->action(function (User $record): void {
                        $record->markEmailAsVerified();

                        Notification::make()
                            ->title('Email marked as verified')
                            ->success()
                            ->send();
                    }),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
