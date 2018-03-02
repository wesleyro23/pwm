<?php

namespace App\Http\Controllers\Site;

use App\Models\Painel\Dica;
use App\Models\Painel\HomeContato;
use App\Models\Painel\HomePortifolio;
use App\Models\Painel\HomePortifolioFilter;
use App\Models\Painel\HomeServico;
use App\Models\Painel\Portfolio;
use App\Models\Painel\PortfolioFilter;
use App\Models\Painel\Servicos;
use App\Models\Painel\ServicosFilter;
use App\Models\Painel\SliderHome;
use App\Models\Painel\SobreEmpresa;
use App\Models\Painel\SobreVantDesv;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    protected $sliderhome;
    protected $homeServico;
    protected $homeContato;
    protected $homePortifolio;
    protected $homePortifolioFilter;
    protected $sobreEmpresa;
    protected $sobreVantDesv;
    protected $servicos;
    protected $servicosFilter;
    protected $portfolios;
    protected $portfolioFilters;
    protected $dicas;

    public function __construct(SliderHome $sliderhome, HomeServico $homeServico, HomeContato $homeContato, HomePortifolio $homePortifolio, HomePortifolioFilter $homePortifolioFilter,
                                SobreEmpresa $sobreEmpresa , SobreVantDesv $sobreVantDesv, Servicos $servicos, ServicosFilter $servicosFilter,PortfolioFilter $portfolioFilters, Portfolio $portfolios, Dica $dicas)
    {
        $this->sliderhome = $sliderhome;
        $this->homeServico = $homeServico;
        $this->homeContato = $homeContato;
        $this->homePortifolio = $homePortifolio;
        $this->homePortifolioFilter = $homePortifolioFilter;
        $this->sobreEmpresa = $sobreEmpresa;
        $this->sobreVantDesv = $sobreVantDesv;
        $this->servicos = $servicos;
        $this->servicosFilter = $servicosFilter;
        $this->portfolios = $portfolios;
        $this->portfolioFilters = $portfolioFilters;
        $this->dicas = $dicas;
    }

    public function index()
    {
        $sliders = $this->sliderhome->all();
        $homeservicos = $this->homeServico->all();
        $homeContatos = $this->homeContato->all();
        $homePortifolio = $this->homePortifolio->all();
        $homePortifolioFilter = $this->homePortifolioFilter->all();
        $homeDicas = $this->dicas->all();

        
        return view('site.home.index', compact('sliders','homeservicos','homeContatos', 'homePortifolio','homePortifolioFilter', 'homeDicas'));
    }
    
    public function sobre()
    {
        $pagina = 'Sobre';
        $sobreEmpresas = $this->sobreEmpresa->all();
        $sobreVantDesvs = $this->sobreVantDesv->all();

        return view('site.sobre.sobre', compact('pagina','sobreEmpresas','sobreVantDesvs'));
    }

    public function servicos()
    {
        $pagina = 'Serviços';
        $homeservicos = $this->homeServico->all();
        $servicos = $this->servicos->all();
        $servicosFilter = $this->servicosFilter->all();
        

        return view('site.servicos.servicos', compact('pagina','homeservicos','servicos','servicosFilter'));
    }

    public function portfolio()
    {
        $pagina = 'Portfólio';
        $portfolios = $this->portfolios->all();
        $portfolioFilters = $this->portfolioFilters->all();

        return view('site.portfolio.portfolio', compact('pagina', 'portfolios', 'portfolioFilters'));
    }
    
    public function dicas()
    {
        $pagina = 'Dicas';

        $dados = $this->dicas->paginate(4);

        return view('site.dicas.dicas', compact('pagina','dados'));
    }        
    
    public function contato()
    {
        $pagina = 'Contato';

        return view('site.contato.contato', compact('pagina'));
    }
    
    public function obrigado()
    {
        $pagina = 'Obrigado';

        return view('site.obrigado.obrigado', compact('pagina'));
    }
}
