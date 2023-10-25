<?php

/** O que são Callbacks
    *  Funções passadas como parãmetro para outras funções

*/

function teste($name)
{
    return 'Olá, meu nome é ' . $name;
}

function teste2($callback)
{
    if(is_callable($callback)){
    return $callback('Alexandre');
    }else{
        return ' Não é um callback';
    }
   
}

$user = 'teste5';
echo teste2($user);

/* Verificar se é callback com is_callable */

