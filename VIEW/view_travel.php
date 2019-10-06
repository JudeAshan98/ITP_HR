<?php

   $id = $_GET['id'];

    $con = new mysqli("localhost", "root", "", "ITP_HR");  

    $sql= " select * from travel_request where Travel_id=$id";

    if($result=mysqli_query($con,$sql))
    {
        $pass_data = array();
        $row=mysqli_fetch_assoc($result);
        $pass_data = array('Tfrom' => $row['Tfrom'], 'Tto' => $row['Tto'],'TDate' => $row['Tdate'],'EndDate'=>$row['EndDate'],'priority'=>$row['priority'],'Vehicle'=>$row['Vehicle'],'description'=>$row['description']);
        

        echo json_encode($pass_data);

    }else{
        echo null;
    }

?>