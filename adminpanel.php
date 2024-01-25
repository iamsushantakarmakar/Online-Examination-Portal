<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sider Menu Bar CSS</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Css/admincss.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>Online Exam</header>
  <ul>
<li><a href="adminpanel.php"><i class="fas fa-qrcode"></i>Dashboard</a></li>
<li><a href="uploadquestionsform.php"><i class="fas fa-link"></i>Upload Questions</a></li>
<li><a href="studentdetails.php"><i class="fas fa-stream"></i>Student Details</a></li>
<li><a href="studentresults.php"><i class="fas fa-calendar-week"></i>Students Results</a></li>

</ul>
</div>

<?php
session_start();
include('db.php');
?>
<div class="container text-center">
<?php
echo "Welcome"."&nbsp".$_SESSION['admin'];
?>
</div>
<?php
if($_SESSION['admin']=="")
{
  header ('location:signlog.html');
}
?>

<?php
$admin=$_SESSION['admin'];
$query=mysqli_query($sql,"select * from students where status='NOT APPROVED'");
$check=mysqli_num_rows($query);
if ($check>0)
{
?>
<br><br>
<div class="container">
<h2 style="color:blue">Student Registration Pending List:</h2>
<br>
<table class="table table-dark table-hover">
<tr>
 <th>Name</th>
 <th>Email Id</th>
 <th>Phone</th>
 <th>Status</th>
 <th>Action</th>
</tr>
<?php
while ($row=mysqli_fetch_array($query))
{
?>
<tr>
 <td><?php echo $row['name']; ?></td>
 <td><?php echo $row['email']; ?></td>
 <td><?php echo $row['phone']; ?></td>
 <td><?php echo $row['status']; ?></td>
 <td>&nbsp;<a href="approved.php?id=<?php echo $row['id']; ?>">Approve</a>&nbsp;</td>
</tr>
<?php
}
}
?>
</table>
</div>
<div class="container" style="text-align:center">
<form action="logout.php">
</br><input type="submit" class="btn btn-info" value="Logout"></br>
</form>
</div>
  </body>
</html>
