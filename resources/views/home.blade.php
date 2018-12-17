@extends('layout.base')
@section('conteudo')
  <img src="img/usuario.png" width="100">
      <h2 class="my-4">Olá {{Auth::user()->name}},
        <small>Seja Bem-Vindo!</small></h2>


 <div class="form-group row mb-0">
     <div class="col-md-6 offset-md-0">
    <button type="submit" class="btn btn-primary">
    <p align="justify-content-center"> <a href="{{ route('motoristas_index') }}"><font color="white">Gerenciar Motoristas</font></a></p>
</button>
</div>
</div>



       
@endsection
