@extends('site.templete.templete1')

@section('content')

    <!--************************************
            Main Start
    *************************************-->
    <main id="main" class="tg-haslayout">
        <!--************************************
                Sobre Inicio
        *************************************-->
        <section class="tg-main-section tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="tg-theme-heading">
                            <span>Sobre nossa</span>
                            <h2>Empresa</h2>
                        </div>
                    </div>
                    <div class="tg-aboutus-section">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <figure class="tg-about-img"><img src="{{ url("public/assets/site/images/img-05.jpg") }}" alt="image description"></figure>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="tg-aboutus">
                                <div class="tg-description">
                                    @foreach($sobreEmpresas as $item)
                                        {!! $item->descricao !!}
                                    @endforeach
                                </div>
                                <a class="tg-theme-btn" href="{{ url("/contato") }}">Entre em contato</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Sobre Fim
        *************************************-->
        <!--************************************
                Skills Reviews Start
        *************************************-->
        <section class="tg-main-section tg-haslayout tg-skillreview-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="tg-haslayout tg-reviews">
                            <div class="tg-theme-heading">
                                <span>Contratar a PWM Pinturas e Reformas</span>
                                <h2>VANTAGENS</h2>
                            </div>
                            <div id="tg-review-slider" class="tg-review-slider tg-haslayout">
                                @forelse($sobreVantDesvs as $item)
                                    @if($item->vantdesv == 0 )
                                        <div class="tg-review tg-haslayout">
                                            <div class="tg-review-content">
                                                <div class="tg-description">
                                                    <p>{{ $item->descricao }}</p>
                                                </div>
                                            </div>
                                            <figure class="tg-reviewer-img"><i class="{{ $item->icone }} text-success"></i></figure>
                                        </div>
                                    @endif
                                @empty
                                    <div class="tg-review tg-haslayout">
                                        <div class="tg-review-content">
                                            <div class="tg-description">
                                                <p>Não tem Cadastro</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="tg-haslayout tg-reviews">
                            <div class="tg-theme-heading">
                                <span>Administração Própria</span>
                                <h2>DESVANTAGENS</h2>
                            </div>
                            <div id="tg-review-slider" class="tg-review-slider tg-haslayout">
                                @forelse($sobreVantDesvs as $item)
                                    @if($item->vantdesv == 1 )
                                        <div class="tg-review tg-haslayout">
                                            <div class="tg-review-content">
                                                <div class="tg-description">
                                                    <p>{{ $item->descricao }}</p>
                                                </div>
                                            </div>
                                            <figure class="tg-reviewer-img"><i class="{{ $item->icone }} text-danger"></i></figure>
                                        </div>
                                    @endif
                                @empty
                                    <div class="tg-review tg-haslayout">
                                        <div class="tg-review-content">
                                            <div class="tg-description">
                                                <p>Não tem Cadastro</p>
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
                Skills Reviews End
        *************************************-->
    </main>
    <!--************************************
            Main End
    *************************************-->

@endsection
