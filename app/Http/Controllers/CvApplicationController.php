<?php

namespace App\Http\Controllers;

use App\Models\CvApplication;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class CvApplicationController extends Controller
{

    public function create()
    {
        return view('cv.create');
    }

    // Procesa el formulario de envío de hoja de vida
    public function store(Request $request)
    {
        // 1. VALIDACIÓN de los datos del formulario y el archivo
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => ['required', 'email', 'max:150', Rule::unique('cv_applications', 'email')],
            'phone' => 'nullable|string|max:20',
            'message' => 'nullable|string',
            'cv_file' => 'required|file|mimes:pdf,doc,docx|max:5000', // 5MB máx, solo PDF/DOCX
        ], [
            // Personalización de mensajes de error
            'email.unique' => 'Ya existe una postulación registrada con este correo electrónico.',
            // Puedes añadir más mensajes personalizados aquí
        ]);

        // 2. MANEJO DE ERRORES: Encapsulamos el almacenamiento y la creación
        try {
            // ALMACENAMIENTO: Usamos la convención disco/ruta (más limpia que store('public/cvs'))
            // El archivo se guarda en storage/app/public/cvs/
            $path = $request->file('cv_file')->store('cvs', 'public');

            // CREACIÓN del registro en la base de datos
            CvApplication::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'message' => $validated['message'],
                'cv_path' => $path, // La ruta almacenada (e.g., cvs/archivo.pdf)
                'accepted' => false, // <--- AÑADIDO: Buenas prácticas, aunque la migración tenga el default.
            ]);

            Log::info('Nueva postulación exitosa de: ' . $validated['email']);

        } catch (\Exception $e) {
            // Manejamos cualquier error que pueda ocurrir durante el almacenamiento o la base de datos
            Log::error("Error al procesar la postulación o guardar el CV: " . $e->getMessage());
            
            // Si el archivo se guardó antes de fallar en DB, podrías considerar eliminarlo aquí.
            
            return back()->withInput()->with('error', 'Ocurrió un error inesperado al procesar tu postulación. Inténtalo de nuevo.');
        }

        // 3. RESPUESTA al usuario
        return redirect()->route('home', ['#postulate'])->with('success', '¡Gracias! Tu hoja de vida ha sido enviada con éxito.');
    }
}
