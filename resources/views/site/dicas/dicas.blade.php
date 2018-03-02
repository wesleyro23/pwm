@extends('site.templete.templete1')

@section('content')

        <!--************************************
            Main Start
    *************************************-->
<main id="main" class="tg-haslayout">
    <!--************************************
            About Section Start
    *************************************-->
    <section class="tg-main-section tg-haslayout">
        <div class="container">
            <div class="tg-portfolio tg-portfolio-list tg-haslayout">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="tg-theme-heading">
                            <span>Fique por dentro das</span>
                            <h2>Nossas Dicas</h2>
                        </div>
                    </div>
                </div>
                <div class="portfolio masnory tg-haslayout">
                    <div class="portfolio-content tg-haslayout list" role="tablist">
                        @forelse($dados as $dado)
                            <div class="portfolio-item grid-item">
                                <div class="product-box">
                                    <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                                        <div class="row">
                                            <div class="tg-portfolio-img">
                                                <figure><img src="{{ url("public/assets/uploads/imgs/dicas/{$dado->imagem}") }}" alt="image description"></figure>
                                                <div class="tg-img-hover">
                                                    <ul class="tg-member-hover-icons">
                                                        <i class="fa fa-star-o"></i>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="tg-border-topleft tg-portfolio-content">
                                                <div>
                                                    <h3><strong>{{ $dado->titulo }}</strong></h3>
                                                </div>
                                                <div>
                                                    <p>{{ substr($dado->descricao, 0, 250)."..." }}</p>
                                                </div>
                                                <a class="tg-viewmore-btn" href="#">View More »</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>Não Existem Dicas para serem exibidas!!!</p>
                        @endforelse
                    </div>
                    <nav>
                        {{ $dados->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
            About Section End
    *************************************-->
</main>
<!--************************************
        Main End
*************************************-->

@endsection