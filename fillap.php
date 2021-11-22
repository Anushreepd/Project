<html>
    <title>Fill Application</title>
    <style>
        body{
             font-family: sans-serif;
              background: linear-gradient(to top, #ffffcc 0%, #ffcc00 100%);
        }
         form{
            width: 500px;
        }
        input{
            width: 100%;
            background: white;
            border: 1px solid black;
            border-radius: 3px;
            padding: 6px 20px;
            box-sizing: border-box;
            margin-bottom: 10px;
            font-size: 20px;
            cursor: pointer;
        }
        input[type  ="submit"]{
            width: 60%;
            background:#ffcc00;
        }
        input[type  ="radio"]{
            width: 15%;        
        }
        h1{
            font-size: 45px;
        }
        h2{
             font-size: 18px;
             color:blue;
        }
        h3{
            font-size: 15px;
        }
    </style>
    <body>
    <center><h1>Student Online Bus Pass Application</h1>
    <h2>Please enter your Details and allow us to assure your pass</h2>
         <form action="fillap1.php" method="post" enctype="multipart/form-data">
           <input type="text" name="name" placeholder="Enter Your Name" required>
<input type="text" name="fname" placeholder="Enter Your Father Name" required>
MALE:<input  type="radio" name="gender"  value="MALE" required>
FEMALE:<input  type="radio" name="gender" value="FEMALE" required>
<input type="date" name="dob" placeholder="Date of Birth" required>
<input type="text" name="adhar" placeholder="Adhar Number" required>
<input type="email" name="email" placeholder="Enter your Email-Id" required>
<input type="number" name="phone" placeholder="Enter your Phone number" required>
<input type="text" name="address" height="50px" width="40px" placeholder="enter Your Address" required>
<input type="text" name="college" placeholder="Enter Name of College" required>
<input type="text" name="state" placeholder="STATE" required>
<input type="text" name="district" placeholder="DISTRICT" required>
<input type="text" name="city" placeholder="City/Town/Village Name" required>
<input type="number" name="pin" placeholder="Enter Pincode" required>
<h3>Route From. Place--></h3>  <input type="text" name="initial" placeholder="Initial" required>
<h3>-->Route Change.Place</h3><input type="text" name="destination" placeholder="Destination" required>
 Enter Your Photo<input type="file" name="imagep" placeholder="Enter your photo">
 Enter Your receipt<input type="file" name="imager" placeholder="Enter your reciept photo">
    <img src="captcha.php" width="150px" height="80px"><br><br>
 <input type="text"  required>
<input type="submit" value="SUBMIT" name="submit">
</form>
        </center>
</body>
</html>
 <?php
if(isset($_POST['submit']))
{    session_start();
    $code=$_SESSION['cap_code'];
    $user=$_POST['captcha'];
    if($code==$user)
    {
        echo 'Valid';
    }
 else {
           echo'Invalid Code';
    }
 
}
?>
 
