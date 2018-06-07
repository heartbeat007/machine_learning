
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
//there are many ways to get the data from 
//it is a php get post method
//the get argumet is for the url
//the post argument is for the form
//and therte is another is cookie

?>    
<?php $link_name="second_page.php";
$id=100;
$ganere="music";
$artist="liam &nison";

?>
<!-- we create a link to the second page with simple html-->
<a href="<?php echo $link_name;?>">Second page</a>

<!--now we do some link with the quary string attached to it -->
<a href="second_page.php?id=<?php echo $id;?>&ganere=<?php echo $ganere;?>&artist=<?php echo urlencode($artist);?>">Second page again</a>

<!--the quary parameetr is aa part of the url that come
after the ? mark this is how we send the additional parameter 
the process is you have to give the url and then ? sign and then give the 
value of the parameter
like somepage.php?page=2
you can send the multiple parameter to the web page to see the result
all you have to do is using the & sign to it like
somepage.php?category=7&page=3 
when this parameter is passed to a page the information of that
is going to get by the get variable of the page


-->

</body>
</html>
