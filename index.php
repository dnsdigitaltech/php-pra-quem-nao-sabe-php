<?php

//Loopings - Foreach

$names = ['Carlos', 'Luana', 'Joao'];
//resgatar os valores utilizando Foreach

//O Foreach significa para cada item do array vai ser guardado na variavel

foreach ($names as $key => $name) {
    echo $key . '=>' . $name;
}