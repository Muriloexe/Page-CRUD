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
    <link rel="stylesheet" href="/assests/php/conexao.php">
    <?php
    include "conexao.php";
    //include "funcoes.php";
    ?>
    <!--
        Função para validação do formulário
    -->
    <script>

    //função pra validar
    function validacao(){

    if(document.form.nome == ''){
        alert('Preencha o campo faltante');
                document.form.nome.focus();
        }else if(document.form.email == ''){
            alert('Preencha o campo faltante');
                document.form.email.focus();
        }else if(document.form.endereco == ''){
            alert('Preencha o campo faltante');
                document.form.endereco.focus();
        }else if(document.form.telefone == ''){
            alert('Preencha o campo faltante');
                document.form.telefone.focus();
        }else{
                document.form.action='./funcoes.php';
                document.form.submit();
            }
            return false;
         //Função que volta para tela original após o envio dos dados do formulário
    }
    </script>

<title>Crud</title>
</head>
<body>

    <header>
        <div id="divheader">
            <h1>
                CRUD
            </h1>
                <h3>
                <?php echo 'Login efetuado no dia ' . date('d/m/y') . ' no horário ' . date('H:i:s');?>
                </h3>
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
    <form method="post" id="form">
        <fieldset>
            <legend>Cadastro</legend>
                Insira os dados abaxio para se cadastrar:
                <br>
                    Nome: &nbsp <input type="text" name="nome" id="nome">
                    <br>
                    Senha: &nbsp <input type="password" name="senha" id="senha">
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