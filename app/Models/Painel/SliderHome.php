<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class SliderHome extends Model
{
    protected $table = 'slider_homes';

    protected $fillable = [
        'titulo',
        'descricao',
        'imagem'
    ];

    public $rules = [
        'titulo' => 'required|min:3|max:100',
        'descricao' => 'required|min:3',
        'imagem' => 'required|image|max:4000|mimes:jpg,png,jpeg',
    ];

    public $rulesEdit = [
        'titulo' => 'required|min:3|max:100',
        'descricao' => 'required|min:3',
        'imagem' => 'image|max:4000|mimes:jpg,png,jpeg',
    ];

    public $messages = [
        'titulo.required' => 'Preenchimento do Titulo é obrigatório e com o minimo de 3 letras',
        'descricao.required' => 'Preenchimento da descrição é obrigatória e com o minimo de 3 letras'
    ];

}
