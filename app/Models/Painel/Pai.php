<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Pai extends Model
{
    protected $fillable = ['nome','email','telefone'];

    public $rules = [
        'nome' => 'required|min:3|max:60',
        'email' => 'required|email',
        'telefone'          => 'required|min:14|max:14',

    ];
}
