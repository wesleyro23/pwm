<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolios';

    protected $fillable = [
        'id_portfoliofilters',
        'titulo',
        'descricao',
        'imagem'
    ];

    public $rules = [
        'id_portfoliofilters' => 'required',
        'titulo' => 'required|min:3|max:255',
        'imagem' => 'required|image|max:4000|mimes:jpg,png,jpeg',
    ];

    public $rulesEdit = [
        'id_portfoliofilters' => 'required',
        'titulo' => 'required|min:3|max:255',
        'imagem' => 'image|max:4000|mimes:jpg,png,jpeg',
    ];

    public $messages = [
        'titulo.required' => 'Preenchimento do Titulo é obrigatório e com o minimo de 3 letras',
    ];
}
