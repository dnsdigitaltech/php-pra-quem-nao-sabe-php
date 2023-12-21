<?php
//resgatando o cookie
if(isset($_COOKIE['curso'])){
    echo $_COOKIE['curso'];
}else{
    echo 'Cookie não existe';
}