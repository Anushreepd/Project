

<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['submit']))
{
        $name=$_POST['name'];
        $fname=$_POST['fname'];  
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        $adhar=$_POST['adhar'];  
        $email= $_POST['email'];
        $phone=$_POST['phone'];  
        $address=$_POST['address'];
        $college=$_POST['college'];
        $state=$_POST['state'];
        $district=$_POST['district'];
        $city= $_POST['city'];
        $pin= $_POST['pin'];
        $ini=$_POST['initial'];
        $des=$_POST['destination'];
        $file1= addslashes(file_get_contents($_FILES["imagep"]["tmp_name"]));
        $file2= addslashes(file_get_contents($_FILES["imager"]["tmp_name"]));
if ($ini!=$des)
{
    $query="select * from appform where email='$email'";
    $query_run= mysqli_query($con,$query);
    if(mysqli_num_rows($query_run)>0)
    {
         echo '<script type="text/javascript">alert("Email-Id already taken try another one")</script>';
    }
    else
    {
    $query="insert into appform(name,fname,gender,dob,adhar,email,phone,address,college,state,district,city,pin,initial,destination,imagep,imager)"
        . "values('$name','$fname','$gender','$dob','$adhar','$email','$phone','$address','$college','$state','$dis','$city','$pin','$ini','$des','$file1','$file2')";
        $query_run=mysqli_query($con, $query);
      if ($query_run)
      {
          $_SESSION['name']=$name;
    $_SESSION['fname']=$fname;
    $_SESSION['gender']=$gender;
    $_SESSION['dob']=$dob;
    $_SESSION['adhar']=$adhar;
    $_SESSION['email']=$email;
    $_SESSION['phone']=$phone;
    $_SESSION['address']=$address;
    $_SESSION['college']=$college;
    $_SESSION['state']=$state;
    $_SESSION['district']=$dis;
    $_SESSION['city']=$city;
    $_SESSION['pin']=$pin;
    $_SESSION['initial']=$ini;
    $_SESSION['destination']=$des;
    $_SESSION['imagep']=$file1;
     $_SESSION['imager']=$file2;
          header('location:fileshow.php');  
      }
      else  
      {
             echo '<script type="text/javascript">alert("Registration Failed")</script>';
      }
    }
}
else{
echo '<script type="text/javascript">alert("Your Initial And Destination Places cannot be same")</script>';
  }
}
?>