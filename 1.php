<?php
// exemplo de uso da funcao getenv () do PHP
$usuario = getenv ('USER ');
$host = getenv ('HOSTNAME ');
$ip = getenv ('REMOTE_ADDR ');
printf ("Bom dia %s",$usuario );
printf (" Voce esta conectado ao host %s de IP %s",$host ,$ip );
?>>