<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\StandardController;
use App\Models\Painel\HomePortifolio;
use App\Models\Painel\HomePortifolioFilter;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomePortifolioController extends StandardController
{
    protected $model;
    protected $modelfilter;
    protected $request;
    protected $View = 'painel.home.portifolio';
    protected $Viewfilter = 'painel.home.portifolio.filter';
    protected $redirectCad = '/painel/homeportifolio/cadastrar';
    protected $redirectEdit = '/painel/homeportifolio/editar';
    protected $route = '/painel/homeportifolio';


    public function __construct(HomePortifolio $homePortifolio, HomePortifolioFilter $homePortifolioFilter,Request $request)
    {
        $this->model = $homePortifolio;
        $this->modelfilter = $homePortifolioFilter;
        $this->request = $request;
    }

    public function filter(){

        $data = $this->modelfilter->paginate($this->totalPorPagia);

        return view("{$this->Viewfilter}.index", compact('data'));

    }

    public function cadastrarFiltro()
    {
        return view("{$this->Viewfilter}.cad-edit");
    }

    public function cadastrarFiltroGo()
    {
        //Recupera os dados do formulario
        $dadosForm = $this->request->all();

        /*
         * Regra de validação utilizando sessao de erros com withErrors e withInput
         * necessario usa filtros web nas rotas
         * */
        $validacao = validator($dadosForm, $this->modelfilter->rules);

        if($validacao->fails()){
            return redirect($this->redirectCad)
                ->withErrors($validacao)
                ->withInput();
        }

        //Faz o insert
        $insert = $this->modelfilter->create($dadosForm);

        //verifica se insert funcionou
        if($insert)
            return redirect($this->route);
        else
            return redirect($this->redirectCad)
                ->withErrors(['errors' => 'Falha ao cadastrar!!!'])
                ->withInput();
    }

    public function editarFiltro($id)
    {
        //recupera pelo id
        $data = $this->modelfilter->find($id);

        return view("{$this->Viewfilter}.cad-edit", compact('data'));

    }

    public function editarFiltroGo($id)
    {
        //Recupera os dados do formulario em forma de array
        $dadosForm = $this->request->all();

        $validacao = validator($dadosForm, $this->modelfilter->rules);

        /*
         * Regra de validação utilizando sessao de erros com withErrors e withInput
         * necessario usa filtros web nas rotas
         * */
        if($validacao->fails()){
            return redirect("/homeportfilter/editar/$id")
                ->withErrors($validacao)
                ->withInput();
        }

        //Recupera o item pelo id
        $item = $this->modelfilter->find($id);

        //Faz a edição do item
        $update = $item->update($dadosForm);

        //verifica se editou com sucesso
        if($update)
            return redirect($this->route);
        else
            return redirect("/homeportfilter/editar/$id")
                ->withErrors(['errors' => 'Falha ao editar!!!'])
                ->withInput();
    }

    public function deletarFiltro($id)
    {
        //recupera o item pelo id
        $data = $this->modelfilter->find($id);

        //deleta o item
        $data->delete();

        //Redireciona
        return redirect($this->route);
    }


    public function index()
    {
        $data = $this->model
            ->join('home_portifolio_filters', 'home_portifolio_filters.id', '=', 'home_portifolios.id_homeportfilters')
            ->select('home_portifolios.id', 'home_portifolios.titulo', 'home_portifolio_filters.filtro as filtro', 'home_portifolios.imagem')
            ->paginate($this->totalPorPagia);;

        return view("{$this->View}.index", compact('data'));
    }

    public function cadastrar()
    {
        $filtros = HomePortifolioFilter::get();

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
        $path = public_path('assets/uploads/imgs/home_portifolio');

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
        $filtros = HomePortifolioFilter::get();

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
            $path = public_path('assets/uploads/imgs/home_portifolio');

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
