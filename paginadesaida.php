<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
     <input type="submit" value="Página de Login" name="botao"> 
</form>
<?php

session_start();


if($_SERVER["REQUEST_METHOD"] == "POST") {


    unset($_SESSION["email"]);

    echo "Você saiu do sistema!";

    if(isset($_POST["botao"])){
        header("Location: formulario.html");
    }
}
?>
</body>
</html>
