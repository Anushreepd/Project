<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['submit']))
  {
    $phone=$_SESSION['phone'];
    $email=$_SESSION['email'];
    $password= md5($_POST['newpassword']);
   
        $query=mysqli_query($con,"update student set password='$password' where  email='$email' && phone='$phone' ");
   if($query)
   {
echo "<script>alert('Password successfully changed');</script>";
   }
  else{
       echo 'failed';
  }
  }
  ?>
<HTML>
    <TITLE>Reset Password</TITLE>
    <style>
        
    </style>
    <body>
        <form action="" method="post">    
    <input type="password" name="newpassword" placeholder="Enter New Password" required>
    <input type="password" name="cpassword" placeholder="Confirm Password">
    <input type="submit" name="submit" value="UPDATE PASSWORD" required>
</form>   
    </body>
</HTML>
               
                