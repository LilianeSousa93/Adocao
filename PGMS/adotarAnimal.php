<?php

session_start();

if(!$_SESSION['userLogado']){
    header('Location: login.php');
}else{
    //Trazendo animais cadastrados

    require_once '../BD/conecta_banco.php';

    if(!$_GET["id"]){
        header('Location: telaPrincipal.php');
    }

    $id = $_GET["id"];

    $sql = "select * from animais where id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $animal = $stmt->fetchAll();
    $animal = $animal[0];

    $perfil =  $_SESSION['userPerfil'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adotar Animal</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte.min.css" />
    <link rel="stylesheet" href="css/site.css" />
</head>
<body>
    <div class="content m-5">
        <div class="justify-content-md-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="<?= $animal['urlImagem'] ?>"
                                    alt="Animal profile picture" style="width:30%" />
                            </div>

                            <h3 class="profile-username text-center">
                                <?= $animal['nome'] ?>
                            </h3>

                            <p class="text-muted text-center">
                                <?= $animal['tipoAnimal'] ?>
                            </p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <?= $animal['descricao'] ?>
                                </li>
                            </ul>

                            <?php if($perfil == 'Adotar') : ?>
                            <a href="confirmarAdocao.php?id=<?= $animal['id'] ?>" class="btn btn-success btn-block">
                                <b>
                                    <i class="fas fa-check-circle"></i> Confirmar Adoção
                                </b>
                            </a>
                            <?php endif; ?>

                            <a href="telaPrincipal.php" class="btn btn-primary btn-block">
                                <b>
                                    <i class="fas fa-arrow-circle-left"></i> Voltar
                                </b>
                            </a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>