 <?php
 include("allstudents.php");
 error_reporting(0);
 
                        $stid=$_GET['stid'];
                        $query="DELETE FROM `appform` WHERE `appform`.`stid` = '' ";
                                
                                $data=mysqli_query($con, $query);
                                
                               
                        
              ?>