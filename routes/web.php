<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;



Route::resource('/posts', \App\Http\Controllers\PostController::class);
