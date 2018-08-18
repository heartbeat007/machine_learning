<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<?php
//now we are gonna give some information of the data
$page="william Shakespere";
$quote="to be or not to be";
$link="/bio/".rawurldecode($page). "?quote=" .urlencode($quote);
echo $link. "</br>";
//lets create a another link which the web server can interprete

$page2="tanvir Rahman";
//now this is my name it is actually the static page so
// the url is actually the rawurlencode it\

$quote1="linux is the best";
$quote2="this is not end";
$quote3="hello my friend";
$quote4="remember me";

$link2="/bio/".rawurldecode($page2)."?quote=".urlencode($quote1);
$link3="/bio/".rawurldecode($page2)."?quote=".urlencode($quote2);
$link4="/bio/".rawurldecode($page2)."?quote=".urlencode($quote3);
$link5="/bio/".rawurldecode($page2)."?quote=".urlencode($quote4);
//$link2="/bio/".rawurldecode($page2)."?quote=".urlencode($quote1)

//now there


echo $link2. "</br>";
echo $link3. "</br>";
echo $link4. "</br>";
echo $link5. "</br>";
?>

<?php
//now we use the html encoding 

//now lts construct a url for the final thing

$url_page="php/created/page/url.php";
$param1="This is a string with < >";
$param2="&#?*$[]+ are bad character";
$linktext="<click> & lean more";
//lets create a url with this infor mation


$url="http://localhost/"; //this is static
$url.=rawurldecode($url_page); //this is also static i mean this is the path
$url.="?"."param1=".urlencode($param1); //this sis the parameter that means is dynamic
$url.="&"."param2=".urlencode($param2); //second parameter


//now we output it with a html



?>
<a href="<?php echo htmlspecialchars($url); ?>">click and see more</a>
<?php echo htmlspecialchars($linktext)?>    
</body>
</html>