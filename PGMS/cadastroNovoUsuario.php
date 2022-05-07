<?php

if($_SESSION['userLogado']){
    header('Location: loguin.php');
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
            </div>
        </form>
    </div>


    <!--<h1>Viralata:Sistema de adoção de Animais</h1>
    <h2>Cadastro de Pessoa Física</h2>
<form action="IncluirNovoUsuarioOk.php" method="post">
<label for="nome">Nome*:</label>
<input type="text" class="form-control" id="nome" placeholder="nome" name="nome">
<br><br>
<label for="cpf">CPF:</label>
<input type="text" class="form-control" id="cpf" placeholder="cpf" name="cpf">
<br><br>
<label for="rg">RG*:</label>
<input type="text" class="form-control" id="rg" placeholder="rg" name="rg">
<br><br>
<label for="Data Nascimento">Data Nascimento*:</label>
<input type="text" class="form-control" id="dtnascimento" placeholder="Data de Nascimento" name="dtnascimento">
<br><br>
<label for="telcelular">Telefone Celular*:</label>
<input type="text" class="form-control" id="telcelular" placeholder="Telefone Celular" name="telcelular">
<br><br>
<label for="cep">CEP:</label>
<input type="text" class="form-control" id="cep" placeholder="Cep" name="cep">
<br><br>
<label for="rua">Rua:</label>
<input type="text" class="form-control" id="rua" placeholder="Rua" name="rua">
<br><br>
<label for="numero">Numero:</label>
<input type="text" class="form-control" id="numero" placeholder="Número" name="numero">
<br><br>
<label for="complemento">Complemento:</label>
<input type="text" class="form-control" id="complemento" placeholder="complemento" name="complemento">
<br><br>
<label for="bairro">Bairro:</label>
<input type="text" class="form-control" id="bairro" placeholder="bairro" name="bairro">
<br><br>
<br><br><label for="E-mail">E-mail*:</label>
<input type="text" class="form-control" id="email" placeholder="E-mail" name="email">
<br><br>
<label for="senha">Senha*:</label>
<input type="password" class="form-control" id="pwd" placeholder="senha" name="senha">
<br><br>
<button type="submit">Realizar Cadastro</button>
    </form>-->


</body>
</html>