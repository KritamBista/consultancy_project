<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/company', [ApiController::class, 'company']);
Route::get('/process', [ApiController::class, 'process']);
Route::get('/services', [ApiController::class, 'services']);
Route::get('/missions', [ApiController::class, 'missions']);
Route::get('/country', [ApiController::class, 'countries']);
Route::get('/contacts', [ApiController::class, 'contacts']);





