<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\StandardController;
use App\Models\Painel\HomeContato;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeContatoController extends StandardController
{
    protected $model;
    protected $request;
    protected $View = 'painel.home.contato';
    protected $redirectCad = '/painel/homecontato/cadastrar';
    protected $redirectEdit = '/painel/homecontato/editar';
    protected $route = '/painel/homecontato';


    public function __construct(HomeContato $homecontato, Request $request)
    {
        $this->model = $homecontato;
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

        /** Inicio Upload de arquivo1 **/
        //Recupera o campo de upload

        $img = $this->request->file('imagem');

        //Define o caminho
        $path = public_path('assets/uploads/imgs/home_contato');

        //Define o nome da imagem
        $nameImg = date('YmdHms').'.'.$img->getClientOriginalExtension();
        $dadosForm['imagem'] = $nameImg;

        //Faz o upload da imagem
        $upload = $img->move($path, $nameImg);

        if( !$upload)
            return redirect($this->redirectCad)
                ->withErrors(['errors' => 'Falha ao fazer o upload']);
        /** Final Upload de Arquivo1 **/

        /** Inicio Upload de arquivo2 **/
        //Recupera o campo de upload

        $img2 = $this->request->file('imagem_parallax');

        //Define o caminho
        $path2 = public_path('assets/uploads/imgs/home_contato');

        //Define o nome da imagem
        $nameImg2 = 'parallax_'.date('YmdHms').'.'.$img2->getClientOriginalExtension();
        $dadosForm['imagem_parallax'] = $nameImg2;

        //Faz o upload da imagem
        $upload2 = $img2->move($path2, $nameImg2);

        if( !$upload2)
            return redirect($this->redirectCad)
                ->withErrors(['errors' => 'Falha ao fazer o upload']);
        /** Final Upload de Arquivo2 **/

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
            $path = public_path('assets/uploads/imgs/home_contato');

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


        /** Inicio Upload de arquivo2 **/
        //Se existe o arquivo para o upload
        if ( $this->request->hasFile('imagem_parallax') && $this->request->file('imagem_parallax')->isValid()){

            //Recupera o campo de upload
            $img2 = $this->request->file('imagem_parallax');

            //Define o caminho
            $path2 = public_path('assets/uploads/imgs/home_contato');

            //Define o nome da imagem
            $nameImg2 = $item->imagem_parallax;

            //Faz o upload da imagem
            $upload2 = $img2->move($path2, $nameImg2);

            if( !$upload2)
                return redirect($this->redirectCad)
                    ->withErrors(['errors' => 'Falha ao fazer o upload']);
        }
        $dadosForm['imagem_parallax'] = $item->imagem_parallax;
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
