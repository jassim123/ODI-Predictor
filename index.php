<!DOCTYPE html>
<?php 
require 'connect.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Cricket</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    
  </head>

  <body style="background:#62488A;">
<center><h1 style="color:white; font-size:50px;">Cricket Predictions</h1></center>
    
    <div class="container" style="margin-top:100px; width:800px; height:400px; padding:10px; border-radius:10px; background:#EEE; ">
	
	<br><br><br>

	<form class="form-horizontal" role="form" method="post" action="index5.php">
  <div class="form-group">
    <label for="team1" class="col-sm-3 control-label">Team1</label>
 <div class="col-sm-6">  
  <select name="team1" class="form-control">
   <?php
  $result = mysqli_query($con,"SELECT name FROM teams Order By name");

while($row = mysqli_fetch_array($result))
  {
  echo "<option>".$row['name']."</option>";
  
  }
 ?>

</select>
  </div></div>
  <br>
  <div class="form-group">
    <label for="team2" class="col-sm-3 control-label">Team2</label>
    <div class="col-sm-6">
     <select name="team2" class="form-control">
  <?php
  $result = mysqli_query($con,"SELECT name FROM teams Order By name");

while($row = mysqli_fetch_array($result))
  {
  echo "<option>".$row['name']."</option>";
  
  }
 ?>
</select>
    </div>
  </div>
<br>
  <div class="form-group">
    <label for="venue" class="col-sm-3 control-label">Venue</label>
    <div class="col-sm-6">
      <select name="venue" class="form-control">
 <?php
  $result = mysqli_query($con,"SELECT name FROM grounds Order By name");

while($row = mysqli_fetch_array($result))
  {
  echo "<option>".$row['name']."</option>";
  
  }
 ?>
</select>
    </div>
  </div>
<br>
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
<?php 
mysqli_close($con);
?> 
 </body>
</html>
