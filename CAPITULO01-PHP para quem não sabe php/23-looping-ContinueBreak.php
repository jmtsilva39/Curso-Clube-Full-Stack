<?php

$names = ['Jonez', 'Roberto', 'Alexandre', 'Maria', 'João'];
echo '-----------CONTINUE-----------' . PHP_EOL;
//Continue -- Pula o índice 1 
foreach ($names as $key => $name){
    if ($key ===1){
        continue;
    }
    echo $key. $name . PHP_EOL;
}
echo '----------BREAK-------------'  . PHP_EOL;

//break -- Pula o índice 1 
foreach ($names as $key => $name){
    echo $key. $name . PHP_EOL;
    if ($key ===1){
        break;
    }

}

