<?php


use App\Http\Controllers\CvApplicationController;
use App\Http\Controllers\GeneralController;
use Illuminate\Support\Facades\Route;

// Páginas del sitio web informativo
Route::get('/', [GeneralController::class, 'index'])->name('home');
Route::get('/nosotros', [GeneralController::class, 'about'])->name('about');
Route::get('/servicios', [GeneralController::class, 'services'])->name('services');

// Ruta para mostrar el formulario de registro de CV
Route::get('/trabaja-con-nosotros', [CvApplicationController::class, 'create'])->name('cv.create');

// Ruta para procesar el envío del formulario (POST)
Route::post('/trabaja-con-nosotros', [CvApplicationController::class, 'store'])->name('cv.store');