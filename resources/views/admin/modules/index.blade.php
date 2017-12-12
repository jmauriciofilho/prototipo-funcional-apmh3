@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')
    <h1>Modulos</h1>
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Modulos Cadastrados</h3>
        </div>
        <div class="panel-body">
            <table id="example" class="table table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr class="active">
                    <th>Título</th>
                    <th>Criador</th>
                    <th>Questões</th>
                </tr>
                </thead>
                <tfoot>
                <tr class="active">
                    <th>Título</th>
                    <th>Criador</th>
                    <th>Questões</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($modules as $module)
                    <tr>
                        <td>{!! $module->title !!}</td>
                        <td>{!! $module->user->name !!}</td>
                        <td>Botão</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="box-footer">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-flat btn-default" href="/home">Voltar</a>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                columnDefs: [{orderable: false, targets: [3]}]
            });
        } );
    </script>
@stop