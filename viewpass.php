<html><title>generate pass</title>
    <style>
        body{background: linear-gradient(to top, #ffffcc 0%, #ffcc00 100%);
        }
         table{
            width: 30%;
            height: 60px;
            background: white;
            font-family: monospace;
            font-size: 15px;
        }
    </style>
    <body>
                   <form action="" method="post" >
                       <center>
            <h1>Enter Id to generate Pass</h1>
            <input type="text" name="stid" placeholder="Enter your ID" required>
            <input type="submit" name="submit" placeholder="GENERATE PASS" required>
     <br><br><center>   <table border="2px">
                 <?php
                 $con=mysqli_connect("localhost","root","","project");
                 if(isset($_POST['submit']))
                 {
                     $stid=$_POST['stid'];
                     $query="select * from appform where stid=$stid";
                     $result=mysqli_query($con,$query);     
                     if($result)
                     {
                         while ($row=mysqli_fetch_array($result)) 
                     {
                         ?>
                 <tr>
                     <th><img src="man.png" width="50px" height="50px"><p>60 kms</p></th>
            <th><center>K.S.R.T.C<br>
        Ordinary Service Yearly Pass</center></th>
        <th><img src="lanyard.png" width="50px" height="50px"><p>2020-21</p></th> 
            </tr></table>
          <table border="2px">
              <tr> <td><?php  echo"Name     :".$row['name']."<br>";?></td>
                  <td><?php echo '<img src="data:image;base64,'. base64_encode($row['imagep']).'" alt="Image" style="width:50px; height:50px;">'?></td></tr>
    <tr> <td><?php  echo"Date of Birth     :".$row['dob']."<br>";?></td><td><?php  echo"Bus Pass From     :  ".$row['initial']."<br>";?>
        <?php  echo"Bus Pass To    :  ".$row['destination']."<br>";?></td></tr>
    <tr><td><?php  echo"Mobile Number     :".$row['phone']."<br>";?></td><td>Validity<br>July 2020-April 2021</td></tr>
    <tr><td><?php  echo"College Name     :".$row['college']."<br>";?></td><th>Rs:1550/-</th></tr>
    </table > 
     <table border="2px">
         <th><br><br>Managing Director Seal:</th>
         
             <th><br><br>Sign of Pass Holder:</th>
            </tr></table></center>
    <?php
                     }
                     }
 else {
     echo '<script type="text/javascript">alert("Student Record does not Exist")</script>';
 }     
                 }       
                 ?> 
      </form>
              <script type="text/javascript">
        </script>
        <h2>Take a Print</h2>
        <form>
            <input type="button" value="PRINT" onclick="window.print()"/>        
        </form> </center>
    </body>
</html>