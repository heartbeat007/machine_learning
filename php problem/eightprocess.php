<!DOCTYPE html>
<html>
<head>
	<title>process file</title>
</head>
<body>
	<div class="jumbotron">
		<div class="container-fluid">
			<div class="alert-danger">

				
<?php
// Example 1
//$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
//$pieces = explode(" ", $pizza);
//echo $pieces[0]; // piece1
//echo $pieces[1]; // piece2

// Example 2
//$data = "foo:*:1023:1000::/home/foo:/bin/sh";
//list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
//echo $user; // foo
//echo $pass; // *

?>

				<?php
				##first take all the data and 
				// add this data one by one to the array 
				//first get the data

				$data=$_POST['data'];
				$tmp = explode(" ", $data);
		
				

				$last_limit=$tmp[sizeof($tmp)-1];
				$first=0;
				for ($i=$first; $i <=$last_limit ; $i++) { 
					//now swap the value
					if ($tmp[$i]>$tmp[$i+1]) {
						$ttmp=$tmp[$i];
						$tmp[$i]=$tmp[$i+1];
						$tmp[$i+1]=$ttmp;

					}
				}

				echo($tmp);
				 ?>

			</div>
		</div>

	</div>

</body>
</html>