<?php
//nova conexão:

$conexao = mysqli_connect ('localhost', 'root', '','users');

//validacao da conexao:

if($conexao){
}else{
    die('Problema de conexão: '.mysqli_connect_error($conexao)); //possível erro
}

$db_selected = mysqli_select_db($conexao,'users');
	if (!$db_selected)
	{
		die ('Erro ao abrir o banco users : ' . mysqli_error($conexao));
    }

//processo de conexão

//teste
/*$insercao = "insert into users (nome, email, endereco, telefone, senha, adm) values ('Maria', 'maria@gmail.com', 'Rua C', 11987654321, 'Maria123', 0)";
mysqli_query($conexao, $insercao) or die ("Não foi possível executar a inserção de dados na tabela"); */
//$selecionar = "select * users where id='1'";
//mysqli_query($conexao, $selecionar) or die ("Não foi possível executar o seguinte comando");
?>
