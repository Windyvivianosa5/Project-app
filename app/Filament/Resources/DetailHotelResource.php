<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DetailHotelResource\Pages;
use App\Models\DetailHotel;
use App\Models\Hotel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DetailHotelResource extends Resource
{
    protected static ?string $model = DetailHotel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('hotel_id')
                    ->options(Hotel::all()->pluck('id', 'id')) // tampilkan nama hotel, bukan id
                    ->label('Hotel_id')
                    ->searchable()
                    ->required(),

                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('deskripsi')
                    ->required()
                    ->maxLength(1000),

                Forms\Components\TextInput::make('harga')
                    ->required()
                    ->numeric(),

                Forms\Components\TextInput::make('alamat')
                    ->required()
                    ->maxLength(255),

                // Upload gambar
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required(),
                Forms\Components\FileUpload::make('image2')
                    ->image(),
                Forms\Components\FileUpload::make('image3')
                    ->image(),

                // Tambahan untuk maps
                Forms\Components\TextInput::make('latitude')
                    ->label('Latitude')
                    ->numeric()
                    ->step(0.0000001)
                    ->required(),

                Forms\Components\TextInput::make('longitude')
                    ->label('Longitude')
                    ->numeric()
                    ->step(0.0000001)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('hotel.name')->label('Hotel'),
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('deskripsi')->limit(50),
                Tables\Columns\TextColumn::make('harga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('alamat')->limit(30),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\ImageColumn::make('image2'),
                Tables\Columns\ImageColumn::make('image3'),
                Tables\Columns\TextColumn::make('latitude'),
                Tables\Columns\TextColumn::make('longitude'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([])
            ->actions([
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDetailHotels::route('/'),
            'create' => Pages\CreateDetailHotel::route('/create'),
            'edit' => Pages\EditDetailHotel::route('/{record}/edit'),
        ];
    }
}
