<?php


//(string)
//(boolean)
//(float)
//(integer)
//(double)
//(object)
//(array)
//intVal
//floatVal
//doubleVal
//strVal
//boolVal

$name = '';
//transforma para um valor booleano.
$change = (boolean) $name;
var_dump($change);

$person = ['name' => 'Jonez', 'age' => 35];
$change = (object) $person;

var_dump($change->age);


/* Outras maneiras de transformar  */
$person = 'Jonez';
$change = boolVal($person);

var_dump($change);