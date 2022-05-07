<?php
// abre conexao com o banco
require_once '../BD/conecta_banco.php';
print_r($_POST);
echo "<br><br>";
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$dtnascimento = $_POST["dtnascimento"];
$telcelular = $_POST["telcelular"];
$email =$_POST["email"];
$senha = $_POST["senha"];


//monta sql para o banco de dados ,
$sql = "INSERT INTO usuario (nome,cpf,rg,dt_nascimento,tel_celular,email,senha) VALUES ('". $nome ."','" . $cpf . "','". $rg. "','".$dtnascimento."','". $email ."','" . $senha . "')";

echo $sql;
echo "<br><br>";
$stmt = $conn->prepare($sql);
$stmt->execute();
//header('Location: telaPrincipal.php');
?>