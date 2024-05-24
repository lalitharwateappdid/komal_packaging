<?php

namespace App;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::controller(SiteController::class)->group(function(){
    Route::get("/",'index')->name("home");
    Route::get("about","about")->name("about");
    Route::get("contact","contact")->name("contact");
    Route::get("product","product")->name("product");
});