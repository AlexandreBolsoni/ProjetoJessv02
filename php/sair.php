<?php

session_start();
session_destroy();

// Redirecione para a página de login ou qualquer outra página que você desejar
header('Location: ../entrar.php');
