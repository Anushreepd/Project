<html>
    <title>admin login</title>
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
            top:55%;
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
        input[type  ="submit"]{background:  #ffcc00; 
                               cursor: pointer;
                               width: 65%;
                               font-family: calisto MT ;
                               border: 2px solid black;
                               color: black;
                              
                             
        }
    </style>
    <body><center>
        <h1>ADMIN LOGIN</h1>
        <img src="administrator.jpg" width="180px" height="180px"/>
            <form  method ="post">
                <input type="text" name="adminid" placeholder="ADMIN ID"required>
                <input type="submit" name="submit" >
            </form>
            </center>  
    </body>
</html>
<?php
 session_start();
  $con=mysqli_connect("localhost","root","","project");
$adminid= filter_input(INPUT_POST,'adminid');
    if(isset($_REQUEST["submit"]))
    {
    $adminid=$_REQUEST["adminid"];
    $query="select * from admin where adminid='$adminid' ";
    $sql= mysqli_query($con,$query);
    if(mysqli_num_rows($sql)==true)
    {
        header('location:displayadmin.php');  
    }
    
 else {
     
     echo '<script type="text/javascript">alert("Admin ID not found in the record")</script>';  
}
    }
 ?>