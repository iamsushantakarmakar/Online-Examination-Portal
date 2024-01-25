<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 textarea{
   resize: none;
 }
div.a{
  text-align:center;
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
$query=mysqli_query($sql,"select * from question");
$num=mysqli_num_rows($query);
?>
<div class="a">
</br><h1><u><font color='blue'>PHP ONLINE EXAMINATION</font></u></h1>
<h1><font color='green'>Welcome <?php echo $_SESSION['user']; ?></font></h1>

 <h3> <?php echo $_SESSION['user']; ?> you have to select only one out of 4. Best of Luck :)</h3>
</div>
<div><span id="display"></span></div><br>
<div class="container">
<form method="post" action="results.php" id="MCQuestion">
<?php
$i=1;
$count=0;
$count1=1;
$numbers = range(1,$num);
  shuffle($numbers);
            for($loop=1;$loop<=5;$loop++){
            
            $fetchQuestionNo=$numbers[$count];
$qaquery=mysqli_query($sql,"select * from question where id='$fetchQuestionNo'");
while ($row=mysqli_fetch_array($qaquery))
{
?>
<br><div class="alert alert-info">
<label><?php echo $i.".&nbsp;"; ?></label><input type="hidden" name="q<?php echo $count1; ?>" value="<?php echo $fetchQuestionNo; ?>">
<label><?php echo $row['question']; ?></label><br>
A)&nbsp;<input type="radio" name="options<?php echo $fetchQuestionNo; ?>" value="Option1">
<label><?php echo $row['option_1']; ?></label><br>
B)&nbsp;<input type="radio" name="options<?php echo $fetchQuestionNo; ?>" value="Option2">
<label><?php echo $row['option_2']; ?></label><br>
C)&nbsp;<input type="radio" name="options<?php echo $fetchQuestionNo; ?>" value="Option3">
<label><?php echo $row['option_3']; ?></label><br>
D)&nbsp;<input type="radio" name="options<?php echo $fetchQuestionNo; ?>" value="Option4">
<label><?php echo $row['option_4']; ?></label><br>
</div>
<?php
$i++;
$count++;
$count1++;
}
}
?>
<br><br><input type="submit" name="submited" value="SUBMIT" class="btn btn-success">
</form>
<form action="studentdashboard.php">
<div class="a">
</br><input type="submit" value="Cancel" class="btn btn-danger"></br>
</div>
</form>
<script>
                var div = document.getElementById('display');
                var submitted = document.getElementById('submitted');
                
                function CountDown(duration, display) {
                    var timer = duration, minutes, seconds;
                    
                    var interVal=  setInterval(function () {
                        minutes = parseInt(timer / 60, 10);
                        seconds = parseInt(timer % 60, 10);
                        
                        minutes = minutes < 10 ? "0" + minutes : minutes;
                        seconds = seconds < 10 ? "0" + seconds : seconds;
                        display.innerHTML ="Times Left: "+"<b>" + minutes + "m : " + seconds + "s" + "</b>";
                        if (timer > 0) {
                            --timer;
                        }else{
                            clearInterval(interVal)
                           testFunction();
                        }
                        
                    },1000);
                }
                
                function testFunction(){
                    display.innerHTML="Time is up!";
                    document.getElementById('MCQuestion').submit();
                }
                CountDown(300,div);
            </script>
</div>
</body>
</html>