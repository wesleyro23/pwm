<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['prefix' => 'painel', 'middleware' => ['auth'], 'web'], function($route){

    /*Home slider*/
    $route->get('/slider','Painel\SliderController@index');
    $route->get('/slider/cadastrar','Painel\SliderController@cadastrar');
    $route->post('/slider/cadastrar','Painel\SliderController@cadastrarGo');
    $route->get('/slider/editar/{id}','Painel\SliderController@editar');
    $route->post('/slider/editar/{id}','Painel\SliderController@editarGo');
    $route->get('/slider/deletar/{id}','Painel\SliderController@deletar');

    /*Home Serviços*/
    $route->get('/homeservico','Painel\HomeServicoController@index');
    $route->get('/homeservico/cadastrar','Painel\HomeServicoController@cadastrar');
    $route->post('/homeservico/cadastrar','Painel\HomeServicoController@cadastrarGo');
    $route->get('/homeservico/editar/{id}','Painel\HomeServicoController@editar');
    $route->post('/homeservico/editar/{id}','Painel\HomeServicoController@editarGo');
    $route->get('/homeservico/deletar/{id}','Painel\HomeServicoController@deletar');
    
    /*Home Contato*/
    $route->get('/homecontato','Painel\HomeContatoController@index');
    $route->get('/homecontato/cadastrar','Painel\HomeContatoController@cadastrar');
    $route->post('/homecontato/cadastrar','Painel\HomeContatoController@cadastrarGo');
    $route->get('/homecontato/editar/{id}','Painel\HomeContatoController@editar');
    $route->post('/homecontato/editar/{id}','Painel\HomeContatoController@editarGo');
    $route->get('/homecontato/deletar/{id}','Painel\HomeContatoController@deletar');

    /*Home Portifolio filter*/
    $route->get('/homeportfilter','Painel\HomePortifolioController@filter');
    $route->get('/homeportfilter/cadastrar','Painel\HomePortifolioController@cadastrarFiltro');
    $route->post('/homeportfilter/cadastrar','Painel\HomePortifolioController@cadastrarFiltroGo');
    $route->get('/homeportfilter/editar/{id}','Painel\HomePortifolioController@editarFiltro');
    $route->post('/homeportfilter/editar/{id}','Painel\HomePortifolioController@editarFiltroGo');
    $route->get('/homeportfilter/deletar/{id}','Painel\HomePortifolioController@deletarFiltro');

    /*Home Portifolio*/
    $route->get('/homeportifolio','Painel\HomePortifolioController@index');
    $route->get('/homeportifolio/cadastrar','Painel\HomePortifolioController@cadastrar');
    $route->post('/homeportifolio/cadastrar','Painel\HomePortifolioController@cadastrarGo');
    $route->get('/homeportifolio/editar/{id}','Painel\HomePortifolioController@editar');
    $route->post('/homeportifolio/editar/{id}','Painel\HomePortifolioController@editarGo');
    $route->get('/homeportifolio/deletar/{id}','Painel\HomePortifolioController@deletar');

    /*Sobre Empresa*/
    $route->get('/sobreempresa','Painel\SobreEmpresaController@index');
    $route->get('/sobreempresa/cadastrar','Painel\SobreEmpresaController@cadastrar');
    $route->post('/sobreempresa/cadastrar','Painel\SobreEmpresaController@cadastrarGo');
    $route->get('/sobreempresa/editar/{id}','Painel\SobreEmpresaController@editar');
    $route->post('/sobreempresa/editar/{id}','Painel\SobreEmpresaController@editarGo');
    $route->get('/sobreempresa/deletar/{id}','Painel\SobreEmpresaController@deletar');
    
   /*Sobre VantDesv*/
    $route->get('/sobrevantdesv','Painel\SobreVantDesvController@index');
    $route->get('/sobrevantdesv/cadastrar','Painel\SobreVantDesvController@cadastrar');
    $route->post('/sobrevantdesv/cadastrar','Painel\SobreVantDesvController@cadastrarGo');
    $route->get('/sobrevantdesv/editar/{id}','Painel\SobreVantDesvController@editar');
    $route->post('/sobrevantdesv/editar/{id}','Painel\SobreVantDesvController@editarGo');
    $route->get('/sobrevantdesv/deletar/{id}','Painel\SobreVantDesvController@deletar');

   /*Serviços Filter*/
    $route->get('/servicosfilter','Painel\ServicosFilterController@index');
    $route->get('/servicosfilter/cadastrar','Painel\ServicosFilterController@cadastrar');
    $route->post('/servicosfilter/cadastrar','Painel\ServicosFilterController@cadastrarGo');
    $route->get('/servicosfilter/editar/{id}','Painel\ServicosFilterController@editar');
    $route->post('/servicosfilter/editar/{id}','Painel\ServicosFilterController@editarGo');
    $route->get('/servicosfilter/deletar/{id}','Painel\ServicosFilterController@deletar');

   /*Serviços*/
    $route->get('/servicos','Painel\ServicosController@index');
    $route->get('/servicos/cadastrar','Painel\ServicosController@cadastrar');
    $route->post('/servicos/cadastrar','Painel\ServicosController@cadastrarGo');
    $route->get('/servicos/editar/{id}','Painel\ServicosController@editar');
    $route->post('/servicos/editar/{id}','Painel\ServicosController@editarGo');
    $route->get('/servicos/deletar/{id}','Painel\ServicosController@deletar');

    /*Portfolio Filter*/
    $route->get('/portfoliofilter','Painel\PortfolioFilterController@index');
    $route->get('/portfoliofilter/cadastrar','Painel\PortfolioFilterController@cadastrar');
    $route->post('/portfoliofilter/cadastrar','Painel\PortfolioFilterController@cadastrarGo');
    $route->get('/portfoliofilter/editar/{id}','Painel\PortfolioFilterController@editar');
    $route->post('/portfoliofilter/editar/{id}','Painel\PortfolioFilterController@editarGo');
    $route->get('/portfoliofilter/deletar/{id}','Painel\PortfolioFilterController@deletar');

    /*Portfolio*/
    $route->get('/portfolio','Painel\PortfolioController@index');
    $route->get('/portfolio/cadastrar','Painel\PortfolioController@cadastrar');
    $route->post('/portfolio/cadastrar','Painel\PortfolioController@cadastrarGo');
    $route->get('/portfolio/editar/{id}','Painel\PortfolioController@editar');
    $route->post('/portfolio/editar/{id}','Painel\PortfolioController@editarGo');
    $route->get('/portfolio/deletar/{id}','Painel\PortfolioController@deletar');


    /*Rotas Dicas*/
    $route->get('/dicas','Painel\DicasController@index');
    $route->get('/dicas/cadastrar','Painel\DicasController@cadastrar');
    $route->post('/dicas/cadastrar','Painel\DicasController@cadastrarGo');
    $route->get('/dicas/editar/{id}','Painel\DicasController@editar');
    $route->post('/dicas/editar/{id}','Painel\DicasController@editarGo');
    $route->get('/dicas/deletar/{id}','Painel\DicasController@deletar');
    /*$route->post('estilo/pesquisar','Painel\EstiloController@pesquisar');*/
    
    $route->get('/','Painel\PainelController@index');

});

//Rota de autenticação
Route::auth();
/*Route::group(['middleware' => [], 'web'], function(){
    //Autentication Route
    $this->get('login', 'Auth\AuthController@showLoginForm');
    $this->post('login', 'Auth\AuthController@login');
    $this->get('logout', 'Auth\AuthController@logout');

    //Registration Route
    //$this->get('register', 'Auth\AuthController@showRegistrationForm');
    //$this->post('register', 'Auth\AuthController@register');

    //Password Reset Route
    $this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    $this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    $this->post('password/reset', 'Auth\PasswordController@reset');

});
*/
//Obrigado
Route::get('/obrigado', 'Site\SiteController@obrigado');
//Sobre
Route::get('/sobre', 'Site\SiteController@sobre');
//Serviços
Route::get('/servicos','Site\SiteController@servicos');
//Portifolio
Route::get('/portfolio','Site\SiteController@portfolio');
//Contato
Route::get('/contato','Site\SiteController@contato');
//Dicas
Route::get('/dicas','Site\SiteController@dicas');
//Home
Route::get('/', 'Site\SiteController@index');

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::auth();

//Route::get('/home', 'HomeController@index');
