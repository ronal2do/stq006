<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propostas extends Model
{
    protected $table = 'propostas';

    protected $fillable =[
    	'nome',
    	'email',
    	'nascimento',
    	'telefone',
    	'proposta'
    ];
}