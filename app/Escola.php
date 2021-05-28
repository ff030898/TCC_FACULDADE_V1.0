<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    protected $fillable = [

        'nm_escola', 'desc_escola','img_escola', 'cnpj_escola', 'cep_escola', 
        'cid_escola', 'bairro_escola', 'end_escola', 'num_escola', 'ref_escola', 'tipo_escola', 
        'email_escola', 'senha_escola', 'tel_escola'
        
    ];
}
