<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DestinationController;

Route::get('/', [AdminController::class, 'homepage']); 

Route::get('/home', [AdminController::class, 'index'])->name('home');

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');;

Route::get('/post_destination', [DestinationController::class, 'post_destination']); 
Route::post('/add_destination', [DestinationController::class, 'add_destination']); 

Route::get('/show_destination', [DestinationController::class, 'show_destination']); 
Route::get('/delete_destination/{id}', [DestinationController::class, 'delete_destination']); 

Route::get('/edit_destination/{id}', [DestinationController::class, 'edit_destination']); 
Route::post('/update_destination/{id}', [DestinationController::class, 'update_destination']); 

Route::get('/detail/{id}', [AdminController::class, 'detail']); 

Route::get('/about', [AdminController::class, 'about'])->name('about'); 
Route::get('/all_destinations', [AdminController::class, 'all_destinations'])->name('all_destinations');;