<html>
            <title>
generate id        
        </title>
    <style>
        *{margin: 0; padding: 0;}
        body{
        background: linear-gradient(to top, #ffffcc 0%, #ffcc00 100%);
        }
        form{
            width: 400px;
            padding: 40px 20px;
            box-sizing: border-box;
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
                               width: 70%;
        }
        a{
            font-size: 30px;
            color: black;
        }
        </style>
    <body>
    <center>
        <form action="" method="POST">
            <input type="number" name="phone" placeholder="Enter your mobile number">
            <input type="submit" name="submit" value="VIEWID">
            
        </form>
    </body>
    <?php
                    $con=mysqli_connect("localhost","root","","project");
                 if(isset($_POST['submit']))
                 {
                     $phone=$_POST['phone'];
                     $query="select * from appform where phone=$phone";
                     $result=mysqli_query($con,$query);     
                     if($result)
                     {
                         while ($row=mysqli_fetch_array($result)) 
                     {
                         ?><table>
                             <tr> <td><?php  echo"your ID:".$row['stid']."<br>";?></td>
    <tr> <td><?php  echo"Name     :".$row['name']."<br>";?></td><td>
        <?php  echo"Email   :  ".$row['email']."<br>";?></td></tr></table> 
     <?php
    }}
    }
 ?>
    <a href="viewpass.php">Generate pass</a>
</center>
</html>