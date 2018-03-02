<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\StandardController;
use App\Models\Painel\Portfolio;
use App\Models\Painel\PortfolioFilter;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PortfolioController extends StandardController
{
    protected $model;
    protected $request;
    protected $View = 'painel.portfolio';
    protected $redirectCad = '/painel/portfolio/cadastrar';
    protected $redirectEdit = '/painel/portfolio/editar';
    protected $route = '/painel/portfolio';

    public function __construct(Portfolio $portifolio, Request $request)
    {
        $this->model = $portifolio;
        $this->request = $request;
    }

    public function index()
    {
        $data = $this->model
            ->join('portfolio_filters', 'portfolio_filters.id', '=', 'portfolios.id_portfoliofilters')
            ->select('portfolios.id', 'portfolios.titulo', 'portfolios.descricao', 'portfolio_filters.titulo as filtro', 'portfolios.imagem')
            ->paginate($this->totalPorPagia);;

        return view("{$this->View}.index", compact('data'));
    }

    public function cadastrar()
    {
        $filtros = PortfolioFilter::get();

        //dd($data);

        return view("{$this->View}.cad-edit" , compact('filtros'));
    }

    /*
    * Executa o Cadastro
    * */
    public function cadastrarGo()
    {
        //Recupera os dados do formulario
        $dadosForm = $this->request->all();

        //dd($dadosForm);

        /*
         * Regra de validação utilizando sessao de erros com withErrors e withInput
         * necessario usa filtros web nas rotas
         * */
        $validacao = validator($dadosForm, $this->model->rules, $this->model->messages);

        if($validacao->fails()){
            return redirect($this->redirectCad)
                ->withErrors($validacao)
                ->withInput();
        }

        /** Upload de arquivo **/
        //Recupera o campo de upload

        $img = $this->request->file('imagem');

        //Define o caminho
        $path = public_path('assets/uploads/imgs/portfolio');

        //Define o nome da imagem
        $nameImg = date('YmdHms').'.'.$img->getClientOriginalExtension();
        $dadosForm['imagem'] = $nameImg;

        //Faz o upload da imagem
        $upload = $img->move($path, $nameImg);

        if( !$upload)
            return redirect($this->redirectCad)
                ->withErrors(['errors' => 'Falha ao fazer o upload']);
        /** Final Upload de Arquivo **/

        //Faz o insert
        $insert = $this->model->create($dadosForm);

        //verifica se insert funcionou
        if($insert)
            return redirect($this->route);
        else
            return redirect($this->redirectCad)
                ->withErrors(['errors' => 'Falha ao cadastrar!!!'])
                ->withInput();
    }

    /*
    * Exibe o form de Edição
    * */
    public function editar($id)
    {
        //Recupera os Filtros
        $filtros = PortfolioFilter::get();

        //recupera o estilo pelo id
        $data = $this->model->find($id);

        return view("{$this->View}.cad-edit", compact('data','filtros'));
    }

    public function editarGo($id)
    {
        //Recupera os dados do formulario em forma de array
        $dadosForm = $this->request->all();

        $validacao = validator($dadosForm, $this->model->rulesEdit);
        /*
         * Regra de validação utilizando sessao de erros com withErrors e withInput
         * necessario usa filtros web nas rotas
         * */
        if($validacao->fails()){
            return redirect("{$this->redirectEdit}/$id")
                ->withErrors($validacao)
                ->withInput();
        }

        //Recupera o item pelo id
        $item = $this->model->find($id);

        /*
         * Upload de arquivo
         * */

        //Se existe o arquivo para o upload
        if ( $this->request->hasFile('imagem') && $this->request->file('imagem')->isValid()){

            //Recupera o campo de upload
            $img = $this->request->file('imagem');

            //Define o caminho
            $path = public_path('assets/uploads/imgs/portfolio');

            //Define o nome da Imagem
            $nameImg = $item->imagem;

            //Faz o upload da Imagem
            $upload = $img->move($path, $nameImg);

            if( !$upload)
                return redirect("$this->redirectEdit/$id")
                    ->withErrors(['errors' => 'Falha ao fazer o upload']);
        }

        /*
         * Final Upload de Arquivo
         * */

        //Faz a edição do item
        $dadosForm['imagem'] = $item->imagem;
        $update = $item->update($dadosForm);

        //verifica se editou com sucesso
        if($update)
            return redirect($this->route);
        else
            return redirect("{$this->redirectEdit}/$id")
                ->withErrors(['errors' => 'Falha ao editar!!!'])
                ->withInput();

    }
}
