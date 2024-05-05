<?php

namespace App\Filament\Resources;

use App\Enums\OrderTypes;
use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderResource extends Resource
{
    use Translatable;
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'الطلبات';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make()->schema([
                    Group::make()->schema([
                        Forms\Components\Select::make('user_id')
                            ->label("اسم المستخدم")
                            ->required()
                            ->searchable()
                            ->preload()
                            ->relationship("user", "name"),

                        Forms\Components\Select::make('maid_id')
                            ->label("اسم الخادمة")
                            ->required()
                            ->searchable()
                            ->preload()
                            ->relationship('maid', 'first_name', fn (Order|null $record, $query) => $query->whereDoesntHave("order")->orWhere("id", $record != null ? $record->id : 0))
                            ->getOptionLabelFromRecordUsing(fn ($record, $livewire) => $record->hasTranslation('first_name', $livewire->activeLocale)
                                ? $record->getTranslation('first_name', $livewire->activeLocale) . " " . $record->getTranslation('last_name', $livewire->activeLocale)
                                : $record->first_name . " " . $record->last_name),

                        // Forms\Components\TextInput::make('status_id')
                        //     ->label("الحالة ال")
                        //     ->required()
                        //     ->searchable()
                        //     ->preload()
                        //     ->relationship("status", "name"),

                        Forms\Components\Select::make('type')
                            ->label("نوع الطلب")
                            ->required()
                            ->options(
                                fn ($livewire) => $livewire->activeLocale == "ar" ?
                                    [
                                        OrderTypes::immediately =>  OrderTypes::getNameAr(OrderTypes::immediately),
                                        OrderTypes::abroad =>  OrderTypes::getNameAr(OrderTypes::abroad),
                                    ] :
                                    [
                                        OrderTypes::immediately =>  OrderTypes::getName(OrderTypes::immediately),
                                        OrderTypes::abroad =>  OrderTypes::getName(OrderTypes::abroad),
                                    ],
                            ),
                    ])->columns(3),

                    Group::make()->schema([

                        Forms\Components\TextInput::make('book_ticket')
                            ->label("قيمة تذكرة السفر")
                            ->required()
                            ->numeric()
                            ->hidden(fn (Get $get): bool => !$get('book_ticket_bool')),


                        Forms\Components\TextInput::make('deliver_service')
                            ->label("قيمة خدمة التوصيل")
                            ->required()
                            ->numeric()
                            ->hidden(fn (Get $get): bool => !$get('deliver_service_bool')),
                    ])->columns(2),

                    Forms\Components\Toggle::make('book_ticket_bool')
                        ->label("حجز تذكرة سفر ؟؟")
                        ->required()
                        ->dehydrated()
                        ->default(false)
                        ->live(),

                    Forms\Components\Toggle::make('deliver_service_bool')
                        ->label("خدمة التوصيل الى مطار دمشق الدولي؟؟")
                        ->required()
                        ->dehydrated()
                        ->default(false)
                        ->live(),
                ]),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('user.name')
                    ->label("اسم المستخدم")
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('maid_id')
                    ->label("اسم الخادمة")
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('status_id')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('type')
                    ->state(fn (Order $record, $livewire) => $livewire->activeLocale == "ar"
                        ? OrderTypes::getNameAr($record->type)
                        : OrderTypes::getName($record->type))
                    ->sortable(),

                Tables\Columns\TextColumn::make('book_ticket')
                    ->label("قيمة تذكرة السفر")
                    ->sortable(),

                Tables\Columns\TextColumn::make('deliver_service')
                    ->label("قيمة خدمة التوصيل")
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
