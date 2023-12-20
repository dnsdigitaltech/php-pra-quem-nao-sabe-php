<?php

//Booleanos - true, false

$_SESSION['logged'] = false;


//$_SESSION['logged'] = true;

if($_SESSION['logged']){
    echo 'Está logado';
}else{
    echo 'Está deslogado';
}

//Esses valores não sao true e false, porem se comportam como fossem.
for($i = 0; $i <= 10; $i++){
    echo $i;
}

$name = 'Davi';
$age = 39;
$logged = false;

if($name ==='Davi' && $afe > 18 && $logged === true){
    echo 'É verdadeiro';
}else{
    echo 'É falso';
}