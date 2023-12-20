<?php

//Numbers - temos basicamente dois tipos de numeros (inteiros, não inteiros)

//34 integer
//34.5 double

echo gettype(34);

echo gettype(34.5);

//Calculos aritiméticos
$number1 = '34';
$number2 = 44;
echo $number1 + 50; //Ao contrário do java script o php consegue interpretar o numera da string  e efetuar calculos

//verificando se a variavel é número ou não
if(is_numeric($number1) && is_numeric($number2)){
    echo 'É numerico';
}else{
    echo 'Não é numerico';
}

//Arredondar um numero
echo ceil(34.12); //arredonda para cima
echo floor(34.12); //arredonda para baixo