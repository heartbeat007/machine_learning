<!DOCTYPE html>
<html>
<head>
    <title>this is a array exercise for php</title>
</head>
<body>


<?php
echo"array indexing ..... <br />";
$numbers =array(1,2,3,4,5,6,7,8,9);

//we  can write in the direct array funtion
echo $numbers[0];
//this is array indexing
echo "<br />";

//now we used the mixed array in the array of php

$mixed = array(6,"fox","dog",array("x","y","z"));
//we can find the array indexing

echo "print the array element using for loop";
for ($i=0; $i <4 ; $i++) {
    echo $mixed[$i] ."<br />";
    if ($i==3){

        echo $mixed[3][0] ."<br />";
        echo $mixed[3][1] ."<br />";
        echo $mixed[3][2] ."<br />";
    }
    //little bit tricky right we wi ll get to that letter

    //using the for loop printting the data



    //now the most important function for the array
    //the print_r($mixed);



}

echo print_r($mixed);
//print_r() will automatically print the array with the index
//now we will write the code inside the <pre tag>

//see what happens

echo"<pre>";		//direct code writing


echo print_r($mixed);
echo "</pre>";

//now adding the element in the array

$mixed[4]="hello";
$mixed[5]="tanvir";
$mixed[6]="new things";

// adding the value in the array

echo "<pre>";
echo print_r($mixed);
echo "</pre>";
//this are mainly called the normal array


//now we talk abour the dictonary /the associative array


$asso = array(
    "my_name" => "tanvir Rahman",
    "my_role" => "143000410",
    "my_father_name" => "Md Ataur Rahman",
    "my_mother_name" => "Dil Afroj",
    "sister_name" =>"Tamanna Afroz"

);
//using the dictironary  function

//more like the associative array
//it will wrk as a dictonnary
echo "<pre>";

echo print_r($asso);
echo "</pre>";
//now print with separate value

echo $asso["my_name"] ."<br />";
echo $asso["my_role"] ."<br />";
echo $asso["my_father_name"] ."<br />";
echo $asso["my_mother_name"] ."<br />";
echo $asso["sister_name"] ."<br />";








//now some  function for array



//we  use count()
//and sort()
//and min() and max()



echo count($numbers). "<br />";   //count the element of the array
echo max($numbers) . "<br />";  //max element return
echo min($numbers) ."<br />";	//return min element
echo sort($numbers) ."<br />";	//sort but not print
print_r($numbers);		//print
echo rsort($numbers). "<br />";	//reverse sort but not print
print_r($numbers);
?>
</body>
</html>