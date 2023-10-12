<?php

use App\Http\Controllers\ResumePageController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('resume')->group(callback: function () {
    Route::get('', [ResumePageController::class, 'index']);
    Route::post('', [ResumePageController::class, 'create']);
});

