<?php
SESSION_START();
include("connection.php");
include("teamidcreation.php");

$teamleaderid=$_POST['tmleader'];
$_SESSSION['teamldid']=$teamleaderid;
$tm1=$_POST['tm1'];
$tm2=$_POST['tm2'];
$tm3=$_POST['tm3'];
$tm4=$_POST['tm4'];
$tm5=$_POST['tm5'];

$sql="INSERT INTO `teamcreation`(`event`, `teamleaderid`, `tm1id`, `tm2id`, `tm3id`, `tm4id`, `tm5id`) 
VALUES ('$eventname','$teamleaderid','$tm1','$tm2','$tm3','$tm4','$tm5')";
$query=mysqli_query($con,$sql);
if($query)
{
	echo "<h1 style='color:white;'>".$_SESSSION['teamldid']."</h1>";
	header("location:createtmid.php");
}
?>