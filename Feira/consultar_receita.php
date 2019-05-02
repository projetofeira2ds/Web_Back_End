<?php
	 require_once 'validador_acesso.php';
	 require_once 'init.php';
   $PDO = db_connect();
   $codUsuario = $_SESSION['CodUsuario'];
   	$sql = "SELECT CodReceita, ValorReceita, Descricao, TipoDaReceita, Ano, Dia, Mes, StatusReceita FROM Receita WHERE CodUsuario = $codUsuario AND CodStatus = 1";
		$stmt = $PDO->query($sql) or die($PDO->erorr);
?>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>

		<link rel="stylesheet" href="estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<script>
			function editar1(id, txt_tarefa){
				//criar um form de edição
				let form = document.createElement('form');
				form.action = 'tarefa_controller.php?acao=atualizarIndex';
				form.method = 'post';
				form.className = 'row';
				//criar um input para entrada do texto
				let inputTarefa = document.createElement('input');
				inputTarefa.type = 'text';
				inputTarefa.name = 'tarefa';
				inputTarefa.className = 'col-9 form-control';
				inputTarefa.value = txt_tarefa;

				//criar um input hidden para guardar o id da tarefa;
				let inputId = document.createElement('input');
				inputId.type = 'hidden';
				inputId.name = 'id';
				inputId.value = id;
				//criar um button para envio do form
				let button = document.createElement('button');
				button.type = 'submit';
				button.className = 'col-3 btn btn-info';
				button.innerHTML = 'Atualizar';

				//incluir o input tarefa no form
				form.appendChild(inputTarefa);

				//incluir o inpuId no form
				form.appendChild(inputId);

				//incluir o button
				form.appendChild(button);

				//selecionar a div tarefa
				let tarefa = document.getElementById('tarefa_' + id);
	
				//limpar o texto da tarefa para inlusão do form
				tarefa.innerHTML = '';

				//inclusão do form na página
				tarefa.insertBefore(form, tarefa[0]);
			}

			function remover2(id){
				location.href = 'todas_tarefas.php?acao=removerIndex&id='+id;
			}

			function marcarRealizada2(id){ 
				location.href = 'todas_tarefas.php?acao=marcarRealizadaIndex&id='+id;
			}
		</script>
	</head>

	<body style="background-color: #1b1b1b!important;">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="home.php">Home</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
				<a class="nav-link" href="nova_despesa.php"> <font color="white" face="courier" size="4">Nova despesa </font></a>
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

		<div class="container app mt-5">
			<table class="table table-white">
				<thead class="thead-dark">
					<tr>
					<!--<th scope="col">Tipo</th>-->
					<th scope="col">Descrição</th>
					<th scope="col">Valor</th>
					<th></th>
					<th></th>
					</tr>
				</thead>
				<?php while($dado = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>
				<tbody class="bg-white">
					<tr>
					<!--<td scope="row"><? //echo $dado['TipoDaReceita']?></td>-->
					<td scope="row"><? echo $dado['Descricao'] ?> (<? echo $dado['StatusReceita'] ?>)</td>
					<td><? echo $dado['ValorReceita'] ?></td>
					<td><a href="#" class="fas fa-check" style="color: black"></a></td>
					<td><a href="#" class="fas fa-trash-alt" style="color: black"></a></td>
					</tr>
				</tbody>
				<?php } ?>
			</table>
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