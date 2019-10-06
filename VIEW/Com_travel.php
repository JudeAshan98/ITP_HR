<?php
require_once "config.php";
$rowCount = count($_POST["Travel_id"]);
for ($i = 0; $i < $rowCount; $i++) {
    $sql = "UPDATE travel_request set TStatus='Completed' WHERE Travel_id='" . $_POST["Travel_id"][$i] . "'";
    if ($db->query($sql) === TRUE) {
        $rowCount = count($_POST["Travel_id"]);
        for ($i = 0; $i < $rowCount; $i++) {
          $sqlr ="UPDATE vehicles v , Drivers  d ,travel_request t set d.Availability='Available',
                            v.Availabiblity='Available' 
                            WHERE t.Travel_id ='" . $_POST["Travel_id"][$i] . "' and
                            t.driver_id=d.id and
                            t.Vehicle = v.v_id";
            if ($db->query($sqlr) === TRUE) {
               // echo"done1";
            }   
            else{
                echo"Error". $db->error;
            }             
         header("refresh:1; url=dashboard.php");}
      //  echo"done";}
    }
    else
    {
       // echo "Error updating record: " . $db->error;
    }

}
//header("Location:dashboard.php");
