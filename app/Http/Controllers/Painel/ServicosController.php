<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\StandardController;
use App\Models\Painel\Servicos;
use App\Models\Painel\ServicosFilter;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ServicosController extends StandardController
{
    protected $model;
    protected $request;
    protected $View = 'painel.servico';
    protected $redirectCad = '/painel/servicos/cadastrar';
    protected $redirectEdit = '/painel/servicos/editar';
    protected $route = '/painel/servicos';


    public function __construct(Servicos $servicos,Request $request)
    {
        $this->model = $servicos;
        $this->request = $request;
    }

    public function index()
    {
        $data = $this->model
            ->join('servicos_filters', 'servicos_filters.id', '=', 'servicos.id_servicosfilters')
            ->select('servicos.id', 'servicos.titulo', 'servicos_filters.titulo as filtro')
            ->paginate($this->totalPorPagia);;

        return view("{$this->View}.index", compact('data'));
    }

    public function cadastrar()
    {
        $filtros = ServicosFilter::get();

        //dd($data);

        return view("{$this->View}.cad-edit" , compact('filtros'));
    }

    public function editar($id)
    {
        //Recupera os Filtros
        $filtros = ServicosFilter::get();

        //recupera o estilo pelo id
        $data = $this->model->find($id);

        return view("{$this->View}.cad-edit", compact('data','filtros'));
    }
}
