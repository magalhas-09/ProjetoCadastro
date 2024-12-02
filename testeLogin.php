<?php

session_start();
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = "SELEC * FROM usuarios WHERE email = '$email' and senha = '$senha'";
    $result = $conn->query($sql);

    if(mysqli_num_rows)
}

?>