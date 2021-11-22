<html>
    <style>
        body{
               background: linear-gradient(to top, #ffffcc 0%, #ffcc00 100%);
        }
        form{
            
            width: 400px;
            padding: 40px 20px;
            box-sizing: border-box;
            position: fixed;
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
        input[type  ="submit"]{background:khaki; 
                               cursor: pointer;
        }
        table{
            align-content: center;
            width: 50%;
            font-family: sans-serif;
            font-size: 20px;
             background: white;
        }
    </style>
    <body>
        <form action="" method="post" >
            <h3>View My Details</h3>
            <input type="text" name="phone" placeholder="Enter your Mobile Number">
            <input type="submit" name="submit" placeholder="ABOUT ME" required>
              </form>
     <br><br><center> <table1 border="1px">
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
                         ?>
              <tr><td rowspan="6">   <?php echo '<img src="data:image;base64,'. base64_encode($row['imagep']).'" alt="Image" style="width:200px; height:200px;">'?><br></td></table1>
         <table border="1px">
              <tr><th><?php  echo"Your Name     :".$row['name']."<br>";?></th></tr>
                  <tr><th><?php  echo"Date of Birth     :".$row['dob']."<br>";?></th></tr>
                             <tr><th><?php  echo"Gender     :".$row['gender']."<br>";?></th></tr>
               <tr><th><?php  echo"Mobile Number     :".$row['phone']."<br>";?></th></tr>
           <tr><th><?php echo"Father's Name     :".$row['fname']."<br>";?></th></tr>
           <tr><th><?php   echo"Adhar Number     :".$row['adhar']."<br>";?></th></tr>
            <tr><th><?php   echo"Address     :".$row['address']."<br>";?></th></tr>
    <tr><th><?php  echo"College Name     :".$row['college']."<br>";?></th></tr>
      <tr><th><?php echo"State     :".$row['state']."<br>";?></th></tr>
     <tr><th><?php  echo"District     :".$row['district']."<br>";?></th></tr>
    <tr><th><?php  echo"City/Town/Village     :  ".$row['city']."<br>";?></th></tr>
    <tr><th><?php  echo "Pincode     :".$row['pin']."<br>";?></th></tr>
    <tr><th><?php  echo"Bus Pass From     :  ".$row['initial']."<br>";?></th></tr>
    <tr><th><?php  echo"Bus Pass To     :"  .$row['destination']."<br></center>";?></th></tr></table><br>
    <h4>
        YOUR RECEIPT
    </h4><?php echo '<img src="data:image;base64,'. base64_encode($row['imager']).'" alt="Image" style="width:500px; height:500px;">'?>
              
            
 <?php
                     }
                     }
 else {
     echo '<script type="text/javascript">alert("You have not yet filled the Apllication")</script>';
 }     
                 }       
                 ?> </table></center>
</body>  
</html>