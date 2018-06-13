<!DOCTYPE html>
<html>
<head>
	<title>ten proces file</title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<body>


<?php

//get the data first

	$opporun=$_POST['opporun'];
	$currrun=$_POST['currrun'];
	$ballleft=$_POST['ballleft'];
	$ball_played=300-$ballleft;
	$ball_palyed_over=$ball_played/6;
	$current_r_r=floatval($currrun/$ball_palyed_over);
	$ballleft_over=$ballleft/6;
	$target=$opporun-$currrun+1;
	$required_r_r=floatval($target/$ballleft_over);

?>

<center>
	<h1>
		<div class="container-fluid alert-warning">
		SCORE BOARD
		</div>
				<table class="table table-hover">
					
					<th class="alert-danger">
						CURRENT_R_R
					</th>
					<td class="alert-danger">
						<h1><?php echo $current_r_r ?></h1>
						</td>
					

						<th class="alert-success">
						REQ_R_R
					</th>
					<td class="alert-success">
						<h1><?php echo $required_r_r ?></h1>
					</td>
					
				</table>
		

	</h1>

</center>
</body>
</html>