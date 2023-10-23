<?php

$name = 'Alexandre';

/*
function person(){
    global $name;
    echo $name;
}

person(); // This will output 'Alexandre'
*/


// Using the GLOBALS superglobal array: 

$name = 'Alexandre';

function person(){
    echo $GLOBALS['name'];
}

person(); // This will also output 'Alexandre'

/*

Both of these methods will allow you to access the global variable $name within the person function and output its value. Make sure to uncomment one of the methods in your code to see the expected output.

*/



