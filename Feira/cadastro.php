<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style type="text/css">
    	body{
    		background: url(back-cadastro.png) center;
    		background-size: cover;
    		background-position: center center;
    	}

    	#ui label{
    		color: #000;
    		font-weight: bold;
    	}
    	.form-container{
			border: 1px solid;
			padding: 50px 40px;
			margin-top: 50px;
			-webkit-box-shadow: 5px 9px 23px 15px rgba(232,232,7,1);
			-moz-box-shadow: 5px 9px 23px 15px rgba(232,232,7,1);
			box-shadow: 5px 9px 23px 15px rgba(232,232,7,1);
			border-radius: 10px;	
}
    </style>
    <title>Registro</title>
  </head>
  <body>

  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="quem_somos.php"></a>
      <a class="navbar-brand" href="projeto.php"></a>
      <a class="navbar-brand" href=""></a>
      <a class="navbar-brand" href=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="nova_despesa.php"> <font color="white" face="courier" size="4">Login</font></a>
          </li>
        </ul>
      </div>
    </nav>
    
    <!-- Container -->
    <div class="container opacity">
    	<div class="row">
    		<div class="col-lg-2">
    			
    		</div>
    		<div class="col-lg-8">
    			<div id="ui">
    				<form class="form-group form-container">
    					<div class="row">
    						<div class="col-lg-6">
    							<label>Nome:</label>
    							<input type="text" name="nome" class="form-control" placeholder="Insira seu nome">
    						</div>
    						<div class="col-lg-6">
    							<label>CPF:</label>
    							<input type="text" name="cpf" class="form-control" placeholder="Insira seu CPF">
    						</div>
    					</div>

    					<label>Email</label>
    					<input type="email" name="email" class="form-control" placeholder="Insira seu e-mail" >

    					<div class="row">
    						<div class="col-lg-6">
    							<label>Senha:</label>
    							<input type="password" name="senha" class="form-control" placeholder="Insira sua senha">
    						</div>
    						<div class="col-lg-6">
    							<label>Repita a senha:</label>
    							<input type="password" name="senha" class="form-control" placeholder="Repita sua senha">
    						</div>
    					</div>
    					
    					<div class="row">
    						<div class="col-lg-4">
    							<label>Sexo:</label>
		    					<select class="form-control" name="sexo">
		    						<option value="">--Selecione--</option>
		    						<option value="M">Masculino-</option>
		    						<option value="F">Feminino</option>
		    						<option value="O">Outros</option>
		    					</select>
    						</div>

    						<div class="col-lg-8">
    							<label>Data de nascimento:</label>
    							<input type="text" name="nascimento" class="form-control" placeholder="Ex: 02/12/1998">
    						</div>
    					</div>

    					<div class="row mt-3">
    						<div class="col-3"></div>
    						<div class="col-6">
    							<input type="submit" name="enviar" value="Enviar" class="btn btn-primary btn-lg btn-block">
    						</div>
    						<div class="col-3"></div>
    					</div>
    				</form>
    			</div>
    		</div>
    		<div class="col-lg-2">
    			
    		</div>
    	</div>
    </div>
    <!--  fim Container -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>