<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;


class StandardController extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    protected $totalPorPagia = 10;

    /*
     * Lista os Itens
     * */
    public function index()
    {
        $data = $this->model->paginate($this->totalPorPagia);

        return view("{$this->View}.index", compact('data'));
    }

    /*
     * Exibe o Form de Cadastro
     * */
    public function cadastrar()
    {
        return view("{$this->View}.cad-edit");
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
        $validacao = validator($dadosForm, $this->model->rules);

        if($validacao->fails()){
            return redirect($this->redirectCad)
                ->withErrors($validacao)
                ->withInput();
        }

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
        //recupera pelo id
        $data = $this->model->find($id);

        return view("{$this->View}.cad-edit", compact('data'));

    }

    /*
    * Executa a Edição do item
    * */
    public function editarGo($id)
    {
        //Recupera os dados do formulario em forma de array
        $dadosForm = $this->request->all();

        $validacao = validator($dadosForm, $this->model->rules);

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

    /*
    * Deletando o Item
    * */
    public function deletar($id)
    {
        //recupera o item pelo id
        $data = $this->model->find($id);

        //deleta o item
        $data->delete();

        //Redireciona
        return redirect($this->route);
    }


}
