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

?>