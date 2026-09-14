<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    // Permite guardar dados nestes campos específicos
    protected $fillable = ['nome', 'quantidade', 'preco'];
}
