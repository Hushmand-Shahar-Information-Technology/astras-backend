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

    protected static ?string $navigationGroup = 'منابع اصلی';
    protected static ?string $modelLabel = 'کمپنی';
    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('owner_name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('father_name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('partner_phone')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\TextInput::make('maktoob_date')
                    ->maxLength(255),
                Forms\Components\TextInput::make('expire_date')
                    ->maxLength(255),
                Forms\Components\TextInput::make('license_number')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('owner_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('father_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('partner_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('maktoob_date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('expire_date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('license_number')
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
            'index' => Pages\ManageCompanies::route('/'),
        ];
    }
}
