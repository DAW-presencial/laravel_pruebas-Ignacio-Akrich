<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    protected $table = 'pokemons';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'level',
        'capture_date',
        'types',
        'gendre',
        'description',
        'shiny',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $visible = [
        'id',
        'name',
        'level',
        'capture_date',
        'types',
        'gendre',
        'description',
        'shiny',
        'user_id',
    ];
}
