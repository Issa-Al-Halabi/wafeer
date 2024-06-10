<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExhibitionResource\Pages;
use App\Filament\Resources\ExhibitionResource\RelationManagers;
use App\Models\Exhibition;
use Filament\Forms;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExhibitionResource extends Resource
{
    protected static ?string $model = Exhibition::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'المعارض';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make()->schema([

                    Tab::make("معلومات المعرض")->schema([
                        Forms\Components\Section::make()->schema([

                            Forms\Components\TextInput::make('name')
                                ->label("اسم المعرض")
                                ->required()
                                ->maxLength(255),

                            Forms\Components\TextInput::make('year')
                                ->label("السنة")
                                ->required()
                                ->numeric()
                                ->default(now()->year)
                                ->minValue(0),

                            Forms\Components\toggle::make('status')
                                ->label("حالة المعرض")
                                ->required(),

                            Forms\Components\FileUpload::make('image')
                                ->label("الصورة")
                                ->image()
                                ->required()
                                ->directory("images/exhibition")
                                ->visibility("public")
                                ->disk("public")
                                ->imageEditor()
                                ->downloadable()
                                ->columnSpanFull(),

                        ])->columns(2)
                    ]),
                    Tab::make("صور المعرض")->schema([
                        Forms\Components\FileUpload::make('images')
                            ->label("الصورة")
                            ->image()
                            ->multiple()
                            ->required()
                            ->directory("images/exhibition")
                            ->visibility("public")
                            ->disk("public")
                            ->imageEditor()
                            ->downloadable()
                            ->columnSpanFull(),
                    ]),
                ])->columnSpanFull(),


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
                    ->label("اسم المعرض")
                    ->searchable(),

                Tables\Columns\TextColumn::make('year')
                    ->label("السنة")
                    ->badge()
                    ->searchable(),


                Tables\Columns\ImageColumn::make('images')
                    ->label("صور المعرض"),


                Tables\Columns\ToggleColumn::make('status')
                    ->label("حالة المعرض"),

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
            'index' => Pages\ListExhibitions::route('/'),
            'create' => Pages\CreateExhibition::route('/create'),
            'edit' => Pages\EditExhibition::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return "معرض";
    }
    public static function getPluralLabel(): string
    {
        return "المعارض";
    }
    public static function getNavigationLabel(): string
    {
        return "المعارض";
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