<?php
// abre conexao com o banco
require_once '../BD/conecta_banco.php';
print_r($_POST);

$nome = $_POST["nome"];
$tipoAnimal = $_POST["tipoAnimal"];
$id = $_POST["id"];
$urlImagem = $_POST["urlImagem"];
$descricao = $_POST["descricao"];


//monta sql para o banco de dados ,
$sql = "update animais set nome = '$nome', tipoAnimal = '$tipoAnimal', urlImagem = '$urlImagem', descricao = '$descricao' where id = $id";

echo $sql;
$stmt = $conn->prepare($sql);
$stmt->execute();
header('Location: telaPrincipal.php');
?>