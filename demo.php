<?php
$con=mysqli_connect("localhost","root","","project");
if($con->connect_error)
{
    die("connection failed:".$con->connect_error);
}
$sql="select name,initial,destination from appform";
$result=$con->query($sql);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        echo "<tr><td>".$row["name"]."</td></tr><br>"."<tr><td>".$row["initial"]."</td></tr><br>"."<tr><td>".$row["destination"]."</td></tr><br>";
    }
    
}
else{
    echo"no result:";
}
$con->close();
?>
      while($row= mysql_fetch_array($sql)) 
      <?php
 session_start();
  $con=mysqli_connect("localhost","root","","project");
    if(isset($_POST["submit"]))
    {
    $email=$_POST["email"];
    $password=$_POST["password"];
    $query="select name,dob,adhar,college from appform where email='$email' && password='$password'";
    $sql= mysqli_query($con,$query);
     while($result=mysql_fetch_array($sql))
    {
        $mail=$result['mail'];
        $password=$result['password']; 
    if($email!='email' || $password!='password')
    {
    echo 'username password is wrong'; 
    }
 else {
     $_SESSION['mail']=$mail;
          header('location:fileshow.php');  
   }
    }}
 ?>
 echo"Date of Birth:".$_row['dob']."<br>";
    echo"Adhar No:".$_row['adhar']."<br>";
  
    echo"Address:".$_row['address']."<br>";
     echo"College Name:".$_row['college']."<br>";
     if($con->connect_error)
{
    die("connection failed:".$con->connect_error);
}
$sql="select name,dob,adhar,email,address,college,state,city,initial,destination from appform";
$result=$con->query($sql);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        echo "<tr><td>".$row["name"]."</td><td>".$row["dob"].
                "</td><td>".$row["adhar"]."</td><td>".$row["email"].
                "</td><td>".$row["address"]."</td><td>".$row["college"].
                "</td><td>".$row["state"]."</td><td>".$row["city"].
    "</td><td>".$row["initial"]."</td><td>".$row["destination"]."</td><td>".$row["imagep"].
                "</td><td>".$row["imager"]."</td></tr>";
       
    }
    echo '</table>';
}
else{
    echo"no result:";
}

$con->close();
?>
<?php
 session_start();
  $con=mysqli_connect("localhost","root","","project");
   $query="select * from appform ";
while($result= mysqli_fetch_array($query))
{
    $name=$_REQUEST["name"];
    $password=$_REQUEST["password"];
    if($password!=$password && $name!=$name)
    {
        echo '<h1>Username and Password is Wrong</h1>';
    }
    else
    {
        echo 'welcome';  
    }
}

?>
<?php
$con=mysqli_connect("localhost","root","","project");
$phone= mysqli_real_escape_string($con, $_REQUEST['phone']);
$name= mysqli_real_escape_string($con, $_REQUEST['name']);
$email= mysqli_real_escape_string($con, $_REQUEST['email']);
$password= mysqli_real_escape_string($con, $_REQUEST['password']);
$cpassword= mysqli_real_escape_string($con, $_REQUEST['cpassword']);
if($password==$cpassword)
{
    $query="select * from student where email=$email";
    $resul=mysqli_query($con, $query);
    if(mysqli_num_rows($resul)>0)
    {
        echo 'Email Id Already Exists... Try another Email Id';
    }
    else
    {
        $query="insert into student(phone,name,email,password,cpassword)values('$phone','$name','$email','$password','$cpassword')";
    $result=mysqli_query($con, $query);
    if($result)
    {
    header('location:fillap.php');
    } 
    else
    {
        echo 'Registration Failed';   
    }
    }
        echo 'Password and Comfirm Password does not Match';
    
}
?>
echo  '<br><br><br><br><br><br><br>'
     .'<h3>Password and Confirm Password dont match</h3>'; 
     header('location:studentlogin.php');
     <html>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <table  align="center" border="2px" style="width:1400px; line-height: 50px">
                <tr>
                    <th>Student Name</th>
                    <th>image</th>
                </tr>
                <?php
                $con= mysqli_connect("localhost","root","","project");
                        $query="select * from photoupload";
                $result= mysqli_query($con, $query);
                while($row= mysqli_fetch_array($result))
                {
                    ?>
                <tr>
                    <td><?php echo '<img src="data:image;base64,'. base64_encode($row['image']).'" alt="Image" style="width:100px; height:100px;">'?></td>
                   <td><?php echo '<img src="data:image;base64,'. base64_encode($row['imager']).'" alt="Image" style="width:100px; height:100px;">'?></td>
                   <td><?php echo $row['username']?></td>
                </tr>
                
                <?php
                }
                ?>
            </table>
        </form>
    </body>
