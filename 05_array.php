<?php

$ID = array('01', 'An', 'Nguyen');

// foreach ($ID as $id) 
// {
//     echo $id .'<br>';
// }

unset($id); // return the pointer to starting point

/* Keys and values in array */
$char = array('a' => 6, 'b' => 7, 'c' => 8); // a b c are now keys and 6 7 8 are values

//print_r($char);

/*Multidimensional array*/
$stu_db = array(
                array('name'=>'An Nguyen', 'adr'=> 5, 'grade'=>'B'),
                array('name'=>'Binh Phan', 'adr'=> 9, 'grade'=>'B'),
                array('name'=>'Chau Le',   'adr'=> 8, 'grade'=>'A'));

foreach (range(0,2) as $index) 
{
    echo $stu_db[$index]['name'] .' ' .$stu_db[$index]['adr'] .' ' .$stu_db[$index]['grade'] .'<br>';
}

// for ($i=0; $i<3; $i++)
// { 
//     echo $stu_db[$i]['name'] .' ' .$stu_db[$i]['adr'] .' ' .$stu_db[$i]['grade'] .'<br>';
// }

//echo $stu_db[0]['name'] .' ' .$stu_db[0]['adr'] .' ' .$stu_db[0]['grade'] .'<br>';

?>