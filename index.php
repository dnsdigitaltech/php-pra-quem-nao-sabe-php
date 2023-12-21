<?php

//Variáveis super globais
//$_ e o nome da super global, todas com letras em Maiúsculas

//$_COOKIE - É um valor guardado no navegador, podendo ser resgatado em qualquer parte do sistema. Ele possui um prazo de  validade. Dentro dele podemos guardar os mais variados dados possíveis.

//$_SESSION - Também é guardada no navegador, porém não é guardado o valor da sessão

//$_ENV - é um array associativo onde cada uma das suas chaves é uma variável de ambiente apontando para o seu valor.

//$_FILES - pegar arquivos enviado de formulários

//$_GET - pega os dado via URL (query string)

//$_POST - pega os valores enviado através do header

//$_REQUEST - pega tanto query string ($_GET), quanto valores enviado através do header($_POST)

//$_SERVER - pega a url, a raiz do projeto, tipo de instrução($_GET, $_POST)