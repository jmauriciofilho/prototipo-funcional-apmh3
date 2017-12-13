@extends('adminlte::page')

@section('title', 'Questões')

@section('content_header')
    <h1>Modulo {!! $module->title !!}</h1>
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Questão do Modulo {!! $module->title !!}</h3>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>
                            {!! $modelQuestion[0]['content'] !!}
                        </td>
                    </tr>
                    <tr>
                        <td class="success">
                            Opção 1: {!! $modelQuestion[0]['option_correct'] !!}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Opção 2: {!! $modelQuestion[0]['option_error1'] !!}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Opção 3: {!! $modelQuestion[0]['option_error2'] !!}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Opção 4: {!! $modelQuestion[0]['option_error3'] !!}
                        </td>
                    </tr>
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
@stop