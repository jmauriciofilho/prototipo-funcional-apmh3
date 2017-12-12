@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')
    <h1>Tabela de Usuários</h1>
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Informações dos usuários cadastraos</h3>
        </div>
        <div class="panel-body">
            <table id="example" class="table table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{!! $user->name !!}</td>
                            <td>{!! $user->lastName !!}</td>
                            <td>{!! $user->email !!}</td>
                            <td></td>
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