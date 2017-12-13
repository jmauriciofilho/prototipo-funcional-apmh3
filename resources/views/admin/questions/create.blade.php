@extends('adminlte::page')

@section('title', 'Questão')

@section('content_header')
    <h1>Adicionar Questão</h1>
@stop

@section('content')
    {{ Form::open(['url' => '/module/'.$id.'/questions/create', 'method' => 'post']) }}
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Questão</h3>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <br/>
                    <div class="col-md-8 col-sm-12">
                        <div class="form-group">
                            {{ Form::label('content', 'Cabeçario:') }}
                            {{ Form::textarea('content', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('option_correct', 'Opção Correta:') }}
                            {{ Form::textarea('option_correct', null ,['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('option_error1', 'Opção Errada 1:') }}
                            {{ Form::textarea('option_error1', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('option_error2', 'Opção Errada 2:') }}
                            {{ Form::textarea('option_error2', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('option_error3', 'Opção Errada 3:') }}
                            {{ Form::textarea('option_error3', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-footer">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-flat btn-default" href="/home">Voltar</a>

                    <div class="pull-right">
                        {{ Form::submit('Adicionar', ['class' => 'btn btn-flat btn-success']) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ Form::close() }}
@stop

@section('css')

@stop

@section('js')

@stop