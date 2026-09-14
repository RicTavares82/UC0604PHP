<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model
{
    /**
     * Convenção
     * Nome da tabela é o plural do nome da classe
     */
    //

    //protected $table = 'generos';

    //Campos que posso preencher por mass assignemt
    protected $fillable = ['name'];

    public function movies():HasMany
    {
        return $this->hasMany(Movie::class);

    }
}
