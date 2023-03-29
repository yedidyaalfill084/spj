<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpjController;
use App\Http\Controllers\ControllersFileUpload;
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

Route::get('/', function () {
    return view('home', ['title' => 'SPJ']);
});

Route::resource('spj', SpjController::class);
Route::resource('posts', App\Http\Controllers\ControllersFileUpload::class);

Route::get('/pdf/{filename}', function ($filename) {
    $path = storage_path('app/public/' . $filename);
    return response()->file($path);
});

