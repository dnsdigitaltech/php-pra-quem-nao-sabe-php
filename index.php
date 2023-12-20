<?php

//Closures - são função anônimas

//Atribuir um função anônima(sem nome) para variável person
$person = function($name){ //Não chamar mais de função anonima e sim de Closure
    return $name;
};

//passando conteúdo para via parametro
var_dump($person('Davi'));



function teste($name){
    $person = function() use($name){
        return $name;
    };
    return $person;
}
var_dump(teste('Bernardo')());


// class person
// {
//     public function __invoke() {
//         return 'teste';
//     }
// }

// $person = new person;