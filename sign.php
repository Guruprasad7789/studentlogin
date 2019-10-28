<?php
include('connection.php');
SESSION_start();
$x;
if(isset($_POST['submitsignup']))
{
	$name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $university=$_POST['university'];
	$college=$_POST['college'];
	$branch=$_POST['branch'];
	$regd=$_POST['regd'];
	$_SESSION['reg']=$regd;
	$date=$_POST['date'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	$city=$_POST['city'];
	$gender=$_POST['gender'];
	$pass=$_POST['pass'];
	$pass1=$_POST['pass1'];
}
$dob=$date.".".$month.".".$year;
if($pass!=$pass1){
	echo "<script>alert('Your confirmed password is not same.');</script>";
	echo "<script>window.location='signup.php';</script>";
}
if($pass==$pass1)
{
$mysql="SELECT email FROM `signup`";
$query=mysqli_query($con,$mysql);
while($row=mysqli_fetch_assoc($query))
{
if($email==$row['email'])
{
	$x=0;
}
if($email!=$row['email'])
{
	$x=1;
}
}
}
if($x==1)	
{
		if($name!=null && $email!=null && $number!=null && $university!=null && $college!=null && $branch!=null && $date!=null && $month!=null && $year!=null && $city!=null)
{ 
$sql="INSERT INTO adastra.signup(name,email,number,university,college,branch,regd,dob,gender,city,pass) VALUES('$name','$email','$number','$university','$college','$branch','$regd','$dob','$gender','$city','$pass')";
mysqli_query($con,$sql);

header("location: info.php");
}
}
if($x==0)
{
	echo "<script>alert('This email id is already exist.');</script>";
	echo "<script>window.location='signup.php';</script>";
}
?>