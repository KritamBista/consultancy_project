<?php

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;


// Route::get('/', [HomeController::class, 'company',]);
// Route::post(
//     '/message',
//     [HomeController::class, 'contact']
// )->name('message');
// Route::get('/contact', [HomeController::class, 'company',]);




Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');
Route::get('/company', [ApiController::class, 'company']);
Route::get('/process', [ApiController::class, 'process']);
Route::get('/services', [ApiController::class, 'services']);
Route::get('/missions', [ApiController::class, 'missions']);
Route::get('/country', [ApiController::class, 'countries']);
Route::post('/contacts', [ApiController::class, 'contacts'])->withoutMiddleware([\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class]);;
Route::get('/branch', [ApiController::class, 'branches']);
Route::get('/country/{id}', [ApiController::class, 'countryDeatils']);
Route::get('/blogs', [ApiController::class, 'blogs']);
Route::get('/blogDetail/{id}', [ApiController::class, 'blogDetail']);
