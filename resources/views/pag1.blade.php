@extends('layout.base')
@section('conteudo')
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">LOCAL TAXI </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">    
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Página Inicial
                <span class="sr-only">(current)</span>
              </a>
             <li class="nav-item">
              <a class="nav-link" href="criar%20conta.html">Criar Conta</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="fazerLogin.html">Fazer login </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contato.html">Contato</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="sobre.html">Sobre </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- Page Content -->
    <div class="container">



      <!-- Introduction Row -->


      <h2 class="my-4">Olá,
        <small>Seja Bem-Vindo!</small></h2>

 <p> Nosso site fornece informações sobre o transporte privado da cidade de Goianinha/RN e região, nosso objetivo é fornecer segurança para os usuários, para que possam de forma segura viajar para o seu local de destino. 
  Para mais informaçoes, acesse <a href="sobre.html"> sobre</a>. </p>

	
			 
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
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://www.drivr.es/wp-content/uploads/2017/06/conductor-drivr.png" alt="">
          <h3>Nome do motorista <br/>
            <small>Tipo de serviço</small>
          </h3>
          <p>Descrição do motorista</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://www.drivr.es/wp-content/uploads/2017/06/conductor-drivr.png" alt="">
         <h3>Nome do motorista <br/>
            <small>Tipo de serviço</small>
          </h3>
          <p>Descrição do motorista</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://www.drivr.es/wp-content/uploads/2017/06/conductor-drivr.png" alt="">
          <h3>Nome do motorista <br/>
            <small>Tipo de serviço</small>
          </h3>
          <p>Descrição do motorista</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://www.drivr.es/wp-content/uploads/2017/06/conductor-drivr.png" alt="">
          <h3>Nome do motorista <br/>
            <small>Tipo de serviço</small>
          </h3>
          <p>Descrição do motorista</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://www.drivr.es/wp-content/uploads/2017/06/conductor-drivr.png" alt="">
          <h3>Nome do motorista <br/>
            <small>Tipo de serviço</small>
          </h3>
          <p>Descrição do motorista</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://www.drivr.es/wp-content/uploads/2017/06/conductor-drivr.png" alt="">
          <h3>Nome do motorista <br/>
            <small>Tipo de serviço</small>
          </h3>
          <p>Descrição do motorista</p>
        </div>
      </div>
    </div>
    @endsection