<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Radio;

use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('first_name')
                    ->required(),
                Forms\Components\TextInput::make('last_name')
                    ->required(),
                Forms\Components\DatePicker::make('date_of_birth')
                    ->required(),
                Forms\Components\TextInput::make('gender')
                    ->required(),
                Forms\Components\TextInput::make('address')
                    ->required(),
                Forms\Components\TextInput::make('city')
                    ->required(),
                Forms\Components\TextInput::make('state')
                    ->required(),
                Forms\Components\TextInput::make('postal_code')
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
                Forms\Components\TextInput::make('previous_school')
                    ->required(),
                Forms\Components\TextInput::make('highest qualification')
                    ->required(),
                Forms\Components\TextInput::make('grades')
                    ->required(),
                Forms\Components\TextInput::make('preferred_country')
                    ->required(),
                Forms\Components\TextInput::make('preferred_university')
                    ->required(),
                Forms\Components\TextInput::make('course_of_interest')
                    ->required(),
                Forms\Components\TextInput::make('langauge_profeciency')
                    ->required(),
                Forms\Components\Select::make('consultant_id')
                    ->relationship('consultant', 'email')
                    ->required(),
                Radio::make('application_status')

                    ->options([
                        'initial' => "initial",
                        'in_progress' => "inprogress",
                        'submitted' => 'submitted',
                        'accepted' => 'accepted',
                        'rejected' => 'rejected',


                    ]),
                Forms\Components\Textarea::make('notes')
                    ->columnSpanFull(),
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
                Tables\Columns\TextColumn::make('date_of_birth')
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
                Tables\Columns\TextColumn::make('postal_code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('country')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('previous_school')
                    ->searchable(),
                Tables\Columns\TextColumn::make('highest qualification')
                    ->searchable(),
                Tables\Columns\TextColumn::make('grades')
                    ->searchable(),
                Tables\Columns\TextColumn::make('preferred_country')
                    ->searchable(),
                Tables\Columns\TextColumn::make('preferred_university')
                    ->searchable(),
                Tables\Columns\TextColumn::make('course_of_interest')
                    ->searchable(),
                Tables\Columns\TextColumn::make('langauge_profeciency')
                    ->searchable(),
                Tables\Columns\TextColumn::make('consultant_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('application_status')
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
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'view' => Pages\ViewStudent::route('/{record}'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
}
