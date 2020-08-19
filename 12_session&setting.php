<?php

/*
    exit and die function example
*/
// echo "This session has began<br>";
// exit("The session has been ended by exit function");

// echo "The commands, functions here are irrelevant after exit function";

session_start();
$_SESSION['user_name'] = 'Dann';
$_SESSION['user_age'] = '28';
$_SESSION['user_nation'] = 'Vietnam';

echo 'Done';

?>