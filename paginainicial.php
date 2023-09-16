<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

session_start();

if(isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
    $_SESSION["email"] = $email;
    echo "Dados confirmados com sucesso, você está logado no sistema com o e-mail = ", $email;
}
else {
    echo "Parece que você foi deslogado no sistema, volte para a tela principal e realize o login novamente!";
}
?>
<form name="botao" method="POST" action= "./paginadesaida.php">
    <br>
    <button name="sair" id="sair" value="sair" onclick= "location.href='paginadesaida.php'"button>SAIR</button>
</form>
</body>
</html>
