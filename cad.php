<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu cadastro foi concluído</title>
    
    <?php
    include "conexao.php";?>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    
    </header>
                <main>
                    Faça <a href="Login.php"><button>Login</button></a>
                    <?php
                    $n = $_GET["nome"];
                    $e = $_GET["email"];
                    $en = $_GET["endereco"];
                    $t = $_GET["telefone"];
                    $s = $_GET["senha"];
                    ?>
                </main>
                
    <footer>
    </footer>
</body>
</html>