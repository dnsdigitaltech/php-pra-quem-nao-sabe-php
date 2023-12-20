<?php

//Loopings - While

$names = ['Carlos', 'Luana', 'Joao'];
//resgatar os valores utilizando While

//O Do While efetua o lopping (faça enquanto) for verdadeiro

$i = 0;
do {
    echo $names[$i].'<br>';
    $i++;
} while ($i < count($names));