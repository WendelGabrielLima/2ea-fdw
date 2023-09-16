<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];

    $_SESSION["email"] = $email;

    header("Location: paginainicial.php");

}
?>