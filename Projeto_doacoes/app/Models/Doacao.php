<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doacao extends Model
{
    protected $table = 'doacoes';
    protected $fillable = [
        'descrição',
        'localizacao',
        'telefone',
        'email',
    ];
}
