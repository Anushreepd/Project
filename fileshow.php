<html>
    <title>
        Your Details
    </title>
    <style>
        body{
            background: linear-gradient(to top, #ffffcc 0%, #ffcc00 100%);
            font-family: sans-serif;
        }
        table{
            font-family:monospace; 
            background: white;
            width: 30%;
            font-size: 20px
        }
        h4{
              font-size: 35px;
        }
        form{
             width: 400px;
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
        input[type  ="submit"]{ background:#ffcc00;
                               cursor: pointer;
        }
    </style>
    <body><center><h4>YOUR DETAILS</h4>
        <img src="notes.png" width="100px" height="100px"><br><br>
         <?php
session_start();
?><table border="1px solid">
   <tr><td><?php  echo"Your Name     :".$_SESSION['name']."<br>";?></td></tr>
  <tr><td><?php echo"Father's Name     :".$_SESSION['fname']."<br>";?></td></tr>
  <tr><td><?php  echo"Gender     :".$_SESSION['gender']."<br>";?></td></tr>
   <tr><td><?php  echo"Date of Birth     :".$_SESSION['dob']."<br>";?></td></tr>
   <tr><td><?php   echo"Adhar Number     :".$_SESSION['adhar']."<br>";?></td></tr>
   <tr><td><?php   echo"Email - ID     :".$_SESSION['email']."<br>";?></td></tr>
    <tr><td><?php  echo"Mobile Number     :".$_SESSION['phone']."<br>";?></td></tr>
    <tr><td><?php   echo"Address     :".$_SESSION['address']."<br>";?></td></tr>
      <tr><td><?php  echo"College Name     :".$_SESSION['college']."<br>";?></td></tr>
     <tr><td><?php echo"State     :".$_SESSION['state']."<br>";?></td></tr>
    <tr><td><?php  echo"District     :".$_SESSION['district']."<br>";?></td></tr>
    <tr><td><?php  echo"City/Town/Village     :  ".$_SESSION['city']."<br>";?></td></tr>
    <tr><td><?php  echo "Pincode     :".$_SESSION['pin']."<br>";?></td></tr>
    <tr><td><?php  echo"Bus Pass From     :  ".$_SESSION['initial']."<br>";?></td></tr>
    <tr><td><?php  echo"Bus Pass To     :"  .$_SESSION['destination']."<br></center>";?></td></tr>

</table>
        <br><br><br>

        <form action="profile.php" method="post">
            <input type="submit" value="GO BACK TO PROFILE">
        </form></center>
    </body>
</html>  
    
