<?php

//Session
//session_start() - sempre quando for criar a sessão
session_start();
//resgatando o id da sessão
echo session_id();
$_SESSION['name'] = 'Davi';

//OBS: para excluir a sessão basta fechar o navegador ou excluir manualmente
//Para acluir um item na sessão basta usar a função unset()
//unset($_SESSION['name']);

//session_destroy() - exclui toda a sessão
session_destroy();

include './teste.php';