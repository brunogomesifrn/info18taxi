<!DOCTYPE html>

<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="">

    <title>Local Taxi </title>

    <!-- Bootstrap core CSS -->

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
     <link href="{{asset('css/round-about.css')}}" rel="stylesheet">
    
<style>
    
    body {
      margin: 100px;
      background: url(img/background1.jpg) fixed;
      width: 90%;
      height: auto;
        background-repeat: no-repeat;
        background-size:100%;
        background-size: cover;
        #clear {
        clear:both;
             }
    }   
  </style>
  
  </head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/">LOCAL TAXI </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">    
            <li class="nav-item active">
              <a class="nav-link" href="/">Página Inicial
                <span class="sr-only">(current)</span>
              </a>

              @guest
             <li class="nav-item">
              <a class="nav-link" href="/register">Criar Conta</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/login">Fazer login </a>
            </li>
            @endguest

            @auth
            <li class="nav-item">
              <a class="nav-link" href="/home">Perfil</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="/logout">Logout</a>
            </li>
            @endauth

            <li class="nav-item">
              <a class="nav-link" href="/contato">Contato</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/sobre">Sobre </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

 @yield('conteudo')
  @yield('extra_scripts')

   </body>
 
    <!-- Page Content -->
  
 
  
 <div style="position:fixed;bottom: 0;width:100%;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
      <div class="container-fluid">
        <p> <a class="navbar-brand" href="http://portal.ifrn.edu.br/">IFRN 2017-2018</a></p>
      </div>
    </nav>
  </div>
   
  
  
   </body>
 </html>

