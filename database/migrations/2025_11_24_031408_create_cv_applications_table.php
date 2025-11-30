<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cv_applications', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 150)->unique();
            $table->string('phone', 20)->nullable();
            $table->text('message')->nullable();
            $table->string('cv_path'); // Almacena la ruta del archivo PDF/DOCX
            $table->boolean('accepted')->default(false); // Campo para la validación interna
            $table->timestamps();
        });
    }
    // ... función down()
};
