<?php

//Funçoes - reaproveitamento de códigos

function connection(){
    $pdo = new PDO('mysql:host=localhost;dbname=ATESTE','root','12345678');
    return $pdo;
}

function getData($table){
    $conection = connection();
    $query = $conection->query("SELECT * FROM {$table}");
    $query->execute();
    return $query->fetchAll();
}

var_dump(getData('candidatos'));