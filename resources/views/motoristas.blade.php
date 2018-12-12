@extends('layout.base')
@section('conteudo')
<p>Motoristas Cadastrados:</p>

@foreach($motoristas as $m)
<p>{{$m->nome}} | EDITAR | REMOVER</p>
@endforeach


<p><a href="/motorista_cadastrar">Cadastrar Motorista</a></p>
@endsection
