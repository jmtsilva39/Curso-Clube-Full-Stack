<?php

$names = ['Jonez', 'Roberto', 'Alexandre', 'Maria', 'João'];

$a = 0;
do{
   echo $names[$a] . ' + ';
   $a++;
}while ($a < count($names));
