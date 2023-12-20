<?php

//Condicionais - if-else
$isAdmin = true;

if($isAdmin){
    echo 'isAdmin ';
}

$number1 = 70;
$number2 = 30;

if($number1 > $number2){
    echo 'É Maior';
}elseif($number1 == $number2){
    echo 'É Igual';
}else{
    echo 'Nenhum';
}