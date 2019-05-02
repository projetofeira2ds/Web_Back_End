<?php
 
// inclui o arquivo de inicialização
require 'init.php';

// resgata variáveis do formulário
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['senha']) ? $_POST['senha'] : '';

// cria o hash da senha
$passwordHash = md5($password);

$PDO = db_connect();

//Query para pegar Id da conta e fazer os proximos select baseado nele
$sql = "SELECT CodUsuario FROM usuario WHERE email = :email AND senha = :password";
$stmt = $PDO->prepare($sql);

$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);

$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC); 


$user = $users[0];
if (count($users) <= 0)
{
    $_SESSION['autenticado'] = false;
    header('Location: index.php?login=erro');
    print_r($stmt->errorInfo());

}else{
    session_start();
    //pega o Id da conta
    $_SESSION['CodUsuario'] = $user['CodUsuario'];	
	$_SESSION['autenticado'] = true;
	header('Location: home.php');
}
?>