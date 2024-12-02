<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php 
            session_start();

            print_r($_SESSION);
            echo "<br>";
            echo "<br>";

            if(!$_SESSION["nome"]){
                $_SESSION["nome"] ="Alexandre";
            }
            
            if(!$_SESSION["email"]){
                $_SESSION["email"] = "amespada27@gmail.com";
            }


        ?>
        <p>
            <a href="basico_sessao.php">Alterar Sessão</a>
        </p>
    </main>


</body>

</html>