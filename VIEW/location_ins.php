<?php

$lng = $_POST['lng'];
$lat = $_POST['lat'];

$link = 'https://www.google.com/maps/@'.$lng.','.$lat;
$date = date("Y-m-d");
$timea=date(" h:i:s");

  $connect = new mysqli("localhost", "root", "", "ITP_HR");  
   $sql="SELECT  Travel_id FROM travel_request WHERE Tstatus = 'Approved' LIMIT 1";

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
