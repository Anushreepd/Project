<html>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="username"><br>
             <input type="file" name="image"> <br>
             <input type="file" name="imager"> <br>
            <label>file upload</label><br>
            <input type="submit" name="submit" value="upload">
<?php
session_start();
$con=mysqli_connect("localhost","root","","project");

if(isset($_POST["submit"]))
{$username=$_POST['username'];
    $file= addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $file1= addslashes(file_get_contents($_FILES["imager"]["tmp_name"]));
    $query="insert into photoupload(username,image,imager) values ('$username','$file','$file1')";
    $result= mysqli_query($con, $query);
    if($result==true)
    {
        echo'uploaded';
    }
    else
    {
        echo 'not uploaded';
    }        
}
?>
     
        </form>
    </body>
</html>