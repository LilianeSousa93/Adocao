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
                    <form action="atualizarAnimal.php" method="post">
                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="col-md-12">Nome: </label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Nome do animal" name="nome" value="<?= $animal['nome'] ?>" required />
                                        <input type="hidden" name="id" value="<?= $animal['id'] ?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Tipo do Animal: </label>
                                    <div class="col-md-12">
                                        <select name="tipoAnimal" class="form-control" required>
                                            <option value="Cachorro" <?= $animal['tipoAnimal'] == 'Cachorro' ? 'selected' : '' ?>>Cachorro</option>
                                            <option value="Gato" <?= $animal['tipoAnimal'] == 'Gato' ? 'selected' : '' ?>>Gato</option>
                                            <option value="Coelho" <?= $animal['tipoAnimal'] == 'Coelho' ? 'selected' : '' ?>>Coelho</option>
                                            <option value="Peixe" <?= $animal['tipoAnimal'] == 'Peixe' ? 'selected' : '' ?>>Peixe</option>
                                            <option value="Rato" <?= $animal['tipoAnimal'] == 'Rato' ? 'selected' : '' ?>>Rato</option>
                                            <option value="Papagaio" <?= $animal['tipoAnimal'] == 'Papagaio' ? 'selected' : '' ?>>Papagaio</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Link Imagem do animal: </label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="urlImagem" value="<?= $animal['urlImagem'] ?>" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Descrição: </label>
                                    <div class="col-md-12">
                                        <textarea name="descricao" rows="5" class="form-control"><?= $animal['descricao'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input class="btn btn-primary" value="Salvar edição" type="submit" />
                                <a href="telaPrincipal.php" class="btn btn-primary float-md-right"><i class="fas fa-arrow-circle-left"></i> Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>