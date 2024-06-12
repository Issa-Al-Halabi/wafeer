<?php

namespace App\Http\Controllers;

use App\Helpers\PaginationHelper;
use App\Models\Category;
use App\Models\Exhibition;
use App\Models\Product;
use App\Models\Recipe;
use Illuminate\Http\Request;


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

    public function exhibitions()
    {
        $activeYear = now()->year;
        // $exhibitions = Exhibition::where("status", "1")->get()->groupBy("year");

        $years = Exhibition::pluck("year");
        $years = array_values(array_unique($years->toArray()));
        rsort($years);

        if (count($years) > 0) {
            $activeYear = $years[0];
        }
        $exhibitions = Exhibition::where("status", "1")->where("year", $activeYear)->get();

        return view("front.Exhibitions", compact("exhibitions", "years", "activeYear"));
    }

    public function exhibitionInfo($id)
    {
        return view("front.image");
    }

    public function contactUs()
    {
        return view("front.Connect");
    }
}
