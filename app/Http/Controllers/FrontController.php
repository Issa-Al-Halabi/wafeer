<?php

namespace App\Http\Controllers;

use App\Filament\Resources\ContactUsResource;
use App\Helpers\PaginationHelper;
use App\Http\Requests\ContactUsRequest;
use App\Models\Category;
use App\Models\ContactUs;
use App\Models\Exhibition;
use App\Models\Product;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Filament\Notifications\Notification;
use Filament\Notifications\Actions\Action;

class FrontController extends Controller
{
    public function index()
    {
        $products = Product::where("status",1)->latest()->limit(10)->get();
        return view("front.index", compact("products"));
    }

    public function whoarewe()
    {
        // $maids = Maid::all()->load('order')->sortBy('order.maid_id');
        // $maids = PaginationHelper::paginate($maids, 10, request()->page, ['path' => request()->url()]);

        return view("front.whoarewe");
    }

    public function products($categoryId = null)
    {
        $categories = Category::where("status", "1")->get();

        // get the active category
        if ($categoryId != null) {
            $categoryId = (int)$categoryId;
            $category = Category::findOrFail($categoryId);
            $activeCategory = $category;
        } else if (count($categories) > 0) {
            $activeCategory = $categories->first();
        } else {
            $activeCategory = null;
        }

        $products = Product::where("status", "1")->where("category_id", $activeCategory != null ? $activeCategory->id : 0)->get();
        $products = $products->chunk(6);

        return view("front.products", compact("categories", "products", "activeCategory"));
    }

    public function recipes(Request $request)
    {
        $search = "";
        $recipes = Recipe::where("status", "1");

        if (isset($request->search)) {
            $search = $request->search;
            $recipes = $recipes->where('name', 'like', '%' . $request->search . '%');
        }
        $recipes = $recipes->get();

        return view("front.Recipes", compact("recipes", "search"));
    }

    public function recipeInfo($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view("front.Videorecipes", compact("recipe"));
    }

    public function exhibitions(Request $request)
    {
        $activeYear = now()->year;

        $years = Exhibition::pluck("year");
        $years = array_values(array_unique($years->toArray()));
        rsort($years);

        if (count($years) > 0) {
            $activeYear = $years[0];
        }

        if (isset($request->year)) {
            $activeYear = $request->year;
        }

        $exhibitions = Exhibition::where("status", "1")->where("year", $activeYear)->get();

        return view("front.Exhibitions", compact("exhibitions", "years", "activeYear"));
    }

    public function exhibitionInfo($id)
    {
        $exhibition = Exhibition::findOrFail($id);

        return view("front.image", compact('exhibition'));
    }

    public function contactUs()
    {
        return view("front.Connect");
    }

    public function saveContactUs(ContactUsRequest $request)
    {

        $contactUs = new ContactUs();

        $contactUs->name = $request->name;
        $contactUs->phone = $request->phone;
        $contactUs->email = $request->email;
        $contactUs->subject = $request->subject;
        $contactUs->message = $request->message;

        $contactUs->save();

        Notification::make()
            ->title('تم التواصل معك من قبل ' . $request->name)
            ->actions([

                Action::make('view')
                    ->label("عرض")
                    ->button()
                    ->color("success")
                    ->url(fn (ContactUsResource $record): string => $record::getUrl('index')),

                Action::make('markAsRead')
                    ->label("تعليم كمقروء")
                    ->button()
                    ->markAsRead(),
            ])
            ->sendToDatabase(User::all());

        return redirect()->route('contactUs')->with('success', 'تم ارسال البيانات بنجاح');
    }
}
