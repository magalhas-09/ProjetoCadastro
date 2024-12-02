<?php

if(isset($_POST['submit'])){
    include_once('config.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $sql = "INSERT INTO usuarios VALUES (default,
    '$nome', '$senha', '$email', '$telefone',
    '$sexo', '$data_nasc', '$cidade', '$estado',
    '$endereco')";

    $conn->query($sql);

    $conn->close();

    header('Location: login.php');
} 

?>