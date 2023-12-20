<?php
//Constantes não altera o valor
define("NAME", 'Davi');

echo NAME;

//Constantes pré definidas do PHP
function teste()
{
    echo __FUNCTION__; //Contante mágica, pois pega o nome da função
}

teste();

echo DIRECTORY_SEPARATOR;


//Verificar se uma constante está definida ou não
define('LASTNAME', 'Bernardo');

if(defined('LASTNAME')){
    echo 'Foi definido';
}

//Pegar todas as constrantes que o PHP tem
$cons = get_defined_constants(true);

var_dump($cons);