<html>
    <style>
         *{
            list-style: none;
            text-decoration: none;
        }
        body{
           background: linear-gradient(to top, #ffffcc 0%, #ffcc00 100%);
         
    font-family: sans-serif;
    letter-spacing: 0.03em;
    line-height: 1.6;
        }
         .wrapper{
            display: flex;
            position: relative;
        }
      .wrapper .sidebar
        {
           background: linear-gradient(to left, #ffff99 0%, #ffcc00 100%);

            position: fixed;
            width: 250px;
            height: 100%;
            padding: 20px;
        }
          .wrapper .sidebar ul li{
            padding: 8px;
            
        }
        .wrapper .sidebar ul li a{
            color: black;
            display: block;
            font-size: 20px;
            
        }
          .wrapper .main_content{
            width: 100%;
            margin-left: 300px;
        }
        a{
            font-family: serif;
                    font-size: 15px;
        }
        h1{
            font-size: 60px;
            width: 345%;
        }
        .wrapper .profile{
             width: 100%;
            margin-left: 50px;
        }
        .wrapper .profile .h2{
            font-size: 10px;
        }
         form{
            width: 400px;
            padding: 40px 20px;
            box-sizing: border-box;
           
            left: 70%;
            top:10%;
        }
                input{
                
            width: 70%;
            background: white;
            border: 1px solid black;
            border-radius: 3px;
            padding: 10px 20px;
            box-sizing: border-box;
            margin-bottom: 20px;
            font-size: 20px;
            cursor: pointer;
            
        }
        input[type  ="submit"]{background:khaki; 
                               cursor: pointer;
                                 
        }
        
   
    


.container{
    width: 100%;
    max-width: 1200px;
    height:430px;
    display: flex;
    flex-wrap:wrap;
    justify-content: center;
    margin:  40vh;
    margin-top: -15vh;
  
}

.container .card{
    width: 280px;
    height: 390px;
    border-radius: 12px;
    box-shadow: 0 2px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    margin-left:  10px;
    text-align: center;
    transition:all 0.25s; 
   background: white;
}

.container .card:hover{
    transform: translateY(-15px);
    box-shadow: 0 12px 16px rgba(0, 0, 0, 0.7);
}

.container .card img{
    width: 230px;
    height: 230px;
    
}

.container .card h4{
    font-weight: 600;
}

.container .card p{
    padding: 0 lrem;
    font-size: 16px;
    font-weight: 300;
}

.container .card a{
    font-weight: 500;
    text-decoration: none;
    color: black;
}
    </style>
    <body>
        <div class="wrapper">
              <div class="sidebar">
            <h2>Dashboard</h2>
            <ul>
                <li><a href="mainpage.php"><img src="home.png" width="30px" height="30px"> Home</a> </li>
                <li><a href="about.php"><img src="about.png" width="30px" height="30px"> About</a> </li>
                  <li><a href="#"><img src="worker.png" width="30px" height="30px"> Contact</a> </li>
            </ul>
         </div>
    <div class="main_content">
         <h1>WELCOME TO STUDENT DASHBOARD</h1>
            <img src="profile2.jpg" width="480px" height="470px" margin="580% " style="border-radius: 20%">

    </div>
                        <div class="profile">
                 <br><br><br>
        <form action="" method="post" >
            
            <h2>   ABOUT ME </h2>
            <input type="text" name="phone" placeholder="Mobile Number" required>
            <input type="submit" name="submit" value="VIEW" required>
                 <?php
                 $con=mysqli_connect("localhost","root","","project");
                 if(isset($_POST['submit']))
                 {
                     $phone=$_POST['phone'];
                     $query="select * from student where phone=$phone";
                     $result=mysqli_query($con,$query);
                     if($result==false)
                     {
                         echo 'Data not Found';
                     } 
 else {
       while ($row=mysqli_fetch_array($result)) 
                     {
                         ?>
                    <?php echo"<h2>Name:". $row['name']."</h2>"; ?>
                   <?php echo "<h2>Contact:".$row['phone']."</h2>"; ?>
                 <?php echo "<h2>Email-ID:".$row['email']."</h2>"; ?>
                        <?php
                     }
 }
 } 
 ?>    </form>
            </div>
        </div>
          
        <h1 class="title">LOGIN</h1>
        
        <div class="container">
        <div class="card">
            <img src="imagep6_1.jpg">
            <a href="fillap.php"><h3> FILL APPLICATION </h3></a>
        </div>    
            
          <div class="card">
              <img src="bus2.jpeg">
              <a href="searchstudent.php"><h3>VIEW DETAILS </h3></a>
          </div>
            
           <div class="card">
               <img src="bus_1.jpeg">
           
               <a href="edit.php"><h3> EDIT DETAILS</h3></a>   
       
           </div> 
            <div class="card">
                <img src="imagep4.jpg">
              <a href="payment.php"><h3>MAKE PAYMENT </h3></a>
          </div>
        </div>
        
           </body>
</html> 