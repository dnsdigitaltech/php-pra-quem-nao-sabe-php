<?php

//operadores lógicos

// &&(and),||(or), !

// $canAccess = true;
// $isOlder = false;
// $result = $canAccess && $isOlder;  //false

// $canAccess = true;
// $isOlder = true;
// $result = $canAccess && $isOlder;  //true

// $canAccess = false;
// $isOlder = false;
// $result = $canAccess && $isOlder;  //false

// $canAccess = true;
// $isOlder = true;
// $result = $canAccess || $isOlder;  //true

// $canAccess = true;
// $isOlder = false;
// $result = $canAccess || $isOlder;  //true

$canAccess = false;
$isOlder = false;
$result = $canAccess || $isOlder;  //false



var_dump($result);