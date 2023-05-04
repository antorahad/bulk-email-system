<?php

use App\Http\Controllers\MailConfigController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [IndexController::class, 'Index']);

Route::prefix('mail-config')->group(function(){
    Route::post('/add', [MailConfigController::class, 'add']);
});

Route::prefix('template')->group(function(){
    Route::post('/add', [TemplateController::class, 'add']);
});

Route::prefix('customer')->group(function(){
    Route::post('/add', [CustomerController::class, 'add']);
});

Route::prefix('send-mail')->group(function(){
    Route::post('/', [IndexController::class, 'sendMail']);
});
