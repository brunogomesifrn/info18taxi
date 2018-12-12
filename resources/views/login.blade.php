@extends('layout.base')
@section('login')

     <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">LOCAL TAXI  </a>
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
            <li class="nav-item active">
              <a class="nav-link" href="/fazerlogin">Fazer login 
                <span class="sr-only">(current)</span></a>
            </li>
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

    <!-- Page Content -->
    <div class="container">

      <!-- Introduction Row -->
      <h2 class="my-4">
        <small>Faça login em sua conta! </small>
      </h2>
      
<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">


          <form method='post' action="login.php" class="login100-form validate-form flex-sb flex-w">

          <span class="login100-form-title p-b-32">
            Email
          </span>
          <form method='post' action="login.php">
          <div class="wrap-input100 validate-input m-b-36" data-validate = "Email is required">
            <input class="input100" type="text" name="username" >
            <span class="focus-input100"></span>
          </div>
          
          <span class="txt1 p-b-11">
            Senha
          </span>
          <form method='post' action="login.php">
          <div class="wrap-input100 validate-input m-b-12" data-validate = "Senha is required">
            <span class="btn-show-pass">
              <i class="fa fa-eye"></i>
            </span>
            <input class="input100" type="password" name="pass" >
            <span class="focus-input100"></span><br/>

              <div class="flex-sb-m w-full p-b-48">
                <div class="contact100-form-checkbox">
                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                <label class="label-checkbox100" for="ckb1">
                  Lembrar-me
                </label>
                </div>
            <input type="submit" value="Logar">
          </div>
          </form>


          

            <div>
              <a href="#" class="txt3">
                Esqueceu sua senha?
              </a>
            </div>
          </div>

         <!-- <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              Login
            </button>
<<<<<<< HEAD
            
          </div>
=======
          </div> -->


        </form>
      </div>
    </div>
  </div>
 
  </body>
  @endsection