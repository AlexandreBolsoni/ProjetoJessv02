<?php
session_start();
$usuarioValido = 'miltin'; //  usuário
$senhaValida = '321';     // senha 

$senhaCripto = md5($senhaValida);

if ($_POST['username'] && $_POST['password'] != "") {

    // Recupere os dados enviados pelo formulário
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordCrypto = md5($password);

    // Verifique se o usuário e a senha correspondem às variáveis válidas
    if ($username === $usuarioValido && $passwordCrypto === $senhaCripto) {
        $_SESSION["logado"] = 1;
        header('location: ../equipes.php');
    } else {
        $_SESSION["erro"] = 0;
        echo 'Usuário ou senha inválidos.';
    }
}
?>  