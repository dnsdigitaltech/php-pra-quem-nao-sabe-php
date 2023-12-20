<?php

//Condicionais - Switch
//O switch verifica o valor o if verifica se é verdadeiro ou falso

$name = 'Davi';

switch($name){
    case 'Davi':
        echo 'É Davi';
        break;
    case 'Silvia':
        echo 'É Silvia';
        break;
    case 'Nathan':
        echo 'É Nathan';
        break;
    case 'Avelina':
        echo 'É Avelina';
        break;
    default:
        echo 'Não é nenhum';
        break;
}