<?php
include('connection.php');
if(isset($_POST['submitlogin']))
{
$em=$_POST['email'];
$ps=$_POST['pass'];
}
if($em==NULL || $ps==NULL)
{
echo "<script>alert('Some of the fields is empty.');</script>";
	echo "<script>window.location='login.php';</script>";
}
if($em!=NULL && $ps!=NULL)
{
	
	
	$query=mysqli_query($con,"SELECT email,pass FROM adastra.signup WHERE email='$em' and pass='$ps'");
	while($row=mysqli_fetch_array($query))
	{
	
	$newem=$row['email'];
	$newps=$row['pass'];
}
if(@$em==@$newem && @$ps==@$newps)
	    {
header("location: createteam.php");
	}
if(@$em!=@$newem || $ps!=@$newps)
{
	echo "<script>alert('Incorrect credential.');</script>";
	echo "<script>window.location='login.php';</script>";
}

}

?>