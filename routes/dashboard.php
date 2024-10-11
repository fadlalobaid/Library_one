<?php

use App\Http\Controllers\Dashboard\LibraryController;
use Illuminate\Support\Facades\Route;
Route::group([
    'middleware'=>['auth']
],function(){

    Route::resource('dashboard/libraries',(LibraryController::class));

});
