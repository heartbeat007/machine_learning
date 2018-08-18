<!DOCTYPE html>
<html>
<head>
	<title>first</title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<body>
	<center>
	<div class="container-fluid alert-success">
		<div class="jumbotron ">
			<b><h1>php object oriented programming</h1></b>
			<font size="+2">
			<p>oop is a combination of the attribute and the
			method
			<div class="container-fluid alert-danger">
			just like the <b>"self"</b> in python it php will use <b>"$this"</b> as 
			a reference of the class
		</p>
		</div>
			</font>
		</div>
	</div>
</br>
</br>
</br>
</br>

<?php

//get the data first
$length=$_POST['length'];
$width=$_POST['width'];
//take into session variable
//$_SESSION['length']=$length;
//$_SESSION['width']=$width;
?>

	<div class="container-fluid">
		<?php
			class Rectangle{

				//length and the width are the attributes

					//we need the method for calculation 
					//of the perimeter and area\
					//here goes the method
					public function get_peremeter(){
						$peremeter=2*($this->length+$this->width);
						return $peremeter;
					}


					public function get_area(){
						$area= $this->length *$this->width;
						return $area;
					}
			}




		?>
		<?php 


//create a object  from the class
$firstobj=new Rectangle;
//assigning the arttribute

$firstobj->length=$length;
$firstobj->width=$width;
echo "<h1>";
echo " the peremeter</br>";
echo $firstobj->get_peremeter()."</br>";
echo " the area</br>";
echo $firstobj->get_area();
echo "</h1>";
?>
	</div>
</center>
</body>
</html>