<?php

//Callbacks - são funções passadas como parâmentros para outras funções

function teste($name) {
    return "Olá meu nome é: {$name}";
}

function teste2($callback){
    //Verificar se é callback com is_callable, verificar se realmente é uma função callback
    if(is_callable($callback)){
        return $callback('Davi');
    }else{
        return 'Não é um callback.';
    }
}

$user = 'João';

echo teste2('teste');

//////////////call_user_func()//////////////////////

function testeNovo($name){
    return  "Olá esse é um {$name}";
}
//call_user_func() espera um callback com seus parametros
echo call_user_func('testeNovo', 'Novo teste');


//////////////Chamar primiero com um array caso for um objeto com métodos estáticos ou não queira usar o método dele.

class User {
    public static function teste5($name, $age)
    {
        return "Olá meu nome é {$name} tenho {$age} anos";
    }
}

echo call_user_func(['user', 'teste5'], 'Davi', 38);

///////////////////call_user_func dentro de outras funções/////////////////
function teste6($name){
    return "teste {$name}";
}

function teste7($callback){
    return call_user_func($callback, 'Avelina');
}

echo teste7('teste6');

///////////////////__invoke pode ser passado como callback//////////////

class User2
{
    public function __invoke()
    {
        return 'teste __invoke';
    }
}

$user2 = new User2;


function testeUser($callback)
{
return $callback();
}

echo testeUser($user2);

//////////////call_user_func_array - passa os paramentros via array//////////////

function teste8($name, $age)
{
    return "Ola meu nome é {$name} e minha idade é {$age}";
}
echo call_user_func_array('teste8', ['Davi', 39]);

///////////////////////Usar uma closure como callback////////////////
$user3 = function ($name) {
    return "teste9 {$name}";
};

function teste10($callback)
{
    return call_user_func($callback, 'Davi');
}

echo teste10($user3);