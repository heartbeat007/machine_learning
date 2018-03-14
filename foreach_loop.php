<!DOCTYPE html>
<html>
<head>
    <title>for each loop in php</title>
</head>
<body>




<?php
//the main thing is it is like the
// the for loop in python
// just some difference

//the sysntax are like this
$i=1;
$array =array(1,2,3,4,5,6,78,8,456,345,234,234,56,567);
foreach ($array as $item ) {
    echo "$i ==> {$item} <br />";
    $i++;
}
?>


<?php
//lets see the mix array in for each loop


//lets create a mix array
$mixes=array(1,2,3,4,"x","y","z","tanvir rahman");
//so this is a multidimension array


foreach($mixes as $mix ){
    echo $mix ."<br />";


}

//ok now we can do it with the mixed array

//now one more last thing thatis


//foreach for the dictonary/associative array


//now create an arrya
$asso = array(
    "myname" =>"tanvir rahman",
    "myroll" =>"143000410",
    "myclass" =>"11th",
    "mysex" =>"male",
    "myfrnd" =>"none",
    "myisp" =>"ICC",
);




//now do dor loop

foreach($asso as $key => $value){

    echo "<h3>$key</h3>  key   value is  <h3>$value</h3> <br />";
}
//it will both print the key and value

//ok do it again

foreach($asso as $key =>$value){

    echo " <h3>$key  =======> $value  </h3><br />";


}
?>
</body>
</html>