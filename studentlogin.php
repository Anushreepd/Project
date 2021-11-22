<html>
    <title>student login</title>
    <style>
        body{
            background: linear-gradient(to top, #ffffcc 0%, #ffcc00 100%);
        }
        h1{
            font-family: serif;
            font-size: 70px;
        }
        form{
            width: 400px;
            padding: 40px 10px;
            box-sizing: border-box;
            position: fixed;
            left: 50%;
            top:60%;
            transform: translate(-50%, -50%);
        }
        input{
            width: 100%;
            background: white;
            border: 1px solid black;
            border-radius: 3px;
            padding: 6px 20px;
            box-sizing: border-box;
            margin-bottom: 20px;
            font-size: 20px;
            cursor: pointer;
        }
        input[type  ="submit"]{background: #ffcc00; 
                               cursor: pointer;
                               width: 65%;
                               font-family: calisto MT;
                               border: 2px solid;
                               color: black;
        }
        a{
            font-family: calisto MT;
            font-size: 20px;
            color: black;
        }
    </style>        
    <body><center>
        <h1>STUDENT LOGIN</h1>
        <img src="login.png" width="150px" height="150px"/>
            <form action="" method ="post">
                <input type="email" name="email" placeholder="Enter EMAIL-ID" required><br>
            <input type="password" name="password" placeholder="Enter PASSWORD" requireds>
            <input type="submit" name="submit" >
            <br><br><a href="forgetpassword.php">Forgot Password?</a>
            </form>
            </center>  
    </body>
</html>
<?php
 session_start();
  $con=mysqli_connect("localhost","root","","project");
$email= filter_input(INPUT_POST,'email');
$password= filter_input(INPUT_POST,'password');
   
    if(isset($_REQUEST["submit"]))
    {
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];
    $query="select * from student where email='$email' && password='$password' ";
    $sql= mysqli_query($con,$query);
    if(mysqli_num_rows($sql)==true)    
    {
          header('location:profile.php');  
    }    
 else {
      echo '<script type="text/javascript">alert("User Id and Password is Wrong")</script>';
}
    }
 ?>