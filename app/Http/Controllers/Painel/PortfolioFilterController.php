<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\StandardController;
use App\Models\Painel\PortfolioFilter;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PortfolioFilterController extends StandardController
{
    protected $model;
    protected $request;
    protected $View = 'painel.portfolio.filter';
    protected $redirectCad = '/painel/portfoliofilter/cadastrar';
    protected $redirectEdit = '/painel/portfoliofilter/editar';
    protected $route = '/painel/portfoliofilter';

    public function __construct(PortfolioFilter $portfolioFilter, Request $request)
    {
        $this->model = $portfolioFilter;
        $this->request = $request;
    }
}
