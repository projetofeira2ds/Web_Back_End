<?php
   require_once 'validador_acesso.php';
?>
 <html>
  <head>
    <meta charset="utf-8" />
    <title>Finans</title>

    <!-- Bootstrap início -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Bootstrap fim -->

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- Script Javascript-->
    <script src="app.js"></script>
    
    <!-- Link Stylesheet -->
    <link rel="stylesheet" href="estilo.css">

  </head>

  <body style="background-color: #1b1b1b!important; height:100%">


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="home.php">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="nova_despesa.php"> <font color="white" face="courier" size="4">Nova despesa</font></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="consultar_despesas.php"> <font color="white" face="courier" size="4">Consultar despesas </font></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="todas_despesas.php"> <font color="white" face="courier" size="4">Todas Despesas </font></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="nova_receita.php"> <font color="white" face="courier" size="4">Nova Receita </font></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="consultar_receita.php"> <font color="white" face="courier" size="4">Consultar receitas </font></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="todas_receitas.php"> <font color="white" face="courier" size="4">Todas receitas </font></a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mr-2">
            <a href="logout.php" class="nav-link"><font color="white" face="courier" size="4">Sair</font></a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col mb-5">
          <h1 class="display-4"> <font face="courier" size="6" color="white"> Registro de nova despesa </font></h1>
        </div>
      </div>

      <form action="CadastrarRD.php?acao=receita" method="post"> 
        <div class="row mb-2">
          <div class="col-md-2">
            <select class="form-control" id="ano" name="ano">
              <option value="">Ano</option>
              <option value="2018">2018</option>
            </select>
          </div>

          <div class="col-md-2">
            <select class="form-control" id="mes" name="mes">
              <option value="">Mês</option>
              <option value="1">Janeiro</option>
              <option value="2">Fevereiro</option>
              <option value="3">Março</option>
              <option value="4">Abril</option>
              <option value="5">Maio</option>
              <option value="6">Junho</option>
              <option value="7">Julho</option>
              <option value="8">Agosto</option>
              <option value="9">Setembro</option>
              <option value="10">Outubro</option>
              <option value="11">Novembro</option>
              <option value="12">Dezembro</option>
            </select>
          </div>
          
          <div class="col-md-2">
            <input type="text" value="" class="form-control" placeholder="Dia" id="dia" name="dia" />
          </div>

          <div class="col-md-6">
            <input type="text" value="" class="form-control" placeholder="Tipo" id="tipo" name="tipo" />
          </div>
            
        </div>

        <div class="row">
          <div class="col-md-8">
            <input type="text" value="" class="form-control" placeholder="Descrição" id="descricao" name="descricao"/>
          </div>

          <div class="col-md-2">
            <input type="text" value="" class="form-control" placeholder="Valor" id="valor" name="valor" />
          </div>

          <div class="col-md-2 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">
              <i class="fas fa-plus"></i>
            </button>
          </div> 
        </div>
      </form>
    </div>


    <div class="wrapper">
      <div class="push"></div>
    </div>  
    <footer class="footer" style="background-color: #000;">
      <div class="row">
        <div class="col-lg-4 my-auto text-center">
          <h5 class="text-uppercase"><font color="#87CEEB">Projeto Feira.</font></h5>
            <p> </p>
        </div>
        <div class="col-lg-4 my-auto">
          <div class="footer-copyright text-center py-3" style="background-color: #000000!important">
            <font color="white">2018 Etec Dr. Emílio Hernandez Aguilar: DS.</font></a>
          </div>
        </div>
        <div class="col-lg-4 text-center">
          <h5 class="text-uppercase" ><font color="#87CEEB">Links</h5>
          <ul class="list-unstyled">
            <li>
              <a href="quem_somos.php"><font color="#87CEEB">Quem somos nós?</font></a>
            </li>
            <li>
              <a href="projeto.php"><font color="#87CEEB">O projeto.</font></a>
            </li>
            <li>
              <a href="#!"><font color="#87CEEB">Etec.</font></a>
            </li>
            <li>
              <a href="dSistemas.php"><font color="#87CEEB">Desenvolvimento de Sistemas.</font></a>
            </li>
          </ul>
        </div>  
      </div>
    </footer>
    
      
  </body> 


</html>