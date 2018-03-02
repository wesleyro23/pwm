<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\StandardController;
use App\Models\Painel\ServicosFilter;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ServicosFilterController extends StandardController
{
    protected $model;
    protected $request;
    protected $View = 'painel.servico.filter';
    protected $redirectCad = '/painel/servicosfilter/cadastrar';
    protected $redirectEdit = '/painel/servicosfilter/editar';
    protected $route = '/painel/servicosfilter';

    public function __construct(ServicosFilter $servicosFilter, Request $request)
    {
        $this->model = $servicosFilter;
        $this->request = $request;
    }

}
