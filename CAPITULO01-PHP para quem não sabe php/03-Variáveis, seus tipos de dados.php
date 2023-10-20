<?php


//String
echo gettype('Jonez de Mello Toffani da Silva');

//Number - Integers, float(double)
echo gettype(12.34);

//booleans
echo gettype(true);

//arrays
echo gettype(['asdf',1232]);

//object


//null


//Padrão CamelCase
//Snake_case


//Passar variável como referência.

$name = 'Jonez';

$myName = &$name; //Indica que estou passando a variável como referência.

$name = 'João';

echo $name;
echo $myName;