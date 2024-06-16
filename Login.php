<?php
include 'conexao.php';

$select = "select * from users where nome='".$_REQUEST["nome"]."'" or die ('Erro no select');
mysqli_query($conexao, $select);

if(){
    
}

?>