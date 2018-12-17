@extends('layout.base')
@section('conteudo')




      <!-- Introduction Row -->




 <p> Nosso site fornece informações sobre o transporte privado da cidade de Goianinha/RN e região, nosso objetivo é fornecer segurança para os usuários, para que possam de forma segura viajar para o seu local de destino. 
  Para mais informaçoes, acesse <a href="/sobre"> sobre</a>. </p>

	
			 
			 <!-- animação carrinho -->
   <marquee behavior="alternate" scrolldelay="1">  <img src="img/rock_3.png"> </marquee>
     <!-- mapa -->
	 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15863.880428357348!2d-35.206451777270416!3d-6.267661818906758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1519182233019" width="1100" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
	 <p>
	 
	 </p>
<!-- pesquisar -->

       <p> Pesquise um motorista pelo nome, telefone ou tipo de serviço que você desejar!</p>
 
	  <p align="left" id="pe"> Pesquise: <input class="pesq" type="text" name="pesquisa">
			<input class="botao" type="button" name="pesquisar" value ="Buscar"> </p>
    
	<!-- membros -->
	   </div> 
      <div class="row">
        <div class="col-lg-12">
		 <div class="container">
          <h2 class="my-4">Motoristas Cadastrados</h2>
        </div>
		</div>
    @foreach($motoristas as $m)

        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://www.drivr.es/wp-content/uploads/2017/06/conductor-drivr.png" alt="">
          <h3> {{$m->nome}}<br/>
            <small>Telefone: {{$m->telefone}}</small>
          </h3>
          <p>Categoria: {{$m->categoria}}</p>
          <li> <a href="{{ route('motoristas_avaliacao', ['id' => $m->id]) }}">Avaliar</a></li>
        </div>
  @endforeach
      </div>
    </div>
    @endsection
