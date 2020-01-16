<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{

    protected $fillable = [

        'cod_func', 'nm_func', 'snm_func', 'img_func', 'dt_nasc_func', 'cpf_func', 
        'rg_func', 'sit_func', 'senha_func', 'cargo_func', 'email_func', 'fk_cod_escolaF'
        
    ];
    
}
