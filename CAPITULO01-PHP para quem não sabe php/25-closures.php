<?php

function teste($name){
    $person = function () use ($name){
        return $name;
     };
     return $person;
}


// A variável que recebe uma função anônima é um objeto do tipo closure.
// Uma closure tem um método mágico __invoke.
var_dump(teste('Mario')());