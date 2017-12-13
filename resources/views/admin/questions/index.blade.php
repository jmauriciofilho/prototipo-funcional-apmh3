@extends('adminlte::page')

@section('title', 'Questões')

@section('content_header')
    <h1>Modulo {!! $module->title !!}</h1>
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Questões do Modulo {!! $module->title !!}</h3>
        </div>
        <div class="panel-body">
            <a class="btn btn-success" href="/module/{!! $module->id !!}/questions/create">
                Adicionar Questão
            </a>
            <br>
            <br>
            <table id="example" class="table table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Cabeçario</th>
                        <th>Visualizar</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($objs as $obj)
                    <tr>
                        <td>{!! $obj->content !!}</td>
                        <td>
                            <a class="btn fa fa-eye btn-default" href="#"></a>
                        </td>
                        <td>
                            <a class="btn fa fa-pencil btn-default" href="#"></a>
                        </td>
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
                columnDefs: [{orderable: false, targets: [2]}]
            });
        } );
    </script>
@stop