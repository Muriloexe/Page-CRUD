<?php
include 'conexao.php';
if (!$conexao)
{
    die('Problema na conexao: ' . mysqli_error($conexao));
}
//banco selecioando
$db_selected = mysqli_select_db($conexao,'users');
	if (!$db_selected)
	{
		die ('Erro ao abrir o banco users : ' . mysqli_error($conexao));
    }

	$n = $_REQUEST["nome"];
	$e = $_REQUEST["email"];
	$en = $_REQUEST["endereco"];
	$t = $_REQUEST["telefone"];
	$s = $_REQUEST["password"];

	var_dump($_REQUEST);


    	//Executar instrução SQL
	$insere = "insert into users (nome,email,endereco,telefone,senha, adm) values (nome='".$_REQUEST["nome"]."', email='".$_REQUEST["email"]."', endereco='".$_REQUEST["endereco"]."', telefone='".$_REQUEST["telefone"]."', senha='".$_REQUEST["password"]."', adm='0')" or die ("Não foi possível executar a inserção de dados na tabela"); 
	mysqli_query($conexao,$insere);

	

?>