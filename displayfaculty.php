<html>
    <head>
        <title>sdsfd</title>
        <link rel="stylesheet" href="dislpayfaculty.css">
        <script src="js/college.js" type="text/javascript" ></script>
   
   <link href="https://fonts.googleapis.com/css?family=Anton|Bebas+Neue&display=swap" rel="stylesheet">
       <!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
<div class="navbar">
    <a class="active" href="mainpage.php"><i class="fa fa-fw fa-home"></i> Home</a>
    <a href="about.php"><i class="fa fa-fw fa-search"></i> About</a>
  <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  <a href="facultylogin.php"><i class="fa fa-fw fa-user"></i> Login</a>
  
  <h1><img src="bihe.png" width="50" height="40" style="border-radius: 50%" margin-top="10%" >College Department</h1>
</div> 
        
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="allstudents.php">View All Applicants</a>
  <a href="seeuserdata.php">Search Details</a>
  <a href="remindadmin.php">Remind Admin</a>
  <a href="#"></a>
</div>



<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

   <div class="profile">
                <br><br><br>
                <form action="" method="post" >
                    <center>      <h2>About Employee:</h2><input type="text" name="eid" placeholder="ENTER EMPLOYEE ID" required>
                        <input type="submit" name="submit" placeholder="ABOUT EMPLOYEE" required></center>
            <center> <table>
                 <?php
                 $con=mysqli_connect("localhost","root","","project");
                 if(isset($_POST['submit']))
                 {
                     $eid=$_POST['eid'];
                     $query="select * from employee where eid=$eid";
                     $result=mysqli_query($con,$query);
                     if($result)
                     {
                         while ($row=mysqli_fetch_array($result)) 
                          {
                         ?>
                    <tr>   <td><h2><?php echo "Your Id:".$row['eid']; ?></h2></td></tr>
                    <tr> <td><h2><?php echo "NAME:".$row['name']; ?></h2></td></tr>
                   <td><?php echo '<img src="data:image;base64,'. base64_encode($row['photo']).'" alt="Image" style="width:200px; height:200px;">'?></td></tr>
                  <?php
                        }    
                 }
                 else
                 {
                          echo '<script type="text/javascript">alert("Employee Record does not Exist")</script>';
                 }               
                 }    ?>      
                </table></center>
            </form>
            </div> 
           


  
        

</body>
</html>