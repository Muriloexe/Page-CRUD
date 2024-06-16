<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <?php
include "conexao.php";
?>
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
                    <h3><a href="Login.php">Entrar</a></h3>
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
                                Email: &nbsp <input type="email" name="email" id="email">
                                <br>
                                    Endereco:<input type="text" name="endereco" id="endereco">
                                    <br>
                                        Telefone:<input type="number" name="telefone" id="telefone">
                                        <br>
                                            <br>
                                                <button type="submit">Enviar</button>
                </fieldset>
            </form>
        </div>
    </div>
    
</body>
</html>