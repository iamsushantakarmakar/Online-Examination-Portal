<?php
include ('db.php');
$user=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$salt="codeflix";
$password_enc=sha1($password.$salt);
mysqli_query($sql,"insert into students values ('','$user','$email','$password_enc','$phone','NOT APPROVED')");
//echo "Registration successfull";
header("location:signlog.html");
//echo ($user.$pass.$phone.$address);
?>