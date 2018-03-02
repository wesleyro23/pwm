<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\StandardController;
use App\Models\Painel\SobreVantDesv;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SobreVantDesvController extends StandardController
{
    protected $model;
    protected $request;
    protected $View = 'painel.sobre.vantdesv';
    protected $redirectCad = '/painel/sobrevantdesv/cadastrar';
    protected $redirectEdit = '/painel/sobrevantdesv/editar';
    protected $route = '/painel/sobrevantdesv';

    public function __construct(SobreVantDesv $sobreVantDesv, Request $request)
    {
        $this->model = $sobreVantDesv;
        $this->request = $request;
    }
}
