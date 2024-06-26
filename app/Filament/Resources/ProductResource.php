<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'المنتجات';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\Section::make()->schema([
                    Forms\Components\Select::make('category_id')
                        ->label("اسم الفئة")
                        ->searchable()
                        ->preload()
                        ->required()
                        ->relationship(
                            'category',
                            'name',
                        ),

                    Forms\Components\TextInput::make('name')
                        ->label("اسم المنتج")
                        ->required()
                        ->maxLength(255),

                    Forms\Components\TextInput::make('description')
                        ->label("وصف المنتج")
                        ->required()
                        ->maxLength(255),

                    Forms\Components\FileUpload::make('image')
                        ->label("الصورة")
                        ->image()
                        ->required()
                        ->directory("images/products")
                        ->visibility("public")
                        ->disk("public")
                        ->imageEditor()
                        ->downloadable()
                        ->columnSpanFull(),


                    Forms\Components\Toggle::make('status')
                        ->label("حالة المنتج")
                        ->required()
                        ->default(true)
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\ImageColumn::make('image')
                    ->label("الصورة")
                    ->disk('public')
                    ->width("75px")
                    ->height("75px")
                    ->visibility('private'),

                Tables\Columns\TextColumn::make('category.name')
                    ->label("اسم الفئة")
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('name')
                    ->label("اسم المنتج")
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('description')
                    ->label("وصف المنتج")
                    ->sortable()
                    ->searchable(),

                Tables\Columns\ToggleColumn::make('status')
                    ->label("حالة المنتج"),

                Tables\Columns\TextColumn::make('created_at')
                    ->label("تاريخ الانشاء")
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label("تاريخ اخر تحديث")
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return "منتج";
    }
    public static function getPluralLabel(): string
    {
        return "المنتجات";
    }
    public static function getNavigationLabel(): string
    {
        return "المنتجات";
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getNavigationBadgeColor(): ?string
    {
        return static::getModel()::count() > 10 ? 'warning' : 'primary';
    }
}
