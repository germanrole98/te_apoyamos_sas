<?php

// app/Models/CvApplication.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CvApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'cv_path',
        'accepted',
    ];

    protected $casts = [
        'accepted' => 'boolean',
    ];

    protected $table = 'cv_applications'; // Nombre de la tabla
}
