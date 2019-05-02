<?php

require_once 'init.php';

session_start();
$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
echo $acao;

if($acao == 'receita'){
    //Pega os dados do formulário
    $ano = isset($_POST['ano']) ? $_POST['ano'] : null;
    $mes = isset($_POST['mes']) ? $_POST['mes'] : null;
    $dia = isset($_POST['dia']) ? $_POST['dia'] : null;
    $tipo =  isset($_POST['tipo']) ? $_POST['tipo'] : null;
    $descricao = isset($_POST['descricao']) ? $_POST['descricao'] : null;
    $valor = isset($_POST['valor']) ? $_POST['valor'] : null;
    $codCategoria = 1;
    $codUsuario = $_SESSION['CodUsuario'];
    $codStatus = 1;
    $statusReceita = 'pendente';


    // insere no banco
    $PDO = db_connect();
    $sql = "INSERT INTO Receita(Ano, Mes, Dia, TipoDaReceita, ValorReceita, CodCategoria, CodStatus, CodUsuario, Descricao, StatusReceita)VALUES(?,?,?,?,?,?,?,?,?,?)";
    $stmt = $PDO->prepare($sql);                                                                                                          

    $stmt->bindValue(1, $ano);
    $stmt->bindValue(2, $mes);
    $stmt->bindValue(3, $dia);
    $stmt->bindValue(4, $tipo);
    $stmt->bindValue(5, $valor);
    $stmt->bindValue(6, $codCategoria);
    $stmt->bindValue(7, $codStatus);
    $stmt->bindValue(8, $codUsuario);
    $stmt->bindValue(9, $descricao);
    $stmt->bindValue(10, $statusReceita);

    if($stmt->execute()){
        header('location: home.php?deu');
    }else{
        //header('location: nova_receita.php?erro');
        print_r($stmt->errorInfo());
    }
}else if($acao == 'despesa'){
    //Pega os dados do formulário
    $ano = isset($_POST['ano']) ? $_POST['ano'] : null;
    $mes = isset($_POST['mes']) ? $_POST['mes'] : null;
    $dia = isset($_POST['dia']) ? $_POST['dia'] : null;
    $tipo =  isset($_POST['tipo']) ? $_POST['tipo'] : null;
    $descricao = isset($_POST['descricao']) ? $_POST['descricao'] : null;
    $valor = isset($_POST['valorDesp']) ? $_POST['valorDesp'] : null;
    $codCategoria = 2;
    $codUsuario = $_SESSION['CodUsuario'];
    $codStatus = 1;
    $statusReceita = 'pendente';

    // insere no banco
    $PDO = db_connect();
    $sql = "INSERT INTO Despesa(Ano, Mes, Dia, TipoDaDespesa, ValorDesp, CodCategoria, CodStatus, CodUsuario, Descricao, StatusDespesa)VALUES(?,?,?,?,?,?,?,?,?,?)";
    $stmt = $PDO->prepare($sql);                                                                                                          

    $stmt->bindValue(1, $ano);
    $stmt->bindValue(2, $mes);
    $stmt->bindValue(3, $dia);
    $stmt->bindValue(4, $tipo);
    $stmt->bindValue(5, $valor);
    $stmt->bindValue(6, $codCategoria);
    $stmt->bindValue(7, $codStatus);
    $stmt->bindValue(8, $codUsuario);
    $stmt->bindValue(9, $descricao);
    $stmt->bindValue(10, $statusReceita);

    if($stmt->execute()){
        header('location: home.php?deu');
    }else{
        //header('location: nova_despesa.php?erro');
        print_r($stmt->errorInfo());
    }
}


?>