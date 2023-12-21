<?php
//sempre quando for resgatar uma sessão tem que iniciar
session_start();
//resgatando a sessão
echo isset($_SESSION['name']) ? $_SESSION['name'] :'Sessão não existe'; //operador ternário