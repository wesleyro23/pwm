@extends('painel.templete.templete')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sobre Empresa</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-table fa-fw"></i> Área de Registros
                    <div class="pull-right">
                        <div class="btn-group">
                            <a class="btn btn-info btn-xs" href="/painel/sobrevantdesv/cadastrar">
                                <i class="fa fa-plus-circle fa-fw" aria-hidden="true"></i>
                                Adicionar
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="morris-area-chart">

                        @if( isset($errors) && count($errors) > 0 )
                            <div class="alert alert-danger">
                                @foreach( $errors->all() as $error )
                                    {{ $error }} <br>
                                @endforeach
                            </div>
                        @endif

                        @if( isset($data))
                            <form class="form" method="POST" action="/painel/sobrevantdesv/editar/{{ $data->id }}" enctype="multipart/form-data">
                        @else
                            <form class="form" method="POST" action="/painel/sobrevantdesv/cadastrar" enctype="multipart/form-data">
                        @endif
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <input type="text" name="descricao" placeholder="Insira a Descrição" class="form-control" value="{{ $data->descricao or old('descricao') }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="icone" placeholder="Insira o icone" class="form-control" value="{{ $data->icone or old('icone') }}">
                                </div>
                                <div class="form-group">
                                    <label for="vantdesv">VantDesv</label>
                                    <select class="form-control" id="vantdesv" name="vantdesv" >
                                        <option value="">Escolha</option>
                                        <option value="0">Vantagens</option>
                                        <option value="1">Desvantagens</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="enviar" value="Enviar" class="btn btn-success">
                                </div>
                            </form>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
        </div>
    </div>
    <!-- /.row -->

@endsection