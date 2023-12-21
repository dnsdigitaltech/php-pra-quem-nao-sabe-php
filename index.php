<?php
require './vendor/autoload.php';
//Variaveis do servidor
//__DIR__  == $_SERVER['DOCUMENT_ROOT'] - pega o caminho completo do diretorio do projeto
//echo __DIR__;
$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
$dotenv->load();

var_dump($_ENV['DATABASE']);