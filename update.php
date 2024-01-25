<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<?php
include('db.php');
$_GET['id'];
$_GET['un'];
$_GET['em'];
$_GET['ph'];
$_GET['st'];
?>
<body>
<div class="container">
  <br><h2>Update Student Details</h2><br>
<form method='get' class="form-inline">
<div class="form-group">
<label for="focusedInput">Student Id</label><br>
<input class="form-control" type="text" name="id" value="<?php echo $_GET['id']; ?>" readonly></br></br>
<label for="focusedInput">Name</label><br>
<input class="form-control" type="text" name="name" value="<?php echo $_GET['un']; ?>"></br></br>
<label for="focusedInput">Email Id</label><br>
<input class="form-control" type="text" name="email" value="<?php echo $_GET['em']; ?>"></br></br>
<label for="focusedInput">Phone</label><br>
<input class="form-control" type="text" name="phone" value="<?php echo $_GET['ph']; ?>"></br></br>
<label for="focusedInput">Status</label><br>
<input class="form-control" type="text" name="status" value="<?php echo $_GET['st']; ?>"></br></br>
<input type="submit" name="submit" value="Update" class="btn btn-success"><br>
</form>
<form action="studentdetails.php">
<br><input type="submit" name="cancel" value="Cancel" class="btn btn-danger">
</form>
</div>
<?php
if ($_GET['submit'])
{
  $id=$_GET['id'];
  $name=$_GET['name'];
  $email=$_GET['email'];
  $phone=$_GET['phone'];
  $status=$_GET['status'];
  $query1="update students set name='$name',email='$email',phone='$phone',status='$status' where id='$id'";
  $data=mysqli_query($sql,$query1);
  if ($data)
  {
    header ("location:studentdetails.php");
  }
  else
  {
    echo "<font color='red'>Record not updated";
  }
}

?>
</div>
</body>
</html>