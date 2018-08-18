<?php
//url and links are use GET
//for forms use POST
//cookies COOKI
//get post and request
//we creating link for the two pages
?>
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
  <?php $link_name="second_page.php"
  //creating just a variable
  ?> 
  <a href="<?php echo $link_name;?>">second_page</br></a> 
    <!-- we create the third page and connect to 
    this site and create a bigger font link-->
<?php
//create a variable again 
$third_page="third_page.php";
$id=2;
?>
<a href="<?php echo $third_page;?>">Third page</br></a>
<?php
$link_name="Second page";
$id=7;
?>
<a href="second_page.php?id=<?php echo $id;?>"><?php echo $link_name; ?></a>
<!-- this id actually fethed by the get statement of 
web page and then go to the database for fetching data
GET statement take the id from the url and POST take the data
from the webpage different area we will do it on get.php another-->
</body>
</html>