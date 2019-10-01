<?php

    // $loc  = $_POST['Duckburg'];
   // $lng = $_POST['lng'];
    //$lat = $_POST['lat'];

    // echo($loc1);

    //$link = 'https://www.google.com/maps/@'.$lng.','.$lat;
    //   echo $link;
    // $link = $link + $loc1;
    //  echo $link;
    //  alert($link); 
   // $date = date("Y-m-d");

   $id = $_GET['id'];

    $con = new mysqli("localhost", "root", "", "ITP_HR");  

    $sql= " select * from travel_request where Travel_id=$id";

    if($result=mysqli_query($con,$sql))
    {
        $pass_data = array();
        while($row=mysqli_fetch_row($result)){
            $pass_data = array('Tfrom' => $row[1], 'Tto' => $row[2],'TDate' => $row[1], 'EndDate' => $row[2],);
        }

        echo json_encode($pass_data);

    }else{
        echo '1';
    }

?>