<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <link rel="stylesheet" href="assets/js/bootstrap.bundle.min.js">
     <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

        <title>Cadastro</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cadastro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="index.php">Página do usuário</a>
                <a class="nav-link" href="cad.php">Cadastro</a>
                <a class="nav-link" href="#">Ler</a>
            </div>
            </div>
        </div>
        </nav>
    </header>

    <section class="main">

        <div class="container">
            <div clasa="row">
                <div class="col mt-5">
                <?php
                    include 'conexao.php';
                    switch(@$_REQUEST["page"]){
                        case "novo" :
                            include "cad.php";
                        break;
                        case "salvar" :
                            include 'salvar-cad.php';
                            break;
                        default:
                        echo '<h1>Bem vindo, caso tenha cadastro é só realziar o <a href="login.php"> Login </a><h1>';
                    }

                ?>
                </div>
            </div>
        </div>

    </section>


  </body>
</html>