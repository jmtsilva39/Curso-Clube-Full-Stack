/* Quando vou usar aspas simples ou aspas duplas. */

//  Usar aspas duplas quando quiser retornar escrever uma variável no meio


<?php

$age = 38;
$name = "Jonez de Mello tem $age anos";
echo strlen($name);
echo '----------/n';
echo substr($name, 0, 20); //corta a string
echo str_contains($name, 'mello'); //Só funciona a partir da versão 8 do php.