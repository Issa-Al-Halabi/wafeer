<?php

use App\Models\Order;
use App\Models\Status;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    // $data = Order::with(["user","maid","status","statuses",])->first();
    $data = Status::getForm(1);
    return $data;
});
