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
                <div class="row">
                    <div class="col-xs-12">
                        <div class="tg-theme-heading">
                            <span>NÓS SOMOS ESPECIALISTAS EM</span>
                            <h2>SERVIÇOS</h2>
                        </div>
                    </div>
                    <div class="tg-aboutus-section">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="tg-aboutus">
                                <div class="tg-description">
                                    <p>Nossos serviços garantem o mínimo de sujeira e o máximo cuidado com o seu patrimônio e utilizamos somente material de primeira linha.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @forelse($homeservicos as $item)
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="tg-haslayout tg-reviews">
                            <div id="tg-review-slider" class="tg-review-slider tg-haslayout">
                                <div class="tg-review tg-haslayout">
                                    <div class="tg-review-content">
                                        <div class="tg-reviewer-head tg-haslayout">
                                            <strong class="tg-reviewer-name">{{ $item->titulo }}</strong>
                                        </div>
                                        <div class="tg-description">
                                            <p>{{ $item->descricao }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="tg-haslayout tg-reviews">
                                <div id="tg-review-slider" class="tg-review-slider tg-haslayout">
                                    <div class="tg-review tg-haslayout">
                                        <div class="tg-review-content">
                                            <div class="tg-description">
                                                <p>Não exite nada Cadastrado!!!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="tg-accordion tg-haslayout">
                            <div class="tg-panel-group accordion" id="accordion">
                                <?php $cont=0; ?>
                                @foreach($servicosFilter as $filtro)
                                <?php $cont++; ?>
                                <div class="tg-panel panel tg-haslayout @if($cont <> 1 ) last @endif">
                                    <div class="tg-panel-heading @if($cont == 1 ) actives @endif">
                                        <h3 class="@if($cont == 1 ) actives @endif"><a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$cont}}">{{$filtro->titulo}}</a></h3>
                                    </div>
                                    <div id="collapse{{$cont}}" class="panel-collapse collapse @if($cont == 1 ) in @endif">
                                        <div class="tg-panel-body">
                                            <ul>
                                                @foreach($servicos as $item)
                                                    @if($filtro->id == $item->id_servicosfilters)
                                                        <li>{{ $item->titulo }}</li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--************************************
                About Section End
        *************************************-->
        <!--************************************
        F.A.Q Reviews Start
*************************************-->
        <section class="tg-main-section tg-haslayout">
            <div class="container">
            </div>
        </section>
        <!--************************************
                F.A.Q Reviews End
        *************************************-->
    </main>
    <!--************************************
            Main End
    *************************************-->

@endsection