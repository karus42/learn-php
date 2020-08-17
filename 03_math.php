<?php

$n1 = 25;
$n2 = 3;

echo 'Add: ' .($n1 + $n2) .'<br>';
echo 'Subtract: ' .($n1 - $n2) .'<br>';
echo 'Product: ' .($n1 * $n2) .'<br>';
echo 'Divide: ' .($n1 / $n2) .'<br>';

if($n1 == $n2)
{
    echo $n1 .' is equal to ' .$n2 .'<br>';
}
elseif ($n1 > $n2) 
{
    echo $n1 .' is larger than ' .$n2 .'<br>';
}

?>