<html>
    <title>SMS</title>
    <<style>
        
    </style>
    <body>
        <form action="" method="post">
            <input type="number" name="number" placeholder="Enter Number">
            <input type="text" name="message" placeholder="Enter your Message">
            <input type="submit" name="send">
        </form>
            
    </body>
    <?php
    if(isset($_POST['send']))
    {
        $number=$_POST['number'];
        $msg=$_POST['message'];
        
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
    }  
    ?>
</html>