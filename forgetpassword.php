<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['submit']))
  {
    $phone=$_POST['phone'];
    $email=$_POST['email'];
     $query="select * from student where email='$email' && phone='$phone'";
    $query_run= mysqli_query($con,$query);
    if(mysqli_num_rows($query_run)==true){
      $_SESSION['phone']=$phone;
      $_SESSION['email']=$email;
     header('location:resetpassword.php');
    }
    else{
        echo "Invalid Details. Please try again.";
    }
  }
  ?>
<html>
    <title>Forget password</title>
    <style>
        
    </style>
    <form action="" method="post">
        <input type="text" name="email" placeholder="Enter Email-Id">
        <input type="text" name="phone" placeholder="Enter Mobile Number">
        <input type="submit" name="submit" value="RESET">
    </form>
</html>  