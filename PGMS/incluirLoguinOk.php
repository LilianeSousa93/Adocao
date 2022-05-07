<?php


    // abre conexao com o banco
require_once '../BD/conecta_banco.php';

print_r($_POST);
echo "<br><br>";
$login = $_POST["Usuariologin"];
$senha = $_POST["senha"];
$perfil = $_POST["perfil"];
//monta sql para o banco de dados ,
$sql = "select * from usuario where email = '$login' and senha = '$senha' and perfil = '$perfil'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$retorno = $stmt->fetchAll();

if(count($retorno) > 0){
    session_start();
    $_SESSION['userLogado'] = true;

    $teste = $retorno[0]['perfil'];

    $_SESSION['userPerfil'] = $teste;
    header('Location: telaPrincipal.php');
}else{
    $_SESSION['userLogado'] = false;
    header('Location: loguin.php?msg=Usuário senha invalidos');
}

