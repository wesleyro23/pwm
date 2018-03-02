<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\StandardController;
use App\Models\Painel\SobreEmpresa;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SobreEmpresaController extends StandardController
{
    protected $model;
    protected $request;
    protected $View = 'painel.sobre.empresa';
    protected $redirectCad = '/painel/sobreempresa/cadastrar';
    protected $redirectEdit = '/painel/sobreempresa/editar';
    protected $route = '/painel/sobreempresa';

    public function __construct(SobreEmpresa $sobreEmpresa, Request $request)
    {
        $this->model = $sobreEmpresa;
        $this->request = $request;
    }

}
