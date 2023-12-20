<?php

//Strings - Tudo que estiver dentro de aspas simples '' ou duplas "" é considerado strings
$age = 39;

//$nome = 'Davi';

//OBS quando for usar um variável dentro de uma string é necessário usar aspas duplas

$nome = "Davi {$age} teste";
echo $nome;

echo gettype($nome);

echo strlen($nome); //mostra total de caracteres

echo substr($nome, 0, 6); //corta a string

echo str_contains($nome, 'teste'); //se contem alguma coisa na string




