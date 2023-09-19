<?php

$usuarioValido = 'miltin'; //  usuário
$senhaValida = '321';     // senha 

$senhaCripto = md5($senhaValida);

if ($_POST['username'] && $_POST['password'] != "") {

    // Recupere os dados enviados pelo formulário
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifique se o usuário e a senha correspondem às variáveis válidas
    if ($username === $usuarioValido && $password === $senhaCripto) {
        
        
    } else {
        echo 'Usuário ou senha inválidos.';
    }
}
?>  