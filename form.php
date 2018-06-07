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
    

    <!--now we create a form to test the
    $_POST super global variable 
    and the formprocess.php have to encode this because this is 
    a parameter-->
    <?php $url="formprocess.php"?>
    <form action="<?php echo rawurldecode($url) ?>" method="POST">
    Username :<input type="text" name="username" value=""></br>
    Password   :<input type="password" name="password" value=""></br>
    <input type="submit" name="submit" value="submit"/>
</body>
</html>