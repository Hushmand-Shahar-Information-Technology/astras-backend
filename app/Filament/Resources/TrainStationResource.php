<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TrainStationResource\Pages;
use App\Filament\Resources\TrainStationResource\RelationManagers;
use App\Models\TrainStation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TrainStationResource extends Resource
{
    protected static ?string $model = TrainStation::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('transport_type_id')
                    ->numeric(),
                Forms\Components\TextInput::make('product_type_id')
                    ->numeric(),
                Forms\Components\TextInput::make('company_id')
                    ->numeric(),
                Forms\Components\TextInput::make('user_id')
                    ->numeric(),
                Forms\Components\TextInput::make('product_id')
                    ->numeric(),
                Forms\Components\TextInput::make('country_from_id')
                    ->numeric(),
                Forms\Components\TextInput::make('country_to_id')
                    ->numeric(),
                Forms\Components\TextInput::make('number_of_wagon')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('weight')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('number_of_bar')
                    ->required()
                    ->numeric(),
                Forms\Components\DatePicker::make('date_of_out')
                    ->required(),
                Forms\Components\DatePicker::make('date_of_in')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('transport_type_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('product_type_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('company_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('product_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('country_from_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('country_to_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('number_of_wagon')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('weight')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('number_of_bar')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('date_of_out')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('date_of_in')
                    ->date()
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
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageTrainStations::route('/'),
        ];
    }
}
