<html>
    <style>
        body{
        background: linear-gradient(to top, #ffffcc 0%, #ffcc00 100%);
        }
          .wrapper{
            display: flex;
            position: relative;
        }
        .wrapper .form{
            width: 400px;
            height: 100%;
        }
        h3{
            font-size: 30px;
        }
        .wrapper .table{
          margin-left: 250px;
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
        input[type  ="submit"]{ background: #ffcc00;; 
                               cursor: pointer;
                               color: black;
        }
        table{
            width: 25%;
         
            font-size: 30px;
            padding: 20px;
        }
         
        
    </style>
    <body>
        <div class="wrapper">
            <div class="form">
                <center> <img src="searching.png" width="200px" height="200px">
                    <h3>Search Student Details</h3>  </center>
                <form action="" method="post" > 
            <input type="text" name="stid" placeholder="Enter STUDENT-ID">
            <input type="submit" name="submit" placeholder="ABOUT ME" required>
            </form>
            </div>
            <div class="table">
                <h3>   <table>
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
       <?php echo '<img src="data:image;base64,'. base64_encode($row['imagep']).'" alt="Image" style="width:150px; height:150px;">'?>
                   <br><br>  <tr><td><?php echo"Student ID:". $row['stid']; ?><br></td></tr>
           <tr><td>  <?php echo" Name:". $row['name']; ?><br></td></tr>
               <tr><td>    <?php echo "Gender:".$row['gender']; ?><br></td></tr>
                 <tr><td>  <?php echo "Date of Birth:".$row['dob']; ?><br></td></tr>
                 <tr><td>   <?php echo "Adhar Number:".$row['adhar']; ?><br></td></tr>
                <tr><td>  <?php echo "Email-ID:".$row['email']; ?><br></td></tr>
                <tr><td>   <?php echo "Pass allotted from:".$row['initial']; ?><br></td></tr>
                <tr><td>  <?php echo "Pass allotted to:".$row['destination']; ?><br></td></tr>
                    <?php
                     }
                     }
 else {
     echo '<script type="text/javascript">alert("Student Record does not Exist")</script>';
 }     
                 }       
                 ?> </table></h3>
        </div>
            
            </body> 
</html>