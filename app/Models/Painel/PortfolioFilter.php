<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class PortfolioFilter extends Model
{
    protected $table = 'portfolio_filters';

    protected $fillable = [
        'titulo'
    ];

    public $rules = [
        'titulo' => 'required|min:3|max:100',
    ];

    public $rulesEdit = [
        'titulo' => 'required|min:3|max:100',
    ];

    public $messages = [
        'titulo.required' => 'Preenchimento do Titulo é obrigatório e com o minimo de 3 letras',
    ];
}
