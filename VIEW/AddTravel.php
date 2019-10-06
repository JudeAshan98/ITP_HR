<?php
    $Tfrom = filter_input(INPUT_POST,'Tfrom');
    $Tto = filter_input(INPUT_POST,'Tto');
    $Tdate=filter_input(INPUT_POST,'Tdate');
    $EndDate=filter_input(INPUT_POST,'EndDate');
    $Vehicle=filter_input(INPUT_POST,'Vehicle');
    $Emp_id=filter_input(INPUT_POST,'Emp_id');
    $priority=filter_input(INPUT_POST,'priority');
    $description=filter_input(INPUT_POST,'description');
    $E_idp =filter_input(INPUT_POST,'Emp_id');
    $driver_id=filter_input(INPUT_POST,'driver_id');
    // $E_idp =filter_input(INPUT_POST,'Emp_id');

    $connect = new mysqli("localhost", "root", "", "ITP_HR");  

        $sql= "INSERT INTO travel_request(Tfrom,Tto,Tdate,EndDate,Vehicle,priority,description,Emp_id,driver_id)
        values ('$Tfrom','$Tto','$Tdate','$EndDate','$Vehicle','$priority','$description','$E_idp','$driver_id')";

    if($connect-> query($sql))
    {
        //echo "New record is inserted sucessfully";
        header("refresh:1; url=dashboard.php");
    }
    else{
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
 ?>