<?php

//Loopings - Continue e break

$names = ['Carlos', 'Luana', 'Joao'];

//Continue e break, quando quer pular ou verificar um valor e para naquele direção

// for ($i=0; $i < count($names); $i++) { 
//     //pular Luana
//     if($i === 1){
//         continue;
//     }

//     // //parar ao chegar na Luana
//     // if($i === 1){
//     //     break;
//     // }
//     echo $names[$i];
// }

foreach ($names as $key => $name) {
    if($key === 1){
        continue;
    }
    echo $name;
}

//OBS no while não funciona o continue a break funciona