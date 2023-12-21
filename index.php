<?php
require './vendor/autoload.php';
//Variaveis de ambiente

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

var_dump($_ENV['KEY']);