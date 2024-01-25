<?php
include('db.php');
$id=$_GET['id'];
mysqli_query($sql,"delete from students where id='$id'");
header("location:studentdetails.php");
?>