<?php

session_start();
if($_SESSION["logado"] == 0) { 
   header('Location: entrar.php?error=Usuário não está LOGADO');
} 

include 'php/site.config.php';
criaHeader('Equipes');

echo '<div class="flex-center-row">';

for($indice=1; $indice <=3; $indice++) {
   $box = criaEquipe($indice);
   echo $box;
}

echo '</div>';

echo '<a href="php\sair.php" class="botao-sair">Sair da Conta</a>';


criaFooter();
?>

