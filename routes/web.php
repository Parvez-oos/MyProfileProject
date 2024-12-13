<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// Define the /my-profile route
Route::get('/my-profile/{id}', [ProfileController::class, 'index']);




