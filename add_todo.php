<?php
	include 'config.php';
	$id1 = $_POST["id"];
	$task = $_POST["task"];
	$date = $_POST["date"];
	$time = $_POST["appt"];


	$sql = "insert into job values(?,?,?,?);";

	// echo $id1;
	// echo $pass;




//echo $id."<br>".$name."<br>".$email."<br>".$phone."<br>".$gender."<br>".$date."<br>".$password."<br>".$designation."<br>".$department;

		if($stmt = $conn->prepare($sql))
		{
				$stmt->bind_param('ssss',$id1,$task,$date,$time);
				$stmt->execute();
			if ($stmt->affected_rows!=0 && $stmt->error=="")
			{
				?> <div style="border: solid 2px; padding: 20px;"><center> <h1>  New task inserted Successfully!!  </h1></center></div>

				<?php
			} else
			{
					?> <div style="border: solid 2px; padding: 20px;"><center> <h1>  Could not make new Faculty!!!<br>Enter new details carefully!!! </h1></center></div><?php
			}
		}
		else
		{
			?> <div style="border: solid 2px; padding: 20px;"><center> <h1> Query failed!!! </h1></center></div><?php
		}



	?> <div style="border: solid 2px; padding: 20px;"><center> <h1> <a href="index.php" >Go to homepage.</a> </h1></center></div><?php
?>
