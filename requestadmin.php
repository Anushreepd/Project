<html>
    <title>Register Request</title>
    <style>
        body{
            background: beige;
        }
         form{
            width: 700px;
            padding: 40px 10px;
            box-sizing: border-box;
            position: fixed;
            left: 50%;
            top:40%;
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
        input[type  ="text"]{
            height: 200px;
        }
        input[type  ="submit"]{background:gray; 
                               cursor: pointer;
                               width: 50%;
                               font-family: monospace;
                               border: 2px solid;
        }
        h3{
            font-family: serif;
            font-size: 40px;
        }
        p{
            font-family: cursive;
            font-size: 20px;
        }
    </style>
    <body><center>
        <h3>Send your Details to Admin for Registration</h3> 
    <form action="" method="post">
        <p>Admin Number:</p>
        <input type="number" name="num" value="7760397773">
        <input type="text" name="msg" placeholder="Enter your Details">
        <input type="submit" name="send">
         <p>Details must contain Employee Name, Id, Contact and password<br>
        <p>(Remember your Id and password credentials while logging in)</p>
        </p>
    </form>
    </center>
    <?php
    if(isset($_POST['send']))
    {
        $number=$_POST['num'];
        $msg=$_POST['msg'];
        
	// Authorisation details.
	$username = "dheerajsirsikar9595@gmail.com";
	$hash = "e59cbce05cb9a051e7cd3e94b44bb1e156d37fa81af06b4b1de0161facff35fe";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "$number"; // A single number or a comma-seperated list of numbers
	$message = "$msg";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
         echo '<script type="text/javascript">alert("Details sent to Admin, You can try login after an hour")</script>';
         }  
    ?>
    </body>
</html>