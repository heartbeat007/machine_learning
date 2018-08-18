<!DOCTYPE html>
<html>
<head>
	<title>the first problem input page</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<?php
	//the problem is there are some number wil given
// as a input you have to find weather it is even or odd
	$link = "firstprocess.php";
?>

<center><h2>enter rhe number:</h2></body></br>
<form action="<?php echo $link ?>" method="POST">
	<input type="text" name="data" value="">
	<input type="submit" name="submit" value="submit">
</form></center>
</body>
</html>