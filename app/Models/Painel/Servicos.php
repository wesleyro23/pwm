<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Servicos extends Model
{
    protected $table = 'servicos';

    protected $fillable = [
        'id_servicosfilters',
        'titulo',
    ];

    public $rules = [
        'id_servicosfilters' => 'required',
        'titulo' => 'required|min:3|max:255',
    ];

    public $rulesEdit = [
        'id_servicosfilters' => 'required',
        'titulo' => 'required|min:3|max:255',
    ];

    public $messages = [
        'titulo.required' => 'Preenchimento do Titulo é obrigatório e com o minimo de 3 letras',
    ];

}
