<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        
        'cd_aluno','ra_aluno','cpf_aluno','rg_aluno','sexo_aluno','nm_aluno', 
        'snm_aluno','dt_nascimento','dt_matricula','def_aluno',
        'email_aluno', 'senha_aluno', 'img_aluno', 'cel_aluno','freq_aluno','sit_aluno',
        'fk_cd_responsavel','fk_cd_escolaA','fk_cd_turmaA'
    ];
}
