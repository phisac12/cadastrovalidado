<?php
//Sessão
session_start();
//Conexão
require_once 'db_connect.php';

$user = $_POST['user'];
$senha = md5(sha1($_POST['pass'].'Vesomemo'));
$email = $_POST['email'];
$idade = $_POST['idade'];


$sql = "INSERT INTO users (login, senha, email, idade) VALUES ('$user', '$senha', '$email', '$idade')";

if($conexao->query($sql)){
    echo "<script>window.location='../home.php';alert('$user, seu cadastro foi realizado com sucesso!');</script>";
    $_SESSION['isaac'] = "souza";

}else{
    echo "<script>window.location='cadastro.php';alert('$user, ocorreu algum erro tente novamente em breve');</script>";

}

$conexao->close();

?>