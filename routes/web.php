<?php


use App\Http\Controllers\CvApplicationController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Páginas del sitio web informativo
Route::get('/', [GeneralController::class, 'index'])->name('home');

// Ruta para procesar el envío del formulario (POST)
Route::post('/', [CvApplicationController::class, 'store'])->name('cv.store');

// [BLOQUE 3: RUTAS DEL PANEL ADMINISTRATIVO]
// Agrupamos las rutas bajo el prefijo 'admin'
Route::prefix('admin')->group(function () {
    
    // 1. Listar todas las postulaciones: Muestra la tabla de postulaciones.
    // URL: /admin/postulaciones
    Route::get('/postulaciones', [AdminController::class, 'index'])->name('admin.applications.index');
    
    // 2. Cambiar el estado: Permite alternar el booleano 'accepted'. Usamos PUT.
    // URL: /admin/postulaciones/{id}/toggle-accepted
    Route::put('/postulaciones/{cvApplication}/toggle-accepted', [AdminController::class, 'toggleAccepted'])->name('admin.applications.toggleAccepted');

    // 3. Descargar CV: Permite descargar el archivo.
    // URL: /admin/postulaciones/{id}/download
    Route::get('/postulaciones/{cvApplication}/download', [AdminController::class, 'downloadCv'])->name('admin.applications.download');
});
