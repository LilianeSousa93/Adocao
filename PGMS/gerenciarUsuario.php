<?php

session_start();

if(!$_SESSION['userLogado']){
    header('Location: login.php');
}else{
    //Trazendo animais cadastrados

    require_once '../BD/conecta_banco.php';

    $sql = "select * from usuario";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $listaUser = $stmt->fetchAll();
}

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gerenciar usuario</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte.min.css" />
</head>
<body>
    <a href="cadastroNovoUsuario.php" class="btn btn-primary">Cadastrar Usuário</a>

    <h1 id="formatarTitulo"></h1>
    <table class="table table-hover">
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Login</th>
            <th scope="col">Perfil</th>
            <th>...</th>
        </tr>
        <?php foreach($listaUser as $k=>$usuario) : ?>
        <tr>
            <td>
                <?= $usuario['nome'] ?>
            </td>
            <td>
                <?= $usuario['email'] ?>
            </td>
            <td>
                <?= $usuario['perfil'] ?>
            </td>
            <td scope="row"><a href="editarUsuario.php" class="btn btn-primary">Editar</a></td>
            <td scope="row"><a href="excluirUsuario.php" class="btn btn-danger">Excluir</a></td>
        </tr>
        <?php endforeach; ?>

    </table>
</body>
</html>