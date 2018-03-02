<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\StandardController;
use App\Models\Painel\SliderHome;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SliderController extends StandardController
{
    protected $model;
    protected $request;
    protected $View = 'painel.home.slider';
    protected $redirectCad = '/painel/slider/cadastrar';
    protected $redirectEdit = '/painel/slider/editar';
    protected $route = '/painel/slider';


    public function __construct(SliderHome $sliderhome, Request $request)
    {
        $this->model = $sliderhome;
        $this->request = $request;
    }

    /*
* Executa o Cadastro
* */
    public function cadastrarGo()
    {
        //Recupera os dados do formulario
        $dadosForm = $this->request->all();

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
        $path = public_path('assets/uploads/imgs/home_slider');

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
    * Executa a Edição do item
    * */
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

        /** Upload de arquivo **/
        //Se existe o arquivo para o upload
        if ( $this->request->hasFile('imagem') && $this->request->file('imagem')->isValid()){

            //Recupera o campo de upload
            $img = $this->request->file('imagem');

            //Define o caminho
            $path = public_path('assets/uploads/imgs/home_slider');

            //Define o nome da Imagem
            $nameImg = $item->imagem;

            //Faz o upload da Imagem
            $upload = $img->move($path, $nameImg);

            if( !$upload)
                return redirect("$this->redirectEdit/$id")
                    ->withErrors(['errors' => 'Falha ao fazer o upload']);
        }
        $dadosForm['imagem'] = $item->imagem;
        /** Final Upload de Arquivo **/

        //Faz a edição do item
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
