<?php

$time = time();
setcookie('ThisCookie', 'CrispyCookie', $time+5);
echo 'cookie has been created<br>';

?>