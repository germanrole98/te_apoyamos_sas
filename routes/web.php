<?php


use App\Http\Controllers\CvApplicationController;
use App\Http\Controllers\GeneralController;
use Illuminate\Support\Facades\Route;

// Páginas del sitio web informativo
Route::get('/', [GeneralController::class, 'index'])->name('landing');

// Ruta para procesar el envío del formulario (POST)
Route::post('/', [CvApplicationController::class, 'store'])->name('cv.store');