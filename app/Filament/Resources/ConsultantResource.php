<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConsultantResource\Pages;
use App\Filament\Resources\ConsultantResource\RelationManagers;
use App\Models\Consultant;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Radio;

use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ConsultantResource extends Resource
{
    protected static ?string $model = Consultant::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('first_name')
                    ->required(),
                Forms\Components\TextInput::make('last_name')
                    ->required(),
                Forms\Components\DatePicker::make('dob')
                    ->required(),
                Forms\Components\TextInput::make('gender')
                    ->required(),
                Forms\Components\TextInput::make('address')
                    ->required(),
                Forms\Components\TextInput::make('city')
                    ->required(),
                Forms\Components\TextInput::make('state')
                    ->required(),
                Forms\Components\TextInput::make('postalCode')
                    ->required(),
                Forms\Components\TextInput::make('country')
                    ->required(),
                Forms\Components\TextInput::make('phone_number')
                    ->tel()
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required(),
                Forms\Components\TextInput::make('qaultification')
                    ->required(),
                Forms\Components\TextInput::make('experience')
                    ->required(),
                Forms\Components\TextInput::make('specialisation')
                    ->required(),
                Forms\Components\DatePicker::make('joining date')
                    ->required(),
                Forms\Components\TextInput::make('salary')
                    ->required()
                    ->numeric(),
                Radio::make('status')

                    ->options([
                        'active' => "active",
                        'inactive' => "inactive",

                    ]),
                Forms\Components\TextInput::make('notes')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('first_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('last_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('dob')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('gender')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('state')
                    ->searchable(),
                Tables\Columns\TextColumn::make('postalCode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('country')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('qaultification')
                    ->searchable(),
                Tables\Columns\TextColumn::make('experience')
                    ->searchable(),
                Tables\Columns\TextColumn::make('specialisation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('joining date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('salary')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('notes')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListConsultants::route('/'),
            'create' => Pages\CreateConsultant::route('/create'),
            'view' => Pages\ViewConsultant::route('/{record}'),
            'edit' => Pages\EditConsultant::route('/{record}/edit'),
        ];
    }
}
