<?php
function say_hello($word){
    echo "hello world {$word} </br>";
}
say_hello("tanvir");
say_hello("ornob");
say_hello("ornik");
function sum_of_two($number1,$number2){
    $sum1 = $number1+$number2;
    echo "the sum of the {$number1} and {$number2} is ==>{$sum1} </br>";
}
sum_of_two(1,2);
sum_of_two(2,3);
sum_of_two(55,6);
sum_of_two(2,3);

$name="john doe";
function better_hello($greeting,$target,$punct){
    echo $greeting." ".$target . $punct . "</br>" ;    
}
better_hello("hello",$name,"??????");
better_hello("hi","tanvir",'??');
better_hello("hi","ornob","!!!!!!!!");
//returning the value using the function 
// we do some math with the fuinction and return value with 
//the function
function add($val1,$val2){

    return $val1+$val2;
}
$first=add(2,3);
$second=add(3,4);
$third=add(44,33);
echo "the first ans is {$first} </br>";
echo "the second ans is {$second}</br>";
echo "the third ans is {$third}</br>";

// we gonna create a function which return the chinise zodiac
// so we write a function

function chinese_zodiac($year){
//we will do some mathmatical calculation of the year
    $condition = ($year-4)%12;
    //in a switch case statement we dont 
    //do the condition we use the variable
    switch($condition){
        case 0: return "Rat";
        case 1: return "Ox";
        case 2: return "Tiger";
        case 3: return "Rabbit";
        case 4: return "Dragon";
        case 5: return "Snake";
        case 6: return "Horse";
        case 7: return "Goat";
        case 8: return "Monkey";
        case 9: return "Rooster";
        case 10: return "Dog";
        case 11: return "Pig";
}

//now herew is the thing every switch case statement need a break optiopn and 
//the syntax is switch(variable/value) case something : do some thing 
//but in this case we dont need a break statement because we are returning
// the value that means the function of the function is over after 
//returning the value
}

$zodiac = chinese_zodiac(2018);
$one_zodi=chinese_zodiac(2017);
$two_zodi=chinese_zodiac(2016);
$three_zodi=chinese_zodiac(2015);
echo "this year is the year of the {$zodiac} </br>";
echo "this year is the year of the {$one_zodi} </br>";
echo "this year is the year of the {$two_zodi} </br>";
echo "this year is the year of the {$three_zodi} </br>";
echo "this is the year of " .chinese_zodiac(2017) . "</br>";
//lets talking about the multiple return function 
//we cam use the list packing unpacing in the process
//lets create a function with multiple return value
function add_sum($val1,$val2){
    $add = $val1+$val2;
    $sub = $val1-$val2;
    return array($add,$sub);
    //we will return the array of ans 
}
//now calling the function
$data = add_sum(5,4);
echo "the adding of the two data is {$data[0]} </br>";
echo "the subtraction of the two data is {$data[1]} </br>";
//we can do it by the list packing unpacking 
list($num1,$num2)=add_sum(5,4);

echo "this one is using the list packing unpacking </br>";
echo "the adding of the two data is {$num1} </br>";
echo "the subtraction of the two data is {$num2} </br>";
?>