<html>
    <head>
        <title>Sign Up</title>
    </head>
    <style>
        *{margin: 0; padding: 0;}
        body{
        background: linear-gradient(to top, #ffffcc 0%, #ffcc00 100%);
        }
        .wrapper{
                 display: flex;
            position: relative;
        }
        .wrapper .image{
                width: 100%;
            margin-left: 100px;
            
            
        }
        .wrapper .form{
                   width: 100%;
            margin-left: 100px;
        }
        form{
            width: 400px;
            padding: 40px 20px;
            box-sizing: border-box;
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
        input[type  ="submit"]{background: #ffcc00; 
                               cursor: pointer;
                               width: 70%;
        }
          h1{
            color: black;
            font-family: sans-serif;
        font-size: 60px;
        }
        h3{
             color: teal;
            font-style: initial;
        font-size: 30px;
        }
    </style>
     <script type="text/javascript">

  function checkForm(form)
  {
    if(form.name.value == "") {
      alert("Error: Username cannot be blank!");
      form.name.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.name.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.name.focus();
      return false;
    }
 if(form.phone.value.length < 10) {
      alert("Error: Enter 10 digits to your Contact Number!");
        form.phone.focus();
        return false;
 }
  if(form.phone.value.length > 10) {
      alert("Error: Enter only 10 digits to your Contact Number!");
        form.phone.focus();
        return false;
 }
    if(form.password.value != "" && form.password.value == form.cpassword.value) {
      if(form.password.value.length < 8) {
        alert("Error: Password must contain at least 8 characters!");
        form.password.focus();
        return false;
      }
      if(form.password.value == form.name.value) {
        alert("Error: Password must be different from Username!");
        form.password.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.password.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.password.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.password.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.password.focus();
      return false;
    }

    alert("You entered a valid password: " + form.password.value);
    return true;
  }
</script>
    <body>
         <head>
        <meta charset="UTF-8">
        <title>Card</title>
        <link rel="stylesheet" type="text/css" href="login.css">
        <meta name="viewport" content="width=device-width, user-scalable=no,
              initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    </head>
    <center><h1>Sign Up</h1>
        <h3>Register to our Website and get your Bus Pass Online without any risks</h3>
            <br><br>
            <div class="wrapper">
                <div class="image">
                    <img src="student.jpeg" width="430px" height="570px" style="border-radius: 20%">
            </div>   
         <div class="form" >
             <form onsubmit="return checkForm(this)" action="register1.php"  method="post" enctype="multipart/form-data">
            <input type="number" name="phone" placeholder="Enter Mobile Number" required="Enter numbers only" > 
               <input type="text" name="name"  placeholder="Enter Your Name" required >
               <input type="email"  name="email"  placeholder="Email - ID" required>
                 <input type="password" name="password" id="password" placeholder="Enter New Password" required >
                 <span id="messages"></span>
                 <input type="text" name="cpassword"  placeholder="Confirm Password" required>
              <input type="submit" name="submit" value="REGISTER">
              
        </form>
        </div>
            </div>
    </body>
</html>
