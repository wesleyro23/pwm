@extends('painel.templete.templete')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Home Portifólio</h1>
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
                            <a class="btn btn-info btn-xs" href="/painel/homeportifolio/cadastrar">
                                <i class="fa fa-plus-circle fa-fw" aria-hidden="true"></i>
                                Adicionar
                            </a>
                        </div>
                        <div class="btn-group">
                            <a class="btn btn-info btn-xs" href="/painel/homeportfilter">
                                <i class="fa fa-plus-circle fa-fw" aria-hidden="true"></i>
                                Cadastara Filtros
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="morris-area-chart">

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Titulo</th>
                                <th>Filtro</th>
                                <th>Imagem</th>
                                <th width="200px">Ações</th>
                            </tr>
                            </thead>

                            <tbody>
                            @forelse( $data as $item )
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->titulo }}</td>
                                    <td>{{ $item->filtro }}</td>
                                    <td>{{ $item->imagem }}</td>
                                    <td>
                                        <a href="{{ url("/painel/homeportifolio/editar/$item->id") }}" class="edit">
                                            <i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ url("/painel/homeportifolio/deletar/$item->id") }}" class="delete">
                                            <i class="fa fa-trash fa-fw" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="90">Não Existem sliders Cadastrados</td>
                                </tr>
                            @endforelse
                            </tbody>

                        </table>
                        <nav>
                            {{ $data->links() }}
                        </nav>

                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
        </div>
    </div>
    <!-- /.row -->

@endsection