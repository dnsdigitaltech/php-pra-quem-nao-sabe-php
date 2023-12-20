<?php

//Truthy e Falsy

//Falsy
//null..............//.null
//0.................//.integer
//0.0...............//.float
//"0"...............//.string
//""...............//.empty.string
//.array()..........//.empty.array

//Truthy - Todo resto


var_dump(!!null);//false
var_dump(!!0);//false
var_dump(!!0.0);//false
var_dump(!!"0");//false
var_dump(!!"");//false
var_dump(!!array());//false
var_dump(!![]);//false

if(0){
    echo 'teste'; //Não aparece nada
}

if(!0){
    echo 'teste'; //aparece
}