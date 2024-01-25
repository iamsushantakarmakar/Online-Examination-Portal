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
<?php
include('db.php');
$query=mysqli_query($sql,"select * from students");
?>
<br>
<br>
<div class="container">
<table class="table table-dark table-hover">
<tr>
<th>Student Id</th>
<th>Name</th>
<th>Email</th>
<th>Phone Number</th>
<th>Status</th>
<th>Action</th>
</tr>
<?php
while($row=mysqli_fetch_array($query))
{
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['status']; ?></td>
<td><a href="update.php?id=<?php echo $row['id']; ?>& un=<?php echo $row['name']; ?>& em=<?php echo $row['email']; ?>& ph=<?php echo $row['phone']; ?>& st=<?php echo $row['status']; ?>" class="btn btn-info" role="button">Updata</a>&nbsp <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" role="button">Delete</a></td>
</tr>

<?php
}
?>


</table>
</div>
<div class="container" style="text-align:center">
<form action="adminpanel.php">
<br><input type="submit" name="home" class="btn btn-info" value="HOME" >
</form>
</div>
</body>
</html>