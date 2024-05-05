<?php

use App\Models\Order;
use App\Models\Status;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $data = Status::getForm(1);
    // $data = Order::with(["user", "maid", "status", "statuses",])->first();
    return $data;
});
