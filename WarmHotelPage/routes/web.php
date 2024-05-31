<?php

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

Route::get('/', function () {
    return view('index.index');
});

Route::get('/Deluxe_Room', function () {
    return view('index.deluxe_room');
});

Route::get('/Deluxe_Twin_Room', function () {
    return view('index.deluxe_twin_room');
});

Route::get('/Luxe_Room', function () {
    return view('index.luxe_room');
});

Route::get('/Family_Room', function () {
    return view('index.family_room');
});

Route::get('/Suite_Room', function () {
    return view('index.suite_room');
});

Route::get('/Presidental_Room', function () {
    return view('index.presidental_room');
});



Route::post('/book', [IndexController::class, 'store']);

Route::post('/save', [IndexController::class, 'save']);
