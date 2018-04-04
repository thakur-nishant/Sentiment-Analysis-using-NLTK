<?php
 session_start();
 
 $con=  mysqli_connect("localhost","root","");

 mysqli_select_db($con,"senti")or die(mysqli_error('Failed to login!'));

 $un=$_POST['username'];
 $ps=$_POST['password'];
 
$sql="SELECT * FROM user WHERE u_name='$un' AND u_pass='$ps'";

$result=  mysqli_query($con,$sql);

 echo $sql;

 if(mysqli_num_rows($result) > 0)
 {
    
    echo "<script>alert('sss')</script>";
    $_SESSION['username'] = $un;
    header('Location: index.php?username=' . $un);    
 }
 else
 {

    header('Location: index.php?login=fail');    
 
 }
 
?>


