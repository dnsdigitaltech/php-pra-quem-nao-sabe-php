<?php

//Arrays
//$nome = 'Davi'; //Quando desejar guardar mais de um valor dentro de uma variaáve é necessário criar o array()[]

$data = ['Davi', 'Nathan', 'silvia', 39, true, false];

//resgatar as valores
print_r($data);

var_dump($data);//trás os tipos

//resgatando um valor especifico
var_dump($data[1]);

//adicionando valores no array
$data['6'] ='Avelina';
var_dump($data);

//Adicionando novos itens sempre no final do array
$length = count($data);
$data[$length] ='Severino';

var_dump($data);

//Outra forma de adcionar itens no final do array é com a função array_push()
array_push($data, 'teste');
var_dump($data);

//adicionar no começo do array
/*$data['0'] ='first';//nesse caso substituiu o primeiro item do array
var_dump($data);*/

//para adicionar no inicio do array é necessário usar a função array_unshift();
array_unshift($data, 'first');
var_dump($data);

//Criando indices específicos
$person = ['name' => 'Davi', 'age' => 38, 'documents' => ['cpf' => '465465465', 'rg' => '231232131']];
//resgatando os valores
var_dump($person);
var_dump($person['name']);
var_dump($person['documents']['cpf']);