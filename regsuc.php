<?php
 echo '<script type="text/javascript">alert("Registered Successfully")</script>';
 
 ?>
 
 <html>
     <title>
         Register success
     </title>
     <style>
         body{
           background: linear-gradient(to top, #ffffcc 0%, #ffcc00 100%);
         }
         form{
              width: 400px;
             padding: 30px 20px;
            box-sizing: border-box;
            position: fixed;
            left: 50%;
            top:70%;
            transform: translate(-50%, -50%);
         }
         h3{
              color: black;
            font-family: sans-serif;
        font-size: 35px;
         }
         h4{
             color: turquoise;
             font-family: sans-serif;
        font-size: 15px;
         }
         input{
              width: 50%;
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
     </style>
    <body>
    <center> 
        <img src="check.png" width="250px" height="240px"/>
            <h3>You have been successfully Registered to our web site</h3><br>
            <form action="studentlogin.php" method="post">
            <input type="submit" value="LOGIN" placeholder="LOGIN">
                     <h4> Press on the LOGIN button to proceed</h4>
        </form></center>
    </body>
</html>
 