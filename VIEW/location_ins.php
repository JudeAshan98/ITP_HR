<?php

$lng = $_POST['lng'];
$lat = $_POST['lat'];

$link = 'https://www.google.com/maps/@'.$lng.','.$lat;
$date = date("Y-m-d");
date_default_timezone_set("Asia/Colombo");
$timea=date("Y-m-d h:i:s A");

  $connect = new mysqli("localhost", "root", "", "ITP_HR");  
   $sql="SELECT  Travel_id FROM travel_request WHERE Tstatus = 'Approved' TOP 1 ORDER BY ";

   $result= mysqli_query($connect,$sql);
                   var_dump($result);
                    while($row =  mysqli_fetch_array($result) ){
                      $Travel_id1 = $row['Travel_id'];
             
                    }

   // $loc  = $_POST['Duckburg'];
   //  echo $Travel_id1;

   // echo($loc1);


  //   echo $link;
   // $link = $link + $loc1;
  //  echo $link;
   //  alert($link); 


   // $connect = new mysqli("localhost", "root", "", "ITP_HR");  

    $sql1= " UPDATE location_track SET Date='$date',Link='$link',Time_sent='$timea' where Travel_id = '2' ";
    if($connect-> query($sql1))
    {
       // echo "New record is inserted sucessfully";
       echo $lng . ' - '  . $lat ;
       echo $link;
       echo $timea;
    }else{
        echo '1';
    }
    
   
 ?>
