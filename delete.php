<?php
    include 'config.php';
//Define the query
$x = $_POST['name'];

$sql = "delete from job where name = ?";

//sends the query to delete the entry
    if($stmt = $conn->prepare($sql))
		{
      $stmt->bind_param('s',$x);
			$stmt->execute();
      $stmt->store_result();

			if ($stmt->affected_rows!=0 && $stmt->error=="")
			{
				?>
        <div style="border: solid 2px; padding: 20px;"><center> <h1>  Task Deleted Successfully!!  </h1></center></div>
				<?php
			} else
			{
					?> <div style="border: solid 2px; padding: 20px;"><center> <h1>  Could not Delete!!!<br>Enter new details carefully!!! </h1></center></div><?php
			}
		}
		else
		{
			?> <div style="border: solid 2px; padding: 20px;"><center> <h1> Query failed!!! </h1></center></div><?php
		}

    ?>
      <div style="border: solid 2px; padding: 20px;"><center> <h1> <a href="index.php" >Go to homepage.</a> </h1></center></div>
    <?php

?>
