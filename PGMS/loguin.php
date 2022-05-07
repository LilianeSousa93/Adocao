<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoção</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="css/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte.min.css">

    <!--<link rel="stylesheet" type="text/css" href="estilo.css">-->
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAhFBMVEUAAAD////8/PwEBAT5+fnCwsLy8vLZ2dnNzc3z8/Pm5uZMTEzs7Oyenp7IyMjp6elpaWkzMzOsrKzg4OBXV1eRkZEfHx/U1NSLi4u5ublkZGSDg4MpKSlxcXESEhKYmJhFRUV5eXk7OzstLS0YGBhdXV2xsbF9fX04ODhAQEBQUFCdnZ1tJQbJAAAO2ElEQVR4nO1daXerOAw1hqxNmn1r9rZpm7z////GNoEYMKAF2mRO7od3ZtKg+GJ5kSzJwvu/Q/x1A2rHk+Hj48nw8fFk+Ph4Mnx8PBk+Pp4MHx8VMJRSZj7iSzWCq5BSBUPPCwaN/dv08HOYDmeNriQ2rtfub6cvP+fL23I1aV5Fs1GFlrZmH8LGaDbBC+mNLwkhn9vXoIK2cRnqrmpMRRaXNrgDjJJPvh1CRmNZQTeyGKq2td8dTdN4bwMbp4R0h+oB3yVlzGleCF4fNteqZa6m6c++O0ApX/oBhxj90QtB4ZOgM9Qd+JnTgSHmr+XdKL2eS8st9PWXGLrKYOiNc1QLoWTSW2yKRQhxDFiDkaGlS7duRTB/WpcJWeWo+U2MGtIsikSGSkVds18W2yIpgRmC5XhvMpZ/ch+uS1UUQBFGUK0bHY+8OFIZlqhoDF/M8oW8Agn64tIhKyqJIVS7QozdjZPeACFk+LsMvUXZ/JBAyy2kM4LpeYg+kSCxDzfAQRhi4176txgZQgAW14oYqkltjWmZwjGzvVRCGkghH8TZlMAQ3TYhMntU6TXnqC5Ug6J0ba2KoeeV7kJSjVOzfXauP+J0VH97QbI0CAz7OIIG/9JCJgQhF9Kyj2fYI7RNfDZT7/+NIqXxO324RqpXiGWycW2CCF/8/EIfqhliR2icELteQs4b6TWpTvwFhn3MWm/h360TJWkUarzUz9ALPsrb4cTclrIlCsnbHlXJcEVtm61hPZIWaBzrZzgkNs1Xe+cYYypBIfBGFJJhk942cZtrSjwzRVjVzZDx9sVXNNd0GUJOdTMkzvIGb7fXRBeyQ6spjmEHZTWlMDeNU4s2aT8T4bVOhpK0FblhEYoJWEIKnCJVMFyyGrcPhSxYQg7YjRtOS0+sxl1nCYptYqFZJ0M5Z7VtoweiVJYhC+06GXJWQ42uYXjgCcEeR6EY4t0XSZjlmjfRAA4KOAw5672G8QhivKQuYO0LFEOsjy2NpRYCdXTnYVMnQ9ZSLUS4+ca4y13wkaeJKIYHZuMOWsg/phAzX9XEkGz9RjAKxlV1rBWMYoh0lGZg7HyqhRljUSPD4mP7chjDgLcvEuglH8WQbldo+OGOi2H+hkBaFxiGJF9wAtrMf7ljhtxNW8jwUv61P2MY0JzBFrSWVjAOa1sPA55poWYaLYW7baiVYSWrBdkbHGFRH0M5YrbtQ0vh+Qn8Wld89jRozAKmiS/EoEaGXAUz0UP0c4EQO+RJMIrhntk44yfj+euEGGFajGXIs4D90ALmrqpYrzeKIff1m+MnyVxVsQ5TFEOuiyU8m2FuTL9qZCi9H1bbrjEnTAMRe0iKY8ibTK8niDw3xhwaPU5jyPNAjEMhLZaQKZIgkiGvccbBIqXH2t6i8xOQ54e4YLQkRtFC/c0Qgo9VQDLERqPZOEZCXjmvCR0WhWTYYDQujtlqMrrwu2qGGXH0MbS7yYKF+TuBNJ3yGErtVpZO3zJ1MUuEh9JPeNwu/TDcLYc6Np6GvnGzpgi6Kb1HNjeHoZyslqfL+TDdjtup9VVKmiPJt4+MpDZSaGMxGf9n0GmPt9OX8+W0XE1cfZliqFMB1wnn/XBla6vUEyG+cX4i1EeS55pjorGBatcq4UL/WE+8dHpNug8n9sYszBk5JxrnoXIIYowCaUshDuf0YrjS2Y9Rc3zzX8NJqheF/btecIy+nMBhYn2HYCSqF2VbBJIaFpXIMJLe5Jz5If3PMRlUJOzfXeS6msZe/GaCA6Ft59TLp/mj7HO1QDt83No0WtiKajNcuR8xvb+9PUKZTjOnKRTvcvIEf5uXt2MGfYah/iDfCaYFnaLXIpUJi00kyHgeTKwxSkgikFpNfidRNB9bOUQRQ1nqZrrEz3Rxc736bie9Gqvfwy07firIu+wt7+NejLU0R0Wtn7gasDJATzbZ7DWdwI0SofXAGlzb4txA9bf4fUQMIZbfLG7oCZW79uY5MUYJ+YyjvRTRGUCJounmyrCTl1afQPReZA/u3/fFyB2JJk1HgOW0rQdfIcPk57oCXxnCYs12zeg3MCrWysmwRMV/9S0hoJQPX62ecR/C40aP8VjQ5gGsBwoONHsfsDnLNkwk/HDh9daH8gydHG/9AbWACtNcmsAt4PpWIgbhLDqbxhqGY2DWsh8vGWpChZ2wNIqSsAOvCxrQ35pgzPACXqvGcR8CH9CwdE4HqBVWHFCbodIz9+Z7sRDNZml9X6Li4iKGGJP7zfqt1qhoGKm/bACOsaD01Htl20OYOPhwUdQMD5gtyi0iSXpB8Zg/AmLspCzZP5xbSXsPESXui4NqgIAt9reHkomEjY/wUwdG4FS6bk54hha7T78jnFHSMn2IsUb9a9bErRvH7lCwTR9arsPUKcrZcBwzJ9rIeJC1ZohMrk8Ge6j/7PSz8+FI8UMk7WpvhOPMbd3NCkGabh9aS7FnEctsC7sz21B4WZLqAvXGJ2uvMjq6A/SwlnNLMcTGRpwd1QPUrN9ejWfr2XhlvHOEdF39SNBajffrZX/1OnALkV7GcVEIXy2JAh+FhYzRrRRo/87JE/igUUq6cVVAe8vnUuCPBNG5VRVihmuqjqAS+AAefJJjDgijFR/lsBL4ICxkwkP+okFgiI/D7gtCnhW2ZYNF46u/3A7fppeXl8tpeDRz7oBQIIEQ7nIUcFskBiR07tr61mo5zduF7N6P0ckPlCsho2gqCDkUgHQA1eTmYg8xA0bfqy6YJMEZPRKEQ11AoHVnFbLzS5x+4R9/ZsD4A0LO1FwQvOv5DMNz4+ZqiJb6vm955VtZwuHxjnJUlr/k6wZOZsTQvMM4KFNWAkO/WoZKj06hWBLms5JJjMSQ8MKdDI2CtdnpIttuUS1PkpYScpnyxqGut8tOHBLrgn4kzDSfghAW4bbcTKlcYnmeCOHDGc9FDMJqsREEvcoauEqx2ImTFn4aOdE8hNpELwJZ20/D9dNnroJaUIKGTedgJOzatgIff7/L/vIeWOsTBiPIPWHj58W9+EK/+4v9k3oKLat1TMM6cGwADmgxXwJfhyPhitIRHNyErxwcJllNxcfhLAQ+MTRVyIhbhiAHvu/a4qNjxP1AeAfsQ7epVAICHFgYpxUVPZkePIF1fdgmvuQFDZfBd/iEsMv3TDHEDsRjNDp0Wf9hhYtEzq8lgQ2+XSiGHWQT42GoFIidW1+OY3K6QTrO/I4+mcE0U9kiVtQHYbeAhJpvjolTZGTc5tDzhCmaC37Mj+IDZVhO+BcYmtXJjhXCoGEYBoiIUT8yLKTkJ4NCsbcVFWVejFQzhcTl+kTBzAG74BAUfqr27AHxYD88A0btZ+N5hlMaEI2WZRZjtpl6BJtwBeihnHUCLHHHXExsrAPlAJ6ZZOKMDMMmeGcZ6wsjKQQPE8EVr8Lg4TFvxgyBtRpNSoH0+OUFCbDjxA+QB3z/muYmwnkRaOlHjtsOJ4eNBN86lwVtTnV33CL3AuCONs5YWda/EqZxK2EL3e1Pbgw1GqX3vfjXOyYkN9GSiJVlZwxLXrBvBU3HkexlU4cvPjoRQ3Z5Ego2EUNprsYohG/CGRMMg/Is5s9u+BO42LmqYCaOK0OdulTs5o3DZ71EvsUpf3DpXr8ZvmzHNg2b2w7cDJQiRbVO4mOGJfcbjbrxFv/X9qNpWKl5sjgy1c40TWQF5btc3pp6xjX4k2kmxMBubCd/Nkg4P+zcNelNDmnHp/k/P04RlxJ3/02V0BHKdp6gNDfSZb5k5aFlGOpQw77D5zrsxu8kwKUQVAn9s1YyvjZQBw7jfTdOBUUm+1C7Xr6SE8l8mYgQxKcrVQZNsWs11mT5zZJb6pevzEGyK0u229+G8Qu76aydDCflF6Xj4ZI5JZbt2TTUu8227wq5yzIMFz0ZdIJ0irTU6UB/1oXC9GI/yVB6t9YmG1vUhwUxTKB0nDopqkWxknz8XIq8+jSVAH07GYoht0BuFZjXVrFcVlBzrxJgiw5gGHJubagOn8iBCNdSGXzcAUPfugmkYoaUC+XqwaE2hn9kNGWBKyQM19I/tClSONbEkF2HuzLg5ho4Q3aJ3arg49QUzLB9BxNphGMtDFklyCrGJ6buHpQhux57pcDcKwtl+BcexHz0a2D4Zw42J6Y1MKwldI2Mz0yxFDZD+Anj7wBRPRHI8H42NCEQlwQCGdYUnkeGI1WXyZBXSL16IOq0Ahne10STure1CobyLvwXFnZwbw2MIfGa4xoBT7eGMeTeJFY94Cn/MIbUO5jrA/xKJBhD3rWTdQB+2QyM4a8HCJXiyfDJMI37G4dVzzT3N5dWvVrc33pY9Yp/d3sa31EUmsXwPs7VLCBqcwBtC/Z1cBUjp2Aog+G92YfVW8Dca6iqRvVejHtbLhC1qqDeRO6lctXiB04QzPB+ztY0ljV4hDHpXzbCwhsvs3F70u0Oer1ud9JqrPbbs+AEH2HKjUEZdkhVUEIWb67zvgXj7qiPgqqvRIbSAxWYdmI7iaIeQ1HXYPHUNQwI+FbZ7coYerStqa7HX+R/b+HqgsdA3fEIP+WmZMSeWkU1dQrKehZimCuRxxB1dGGCp4trtIbKKvu4MkA++iJSROTeNyabVme3wgZLF3uFwLa2iCFc+dc3nb5QXkZYB+yuELaZr2/TqSnaRN/wAcrh01/awP0oujjYVsD1A3u1HCq+FFp+wQcXEY5INsC7QnRdStztgLAhM3TU/y0WHHgBcFu46dUaBe01f4qUKfzThljB1VzjU7Y67vAlipG3knVKqyXll7Eqhtk2lQ5G5M3xGkiGsllcsWzbxennTbDe2LVKDmJ3mEihCNib5TypB4yDo7lPqHALA8Eq98YL9emcVKMZzVDttHKWryncD52HnMSrECe4B9EGvg8Dr+ma96Zt5ATqFK4Xx5yquH0PnUxiQOhDhe4ylVD1D3mleyF6s9A965sNa7hrXdM60KMyVNrUWIYJVf75OE5fV8dDWAHVfoEfywFdP0gMr1eiNHuDQQ97xTJIvPqntxhvp4efw/T7qxV4jBFA68NHwpPh4+PJ8PHxZPj4eDJ8fDwZPj6eDB8fT4aPj/8A77fGlv9IT7AAAAAASUVORK5CYII=" alt="pata" width="100" height="111">
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Digite seus dados para realizar o login</p>

                <form action="incluirLoguinOk.php" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="Usuariologin">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Senha" name="senha">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <label>Perfil</label>
                        <div class="col-12">
                            <select name="perfil" class="form-control">
                                <option value="Admin">Administrador</option>
                                <option value="Adotar">Adotador</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mb-0">
                    <a href="cadastroNovoUsuario.php" class="text-center">Cadastra-se</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>

    <!--<h1>Viralata:Sistema de adoção de Animais</h1>
        <h2>Loguin do usuário</h2>
    <form action="IncluirLoguinOK.php" method="post">
        <label for="login">Login:</label>
        <input type="text" class="form-control" id="login" placeholder="login" name="Usuariologin">
        <br><br>
        <label for="pwd">Senha:</label>
        <input type="password" class="form-control" id="pwd" placeholder="senha" name="senha">
        <br><br>
        <button type="submit">Entrar</button>
    </form>

     <p><a href="cadastroNovoUsuario.php"> Realizar cadastro</a></p>-->
    <!-- jQuery -->
    <script src="js/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="js/adminlte.min.js"></script>

</body>
</html>