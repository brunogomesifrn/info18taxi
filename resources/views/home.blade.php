@extends('layout.base')
@section('conteudo')
      <h2 class="my-4">Olá {{Auth::user()->name}},
        <small>Seja Bem-Vindo!</small></h2>

        <p><a href="/motoristas">Gerenciar Motoristas</a></p>
@endsection
