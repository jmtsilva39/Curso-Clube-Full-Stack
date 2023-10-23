<?php
$name = 'Jonez';

if (isset($name)) {
    echo "Variable is set";
} else {
    echo "Variable is not set";
}

//echo isset($name);


$person = ['name' => 'Alexandre', 'age' =>39 ];

echo isset($person['name']);
?>

