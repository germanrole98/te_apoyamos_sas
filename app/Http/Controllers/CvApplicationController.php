<?php

namespace App\Http\Controllers;

use App\Models\CvApplication;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        ]);

        // 2. ALMACENAMIENTO del archivo CV en el disco (storage/app/public/cvs)
        $path = $request->file('cv_file')->store('public/cvs');

        // 3. CREACIÓN del registro en la base de datos
        CvApplication::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'message' => $validated['message'],
            'cv_path' => $path, // Almacenamos la ruta del archivo
        ]);

        // 4. RESPUESTA al usuario
        return redirect()->route('cv.create')->with('success', '¡Gracias! Tu hoja de vida ha sido enviada con éxito.');
    }
}