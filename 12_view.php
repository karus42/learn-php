<?php

session_start();
$user_name = $_SESSION['user_name'];
$user_age = $_SESSION['user_age'];
$user_nation = $_SESSION['user_nation'];

echo $user_name .'<br>';
echo $user_age .'<br>';
echo $user_nation .'<br>';

?>