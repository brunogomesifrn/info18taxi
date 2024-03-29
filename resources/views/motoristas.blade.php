@extends('layout.base')
@section('conteudo')
<h3>Motoristas Cadastrados:</h3>

@if(isset($motoristas))
	<ol>	
		@foreach($motoristas as $m)
		<li>{{ $m->nome }} <br> <a href="{{ route('motoristas_edit', ['id' => $m->id]) }}">EDITAR</a> ||


		 <a href="{{ route('motoristas_destroy_post', ['id' => $m->id]) }}">REMOVER</a>
		@endforeach
	</ol>
@else
	<p>Nenhum motorista</p>
@endif

<br>
                               
				<div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-0">
                            	<button type="submit" class="btn btn-primary">
	<p><a href="{{ route('form_cadastro_motorista') }}"><font color="white">Cadastrar Motorista</font></a></p>
</button>
</div>
</div>

@endsection


@section('extra_scripts')

	@if(Session::has('status'))
		<div style="" class="alert alert-success" role="alert">
		  <strong>Sucesso!!</strong> {{ Session::get('status') }}
		</div>
	@endif

@endsection
