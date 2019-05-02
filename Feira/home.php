<?php
  require_once 'validador_acesso.php';
  require_once 'init.php';
    $PDO = db_connect();
    $codUsuario = $_SESSION['CodUsuario'];
    $sql = "SELECT SUM(ValorDesp) as totalDesp FROM despesa WHERE CodUsuario = ?";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(1, $codUsuario);
    $stmt->execute();
    $desp = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $despesa = $desp[0];
    if (count($desp) <= 0)
    {

    }else{
        $despesas = $despesa['totalDesp'];
    }
   //----------------------------------------------------------------//
   
   $sql2 = "SELECT SUM(ValorReceita) as totalReceita FROM receita WHERE CodUsuario = ?";
   $stmt2 = $PDO->prepare($sql2);
   $stmt2->bindParam(1, $codUsuario);
   $stmt2->execute();
   $rec = $stmt2->fetchAll(PDO::FETCH_ASSOC);
   $receita = $rec[0];
   if (count($rec) <= 0)
   {

   }else{
       $receitas = $receita['totalReceita'];
   }
   //--------------------------------------------------------------------//
   $saldo = $receitas - $despesas;

?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">

    <style>
      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body style="background-color: #1B1B1B!important;">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark " >
    <a class="navbar-brand" href="#">Aqui vai o logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="nova_despesa.php"> <font color="white" face="courier" size="4">Nova despesa </font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="consultar_despesas.php"> <font color="white" face="courier" size="4">Consultar despesas</font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="todas_despesas.php"> <font color="white" face="courier" size="4">Todas Despesas</font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="nova_receita.php"><font color="white" face="courier" size="4">Nova Receita</font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="consultar_receita.php"><font color="white" face="courier" size="4">Consultar receitas</font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="todas_receitas.php"><font color="white" face="courier" size="4">Todas receitas</font></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item mr-2">
          <a href="logout.php" class="nav-link"><font color="white" face="courier" size="4">Sair</font></a>
        </li>
      </ul>
    </div>
  </nav>

    <div class="container mt-5">    
      <div class="row">
        <div class="jumbotron mt-5 mx-auto bg-primary" style="background-color: #ffffff!important;">
          <h1 class="display-5 text-center text-light "><font color="black" size="7" face="courier" >Saldo em conta </font></h1>
          <hr class="my-4">
          <p class="text-light"><font size="5" color=" #000000" face="courier">Saldo:<? echo $saldo ?></font></p>
        </div>
      </div>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>