<!DOCTYPE html>

<html lang="pt-br">
    <head> 
        <title>MiniBlog - ProAluno</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">

    </head>

    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <h2 class="navbar-brand">Blog Proluno</h2>

            <button class="navbar-toggler" data-toggler="collapse" data-target="#navegacao">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navegacao"> <!-- Para esconder nossos itens de navegação -->
                <ul class="navbar-nav ml-auto">
                <li class = "nav-item"><a href="index.php" class="nav-link active">Home</a></li>
                    <li class = "nav-item"><a href="views/inscrevase.php" class="nav-link">Inscreva-se</a></li>
                    <li class = "nav-item"><a href="views/logar.php" class="nav-link">Entrar</a></li>
                </ul>
            </div>
        </nav>

        <div class="row">
            <div class=col-md-3></div>
            <div class=col-md-6>
                <div class="card m-5">
                    <div class="card-body">
                        <h2 class="card-title">Bem-vindo ao Blog Proluno!</h2>
                        <p>Escreva o que está pensando diariamente e veja a reação de seus amigos. 
                        Curta, compartilhe e interaja agora mesmo. 
                        Inscreva-se já.</p>
                    </div>
                 </div>
            </div>
            <div class=col-md-3></div>
        </div>

        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="bootstrap4/js/bootstrap.min.js"></script>
    </body>
</html>