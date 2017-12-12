@extends('adminlte::page')

@section('title', 'Perfil')

@section('content_header')
    <h1>Perfil</h1>
@stop

@section('content')
    {{ Form::open(['url' => '/profile/' . $user->id, 'method' => 'put']) }}
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Dados do Usuário</h3>
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
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            {{ Form::label('name', 'Nome:') }}
                            {{ Form::text('name', $user->name, ['class' => 'form-control']) }}
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('lastName') ? 'has-error' : '' }}">
                            {{ Form::label('lastName', 'Sobrenome:') }}
                            {{ Form::text('lastName', $user->lastName, ['class' => 'form-control']) }}
                            @if ($errors->has('lastName'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lastName') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            {{ Form::label('email', 'E-mail:') }}
                            {{ Form::email('email', $user->email, ['class' => 'form-control']) }}
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
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
                        {{ Form::submit('Atualizar', ['class' => 'btn btn-flat btn-success']) }}
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