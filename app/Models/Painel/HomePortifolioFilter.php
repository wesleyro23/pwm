<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class HomePortifolioFilter extends Model
{
    protected $table = 'home_portifolio_filters';

    protected $fillable = [
        'filtro'
    ];

    public $rules = [
        'filtro' => 'required|min:3|max:100',
    ];

    public $rulesEdit = [
        'filtro' => 'required|min:3|max:100',
    ];

    public $messages = [
        'filtro.required' => 'Preenchimento do Titulo é obrigatório e com o minimo de 3 letras',
    ];
    
}