</html>
 <body>
        <style>
            table{    
            font-family: cursive;        
            font-size: 30px;
            float: left;
            }
            
        </style>
    <center> 
        <table>
            <h4>WELCOME</h4>
                 <?php
                 $con=mysqli_connect("localhost","root","","project");
                
                     $query="select * from admin";
                     $result=mysqli_query($con,$query);
                     while ($row=mysqli_fetch_array($result)) 
                     {
                         ?>
            <tr>
                <td><?php echo $row['name']; ?></td></tr>
            <tr> <td><?php echo '<img src="data:image;base64,'. base64_encode($row['photo']).'" alt="Image" style="width:100px; height:140px;">'?></td>
               </tr>
                       <?php
                     }          
                    ?>      
        </table><br><br><br><br><br>
    </center>
    </body>
</html>
<html>
    <body>
        <div class="anchor">
              <a href="allstudents.php">View all Applicants</a><br><br>
        <a href="allfaculty.php">View Faculty Details</a><br><br>
        </div><br>
       <form action="seeuserdata.php" method="post">
            <input type="submit" value=" Search for Individualn Applicants">
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
                         ?>
                    <?php echo"Your Name:". $row['name']; ?><br>
                  <?php echo "Gender:".$row['gender']; ?><br>
                  <?php echo "Date of Birth:".$row['dob']; ?><br>
                   <?php echo "Adhar Number:".$row['adhar']; ?><br>
                   <?php echo "Contact:".$row['phone']; ?><br>
                 <?php echo "Email-ID:".$row['email']; ?><br>
                  <?php echo '<img src="data:image;base64,'. base64_encode($row['imagep']).'" alt="Image" style="width:100px; height:100px;">'?><br>
                   <?php
                     }
                     }   
                     else 
 {
        echo 'You have not filled the form yet';        
 }   
 } 
 
      ?> 
                  <html> <link rel="stylesheet" type="text/css" href="mainpage.css">
       <body>  <div class="container">
    <head><div class="ulli">
        <ul>
        <li><a href="login.php">LOGIN</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="helpdesk.php">HELPDESK</a></li>       
        </ul></div></head>  
     
      <center> <div class="head"><title>Student BUS pass</title>
              <h1>WELCOME</h1></center></div>   
    <center>
        <div class="name"><h2>STUDENT'S GOVT BUS PASS <br>KARNATAKA</h2><br></div>
       <div class="mid">           
        <p>KSRTC is issuing Bus passes to Students of recognized colleges,<br>
            passes to travel from their residence to the college/school within the limit of 60 Kms.<br>
        Students are allowed to travel in Ordinary, City and Suburban Services.</p></div>
        
        </form></center>
    <center>
        <div class="reg"><h3>Apply Now</h3><br><a href="register.php">
          Click Here to Register</a> </div>
        </div>
    </center>  
    </body>
</html>
       <style>
            body{
                margin: 0;
                padding: 0;
                font-family: arial;
            }
            .container
        {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100vh;
            animation: animate  16s ease-in-out infinite;
            background-size: cover;
        }
        @keyframes animate{
            0%,100%{
              background-image: url(imagep6.jpg);
            }
             25%{
              background-image: url(imagep3.jpg);
            }
             50%{
              background-image: url(imagep8.jpg);
            }
             75%{
              background-image: url(imagep3.jpg);
            }
        }
        </style>
        
        **//mail
        <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';
?>
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp1.example.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'user@example.com';                     // SMTP username
    $mail->Password   = 'secret';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    // Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
