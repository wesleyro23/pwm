<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\StandardController;
use App\Models\Painel\HomeServico;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeServicoController extends StandardController
{
    protected $model;
    protected $request;
    protected $View = 'painel.home.servicos';
    protected $redirectCad = '/painel/homeservico/cadastrar';
    protected $redirectEdit = '/painel/homeservico/editar';
    protected $route = '/painel/homeservico';

    public function __construct(HomeServico $homeservico, Request $request)
    {
        $this->model = $homeservico;
        $this->request = $request;
    }
    
}
