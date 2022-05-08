<?php

session_start();

if(!$_SESSION['userLogado']){
    header('Location: login.php');
}else{
    //Trazendo animais cadastrados

    require_once '../BD/conecta_banco.php';

    $sql = "select * from animais";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $listaAnimalAdocao = $stmt->fetchAll();    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tela Principal</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte.min.css" />
</head>
<body>
    <nav>
        <div class="row">

            <?php if($_SESSION['userPerfil'] == 'Admin') : ?>
            <div class="col-md-12 mb-2">
                <a href="gerenciarUsuario.php" class="btn btn-primary">Gerenciar usuário</a>
                <a href="cadastrarAnimal.php" class="btn btn-primary">Cadastrar animal</a>
            </div>
            <?php endif; ?>

            <!--Percorrendo lista de animais para apresentar na tela-->
            <?php foreach($listaAnimalAdocao as $k=>$animal) : ?>

                <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="card card-widget widget-user shadow">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-info">
                            <!--Pegando valor da lista e mostrando dentro da tag-->
                            <h3 class="widget-user-username">Nome: <?= $animal['nome'] ?></h3>
                            <h5 class="widget-user-desc"><?= $animal['tipoAnimal'] ?></h5>
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle elevation-2" src="<?= $animal['urlImagem'] ?>" alt="User Avatar" />
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-block" value="Adotar" />
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>

            <?php endforeach; ?>
        </div>

    </nav>
</body>
</html>