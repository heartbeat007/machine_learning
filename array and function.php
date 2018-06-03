<?php
//we will use the function scope and global and
//local variable
$bar="outside";
function foo(){
    global $bar;
     $bar = "inside";//this is the local scope
     }
echo "this should be {$bar} </br>";
foo();
echo "this should be {$bar} </br>";
// default value of the function
function paint($room='office',$color='red'){
    return "the color of the {$room} is {$color} </br>";
}
echo paint();
echo paint('bedroom','blue');
echo paint('living_room','yellow');
//we will do somme array aperation with php
//first the simple array declaretion
$numbers=array(1,2,3,4,5,6,7,8,9,10);
//now we print it with a for loop index starts at 0
for($i=0;$i<sizeof($numbers);$i++){
        echo $numbers[$i]. " ";
}
//we could do exactly preety much the samee  with 
// the print_r() function
echo "<pre>";
print_r($numbers);
echo "</pre>";
//<?php
//foreach($group_membership as $i => $username) {
//$items = array($username);
//}
//print_r($items);
//appending value in the array is little bit tricky in the php lets have a look
$a=array(); //first declare the array
//then pushing the value to the array
//insert the value from 1 to 100 to the array
for($i=0;$i<=100;$i++){
array_push($a,$i);
}
print_r($a);
echo "</br>";
//thats how you append the value in an array 
//using array_push value 
//first parameter is the array name second  is the value 
//you awant to assign

$name=array('volvo','prado','toyota','mitusibisi');
echo "this is what i want ".$name[0]. " ".$name[1];
//lets do for loop to find out
foreach($name as $value){
    echo "i like ". $value . "</br>";
}
//just like the array_push()
//the foreach($array as $item)
//first will be the array value then the item of the each vaue
//its just like the for item in range value just
//like the python
//create anotherarray and appending the value

$myarray = array();
//ok the array is declared
//ok lets see another array
$data=array("hello","world","people","i love","you","i hate","you too");
foreach($data as $item){
    array_push($myarray,$item);
    }
echo "<pre>";
print_r($myarray);
echo "</pre>";
echo "the first array length is " .sizeof($myarray). "<br>";
echo "the first array length is " .count($myarray). "<br>";
echo "the second array length is " .count($data). "<br>";
echo "the second array length  is ".sizeof($data). "<br>";
//this is almost the same sizeof and the count

//lets go to the associative array
//its just like the dicctonary in python
$age=array("peter"=>"15","tanvir"=>"14","ornob"=>"34");
echo "<pre>";
print_r($age);
echo "</pre>";
//apply a foreach loop
foreach($age as $key => $value){
    echo $key . " is " .$value ."</br>" ;
}
//lets do it again 
//name and area
$data1=array("tanvir" =>"dhaka","rahman"=>"chittagong",
"ornob"=>"kumilla","hasib"=>"rajshahi","rabi"=>"barisal");

foreach($data1 as $key => $value){
    echo $key ." lives in ".$value ."</br>";
}

//we use access the the list 
echo "tanvir lives is ".$data1['tanvir']. "</br>";
echo "rahman lives is ".$data1['rahman']. "</br>";
echo "ornob lives is ".$data1['ornob']. "</br>";
echo "rabi lives is ".$data1['rabi']. "</br>";

?>