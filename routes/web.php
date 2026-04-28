<?php

use App\Http\Controllers\ChirpContoller;
use Illuminate\Support\Facades\Route;

Route::get('/', [ChirpContoller::class,'index']);
