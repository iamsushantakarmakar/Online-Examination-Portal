<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
div.a{
 text-align:center;
 color:blue;
}
</style>
</head>
<body>
<?php
include('db.php');
session_start();
if($_SESSION['user']=="")
{
  header ('location:signlog.html');
}
$_SESSION['user'];
$student=$_SESSION['user'];
$i=1;
$j=0;
$x=0;
$rightAnswer=0;
$res=array();
$id=array();
for($i=1;$i<=5;$i++)
{
  $qus=$_POST['q'.$i];
if(isset($_POST['options'.$qus]))
  {
                           $res[$j]=$_POST['options'.$qus];
    $id[$j]=$qus;
    $j++;
    $totalAttempt=$j;
   }
  $totalQuestion=$i;
}
foreach($res as $cr)
{
  $sql1=mysqli_query($sql, "select * from question where id='$id[$x]' and answer='$cr'");
            $num=mysqli_num_rows($sql1);
$rightAnswer+=$num;
$x++;
}
$wrongAnswer=$totalAttempt-$rightAnswer;
$finalresult="insert into result  values ('','$student','$totalQuestion','$totalAttempt','$rightAnswer','$wrongAnswer')";
$queryresult=mysqli_query($sql,$finalresult);
?>
<div class="a">
<br><h1>PHP ONLINE EXAMINATION</h1><br>
</div>
<caption><h2 style="text-align:center">Results</h2></caption><br>
<div class="container">
<table class="table table-striped">
  
  <tr>
    <td>Total Questions</td>
    <td><?php echo $totalQuestion; ?></td>
  </tr>
  <tr>
    <td>Total Questions Attempted</td>
    <td><?php echo $totalAttempt; ?></td>
  </tr>
  <tr>
    <td>Right Answers</td>
    <td><?php echo $rightAnswer; ?></td>
  </tr>
  <tr>
    <td>Wrong Answers</td>
    <td><?php echo $wrongAnswer; ?></td>
  </tr>
</table>
<br><form action="dashboard.php">
<input type="submit" value="Re Test" class="btn btn-info">
</form>
</div>
<br><form action="studentdashboard.php" style="text-align:center">
<input type="submit" value="Home" class="btn btn-success">
</form>

<form action="logout.php">
<div class="a">
</br><input type="submit" value="Logout" class="btn btn-danger"></br>
</div>
</form>
</body>


</html>