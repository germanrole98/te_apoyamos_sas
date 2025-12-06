<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CvApplication;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log; // Útil para depuración

class AdminController extends Controller
{
    /**
     * Muestra la lista de todas las postulaciones.
     * Mapea la ruta GET /admin/postulaciones
     */
    public function index()
    {
        // 1. Obtener los datos: Ordenamos por la fecha de creación (los más recientes primero)
        $applications = CvApplication::orderBy('created_at', 'desc')->get();
        
        // 2. Cargar la vista: Le pasamos los datos a la vista 'admin.postulaciones'
        return view('admin.postulaciones', compact('applications'));
    }

    /**
     * Cambia el estado booleano 'accepted' de la postulación (Toggle).
     * Mapea la ruta PUT /admin/postulaciones/{id}/toggle-accepted
     */
    public function toggleAccepted(CvApplication $cvApplication)
    {
        try {
            // Invierte el valor actual: si es true, lo hace false; si es false, lo hace true.
            $cvApplication->accepted = !$cvApplication->accepted;
            $cvApplication->save();
            
            $status = $cvApplication->accepted ? 'MARCADO como ACEPTADO' : 'MARCADO como PENDIENTE';
            Log::info("Estado de postulación actualizado para: " . $cvApplication->email);

            return back()->with('success', 'El postulante ' . $cvApplication->name . ' ha sido ' . $status . '.');
        
        } catch (\Exception $e) {
            Log::error("Error al hacer toggle en la postulación: " . $e->getMessage());
            return back()->with('error', 'Error al cambiar el estado. Por favor, inténtalo de nuevo.');
        }
    }

    /**
     * Permite descargar el archivo CV asociado a la postulación.
     * Mapea la ruta GET /admin/postulaciones/{id}/download
     */
    public function downloadCv(CvApplication $cvApplication)
    {
        // La ruta del archivo se guarda en el campo 'cv_path' del modelo
        if (Storage::disk('public')->exists($cvApplication->cv_path)) {
            
            // Generamos un nombre de archivo limpio y descriptivo
            $extension = pathinfo($cvApplication->cv_path, PATHINFO_EXTENSION);
            $filename = str_replace(' ', '_', $cvApplication->name) . '_CV.' . $extension;
            
            // Opción 1 (Original y Correcta): Forzamos la descarga del archivo
            // return Storage::disk('public')->download($cvApplication->cv_path, $filename);

            // Opción 2 (Sintaxis Alternativa, si la anterior causa problemas de carga)
            return response()->download(Storage::disk('public')->path($cvApplication->cv_path), $filename);
        }

        // Si el archivo no se encuentra (ruta rota, etc.)
        Log::warning("Intento de descarga fallido: Archivo no encontrado para ID " . $cvApplication->id);
        return back()->with('error', 'El archivo CV no fue encontrado o la ruta es inválida.');
    }
}
