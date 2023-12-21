<?php

//Escopo e variável global

//global - é em todo script
//local - dentro de uma função

$name = 'Davi';

function person(){
    //global $name;
    //echo $name;

    //OU

    echo $GLOBALS['name'];
}

person();