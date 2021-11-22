<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['submit']))
{
  $phone=$_POST['phone'];
$name=$_POST['name'];  
$email= $_POST['email'];
$password=$_POST['password'];  
$cpassword=$_POST['cpassword'];
//*****
if ($password==$cpassword)
{
    $query="select * from student where email='$email'" ;
    $query1="select * from student where phone='$phone'";
    $query_run= mysqli_query($con,$query,$query1);
    if(mysqli_num_rows($query_run)>0)
    {
         echo '<script type="text/javascript">alert("Email-Id already taken try another one")</script>';
    }
    else
    {
       
     $query="insert into student(phone,name,email,password,cpassword) values ('$phone','$name','$email','$password','$cpassword')";
      $query_run=mysqli_query($con, $query);
      if ($query_run)
      {
          header('location:regsuc.php');  
      }
      else  
      {
             echo '<script type="text/javascript">alert("Registration Failed")</script>';
      }
    }
}
 else {
    echo '<script type="text/javascript">alert("Password and Confirm Password dont match")</script>';
    }
}
?>