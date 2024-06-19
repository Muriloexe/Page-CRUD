<?php
    switch($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $endereco = $_POST["endereco"];
            $telefone = $_POST["telefone"];
            $nome = $_POST["senha"];

            $sql = "INSERT INTO users (nome, email, endereco, telefone, senha) VALUES (`${nome}`, `${email}`, `${endereco}`, `${telefone}`, `${senha}`)";
            $res = $conexao -> query($sql);
        break;
        case 'editar':

        break;
        
        case 'deletar'

        break;
    }

?>