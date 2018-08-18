<!DOCTYPE html>
<html>
<head>
    <title> floating point number in practice</title>
</head>
<body>




<?echo $float = 3.14; ?><br />
<?echo $float+7;?> <br />
<?echo 4/3;?> <br />
<? //echo 4/0 ;?><br />

<?php
//here there will be some floating function
//floating function exercise

echo "this is the floating number";
echo "    {$float} <br />";
echo "we will round up the number <br />";
echo round($float)." <br />";
echo "we will cilling the number<br />";
echo ceil($float)."<br />";
echo "we will floor the number<br />";
echo floor($float) . "<br />";

//now find what is integer which is not integer

$integer = 3;


echo "<br />Is {$integer} integer <br />". is_int($integer);
echo "<br />Is {$float} integer  <br />".is_int($float);
echo "<br />Is {$integer} float <br />". is_float($integer);
echo "<br />Is {$float} float  <br />".is_float($float);


//is_int()   function return the boolian value if the integer then 1
//if not then nothing
//is_float() is used for the same purpose for finding the float number










echo" <br />";
?>
</body>
</html>
