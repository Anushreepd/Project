<html>
    <title>Update Details</title>
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
            font-size: 35px;
        }
        h2{
             font-size: 18px;
             color:blue;
        }
        h3{
            font-size: 15px;
        }
    </style>
    <center><h1>Edit Details</h1>
    <h2>Every Field needed to be Filled</h2>
    <p>  (Enter Registered Mobile Number)</p>
    <body>
        <form action="" method="post" enctype="multipart/form-data" required>
<input type="text" name="name" placeholder="Enter Your Name"required>
<input type="text" name="fname" placeholder="Enter Your Father Name" required><br>
MALE:<input  type="radio" name="gender"  value="MALE" required>
FEMALE:<input  type="radio" name="gender" value="FEMALE" required>
<input type="date" name="dob" placeholder="Date of Birth" required>
<input type="text" name="adhar" placeholder="Adhar Number" required>
<input type="email" name="email" placeholder="Enter your Email-Id" required>
<input type="text" name="phone" placeholder="Enter Registered Phone number" required>
<input type="text" name="address" height="50px" width="40px" placeholder="enter Your Address" required>
<input type="text" name="college" placeholder="Enter Name of College" required>
<input type="text" name="state" placeholder="STATE" required>
<input type="text" name="district" placeholder="DISTRICT" required>
<input type="text" name="city" placeholder="City/Town/Village Name" required>
<input type="number" name="pin" placeholder="Enter Pincode" required>
<h3>Route From. Place--></h3>  <input type="text" name="initial" placeholder="Initial" required>
<h3>-->Route Change.Place</h3><input type="text" name="destination" placeholder="Destination" required>
<input type="submit" value="UPDATE" name="update">
</form>
        <?php
session_start();
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['update']))
{
         $phone=$_POST['phone'];
    $query="update appform SET name='$_POST[name]',fname='$_POST[fname]',
        gender='$_POST[gender]',
        dob='$_POST[dob]',
        adhar='$_POST[adhar]',  
        email='$_POST[email]',
        phone='$_POST[phone]', 
        address='$_POST[address]',
        college='$_POST[college]',
        state='$_POST[state]',
        district='$_POST[district]',
        city='$_POST[city]',
        pin='$_POST[pin]',
        initial='$_POST[initial]',
        destination='$_POST[destination]' where phone='$_POST[phone]'";
                $query_run=mysqli_query($con, $query);
      if ($query_run)
      {
       echo '<script type="text/javascript">alert("Data Updated")</script>';
      }
      else  
      {
             echo '<script type="text/javascript">alert("Upadte failed")</script>';
      }
    }

?>
        </center>
</body>
</html>


 
