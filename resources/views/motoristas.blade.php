@extends('layout.base')
@section('conteudo')
<p>Motoristas Cadastrados:</p>

@if(isset($motoristas))
	<ol>	
		@foreach($motoristas as $m)
		<li>{{ $m->nome }} | <a href="{{ route('motoristas_edit', ['id' => $m->id]) }}">EDITAR</a> | <a href="{{ route('motoristas_destroy_post', ['id' => $m->id]) }}">REMOVER</a></li>
		@endforeach
	</ol>
@else
	<p>Nenhum motorista</p>
@endif



<p><a href="{{ route('form_cadastro_motorista') }}">Cadastrar Motorista</a></p>
@endsection


@section('extra_scripts')

	@if(Session::has('status'))
		<div style="" class="alert alert-success" role="alert">
		  <strong>Sucesso!!</strong> {{ Session::get('status') }}
		</div>
	@endif

@endsection