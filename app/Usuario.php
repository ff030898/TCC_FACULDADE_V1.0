<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [

        'nm_usuario', 'snm_usuario', 'imagem_usuario', 'email_usuario', 'senha_usuario'
        
    ];
}
