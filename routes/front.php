<?php

use App\Http\Controllers\Front\FrontController;
use Illuminate\Support\Facades\Route;


Route::resource('/', (FrontController::class));

// Route::get('/', function () {
//     return view('layout.front-end.front');
// });

