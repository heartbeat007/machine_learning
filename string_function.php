/**
 * Created by tanvir.
 * User: rebirth
 * Date: 8/3/18
 * Time: 1:47 PM
 *subject:String function
**/

<html>
<body>
<?php

//string function

$first = "the quick brown fox";
$second = " jumped over the lazy dogs";

//another way to string concatation
// is variable increment type thign that we
//used in string concatation

$third = $first; //putting the value of one variable to another
$third .=$second; //this will add the second string to the third
?>

<br />
<h1>
    <center>fundament function </center>
</h1><h3>
    lowercase function:<?php echo strtolower($third); //strtolower()function convert the upper case to
    //the lower function?><br />
    UPPERCASE FUNCTION:<?php echo strtoupper($third); //strtoupper function will convert the lower
    ////case to upper case ?><br />
    first word is upper case:<?php echo ucfirst($third) // this will convert the first worlds letter to the upper case to?> <br />
    first word of every letter <?php echo ucwords($third) //this will convert the first letter of every word
    //of the string to upper case letter?><br />
</h3>


<!--
so far we learn the function
is strtoupper() function srttoupper() function convert the the lowecase function to uppercase
another function is strtolower() do the exact different things
another function is ucfirst first letter of the word of the string will be uper
another function is ucwords() the ucwords()function make it every first letter of the string uppercase
-->



<br />

<center><h1> some advance function on strings <h1></center>

<h3>
    Length of the string <?php echo strlen($third) //strlen() function count the letter of the string?><br />
    Trim <?php echo trim("A    B    C    D                E") //this trim() function will remove the space from the string and it works
    //like the strip function in python?><br />
    Find :<?php echo strstr($third, "brown") // the strstr function will find a string within a string?><br />
    Replace: <?php echo str_replace("brown","super-fast",$third) //the str_replace function will replace a string within astrinf
    // the process is first the string that we want to put
    //then the string we want to replace the the string ?><br />
</h3>

<h1>

    <center>more advance string functionm</center>


</h1>
<h3>
    Repeat:<?php echo str_repeat($third,2);?><br />

    Make Substring: <?php echo substr($third,5,10);// it will extract the information from the string ?> <br />
    Find Position: <?php echo strpos($third,"brown"); //the strpos() function will return the position of
    // a string of a word in a string?> <br />
    Find character: <?php echo strchr($third,"z"); //find the character in any string?> <br />




</h3>

<!--


so far we learn these function
    str_repeat() -> str_repeat() function will repeat the string it acctually multiply the string with number
    substr() -> create the sub string from the actual string
    strpos() -> strpos() find the position of any string within a string
    strchr()-> find the character of the string in a string
-->
</body>
</html>



