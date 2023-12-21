<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = filter_string_polyfill($_POST['name']);
    $email = filter_string_polyfill($_POST['email']);

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'Email válido';
    }else{
        echo 'Email inválido';
    }
    var_dump($name, $email);
}

function filter_string_polyfill(string $string): string
{
    $str = preg_replace('/\x00|<[^>]*>?/', '', $string);
    return str_replace(["'", '"'], ['&#39;', '&#34;'], $str);
}