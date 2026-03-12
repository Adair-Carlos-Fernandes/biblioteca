<?php

namespace App\Models;

use ILLuminate\Database\Eloquent\Factories\HasFactory;
use ILLuminate\Database\Eloquent\Model;

class livro extends Model 
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'autor',
        'editora',
        'isbn',
        'ano_publicacao',
        'genero',
        'descricao',
        'quantidade',
        'paginas',
            
    ];
}