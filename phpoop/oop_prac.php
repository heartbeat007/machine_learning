<!DOCTYPE html>
<html>
<head>
	<title>raw php code</title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<body>

	<?php

		/**
		 * 
		 */
		class Rectangle 
		{
			//remember it just like python oop
			
			function __construct($length,$width)
			{
				# code...
				//everythiong you write execute 
				//on the fly everytime you called
				//for convenience all the method and the attributes will be
				//public
				$this->length=$length;
				$this->width=$width;		
					}

			public function get_peremeter(){
				$peremeter=2*($this->length+$this->width);
				return $peremeter;
					}


			public function get_area(){
				$area= $this->length *$this->width;
				return $area;
		}

			
}
			$my_obj=new Rectangle(20,30);
			echo "<h1>";
			echo $my_obj->get_peremeter();
			echo "</h1>";

	?>

</body>
</html>