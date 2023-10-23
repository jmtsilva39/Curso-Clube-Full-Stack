//Arrays

<?php
$arr = array('Jonez', 'Maria', 'João');

//var_dump($arr);
//echo $arr[1];


//var_dump($arr[1]);
//Adicionar Arrays
$arr[3] = 'Joaquim';
$arr[4] = 'Pedro';

//var_dump($arr);
//var_dump($arr)

$length = count($arr);
echo $length;

array_push($data, 'teste'); //adiciona no final do array
array_unshift($data, 'first');
var_dump($arr);
                            //Arrays associativos --------------------

            $person = [ 'name' => 'Jonez', 'age' => 38, 'sexo' => 'M'];


                            //Arrays Multidimensionais ----------------------

                        $students = array(
                                array("name" => "Alice", "age" => 20),
                                array("name" => "Bob", "age" => 22),
                                array("name" => "Carol", "age" => 21)
                            );
                            

                            $person = [
                                        'name' => 'Jonez',
                                        'age' => 38,
                                        'documents' => [
                                                    'cpf' => '123456789',
                                                    'rg' => '123456789',
                                                    'array' => ['asdf', 'asdf']
                                        ]
                                    ];

var_dump($person['documents']['array']);