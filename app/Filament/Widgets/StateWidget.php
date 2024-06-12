<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\CategoryResource;
use App\Filament\Resources\ContactUsResource;
use App\Filament\Resources\ProductResource;
use App\Filament\Resources\RecipeResource;
use App\Filament\Resources\UserResource;
use App\Models\Category;
use App\Models\ContactUs;
use App\Models\Product;
use App\Models\Recipe;
use App\Models\User;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Illuminate\Support\Carbon;
use Livewire\Attributes\On;

class StateWidget extends BaseWidget
{
    protected static ?int $sort = 2;
    public Carbon $fromDate;
    public Carbon $toDate;

    #[On('updateFromDate')]
    public function updateFromDate(string $from): void
    {
        $this->fromDate =  Carbon::make($from);
    }
    #[On('updateToDate')]
    public function updateToDate(string $to): void
    {
        $this->toDate = Carbon::make($to);
    }

    protected function getStats(): array
    {
        $fromDate = $this->fromDate ?? now()->startOfYear();
        $toDate = $this->toDate ?? now()->endOfYear();

        $contactusChart = $this->getStatsChart(ContactUs::class, $fromDate, $toDate);
        $ProductChart = $this->getStatsChart(Product::class, $fromDate, $toDate);
        $recipeChart = $this->getStatsChart(Recipe::class, $fromDate, $toDate);

        return [
            Stat::make("طلبات التواصل", ContactUs::whereDate('created_at', '>=', $fromDate)
                ->whereDate('created_at', '<=', $toDate)
                ->count())
                ->description("عدد طلبات التواصل")
                ->descriptionIcon("heroicon-o-chat-bubble-oval-left-ellipsis", IconPosition::Before)
                ->chart($contactusChart->toArray())
                ->color("success")
                ->url(ContactUsResource::getUrl()),

            Stat::make("المنتجات", Product::whereDate('created_at', '>=', $fromDate)
                ->whereDate('created_at', '<=', $toDate)
                ->count())
                ->description("عدد المنتجات")
                ->descriptionIcon("heroicon-o-inbox-stack", IconPosition::Before)
                ->chart($ProductChart->toArray())
                ->color("success")
                ->url(ProductResource::getUrl()),

            Stat::make("الوصفات", Recipe::whereDate('created_at', '>=', $fromDate)
                ->whereDate('created_at', '<=', $toDate)
                ->count())
                ->description("عدد الوصفات")
                ->descriptionIcon("heroicon-o-clipboard-document-list", IconPosition::Before)
                ->chart($recipeChart->toArray())
                ->color("success")
                ->url(RecipeResource::getUrl()),
        ];
    }

    protected function getStatsChart($model, $fromDate, $toDate)
    {

        $data = Trend::model($model)
            ->between(
                start: $fromDate,
                end: $toDate,
            )
            ->perHour()
            ->count();
        return $data->map(fn (TrendValue $value) => $value->aggregate);
    }
}
