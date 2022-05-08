<?php


  // abre conexao com o banco
  require_once '../BD/conecta_banco.php';
  print_r($_POST);
  echo "<br><br>";
  $nome = $_POST["nome"];
  $tipoAnimal = $_POST["tipoAnimal"];
  $urlImagem = $_POST['urlImagem'];


  //monta sql para o banco de dados ,
  $sql = "INSERT INTO animais (nome,tipoAnimal,urlImagem) VALUES ('". $nome ."','" . $tipoAnimal . "','". $urlImagem. "')";

  echo $sql;
  echo "<br><br>";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  header('Location: telaPrincipal.php');
  ?>