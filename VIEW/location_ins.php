<?php
   // $loc  = $_POST['Duckburg'];
    $lng = $_POST['lng'];
    $lat = $_POST['lat'];

   // echo($loc1);

    $link = 'https://www.google.com/maps/@'.$lng.','.$lat;
  //   echo $link;
   // $link = $link + $loc1;
  //  echo $link;
   //  alert($link); 
    $date = date("Y-m-d");

    $connect = new mysqli("localhost", "root", "", "ITP_HR");  

    $sql= " UPDATE location_track SET Date='$date',Link='$link' where Travel_id = 8 ";
    if($connect-> query($sql))
    {
       // echo "New record is inserted sucessfully";
       echo $lng . ' - '  . $lat ;
    }else{
        echo '1';
    }
 ?>
