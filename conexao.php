<?php

    include("index.php");

    $nome = $_POST['nome'];
    $nacionalidade = $_POST['nacionalidade'];
    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];
    $peso = $_POST['peso'];
    $check = isset($_POST['check_box']);

    $sql = "INSERT INTO pessoa(nome, nacionalidade, sexo, idade, peso) VALUES ('".$nome."', '".$nacionalidade."', '".$sexo."','".$idade."','".$peso."')";

    $statment = getConnection()->prepare($sql);
    $statment->execute();
?>

<!DOCTYPE html> 
<html>
    <head>

        <script></script>
        <link rel="stylesheet" type="text/css" href="../teste 2/styles.css"/>
        <meta charset="utf-8">
        <title>Teste</title>
    </head>

    <body>
        <center> 
            <h1> Cadastrado com sucesso! <h1> 
            <a href="../teste 2/insercao.html"><button>Voltar</button></a>
        </center>
    </body>
</html>