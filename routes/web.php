<?php

use App\Models\Order;
use App\Models\Status;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     $data = Status::getForm(1);
//     // $data = Order::with(["user", "maid", "status", "statuses",])->first();
//     return $data;
// });

Route::view('/', 'front.index');
Route::view('/master', 'front.master');
Route::view('/whoarewe', 'front.whoarewe');
Route::view('/products', 'front.products');
Route::view('/Recipes', 'front.Recipes');
Route::view('/Videorecipes', 'front.Videorecipes');
Route::view('/image', 'front.image');
Route::view('/Connect', 'front.Connect');
Route::view('/Exhibitions', 'front.Exhibitions');