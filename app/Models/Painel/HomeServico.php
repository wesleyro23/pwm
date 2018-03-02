<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class HomeServico extends Model
{
    protected $table = 'home_servicos';

    protected $fillable = [
        'titulo',
        'descricao',
        'icon'
    ];

    public $rules = [
        'titulo' => 'required|min:3|max:100',
        'descricao' => 'required|min:3|max:170',
        'icon' => 'required|min:3',
    ];

    public $rulesEdit = [
        'titulo' => 'required|min:3|max:100',
        'descricao' => 'required|min:3|max:170',
        'imagem' => 'required|min:3',
    ];

    public $messages = [
        'titulo.required' => 'Preenchimento do Titulo é obrigatório e com o minimo de 3 letras',
        'descricao.required' => 'Preenchimento da descrição é obrigatória com o minimo de 3 e maximo 170 letras',
        'icon.required' => 'Preenchimento do icone é obrigatório e com o minimo de 3 letras',
    ];

}
