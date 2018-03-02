<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class SobreVantDesv extends Model
{
    protected $table = 'sobre_vant_desvs';

    protected $fillable = [
        'descricao',
        'vantdesv',
        'icone'
    ];

    public $rules = [
        'descricao' => 'required|min:3',
        'icone' => 'required|min:3',
    ];

    public $rulesEdit = [
        'descricao' => 'required|min:3',
        'icone' => 'required|min:3',
    ];

    public $messages = [
        'descricao.required' => 'Preenchimento da descrição é obrigatória com o minimo de 3',
        'icone.required' => 'Preenchimento do icone é obrigatório e com o minimo de 3 letras',
    ];
}
