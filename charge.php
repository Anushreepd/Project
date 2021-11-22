<style>
     body{
        background: linear-gradient(to top, #ffffcc 0%, #ffcc00 100%);
        }
    a{
        font-size: 30px;
        color: black;
    }
</style>
<?php

if ($_POST) {

	$razorpay_payment_id = $_POST['razorpay_payment_id'];

	

	echo "Razorpay success ID: ". $razorpay_payment_id;

}

?>
<a href="geneid.php">Click here to generate Id</a>