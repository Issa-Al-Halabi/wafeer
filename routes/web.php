<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     $data = Status::getForm(1);
//     // $data = Order::with(["user", "maid", "status", "statuses",])->first();
//     return $data;
// });

Route::get('/', [FrontController::class, 'index'])->name("index");

// whoarewe
Route::get('/whoarewe', [FrontController::class, 'whoarewe'])->name("whoarewe");

// products
Route::get('/products/{categoryId?}', [FrontController::class, 'products'])->name("products");

// recipes
Route::get('/recipes', [FrontController::class, 'recipes'])->name("recipes");
Route::get('/recipes/{id}', [FrontController::class, 'recipeInfo'])->name("recipeInfo");

// exhibitions
Route::get('/exhibitions', [FrontController::class, 'exhibitions'])->name("exhibitions");
Route::get('/exhibitions/{id}', [FrontController::class, 'exhibitionInfo'])->name("exhibitionInfo");

// contactUs
Route::get('/contactUs', [FrontController::class, 'contactUs'])->name("contactUs");
Route::post('/contactUs', [FrontController::class, 'saveContactUs'])->name("saveContactUs");