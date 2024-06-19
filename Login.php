<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--
        Conexão com css
    -->
    <link rel="stylesheet" href="/assets/css/css.css">

    <!--
       Importando a fonte
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <!-- 
        Importando o PHP
    -->
    <link rel="stylesheet" href="/assests/css/style.css">
   

<title>CRUD</title>
</head>
<body>

    <header>
        <div id="divheader">
            <h1>
                CRUD
            </h1>
        </div>
    </header>

        <div id="left-bar">
            <button id="create">
                Create
            </button>

            <button id="read">
                Read
            </button>

            <button id="Update">
                Update
            </button>

            <button id="delete">
                Delete
            </button>

        </div>

        <div id="principal">
                <div id="content">
                        <form method="post" id="form" action="login.php">
                            <fieldset>
                                <legend>Cadastro</legend>
                                    Insira os dados abaxio para se cadastrar:
                                    <br>
                                        <label for="nome">Nome</label>
                                        <input type="text" name="nome" id="id_nome">
                                            <br>
                                        <label for="senha">Senha</label> 
                                        <input type="password" name="password" id="password">
                                                        <br>
                                            <button type="submit" value="Login">Login</button>
                            </fieldset>
                        </form>
    
                </div>

        </div>

    <footer>

    </footer>
</body>
</html>