<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
  textarea{
    resize: none;
  }
</style>
</head>
<body>
<?php
include('db.php');
session_start();
if($_SESSION['admin']=="admin")
{
?>
<br><div class="container">
<h3>Add New Question</h3><br>
<form method="post" action="uploadquestions.php">
<textarea name="question" rows="3" cols="135" placeholder="Enter Question Here" required></textarea><br><br>
<textarea name="option1" rows="2" cols="135" placeholder="Enter First Option" required></textarea><br><br>
<textarea name="option2" rows="2" cols="135" placeholder="Enter Second Option" required></textarea><br><br>
<textarea name="option3" rows="2" cols="135" placeholder="Enter Third Option"></textarea><br><br>
<textarea name="option4" rows="2" cols="135" placeholder="Enter Forth Option"></textarea><br><br>
Choose Your Answer:<br><br>
<input type="radio" name="options" value="Option1">Option 1<br>
<input type="radio" name="options" value="Option2">Option 2<br>
<input type="radio" name="options" value="Option3">Option 3<br>
<input type="radio" name="options" value="Option4">Option 4<br>
<br><input type="submit" name="submit" class="btn btn-primary" value="SUBMIT">
</form>
</div>
<div class="container" style="text-align:center">
<form action="adminpanel.php">
<br><input type="submit" name="home" class="btn btn-info" value="HOME" >
</form>
</div>
<?php
}
else
{
  header("location:signlog.html");
}
?>
</body>
</html>