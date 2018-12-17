@extends('layout.base')
@section('conteudo')
<center><h2>Cadastrar Motorista</h2></center>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('motoristas_cadastrar') }}</div>

                <div class="card-body">
                    <form method="GET" action="{{ route('motoristas_cadastrar_post') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome:') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF:') }}</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" value="{{ old('cpf') }}" required autofocus>

                                @if ($errors->has('cpf'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cpf') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone:') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('telefone') ? ' is-invalid' : '' }}" name="telefone" value="{{ old('telefone') }}" required autofocus>

                                @if ($errors->has('telefone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telefone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="numero_cnh" class="col-md-4 col-form-label text-md-right">{{ __('Número CNH:') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('telefone') ? ' is-invalid' : '' }}" name="numero_cnh" value="{{ old('numero_cnh') }}" required autofocus>

                                @if ($errors->has('numero_cnh'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('numero_cnh') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="sexo" class="col-md-4 col-form-label text-md-right">{{ __('Sexo:') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('sexo') ? ' is-invalid' : '' }}" name="sexo" value="{{ old('sexo') }}" required autofocus>

                                @if ($errors->has('sexo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sexo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            <div class="form-group row">
                            <label for="tempo_profissao" class="col-md-4 col-form-label text-md-right">{{ __('Tempo de Profissão:') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('tempo_profissao') ? ' is-invalid' : '' }}" name="tempo_profissao" value="{{ old('tempo_profissao') }}" required autofocus>

                                @if ($errors->has('tempo_profissao'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tempo_profissao') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          <div class="form-group row">
                            <label for="categoria" class="col-md-4 col-form-label text-md-right">{{ __('Categoria:') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('categoria') ? ' is-invalid' : '' }}" name="categoria" value="{{ old('categoria') }}" required autofocus>

                                @if ($errors->has('categoria'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('categoria') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!--<div class="form-group row">
                            <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('User ID:') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('user_id') ? ' is-invalid' : '' }}" name="user_id" value="{{ old('user_id') }}" required autofocus>

                                @if ($errors->has('user_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>-->
                        
                        
                    
                        <center><input type="submit" value="Mandar"></center>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

