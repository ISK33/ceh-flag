<?php

use App\Http\Controllers\registerController;
use App\Models\winner;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $winners = winner::orderBy('created_at', 'asc')->get();

    return view('welcome', compact('winners'));
});
Route::post('/register', [registerController::class, 'store'])->middleware('throttle:flag')->name('register');
Route::get('/flagMaker', [registerController::class, 'flag'])->name('flagcreate')->middleware('auth');
Route::Post('/flagstore', [registerController::class, 'storeflag'])->name('flagstore')->middleware('auth');
