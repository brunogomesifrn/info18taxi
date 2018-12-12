@extends('layout.base')
@section('contato')
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
            <li class="nav-item ">
              <a class="nav-link" href="/">Página Inicial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/criarconta">Criar Conta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/fazerlogin">Fazer login
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/contato">Contato <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/sobre">Sobre </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Introduction Row -->
      <h2 class="my-4">Dúvidas?
        <small> Nos ajude a melhorar o site!</small>
      </h2>
      <p> Entre em contato conosco para nos informar de erros, reclamações, dúvidas e etc. </p>
         <p> <h6>Facebook:</h6> https://www.facebook.com/localtaxikg</p>
         <p> <h6>Email:</h6> kg@gmail.com</p>
         <p> <h6>Telefone:</h6> 4002-8922</h6></p>
          


 
     
  </body>
   @endsection