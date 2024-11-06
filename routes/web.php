<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\News\NewsController;

Route::get('/', function () {
    return view('welcome');
});