if($con==false)
{
     die("connection failed;".mysqli_connect_error());
}
$name= mysqli_real_escape_string($con, $_REQUEST['name']);
$fname= mysqli_real_escape_string($con, $_REQUEST['fname']);
$gender= mysqli_real_escape_string($con, $_REQUEST['gender']);
$dob= mysqli_real_escape_string($con, $_REQUEST['dob']);
$adhar= mysqli_real_escape_string($con, $_REQUEST['adhar']);
$email= mysqli_real_escape_string($con, $_REQUEST['email']);
$phone= mysqli_real_escape_string($con, $_REQUEST['phone']);
$address= mysqli_real_escape_string($con, $_REQUEST['address']);
$college= mysqli_real_escape_string($con, $_REQUEST['college']);
$state= mysqli_real_escape_string($con, $_REQUEST['state']);
$dis= mysqli_real_escape_string($con, $_REQUEST['district']);
$city= mysqli_real_escape_string($con, $_REQUEST['city']);
$pin= mysqli_real_escape_string($con, $_REQUEST['pin']);
$ini= mysqli_real_escape_string($con, $_REQUEST['initial']);
$des= mysqli_real_escape_string($con, $_REQUEST['destination']);
$file1= addslashes(file_get_contents($_FILES["imagep"]["tmp_name"]));
$file2= addslashes(file_get_contents($_FILES["imager"]["tmp_name"]));
$password= mysqli_real_escape_string($con, $_REQUEST['password']);
$sql="insert into appform(name,fname,gender,dob,adhar,email,phone,address,college,state,district,city,pin,initial,destination,imagep,imager,password)"
        . "values('$name','$fname','$gender','$dob','$adhar','$email','$phone','$address','$college','$state','$dis','$city','$pin','$ini','$des','$file1','$file2','$password')";
if(mysqli_query($con, $sql))
{
    $_SESSION['name']=$name;
    $_SESSION['fname']=$fname;
    $_SESSION['gender']=$gender;
    $_SESSION['dob']=$dob;
    $_SESSION['adhar']=$adhar;
    $_SESSION['email']=$email;
    $_SESSION['phone']=$phone;
    $_SESSION['address']=$address;
    $_SESSION['college']=$college;
    $_SESSION['state']=$state;
    $_SESSION['district']=$dis;
    $_SESSION['city']=$city;
    $_SESSION['pin']=$pin;
    $_SESSION['initial']=$ini;
    $_SESSION['destination']=$des;
    $_SESSION['imagep']=$file1;
     $_SESSION['imager']=$file2;
    $_SESSION['password']=$password;
    header('location:fileshow.php');
}
else
{
    echo"error".mysqli_error($con);
}
mysqli_close($con);
?>
====payment
<html>
    <body>
    <center>
        <h3>Incase ID forgotton</h3>
        <form action="" method="post" >
            <input type="text" name="phone" placeholder="Enter no">
            <input type="submit" name="submit" placeholder="ABOUT ME" required>
        </form>
                 <?php
                 $con=mysqli_connect("localhost","root","","project");
                 if(isset($_POST['submit']))
                 {
                     $phone=$_POST['phone'];
                     $query="select * from appform where phone=$phone";
                     $result=mysqli_query($con,$query);
                     while ($row=mysqli_fetch_array($result)) 
                     {
                         ?>
            <?php echo"Your ID:". $row['stid']; ?><br>
                 <?php echo "Email-ID:".$row['email']; ?><br>
                   <?php
                     }
                 }       
      ?> 
                 <form action="viewpass.php" >
                     <input type="submit" value="Generate Pass">
                 </form>
    </center>
    </body>
</html>
//displayadmin<html>
    <style>
        
    </style>
    <head>
        <title> Admin Dashboard</title>
    </head>
    <frameset cols="20%,70%">
        <frame src="sidebar.php" name="Menu"/>
        <frameset rows="10%,90%">
                <frame src="endbar.php" name="Search"/>
                 <frame src="menubar.php" name="Dashboard"/>  
           </frameset>
    </frameset>
</html>
///
<html>
    <style>
        body{
   
        }
    </style>
    <head>
        <title> Faculty Dashboard</title>
    </head>
    <frameset cols="20%,70%">
        <frame src="sidebar1.php" name="Menu"/>
        <frameset rows="10%,90%">
                <frame src="endbar1.php" name="Search"/>
                 <frame src="menubar1.php" name="Dashboard"/>  
           </frameset>
    </frameset> 
</html>
     ///mail())))       body{
          background: bisque;  
        }
        form{
            width: 400px;
            background: bisque;
            padding: 40px 20px;
            box-sizing: border-box;
            position: fixed;
            left: 60%;
            top:50%;
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
        }
        //jjg
           <a href="requestadmin.php">New! Request Admin for Registration
             <br>Click Here</a>