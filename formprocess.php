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
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";


//lets get the value with more conveniently
$username=$_POST['username'];
$password=$_POST['password'];
echo "<h3> $username </h3></br>";
echo "<h3> $password </h3></br>";
    ?>




</body>
</html>