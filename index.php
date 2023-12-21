<?php

//Cookies

//setcookie() - serve para criar o cookie
setcookie('name', 'Davi', time() + 2 * 24 * 60 * 60);//2dias

setcookie('curso', 'php', strtotime('+5days'));//5dias