<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-language" content="pt-br">
    <link href="scripts/bootstrap5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style_index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>TELA LOGIN</title>
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="scripts/bootstrap5/js/bootstrap.min.js"></script>
    <main>
    <div class="container">
                <div class="row justify-content-center row-cols-1 row-cols-2 mb-2 text-center">
                    <div class="col-md-6">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-reader py-3">
                                <b>Login</b>
                            </div>
                            <div class="card-body">
                            <form action="login.php" method="POST">
                                <input type="text" class="form-control" name="usuario" placeholder="Usuário" required/>
                                <br>
                                <input type="password" class="form-control" name="senha"placeholder="Senha" required/>
                                <br>
                                <button type="submit" class="btn btn-lg btn-outline-success mb-3">Entrar</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
</body>
</html>