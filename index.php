<?php
//Variaveis PHP temos:

//string
echo gettype('kkkkk'). '<br>';

//numbers - integers, float(double)
echo gettype(12). '<br>';
echo gettype(12.3). '<br>';

//booleans
echo gettype(false). '<br>';

//arrays
echo gettype(['kjshkjsdf', 12]). '<br>';

//objects
class Person{

}
echo gettype(new Person). '<br>';

//null
echo gettype(null). '<br>';

//Criando variável

$name = 'Davi';
echo $name. '<br>';
echo gettype($name). '<br>';
?>
