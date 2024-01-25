<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid" style="font-size:70px; text-align:center; color:blue;">
<br><br>
<b>
<?php
session_start();
include('db.php');
if($_SESSION['user']=="")
{
  header ('location:signlog.html');
}
echo "Welcome"."&nbsp".$_SESSION['user']."&nbsp"."Best of Luck:)";

?>
</b>
</div>
<div class="container" style="text-align:center">
<br><br><form action="dashboard.php">
<input type="submit" value="Start Exam Now" class="btn btn-outline-success btn-lg">
</form>
<form action="logout.php">
</br><input type="submit" class="btn btn-outline-danger" value="Logout"></br>
</form>
</div>
</body>
</html>