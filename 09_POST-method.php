<?php

$_POST["username"];
$_POST["password"];

if($_POST["username"]==="Dann" && $_POST["password"]==="1234")
{
    echo "Access authorized<br>";
}
else 
{
    echo "Access denied<br>";
}

?>