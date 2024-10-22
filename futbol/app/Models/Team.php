<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams'; // Asegúrate que este nombre sea correcto

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}


