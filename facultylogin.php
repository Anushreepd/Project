<html>
    <title>faculty login</title>
    <style>
         body{
           background: linear-gradient(to top, #ffffcc 0%, #ffcc00 100%);
        }
         *{
            list-style: none;
            text-decoration: none;
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
            font-family: cursive;
            font-size: 20px;
            color: black;
        }
    </style>
  <center>  <h1>FACULTY LOGIN</h1>
    <body>
        <img src="admin.png" width="180px" height="180px"/>
            <form  method ="post">
              <input type="text" name="eid" placeholder=" Enter Employee ID"required>
           </h3><input type="password" name="password" placeholder=" Enter Password"required>
           <input type="submit" name="submit" ><br>
             <a href="addemp.php">Register Employee
             <br>Click Here</a>
            </form>   
    </body> 
   
</center>  
</html>
 <?php
 session_start();
  $con=mysqli_connect("localhost","root","","project");
$eid= filter_input(INPUT_POST,'eid');
$password= filter_input(INPUT_POST,'password');
   
    if(isset($_REQUEST["submit"]))
    {
    $eid=$_REQUEST["eid"];
    $password=$_REQUEST["password"];
    $query="select * from employee where eid='$eid' && password='$password'";
    $sql= mysqli_query($con,$query);
    if(mysqli_num_rows($sql)==true)
    
    {
        header('location:displayfaculty.php');  
    }
    
 else {
          echo '<script type="text/javascript">alert("Employee ID and Password is wrong")</script>'; 
}
    }
 ?>
