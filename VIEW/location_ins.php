<?php

$lng = $_POST['lng'];
$lat = $_POST['lat'];

$link = 'https://www.google.com/maps/@'.$lng.','.$lat;
$date = date("Y-m-d");
date_default_timezone_set("Asia/Colombo");
$timea=date("Y-m-d h:i:s A");

include("session.php");
  $connect = new mysqli("localhost", "root", "", "ITP_HR");  
   $sql="SELECT  Travel_id FROM travel_request WHERE Tstatus = 'Approved' and  Emp_id = $login_session ";

   if ($connect->query($sql) === TRUE) {
      echo "Record updated successfully";
  } else {
      echo "Error updating record: " . $connect->error;
  }

   $result= mysqli_query($connect,$sql);
                   var_dump($result);
                   $row=mysqli_fetch_assoc($result);
                    $Travel_id1 = $row['Travel_id'];
             
                  
                                 

    $sql1= " UPDATE location_track SET Date='$date',Link='$link',Time_sent='$timea' where Travel_id = 8 ";
    if($connect-> query($sql1))
    {
       // echo "New record is inserted sucessfully";
       echo $lng . ' - '  . $lat ;
       echo $link;
       echo $timea;
       echo $Travel_id1;
    }else{
        echo '1';
    }
    
   
 ?>
