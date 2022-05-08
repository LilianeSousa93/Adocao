<?php

if($_SESSION['userLogado']){
    header('Location: login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adoção</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte.min.css" />

    <!--<link rel="stylesheet" type="text/css" href="estilo.css">-->
</head>
<body>

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Cadastro de Usuário</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="IncluirNovoUsuarioOk.php" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="email" class="form-control" placeholder="Nome" />
                </div>
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" placeholder="cpf" name="cpf" />
                </div>
                <div class="form-group">
                    <label for="rg">RG*:</label>
                    <input type="text" class="form-control" placeholder="rg" name="rg" />
                </div>
                <div class="form-group">
                    <label for="Data Nascimento">Data Nascimento*:</label>
                    <input type="text" class="form-control" placeholder="Data de Nascimento" name="dtnascimento" />
                </div>
                <div class="form-group">
                    <label for="telcelular">Telefone Celular*:</label>
                    <input type="text" class="form-control" placeholder="Telefone Celular" name="telcelular" />
                </div>
                <div class="form-group">
                    <label for="E-mail">E-mail*:</label>
                    <input type="text" class="form-control" id="email" placeholder="E-mail" name="email" />
                </div>
                <div class="form-group">
                    <label for="senha">Senha*:</label>
                    <input type="password" class="form-control" placeholder="senha" name="senha" />
                </div>
                <div class="form-group">
                    <label>Perfil</label>
                    <div class="col-12">
                        <select name="perfil" class="form-control">
                            <option value="Admin">Administrador</option>
                            <option value="Adotar">Adotador</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Cadastro</button>
                <a href="gerenciarUsuario.php" class="btn btn-primary float-md-right"><i class="fas fa-arrow-circle-left"></i> Voltar</a>
            </div>
        </form>
    </div>

</body>
</html>