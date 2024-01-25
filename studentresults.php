<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<?php
include('db.php');
$query=mysqli_query($sql,"select * from result order by id desc limit 10");

?>
<body>
<br>
<br>
<div class="container">
<table class="table table-dark table-hover">

<tr>

<th>Id</th>
<th>Name</th>
<th>Total Question</th>
<th>Total Question Attemped</th>
<th>Right Answer</th>
<th>Wrong Answer</th>
</tr>
<?php
while($row=mysqli_fetch_array($query))
{
?>
<tr>
<td><?php  echo $row['id'];   ?></td>
<td><?php  echo $row['name'];   ?></td>
<td><?php  echo $row['total_ques'];   ?></td>
<td><?php  echo $row['total_att'];   ?></td>
<td><?php  echo $row['total_right'];   ?></td>
<td><?php  echo $row['total_wrong'];   ?></td>
</tr>
<?php
}
?>
</table>
</div>
</div>
<div class="container" style="text-align:center">
<form action="adminpanel.php">
<br><input type="submit" name="home" class="btn btn-info" value="HOME" >
</form>
</div>
</body>
</html>