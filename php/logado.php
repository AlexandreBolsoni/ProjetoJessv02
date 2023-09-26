<?php
session_start();



if(isset($_SESSION["logado"]) && $_SESSION["logado"] == 1) {
 
    $_SESSION["logado"] = 1;
    header('location: ../equipes.php');
} else {
    $_SESSION["erro"] = 0;
     header('location: ../entrar.php');
    }


?>