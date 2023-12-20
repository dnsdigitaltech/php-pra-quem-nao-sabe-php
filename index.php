<?php

//Convertendo tipos de dados
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

$name = 'Davi';
//$name = '';false
$number = 35;
//converter para boolean
$change = (boolean) $name;
$change = boolVal($name);//este método é outra forma de chamar mais o resultado é o mesmo
$number = (string) $number;
var_dump($change, $number);

//OBS para converter oa valores basta colocar o tipo do dado antes da variavel

//Transformar array em object
$nomes = ['name' => 'Davi', 'age' => 39];

$object = (object) $nomes;
var_dump($object);

//recuperar objeto
var_dump($object->name);

//Transformar objects e array
class Person{
    private $name;
    public function teste() {
        return 'teste';
    }
}

$person = new Person;

$array = (array) $person;
var_dump($array);