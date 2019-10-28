
<?php
SESSION_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link type="text/css" rel="stylesheet" href="css/style.css">
<title>ADASTRA 2K19</title>
  </head>
  <body>
<br>
<center>
<h1 style="color:white;font-family:myfont;font-size:45px;">
 Create your own team.
</h1>
</center>

<div class="container">
<div class="row">
<div style="background-image:url('image/robo1.jpg');" class="eventname col-md-12 col-lg-4 col-sm-12 col-xs-12">
<h2 align="center"><u>BATTLEBOTS</u></h2>
<a href="event-details/BATTLEBOTS.pdf">Click here to get details.</a>
<br><br><br>
<form method="post" action="teamidcreation.php">
<button type="submit" value="Battlebots" name="submit">Create team</button>
</form>
</div>
<div style="background-image:url('image/snag.jpg');" class="eventname col-md-12 col-lg-4 col-sm-12 col-xs-12">
<h2 align="center"><u>SNAG-CROSS</u></h2>
<a class="xyz" href="event-details/SNAG CROSS.pdf">Click here to get details.</a>
<br><br><br>
<form class="xyz" method="post" action="teamidcreation.php">
<button type="submit" value="Snagcross" name="submit">Create team</button>
</form>
</div>
<div style="background-image:url('image/rapid.jpg');" class="eventname col-md-12 col-lg-4 col-sm-12 col-xs-12">
<h2 align="center"><u>RAPID WHEELS</u></h2>
<a href="event-details/Rapid wheels.pdf">Click here to get details.</a>
<br><br><br>
<form method="post" action="teamidcreation.php">
<button type="submit" value="RapidWheels" name="submit">Create team</button>
</form>
</div>
<br>
</div>
<div class="row">
<div style="background-image:url('image/fortune.jpg');" class="eventname1 col-md-12 col-lg-4 col-sm-12 col-xs-12">
<h2 align="center"><u>FORTUNE HUNTER</u></h2>
<a href="event-details/fortune hunter.pdf">Click here to get details.</a>
<br><br><br>
<form method="post" action="teamidcreation.php">
<button type="submit" value="FortuneHunter" name="submit">Create team</button>
</form>
</div>
<div style="background-image:url('image/tech.jpg');" class="eventname1 col-md-12 col-lg-4 col-sm-12 col-xs-12">
<h2 align="center"><u>TECH-QUIZ</u></h2>
<a href="event-details/tech quiz.pdf">Click here to get details.</a>
<br><br><br>
<form method="post" action="teamidcreation.php">
<button type="submit" value="TechQuiz" name="submit">Create team</button>
</form>
</div>
<div style="background-image:url('image/math.jpg');" class="eventname1 col-md-12 col-lg-4 col-sm-12 col-xs-12">
<h2 align="center"><u>MATH OLYMPIAD</u></h2>
<a href="event-details/matholympiad.pdf">Click here to get details.</a>
<br><br><br>
<form method="post" action="teamidcreation.php">
<button type="submit" value="MathOlympiad" name="submit">Create team</button>
</form>
</div>
</div>
</div>
<br>
<center class="col-sm-12 col-xs-12">
<form method="post" action="logout.php">
<button style="width:300px; height:50px;font-size:25px;
font-family:myfont;
font-weight:bold;
background-color:black;
color:white;
border:2px solid white;
border-radius:10px;" name="logout">Log Out</>
</form>
</center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
 
 </body>
</html>
