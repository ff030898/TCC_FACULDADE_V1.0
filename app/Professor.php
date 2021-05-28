<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = [
        
        'cpf_prof','rg_prof','sexo_prof','dt_nascimento', 'nm_prof', 
        'snm_prof','img_prof', 'cel_prof','email_prof','senha_prof', 'fk_cd_escolaP'
    ];
}
