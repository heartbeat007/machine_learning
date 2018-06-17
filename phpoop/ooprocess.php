<!DOCTYPE html>
<html>
<head>
	<title>oop process file</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>


	<div class="container-fluid">
		<?php




// the probem is you are given three value 
//1) opponent run
//2) current run of the team
//3) how many ball left


//the output will be the 
//1) current ran rate
//4)required run rate



				//get the data first
			class Process{

				public function __construct($opporun,$currrun,$ballleft){
					
					$this->opporun=$opporun;
					$this->currrun=$currrun;
					$this->ballleft=$ballleft;
					

				}

				public function curr_run_rate(){
					$ball_played=((300-$this->ballleft)/6)."</br>";
					$result1=($this->currrun/$ball_played)."</br>";
					return $result1;
				}

				public function required_run_rate(){
					$run_req=$this->opporun-$this->currrun+1;
					$result2=$run_req/($this->ballleft/6);
					return $result2;
					
				}

			}


		?>

		<div class="container-fluid alert-success">
			<?php
				function main(){
					//create the object
					
					 $opporun=$_POST['opporun']."</br>";
					 $currrun=$_POST['currrun']."</br>";
					 $ballleft=$_POST['ballleft']."</br>";
					 $obj=new Process($opporun,$currrun,$ballleft);
					 echo $obj->curr_run_rate();
					 echo "</br>";
					 echo $obj->required_run_rate();

				}
				main();


				//that was preety easy
				//oop in php
			?>


		</div>

	</div>

</body>
</html>