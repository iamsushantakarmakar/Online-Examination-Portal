<html>
<body>
<?php
include('db.php');
session_start();
$_SESSION['user'];
if(isset($_POST['submit']))
{
  $question=$_POST['question'];
  $option1=$_POST['option1'];
  $option2=$_POST['option2'];
  $option3=$_POST['option3'];
  $option4=$_POST['option4'];
  $answer=$_POST['options'];
  mysqli_query($sql,"insert into question values ('','$question','$option1','$option2','$option3','$option4','$answer') ");
header("location:uploadquestionsform.php");
}
elseif(isset($_POST['home']))
{
 header("location:adminpanel.php");
}
?>
</body>
</html>