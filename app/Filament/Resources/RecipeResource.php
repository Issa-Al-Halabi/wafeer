<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RecipeResource\Pages;
use App\Filament\Resources\RecipeResource\RelationManagers;
use App\Models\Recipe;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RecipeResource extends Resource
{
    protected static ?string $model = Recipe::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'الوصفات';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()->schema([

                    Forms\Components\TextInput::make('name')
                        ->label("اسم الوصفة")
                        ->required()
                        ->maxLength(255),

                    Forms\Components\TextInput::make('description')
                        ->label("وصف الوصفة")
                        ->required()
                        ->maxLength(255),

                    Forms\Components\TextInput::make('preparation')
                        ->label("طريقة التحضير")
                        ->required()
                        ->maxLength(255)
                        ->columnSpanFull(),


                    Forms\Components\toggle::make('status')
                        ->label("حالة الوصفة")
                        ->required(),


                    Forms\Components\FileUpload::make('image')
                        ->label("الصورة")
                        ->image()
                        ->required()
                        ->directory("images/recipe")
                        ->visibility("public")
                        ->disk("public")
                        ->imageEditor()
                        ->downloadable()
                        ->columnSpanFull(),


                    Forms\Components\FileUpload::make('video')
                        ->label("فيديو طريقة التحضير")
                        ->acceptedFileTypes(['video/mp4', 'video/x-m4v', 'video/*'])
                        ->fetchFileInformation(false)
                        ->required()
                        ->directory("video/recipe")
                        ->visibility("public")
                        ->disk("public")
                        ->downloadable()
                        ->columnSpanFull(),

                ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label("الصورة")
                    ->disk('public')
                    ->width("150px")
                    ->height("150px")
                    ->visibility('private'),

                Tables\Columns\TextColumn::make('name')
                    ->label("اسم الوصفة")
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('description')
                    ->label("وصف الوصفة")
                    ->sortable()
                    ->searchable(),

                Tables\Columns\ToggleColumn::make('status')
                    ->label("حالة الوصفة"),

                Tables\Columns\TextColumn::make('preparation')
                    ->label("طريقة التحضير")
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),


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
            'index' => Pages\ListRecipes::route('/'),
            'create' => Pages\CreateRecipe::route('/create'),
            'edit' => Pages\EditRecipe::route('/{record}/edit'),
        ];
    }


    public static function getModelLabel(): string
    {
        return "وصفة";
    }
    public static function getPluralLabel(): string
    {
        return "الوصفات";
    }
    public static function getNavigationLabel(): string
    {
        return "الوصفات";
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getNavigationBadgeColor(): ?string
    {
        return static::getModel()::count() > 10 ? 'warning' : 'info';
    }
}
