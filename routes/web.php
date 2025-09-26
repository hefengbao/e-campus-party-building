<?php

use App\Http\Controllers\PayController;
use Illuminate\Support\Facades\Route;

Route::get('pay', [PayController::class, 'index']);
