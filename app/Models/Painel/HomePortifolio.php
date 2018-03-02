<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class HomePortifolio extends Model
{
    protected $table = 'home_portifolios';

    protected $fillable = [
        'id_homeportfilters',
        'titulo',
        'imagem'
    ];

    public $rules = [
        'id_homeportfilters' => 'required',
        'titulo' => 'required|min:3|max:100',
        'imagem' => 'required|image|max:4000|mimes:jpg,png,jpeg',
    ];

    public $rulesEdit = [
        'id_homeportfilters' => 'required',
        'titulo' => 'required|min:3|max:100',
        'imagem' => 'image|max:4000|mimes:jpg,png,jpeg',
    ];

    public $messages = [
        'titulo.required' => 'Preenchimento do Titulo é obrigatório e com o minimo de 3 letras',
    ];

}
