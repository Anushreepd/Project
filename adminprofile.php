<html>
    <title>
        admin profile
    </title>
    <style>
        body{
           background: linear-gradient(to top, #ffffcc 0%, #ffcc00 100%);
        }
        .page {
            display: flex;
            position: relative;
        }
        .page .adminprofile{
            width: 250px;
            height: 100%;
            position: fixed;
        }
        .page .image{
              width: 100%;
            margin-left: 900px;
        }
        h3{
            text-align: center;
            font-size: 40px;
        }
        h2{
            font-family: serif;
            font-size: 20px;
        }
    </style>
    <body>
        <h3><u>WELCOME! Have a Nice Day</u></h3>
         <div class="page">
             <div class="adminprofile">
         <center><table>
                 <?php
                 $con=mysqli_connect("localhost","root","","project");
                
                     $query="select * from admin";
                     $result=mysqli_query($con,$query);
                     while ($row=mysqli_fetch_array($result)) 
                     {
                         ?>
            <tr> <td><?php echo '<img src="data:image;base64,'. base64_encode($row['photo']).'" alt="Image" style="width:180px; height:200px;">'?></td>
              <tr><td><h2><?php echo "Name:".$row['name']; ?></h2></td></tr>
               <tr><td><h2><?php echo "Contact:".$row['name']; ?></h2></td></tr>
                <tr><td><h2><?php echo "Role:".$row['name']; ?></h2></td></tr>
                 <tr><td><h2><?php echo "Role:".$row['name']; ?></h2></td></tr>
                 </tr>
                       <?php
                     }          
                    ?>      
             </table></center>
                 <p>Writw something</p>
    </div>
             <div class="image">
                 <img src="bus.jpeg" width="500px" height="600px" style="border-radius: 20%">
             </div>
         </div>     
    </body>
</html>