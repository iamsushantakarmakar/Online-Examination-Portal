<?php
session_start();
include ('db.php');
$name=$_POST['name'];
$password=$_POST['password'];
$salt="codeflix";
$password_enc=sha1($password.$salt);
$sql1=mysqli_query($sql,"select * from students where name='$name'&& password='$password_enc' and status='APPROVED'");
$sql2=mysqli_query($sql,"select * from admins where username='$name'&& password='$password'");
$row=mysqli_num_rows($sql1);
$row1=mysqli_num_rows($sql2);
if ($row1==1 && $name='admin')
{
  $_SESSION['admin']=$name;
  header ('location:adminpanel.php');
}
else if ($row==1 && $name!='admin')
{
  $_SESSION['user']=$name;
  header ('location:studentdashboard.php');
}
else 
{
  header ('location:signlog.html');
}


?>