<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apoie extends Model
{
    protected $table = 'apoie';

    protected $fillable =[
    	'nome',
    	'email',
    	'nascimento',
    	'titulo',
    	'telefone',
    	'cep',
    	'estado',
    	'cidade',
    	'bairro',
    	'endereco',
    	'numero',
    	'informacoes'
    ];
}
