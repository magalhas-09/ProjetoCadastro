<?php

$dbHosy = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'db_cadastro';

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_erro){
    echo "Erro!";
} else {
    echo "Conexão efetuada com sucesso!";
}



?>