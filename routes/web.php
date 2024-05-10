<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Corporate_SponsorController;
use App\Http\Controllers\SMMEController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//admin
Route::middleware(['auth','role:admin'])->group(function(){
   Route::get('/admin/dashboard',[AdminController::class,'dashboard']);
});

//smme
Route::middleware(['auth','role:smme'])->group(function(){
    Route::get('/smme/dashboard',[SMMEController::class,'dashboard']);
});

//Corporate Sponsor
Route::middleware(['auth','role:corporate_sponsor'])->group(function(){
    Route::get('/corporate_sponsor/dashboard',[Corporate_SponsorController::class,'dashboard']);
});
