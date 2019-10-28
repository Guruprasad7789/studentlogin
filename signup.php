<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<title>ADASTRA 2K19</title>
<link type="text/css" rel="stylesheet" href="css/style.css">

  </head>
  <body>
    <center>
	<div>
<img style="height:200px; width:100%; opacity:0.6;" src="image/ADST.png"></div>

<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">


<div class="form">

<form class="signup" action="sign.php" method="POST" enctype="multipart/form-data"><br>
	<b>Name:</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="test" name="name" placeholder="&nbsp Enter your name..." required><br><br>
	<b>E mail:</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="test" name="email" placeholder="&nbsp Enter your email" required><br><br>
	<b>Mobile no:</b><input type="test" name="number" placeholder="&nbsp Enter your mobile no... " required><br><br>
	<b>University:</b><input type="test" name="university" placeholder="&nbsp Enter your university name... " required><br><br>
    <b>College:</b>&nbsp&nbsp&nbsp&nbsp <input type="test" name="college" placeholder="&nbsp Enter your college name... " required><br><br>
    <b>Branch:</b>&nbsp&nbsp&nbsp&nbsp <input type="test" name="branch" placeholder="&nbsp Enter your branch name... " required><br><br>
    <b>Regd no:</b> &nbsp&nbsp<input type="test" name="regd" placeholder="&nbsp Enter your registration no... " required><br><br>
	<b>D.O.B:</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <select name="date" required>
	
	<option>Date</option>
	<?php
	for($i=1;$i<=31;$i++)
	{
	?>
	<option value="<?php echo $i;?>"><?php echo $i;}?></option>
	</select>
	<select name="month" required>
	<option>Month</option>
	<?php
	$month=array("January","February","March","April","May","June","July","August","September","October","November","December");
	$count=count($month);
	for($i=0;$i<$count;$i++)
	{
	?>
	<option value="<?php echo $month[$i];?>"><?php echo $month[$i];}?></option>
	</select>
	<select name="year" required>
	<option>Year</option>
	<?php
	for($i=1980;$i<=2010;$i++)
	{
	?>
	<option value="<?php echo $i;?>"><?php echo $i;}?></option>
	</select>
	<br><br>
	<b>Gender:</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Male<input class="input" type="radio" name="gender" value="male" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	Female<input class="input" type="radio" name="gender" value="female" required>&nbsp&nbsp&nbsp&nbsp
	Others<input class="input" type="radio" name="gender" value="others" required>
	
	<br><br>
	<b>City:</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="test" name="city" placeholder="&nbsp Enter your city name...." required><br><br>
	<b>Password:</b> <input type="password" name="pass" placeholder="&nbsp Enter your password...." required><br><br>
	<b>Password:</b> <input type="password" name="pass1" placeholder="&nbsp Confirm your password...." required><br><br>
	
    <button type='submit' name='submitsignup'> &nbsp&nbsp&nbsp&nbsp <b>Sign up</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
	<a style="	
	margin-left:40px;
	height:36px;
	width:180px;
	border:2px solid black;
	font-size:20px;
    border-radius:10px;
	background-color:#71AFDE;
    color:white;
	font-family:serif;
	font-weight:bold;display:inline-block;
	text-decoration:none;" href="login.php">&nbsp&nbsp Login here &nbsp&nbsp</a>
	</form>
	</div>
</div>
</center><br>
	
	    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
