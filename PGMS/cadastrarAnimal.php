<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de animais</title>
     <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte.min.css" />
</head>
<body>
    <form action="IncluirAnimal.php" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="nome">Nome do animal:</label>
                    <input type="text" class="form-control" placeholder="Nome do animal" name ="nome" />
                </div>
                <div class="form-group">
                                    <label class="col-md-12">Tipo do Animal: </label>
                                    <div class="col-md-12">
                                        <select name="tipoAnimal" class="form-control">
                                            <option value="Cachorro">Cachorro</option>
                                            <option value="Gato">Gato</option>
                                            <option value="Coelho">Coelho</option>
                                        </select>
                                    </div>
                                </div>
                
                <div class="form-group">
                    <label for="UrlImagem">Link Imagem do animal:</label>
                    <input type="text" class="form-control" placeholder="Imagem do animal" name="urlImagem" />
                </div>
                <div class="form-group">
                                    <label class="col-md-12">Descrição: </label>
                                    <div class="col-md-12">
                                        <textarea name="descricao" rows="5" class="form-control"><?= $animal['descricao'] ?></textarea>
                                    </div>
                                </div>
               
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                 <a href="telaPrincipal.php" class="btn btn-primary float-md-right"><i class="fas fa-arrow-circle-left"></i> Voltar</a>
            </div>
                </div>
        </form>
    
</body>
</html>