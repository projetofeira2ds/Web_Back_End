<?php

    require_once 'init.php';
    $PDO = db_connect();

    session_start();
    $id = isset($_GET['id']) ? $_GET['id'] : $acao;
    echo $id;
    
    $sql = "delete FROM despesa WHERE CodDespesa = ?";
	$stmt = $PDO->prepare($sql);
	$stmt->bindValue(1, $id);
    
    if($stmt->execute()){
        header('Location: todas_despesas.php');
    }else{
        header('Location: home.php?errou');
        print_r($stmt->errorInfo());
    }

?>