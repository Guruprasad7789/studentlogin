<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <title>ADASTRA 2019</title>
  </head>
  <body>
  <div>
<img style="height:200px; width:100%; opacity:0.6;" src="image/ADST.png"></div>
    <center class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="
	height:200px;width:100%;background-color:white;
	opacity:0.7; border-radius:50px;">
<?php
SESSION_start();
include("connection.php");
$regd=$_SESSION['reg'];
SESSION_unset();
$sql="SELECT id FROM adastra.signup where regd='$regd'";
$query=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($query))
{
	$id=$row['id'];
	}
$id_num=(int)$id;
$id_sum=10000+$id_num;
$real_id="19ADS".$id_sum;
echo "<h3 style='color:black;'>"."Keep your ID for future requirement."."</h3>";
echo "<h1 style='color:black;'>".$real_id."</h1>";
  
  $sql1="UPDATE adastra.signup SET realid='$real_id' where regd='$regd'";
 mysqli_query($con,$sql1);
?>
<h1><a style="	
opacity:1;
	height:45px;
	width:180px;
	border:2px solid black;
	font-size:30px;
    border-radius:10px;
	background-color:#71AFDE;
    color:white;
	font-family:serif;
	font-weight:bold;display:inline-block;
	text-decoration:none;
	" href="login.php">login here</a></h1>
</center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>


