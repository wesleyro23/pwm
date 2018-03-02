@extends('site.templete.templete1')

@section('content')

    <!--************************************
                Main Start
    *************************************-->
    <main id="main" class="tg-haslayout">
        <!--************************************
                        Map Section Start
        *************************************-->
        <div class="tg-map-info tg-haslayout">
            <div id="tg-map" class="tg-map">
            </div>
            <div class="container">
                <div class="row">
                    <div class="contact-info tg-haslayout">
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="col-info">
                                <p><i class="fa fa-map-marker"></i> Rua Manhuaçú, 427 - Rio de Janeiro-RJ</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="col-info">
                                <p><i class="fa fa-phone"></i> Ligue-nos: +55 21 96487 9499</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="col-info">
                                <p><i class="fa fa-envelope"></i> <a href="#">E-mail: pwm@pwmreformas.com.br</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tg-main-section tg-haslayout">
                <div class="container contact_wrap">
                    <div class="tg-theme-heading">
                        <span>Entre em</span>
                        <h2>contato</h2>
                    </div>
                    <form class="form-contactus contact_form" action="http://utils.infolink.com.br/fm/FormMail.cgi" Method="POST">
                        <div class="message_contact" style="display:none;"></div>
                        <fieldset>
                            <div class="row">
                                <input type=hidden name="recipient" value="pwm@pwmreformas.com.br">
                                <input type=hidden name="redirect" value="{{url("/obrigado")}}">
                                <input type=hidden name="required" value="realname,replyto,texto">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <i class="fa fa-user"></i>
                                        <input type="text" name="realname" class="form-control" placeholder="Nome">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <i class="fa fa-envelope"></i>
                                        <input type="email" name="replyto" class="form-control" placeholder="E-Mail">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <i class="fa fa-globe"></i>
                                        <select class="form-control select"  name="subject">
                                            <option value="Resposta">RESPOSTA</option>
                                            <option value="Sugestao">SUGESTÃO</option>
                                            <option value="Critica">CRÍTICA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <i class="fa fa-paper-plan-o"></i>
                                        <textarea class="theme-textarea" name="texto" placeholder="Mensagem"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <input class="tg-theme-btn" type=submit name="Enviar" value="Enviar">
                                    {{--<a href="#" class="tg-theme-btn contact_now">Enviar</a>--}}
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <!--************************************
                            Map Section End
            *************************************-->
        </div>
    </main>
    <!--************************************
                    Main End
    *************************************-->

@endsection