<?php

//Como definir constantes.
define('NAME','Jonez');

echo NAME;


//Constante Mágica

__FUNCTION__;
__METHOD__;


//COMO SABER SE UMA CONSTANTE FOI DEFINIDA

if(defined('NAME')){
    echo 'foi definido';
};

// como PEGAR TODAS AS FUNÇÕES DEFINIDAS DO PHP.

$cons = get_defined_constants(true);
var_dump($cons);
