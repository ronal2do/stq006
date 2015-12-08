<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fale extends Model
{
    protected $table = 'fale';

    protected $fillable =[
    	'nome',
    	'email',
    	'nascimento',
    	'telefone',
    	'mensagem'
    ];
}