<?php

    $Vehicle_type = $_GET ['Vehicle_type'];
    $img_vehicles =$_FILES ['img_vehicle']['tmp_name'];
    $Reg_no =$_GET ['Reg_no'];
    $image = base64_encode(file_get_contents(addslashes($img_vehicles)));
    $connect = new mysqli("localhost", "root", "", "ITP_HR");  

        $sql= "INSERT INTO vehicles(Vehicle_type,img_vehicle,Reg_no)
        values ('$Vehicle_type','$image','$Reg_no')";

    if($connect-> query($sql))
    {
        //echo "New record is inserted sucessfully";
     //   header("refresh:1; url=dashboard.php");
    }
    else{
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
 ?>