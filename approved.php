<?php
session_start();
include('db.php');
$id=$_GET['id'];
mysqli_query($sql,"update students set status='APPROVED' where id='$id'");
header('location:adminpanel.php');

?>