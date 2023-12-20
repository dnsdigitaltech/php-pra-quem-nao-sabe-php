<?php

//Loopings - While

$names = ['Carlos', 'Luana', 'Joao'];
//resgatar os valores utilizando While

//O While efetua o lopping enquanto for verdadeiro
$i = 0;
while ($i < count($names)) {
    echo $names[$i].'<br>';
    $i++;
}