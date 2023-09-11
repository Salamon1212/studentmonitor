<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\HodController;
use App\Http\Controllers\SearchController;

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
    return view('hod.dashboard');
});
Route::get('hod-search',[SearchController::class,'store'])->name("search");
Route::get('hod-index',[HodController::class,'index'])->name("dashboard");
Route::get('hod-create',[HodController::class,'create'])->name("hod.create");
Route::post('hod-store',[HodController::class,'store'])->name("hod.store");
Route::get('hod-show/{id}',[HodController::class,'show'])->name("hod.show");
Route::get('hod-edit/{id}',[HodController::class,'edit'])->name("hod.edit");
Route::put('hod-update',[HodController::class,'update'])->name("hod.update");
Route::get('hod-delete/{id}',[HodController::class,'destroy'])->name("hod.delete");
Route::get('file-create',[Controller::class,'create'])->name("file.create");
Route::post('file-edit',[Controller::class,'store'])->name("file.edit");


