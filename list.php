<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="style.css">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>

  <body>
    <center>

      <?php
      include 'config.php';
              $sql = "select * from job;";
              if($stmt = $conn->prepare($sql))
              {
                $stmt->execute();
                $stmt->store_result();
                  if($stmt->num_rows!=0)
                  {
                  $stmt->bind_result($name, $task,$deadline,$deadline_time);

                  ?>
                  <table id="contact-list">
                   <thead>
                       <tr>
                           <th>Name</th>

                           <th>Task</th>

                           <th>Date</th>
                           <th>Time</th>

                           <th>Delete</th>
                       </tr>
                   </thead>
                   <tbody>
                  <?php
                  while ($stmt->fetch())
                  {
                      ?>
                      <tr>
                  <td class="contact-name"><?php echo $name; ?></td>
                  <td class="contact-email"><?php echo $task; ?></td>
                  <td class="contact-telephone"><?php echo $deadline; ?></td>
                  <td class="contact-telephone"><?php echo $deadline_time; ?></td>
                  <td class="contact-delete">
                    <form action='delete.php?name="<?php echo $name; ?>"' method="post">
                        <input type="hidden" name="name" value="<?php echo $name; ?>">
                        <input type="submit" name="submit" value="Delete">

                    </form>
                 </td>
                      </tr>
                      <?php
                  }
                }
                else
                {
                  ?>
                    <div style=" padding: 20px; font-size: 1.5em;"><center> <h1> No Tasks Yet </h1></center></div>
                  <?php

                }
              }
              else
              {
                die("Query failed!! \n");
              }
            ?>

    </center>


  </body>
</html>
