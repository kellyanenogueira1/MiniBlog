<html lang="pt-br">
    <head> 
        <title>MiniBlog - Proluno</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">

    </head>

    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <h2 class="navbar-brand">Blog ProALuno</h2>

            <button class="navbar-toggler" data-toggler="collapse" data-target="#navegacao">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navegacao"> <!-- Para esconder nossos itens de navegação -->
                <ul class="navbar-nav ml-auto">
                    <li class = "nav-item"><a href="../index.php" class="nav-link">Home</a></li>
                    <li class = "nav-item"><a href="inscrevase.php" class="nav-link">Inscreva-se</a></li>
                    <li class = "nav-item"><a href="logar.php" class="nav-link active">Entrar</a></li>

                </ul>
            </div>
        </nav>

        <div class="row">
            <div class="col-md-4"></div>

            <div class="col-md-4">
                <form class="m-5">
                    <h4>Faça Login.</h4>
                    <div class="form-group">
                        <label for="usuario">Usuário:</label>
                        <input class="form-control" type="text" id="usuario" placeholder="Digite seu usuário" required="requiored">
                    </div>
                                
                    <div class="form-group">
                        <label for="usuario">Senha:</label>
                        <input class="form-control" type="password" id="senha" placeholder="Digite sua senha" required="requiored">
                    </div>
                
                    <div class="form-group">
                        <input class="btn btn-outline-dark btn-block" type="submit" value="Entrar">
                    </div>
                
                </form>
            </div>

            <div class="col-md-4"></div>
        </div>
        

        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="../bootstrap4/js/bootstrap.min.js"></script>
    </body>
</html>