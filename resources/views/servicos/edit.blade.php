@extends('adminlte::page')

@section('title', 'Alterar Serviço')

@section('content_header')
    <h1>Alterar Serviço</h1>
@stop

@section('content')
    <form action="{{ route('servicos.update', $servico) }}" method="post">
        @method('PUT')

        @include('servicos._form')
    </form>
@stop
