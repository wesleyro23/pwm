<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class SobreEmpresa extends Model
{
    protected $table = 'sobre_empresas';

    protected $fillable = [
        'descricao'
    ];

    public $rules = [
        'descricao' => 'required|min:3'
    ];

    public $rulesEdit = [
        'descricao' => 'required|min:3'
    ];

    public $messages = [
        'descricao.required' => 'Preenchimento da descrição é obrigatória com o minimo de 3 letras',
    ];
}
