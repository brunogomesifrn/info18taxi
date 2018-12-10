@extends('layout.base')
@section('sobre')
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">LOCAL TAXI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Página Inicial
              </a>
             <li class="nav-item">
              <a class="nav-link" href="/criarconta">Criar Conta</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/fazerLogin.html">Fazer login </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contato">Contato</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/sobre">Sobre 
                <span class="sr-only">(current)</span>
            </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  
      <!-- Introduction Row -->
       <div class="container">
      <h2 class="my-4">Local Taxi,
        <small> saiba um pouco sobre nós!</small>
      </h2>
        <p> O Local Taxi visa facilitar a vida dos moradores de Goianinha e região que dependem de<br/>
          táxis e alternativos para se locomover, proporcionando uma viagem mais segura já que os 
          passageiros poderão saber quem será seu motorista antes mesmo de embarcar no veiculo. </p>
      <p> Esse projeto foi desenvolvido por Giovanna S. Farias, Karolayne B. da Silva, Ivanaldo T. Junior 
          e Juliano C. Trajano, alunos do IFRN-Campus Canguaretama para a disciplina de Autoria Web com <br/>
          orientação do professor Bruno Gomes.</p>

          <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-3">
          <div class="card">
            <img class="card-img-top" src="img/gio.jpg" width="400px" height= "400px">
            <div class="card-body">
              <h4 class="card-title">Giovanna Souza</h4>
              <p class="card-text">Aluna do 4o ano de Informática, no IFRN-Canguaretama.</p>
            </div>
            <div class="card-footer">
              <a href="https://www.instagram.com/giovannafarias_/" class="btn btn-primary">Entre em contato!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3">
          <div class="card">
            <img class="card-img-top" src="img/karol.jpg"  width="400px" height= "400px">
            <div class="card-body">
              <h4 class="card-title">Karolayne Belo</h4>
              <p class="card-text">Aluna do 4o ano de Informática, no IFRN-Canguaretama..</p>
            </div>
            <div class="card-footer">
              <a href="https://www.instagram.com/karolbello_/" class="btn btn-primary">Entre em contato!</a>
            </div>
          </div>
        </div>

         <div class="col-lg-3 col-md-6 mb-3">
          <div class="card">
            <img class="card-img-top" src="img/ivan.jpg"  width="400px" height= "400px">
            <div class="card-body">
              <h4 class="card-title">Ivanaldo Tertuliano</h4>
              <p class="card-text">Aluno do 4o ano de Informática, no IFRN-Canguaretama..</p>
            </div>
            <div class="card-footer">
              <a href="https://www.instagram.com/ivanaldotj/" class="btn btn-primary">Entre em contato!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3">
          <div class="card">
            <img class="card-img-top" src="img/juliano.jpg"  width="400px" height= "400px">
            <div class="card-body">
              <h4 class="card-title">Juliano Camilo</h4>
              <p class="card-text">Aluno do 4o ano de Informática, no IFRN-Canguaretama..</p>
            </div>
            <div class="card-footer">
              <a href="https://www.instagram.com/julianoo.c/" class="btn btn-primary">Entre em contato!</a>
            </div>
          </div>
        </div>

       



  
  </body>
    @endsection