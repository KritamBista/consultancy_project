<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyResource\Pages;
use App\Filament\Resources\CompanyResource\RelationManagers;
use App\Models\Company;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompanyResource extends Resource
{
    protected static ?string $model = Company::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('logo')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('address')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('contact_1')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('contact_2')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('smtp_host')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('port')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('smtp_username')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('smtp_password')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('sms_api')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('documentation')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('code_of_conduct')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('pre_post_departure')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('our_associations')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('facebook')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('LinkedIn')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('Instagram')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('whatsapp')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('map')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('pan no')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('establishment')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('logo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contact_1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contact_2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('facebook')
                    ->searchable(),
                Tables\Columns\TextColumn::make('LinkedIn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Instagram')
                    ->searchable(),
                Tables\Columns\TextColumn::make('whatsapp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('map')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pan no')
                    ->searchable(),
                Tables\Columns\TextColumn::make('establishment')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCompanies::route('/'),
            'create' => Pages\CreateCompany::route('/create'),
            'view' => Pages\ViewCompany::route('/{record}'),
            'edit' => Pages\EditCompany::route('/{record}/edit'),
        ];
    }
}
