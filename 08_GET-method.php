<?php

if(!empty($_GET["data_name"]) && !empty($_GET["data_ethnicity"]) && !empty($_GET["data_age"]))
{
    echo 'Name: ' .$_GET["data_name"] .'<br>';
    echo 'Ethnicity: ' .$_GET["data_ethnicity"] .'<br>';
    echo 'Age: ' .$_GET["data_age"] .'<br>';
}
else 
{
    echo 'Please fill all the fields<br>';
}

?>