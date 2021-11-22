<html>
         <style>
        body{
          background: linear-gradient(to top, #ffffcc 0%, #ffcc00 100%);
        }
        table{
            background: white;
            font-family: sans-serif;
            font-size: 15px;
            text-align: center;
           width:700px; line-height: 50px
        }
      
    </style>
    <title>
        All Data
    </title>
    <body><center>
        <h3>Applicants details </h3>
        <table border="2px">
            <tr border="2px" >
                <th>Employee id</th>
                <th>Employee name</th>
                <th>Photograph</th>
        </tr>
           <?php
           session_start();
$con=mysqli_connect("localhost","root","","project");
 $query="select * from employee";
                $result= mysqli_query($con, $query);
while($row= mysqli_fetch_array($result))
                {
                    ?>
                <tr border="2px">
                     <td><?php echo $row['eid']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo '<img src="data:image;base64,'. base64_encode($row['photo']).'" alt="Image" style="width:230px; height:230px;">'?></td>        
                </tr>
                
                <?php
                }
                ?>
           
   </center>
    </body>
</html>
 