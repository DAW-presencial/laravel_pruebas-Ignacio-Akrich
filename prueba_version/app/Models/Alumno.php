<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $table = 'alumnos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'surname',
        'birthdate',
        'subjects',
        'gender',
        'description',
        'repeater',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $visible = [
        'name',
        'surname',
        'birthdate',
        'subjects',
        'gender',
        'description',
        'repeater',
        'user_id',
    ];
}
