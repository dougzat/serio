<?php
// inicia a sessao
session_start ();
// exibe as variaveis da sessao , a atribuicao e feita na pagina anterior
echo "A cor e ". $_SESSION ['cor ']."<br >";
echo "O tamanho e ". $_SESSION ['tamanho ']."<br >";
echo "O formato e ". $_SESSION ['formato ']."<br >";

?>