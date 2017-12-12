@extends('adminlte::page')

@section('title', 'Password')

@section('content_header')
    <h1>Alterar Senha</h1>
@stop

@section('content')
    {{ Form::open(['url' => '/change-password/' . $user->id, 'method' => 'put']) }}
    <div class="panel panel-default">

        <div class="panel-heading">
            <h3 class="panel-title">Alterando Senha</h3>
        </div>

        <div class="panel-body">
            @if(session()->has('message'))
                <div class="w-100">
                    <div class="alert alert-success"> {!! session('message') !!}</div>
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <br/>
                    <div class="col-md-8 col-sm-12">
                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            <div class="w-100">
                                {{ Form::label('password', 'Senha:') }}
                            </div>
                            {{ Form::password('password', null, ['class' => 'form-control']) }}
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                            <div class="w-100">
                                {{ Form::label('password_confirmation', 'Confirmação:') }}
                            </div>
                            {{ Form::password('password_confirmation', null, ['class' => 'form-control']) }}
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
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
                        {{ Form::submit('Alterar', ['class' => 'btn btn-flat btn-success']) }}
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