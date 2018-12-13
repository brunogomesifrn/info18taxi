@extends('layout.base')
@section('conteudo')
<p>Cadastrar Motorista</p>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('motoristas_cadastrar') }}</div>

                <div class="card-body">
                    <form method="GET" action="{{ route('motoristas_edit_post') }}">
                        @csrf
                        
                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">ID</label>

                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control" name="id" value="{{ $motorista->id }}" required autofocus>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $motorista->nome }}" required autofocus>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('cpf') }}</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" value="{{ $motorista->cpf }}" required autofocus>

                                @if ($errors->has('cpf'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cpf') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('telefone') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('telefone') ? ' is-invalid' : '' }}" name="telefone" value="{{ old('telefone') }}"  >

                                @if ($errors->has('telefone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telefone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <input type="text" placeholder="numero_cnh" name="numero_cnh">
                        <input type="text" placeholder="sexo" name="sexo">
                        <input type="text" placeholder="tempo_profissao" name="tempo_profissao">
                        <input type="text" placeholder="categoria" name="categoria">
                        <input type="text" placeholder="user_id" name="user_id">

                        <input type="submit" value="Mandar">
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

