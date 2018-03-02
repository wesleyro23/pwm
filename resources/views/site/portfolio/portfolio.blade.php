@extends('site.templete.templete1')

@section('content')

        <!--************************************
                    Main Start
    *************************************-->
<main id="main" class="tg-haslayout">
    <div class="container">
        <div class="tg-main-section row">
            <div class="col-sm-12">
                <div class="houses-portfolio tg-haslayout">
                    <div class="tg-theme-heading">
                        <span>Alguns de nossos Projetos</span>
                        <h2>Portfólio</h2>
                    </div>
                    <div class="row">
                        <div class="tg-portfolio">
                            <div class="col-sm-12">
                                <div class="portfolio masnory tg-haslayout">
                                    <ul id="gallery-cats" class="gallery-cats option-set haslayout">
                                        <li class="select"><a href="#" data-filter="*">Tudo</a></li>
                                        @foreach($portfolioFilters as $filtro)
                                            <li><a href="#" data-filter=".{{$filtro->id}}">{{$filtro->titulo}}</a></li>
                                        @endforeach
                                    </ul>
                                    <div class="row">
                                        <div class="portfolio-content tg-haslayout portfolio-image grid" role="tablist">
                                            @forelse($portfolios as $item)
                                            <div role="presentation" class="active portfolio-item grid-item {{ $item->id_portfoliofilters }}">
                                                <div class="product-box">
                                                    <a class="fancybox" rel="gallery1" href="{{ url("public/assets/uploads/imgs/portfolio/$item->imagem") }}" title="{{ $item->titulo }}">
                                                        <figure><img src="{{ url("public/assets/uploads/imgs/portfolio/$item->imagem") }}" width="200" height="auto" alt="" /></figure>
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
                                            @empty
                                                <div role="presentation" class="active portfolio-item grid-item 1">
                                                    <div class="product-box">
                                                        <p>Não existe Cadastro...</p>
                                                    </div>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--************************************
                Main End
*************************************-->

<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect	: 'none',
            closeEffect	: 'none'
        });
    });
</script>


@endsection