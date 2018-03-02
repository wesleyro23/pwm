<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class HomeContato extends Model
{
    protected $table = 'home_contatos';

    protected $fillable = [
        'titulo',
        'descricao',
        'imagem',
        'imagem_parallax'
    ];

    public $rules = [
        'titulo' => 'required|min:3|max:100',
        'descricao' => 'required|min:3',
        'imagem' => 'required|image|max:4000|mimes:jpg,png,jpeg',
        'imagem_parallax' => 'required|image|max:4000|mimes:jpg,png,jpeg',
    ];

    public $rulesEdit = [
        'titulo' => 'required|min:3|max:100',
        'descricao' => 'required|min:3',
        'imagem' => 'image|max:4000|mimes:jpg,png,jpeg',
        'imagem_parallax' => 'image|max:4000|mimes:jpg,png,jpeg',
    ];

    public $messages = [
        'titulo.required' => 'Preenchimento do Titulo é obrigatório e com o minimo de 3 letras',
        'descricao.required' => 'Preenchimento da descrição é obrigatória e com o minimo de 3 letras'
    ];

}
