<html>
    <title>Register employee</title>
    <style>
        body{
             font-family: sans-serif;
             background: bisque;
        }
         form{
            width: 400px;
            padding: 40px 10px;
            box-sizing: border-box;
            position: fixed;
            left: 50%;
            top:40%;
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
        input[type  ="submit"]{background:gray; 
                               cursor: pointer;
                               width: 50%;
                               font-family: monospace;
                               border: 2px solid;
        }
        h3{
            font-size: 40px;
        }
    </style>
    <body><center><h3>Register</h3>
       <form action="" method="post" enctype="multipart/form-data">
               <input type="text" name="eid"  placeholder="Enter Employee Id" >
               <input type="text"  name="name"  placeholder="Employee Name" >
              <input type="file" name="photo" placeholder="Upload Empployee photo">
               <input type="password" name="password"  placeholder="Enter New Password" >
              <input type="submit" name="submit" value="REGISTER">
        </form>
    </center>
       <?php
session_start();
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['submit']))
{
        $eid=$_POST['eid'];
        $name=$_POST['name'];
        $photo= addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));
        $password=$_POST['password'];
    $query="insert into employee(eid,name,photo,password) values ('$eid','$name','$photo','$password')";    
    $query_run=mysqli_query($con, $query);
      if ($query_run)
      {
           echo '<script type="text/javascript">alert("Registration Successful")</script>';
     
      }
      else  
      {
             echo '<script type="text/javascript">alert("Registration Failed")</script>';
      }
}
?>
    </body>
</html>
    