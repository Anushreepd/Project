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
        }
    </style>
    <title>
        All Data
    </title>
    <body><center>
        <h3>Applicants details </h3>
        <table border="3px" style="width:2000px; line-height: 40px">
            <tr border="2px">
                <th>student id</th>
                <th>Student name</th>
                <th>Date of Birth</th>
                <th>Adhar Number</th>
                <th>Email</th>
                <th>Address</th>
                <th>College Name</th>
                <th>Pass allotted from</th>
                <th>Pass allotted To</th>
                  <th>Photograph</th>
                        <th>Receipt </th>
                     
        </tr>
           <?php
           session_start();
$con=mysqli_connect("localhost","root","","project");
 $query="select * from appform";
                $result= mysqli_query($con, $query);
while($row= mysqli_fetch_array($result))
                {
                    ?>
                <tr border="2px">
                     <td><?php echo $row['stid']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['dob']?></td>
                    <td><?php echo $row['adhar']?></td>
                    <td><?php echo $row['email']?></td>
                          <td><?php echo $row['address']?></td>
                    <td><?php echo $row['college']?></td>
                    <td><?php echo $row['initial']?></td>
                    <td><?php echo $row['destination']?></td>
                       <td><?php echo '<img src="data:image;base64,'. base64_encode($row['imagep']).'" alt="Image" style="width:100px; height:100px;">'?></td>
                        <td><?php echo '<img src="data:image;base64,'. base64_encode($row['imager']).'" alt="Image" style="width:100px; height:100px;">'?></td>
                        <td><a href="delete.php?stid=$result[stid]">DELETE</a></td>
                                         
                </tr>
               
                <?php
                
                }
                ?>
           
   </center>
    </body>
</html>
 