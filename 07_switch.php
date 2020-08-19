<?php

function printNumber($number)
{
    switch($number)
    {
        case 1:
            echo "Number 1<br>";
        break;
        case 2:
            echo "Number 2<br>";
        break;
        case 3:
            echo "Number 3<br>";
        break;
        case 4:
            echo "Number 4<br>";
        break;
        case 5:
            echo "Number 5<br>";
        break;
        case 6:
            echo "Number 6<br>";
        break;
        case 7:
            echo "Number 7<br>";
        break;
        case 8:
            echo "Number 8<br>";
        break;
        case 9:
            echo "Number 9<br>";
        break; 
        default:
            echo "Input is not a number<br>";
        break;
    }
}

foreach (range(1,9) as $n) 
{
    printNumber($n);
}
printNumber('a');

?>