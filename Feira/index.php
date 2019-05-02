<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
      
    </style>
  </head>

  <body style="background-color: #1B1B1B!important;">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <a class="navbar-brand" href="home.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item mr-2">
          <a href="cadastro.php" class="nav-link"><font color="white" face="courier" size="4">Cadastrar</font></a>
        </li>
      </ul>
    </div>
  </nav>

    <div class="container-fluid mt-5">    
      <div class="row">
        <div class="card-login">
          <div class="card">
            <div class="card-header">
             <font face="courier" size="5"> Login </font>
            </div>
            <div class="card-body">
              <form method="post" action="login.php">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="senha" placeholder="Senha">
                </div>
                <button class="btn btn-lg btn-info btn-block"  type="submit" style="background-color: #87CEEB!important;"><font face="courier" color="#000000" size="5"> Entrar </font></button>
              </form>
            </div>
          </div>
        </div>
    </div>   
  </body>
</html>