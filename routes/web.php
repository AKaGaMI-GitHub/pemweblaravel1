<?php

use App\Http\Controllers\DatapasienController;
use App\Http\Controllers\HewanController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Whoops\Run;
use App\Http\Livewire\Crud;

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
    return view('welcome');
});

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

Route::get('/datahewan',[HomeController::class,'index'])->name('datahewan')->middleware(['auth:sanctum','verified']);
Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard')->middleware(['auth:sanctum','verified']);
Route::resource('rekamedis',DatapasienController::class);
Route::resource('hewan',DatapasienController::class);
Route::resource('tindakan',DatapasienController::class);
Route::get('datadokters', Crud::class);