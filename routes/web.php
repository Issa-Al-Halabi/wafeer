<?php

use App\Models\Maid;
use App\Models\Order;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $data = Order::with(["user","maid","status","statuses",])->first();
    return $data;
});
