@extends('site.templete.templete')

@section('content')

    <!--************************************
            Home Slider Start
    *************************************-->
    <div id="home-slider" class="home-slider tg-haslayout">
        @forelse($sliders as $slider)
        <div class="item">
            <figure>
                <img src="{{ url("public/assets/uploads/imgs/home_slider/{$slider->imagem}") }}" alt="image description">
            </figure>
            <div class="tg-banner-content">
                <div class="tg-border-bottomleft">
                    <h1><span>{{$slider->descricao}}</span> {{$slider->titulo}}</h1>
                </div>
                {{--<a class="tg-theme-btn" href="#SectionServicos">Clique Aqui</a>--}}
            </div>
        </div>
        @empty
        <div class="item">
            <p>Não existem Itens Cadastrados</p>
        </div>
        @endforelse
    </div>
    <!--************************************
            Home Slider End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id="main" class="tg-haslayout">
        <!--************************************
                Serviços Inicio
        *************************************-->
        <section id="SectionServicos" class="tg-main-section tg-haslayout bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="tg-theme-heading">
                            <span>NÓS SOMOS ESPECIALISTAS EM</span>
                            <h2>SERVIÇOS</h2>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-md-12 col-sm-12 col-xs-12 zero-right-padding">
                            <div class="tg-services row">
                                @forelse($homeservicos as $homeservico)
                                <div class="tg-service services-content tg-haslayout">
                                    <div class="tg-border-topleft tg-haslayout">
                                        <div class="tg-displaytable">
                                            <div class="tg-displaytablecell">
                                                <span class="{{ $homeservico->icon }}"></span>
                                                <h3>{{ $homeservico->titulo }}</h3>
                                                <div class="tg-description">
                                                    <p>{{ $homeservico->descricao }}  <a href="/servicos">Saiba mais...</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                    <div class="tg-service services-content tg-haslayout">
                                        <div class="tg-border-topleft tg-haslayout">
                                            <div class="tg-displaytable">
                                                <div class="tg-displaytablecell">
                                                    <p>Não existem Itens Cadastrados</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Serviços Fim
        *************************************-->
        <!--************************************
                Contato Home Inicio
        *************************************-->
        @foreach($homeContatos as $homeContato)
        <section class="tg-main-section tg-haslayout parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="{{ url("public/assets/uploads/imgs/home_contato/$homeContato->imagem_parallax") }}">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 tg-displayinlineblock">
                        <div class="tg-virtual-img tg-haslayout">
                            <figure class="tg-img-border">
                                <img src="{{ url("public/assets/uploads/imgs/home_contato/$homeContato->imagem") }}" alt="image description">
                            </figure>
                        </div>
                    </div>
                    <div class="col-sm-5 tg-displayinlineblock">
                        <div class="tg-virtuallybuild">
                            <div class="tg-theme-heading">
                                <h2><span>{{ $homeContato->titulo }}</span></h2>
                            </div>
                            <div class="tg-description">
                                <p>{{ $homeContato->descricao }}</p>
                            </div>
                            <div class="tg-btn-box">
                                <a class="tg-theme-btn" href="/contato">Clique Aqui</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endforeach
        <!--************************************
                Contato Home Fim
        *************************************-->
        <!--************************************
                Portfolio Start
        *************************************-->
        <section id="SectionPortfolio" class="tg-main-section tg-haslayout bg-white">
            <div class="container">
                <div class="row">
                    <div class="tg-theme-heading">
                        <span>Alguns de nossos Projetos</span>
                        <h2>Portfólio</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="tg-portfolio">
                        <div class="col-sm-12">
                            <div class="portfolio masnory tg-haslayout">
                                <ul id="gallery-cats" class="gallery-cats option-set haslayout">
                                    <li class="select"><a href="#" data-filter="*">Tudo</a></li>
                                    @foreach($homePortifolioFilter as $filtro)
                                    <li><a href="#" data-filter=".{{$filtro->id}}">{{$filtro->filtro}}</a></li>
                                    @endforeach
                                </ul>
                                <div class="row">
                                    <div class="portfolio-content tg-haslayout portfolio-image grid" role="tablist">
                                        @foreach($homePortifolio as $portifolio)
                                        <div role="presentation" class="active portfolio-item grid-item {{$portifolio->id_homeportfilters}}">
                                            <div class="product-box">
                                                <a class="fancybox" rel="gallery1" href="{{ url("public/assets/uploads/imgs/home_portifolio/$portifolio->imagem") }}" title="{{$portifolio->titulo}}">
                                                    <figure><img src="{{ url("public/assets/uploads/imgs/home_portifolio/$portifolio->imagem") }}" alt="" /></figure>
                                                    <div class="tg-img-hover">
                                                        <div class="tg-displaytable">
                                                            <div class="tg-displaytablecell">
                                                                <i class="fa fa-picture-o"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script type="text/javascript">
            $(document).ready(function() {
                $(".fancybox").fancybox({
                    openEffect	: 'none',
                    closeEffect	: 'none'
                });
            });
        </script>

        <!--************************************
                Portfolio End
        *************************************-->

        <!--************************************
                Dicas Inicio
        *************************************-->

        <section id="SectionNossasDicas" class="tg-main-section tg-haslayout parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="{{ url('public/assets/site/images/parallax-img/bg-parallax-03.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="tg-theme-heading">
                            <span>Fique por dentro das</span>
                            <h2>nossas dicas</h2>
                        </div>
                    </div>
                    <div id="tg-posts-slider" class="tg-posts">
                        @forelse($homeDicas as $item)
                        <div class="item">
                            <div class="tg-post">
                                <div class="tg-post-img">
                                    <figure>
                                        <a href="/dicas">
                                            <img src="{{ url("public/assets/uploads/imgs/dicas/$item->imagem") }}" alt="image description">
                                        </a>
                                    </figure>
                                    <div class="tg-post-hover">
                                        <ul class="tg-post-hover-icons">
                                            <a href="/dicas"><i class="fa fa-eye fa-2x"></i></a>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tg-post-content tg-border-topleft">
                                    <h3><a href="/dicas">{{ $item->titulo }}</a></h3>
                                    <div class="tg-description">
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                            <div class="item">
                                <div class="tg-post">
                                    <p>Não existem Itens Cadastrados</p>
                                </div>
                            </div>
                        @endforelse

                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Dicas End
        *************************************-->
    </main>
    <!--************************************
            Main End
    *************************************-->

@endsection