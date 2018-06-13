<!DOCTYPE html>
<html>
<head>
	<title>run rate problem</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">

</head>
<body>
<?php

// the probem is you are given three value 
//1) opponent run
//2) current run of the team
//3) how many ball left


//the output will be the 
//1) current ran rate
//4)required run rate
?>
<div class="jumbotron alert-success">
	<div class="container-fluid">
<center>
<form action="tenprocess.php" method="POST">
	<h2><b>Enter the opponent run</b></h2>
	<input type="text" name="opporun" value="" placeholder="opponent run"></br>
		<h2><b>Enter the current run</b></h2>
	<input type="text" name="currrun" value="" placeholder="current run"></br>
		<h2><b>Enter the ball left</b></h2>
	<input type="text" name="ballleft" value="" placeholder="ball left"></br>
	<b><input class="btn btn-danger" type="submit" name="submit" value="submit"></b>

</form>
</center>
</div>
</div>
</body>
</html>