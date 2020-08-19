<?php

$index = 10;
echo 'This is a while-do loop<br>';
while($index>=0)
{
    echo $index .'<br>';
    sleep(1);
    $index--;
}

echo '<br>This is a do-while loop<br>';
$index = 0;
do
{
    echo $index .'<br>';
    $index++;
}
while($index<=10);

echo '<br>This is a for loop<br>';
for($index = 0; $index<10; $index++)
{
    echo $index .'<br>';
}

echo '<br>This is a foreach loop<br>';
foreach (range(0,10) as $index) 
{
    echo $index .'<br>'; 
}

echo '<br>This is an advanced foreach loop<br>';
$people = array(
                array('name'=>'Dann', 'ethnicity'=>'Asian', 'age'=>28),
                array('name'=>'Kyle', 'ethnicity'=>'Caucasian', 'age'=>23),
                array('name'=>'Linda', 'ethnicity'=>'Negro', 'age'=>24)
);

foreach ($people as $person => $data) 
{
    echo $person .'<br>';
    // print_r($data);
    // echo '<br>';
    foreach ($data as $item) 
    {
        //echo $item .'<br>';
    }
}

?>