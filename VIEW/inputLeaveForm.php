<?php
$Type=filter_input(INPUT_POST,'Type');
$Start_Date = filter_input(INPUT_POST,'Start_Date');
$End_Date = filter_input(INPUT_POST,'End_Date');
$Covering_Emp =filter_input(INPUT_POST,'Covering_Emp');
$Reason=filter_input(INPUT_POST,'Reason');


$connect = new mysqli("localhost", "root", "", "ITP_HR");   
  
$sql = "INSERT INTO apply_leaves (Type, Start_date, End_date,Covering_Emp,Reason)
 VALUES ('$Type', '$Start_Date','$End_Date', '$Covering_Emp','$Reason')";

if ($connect->query($sql) === TRUE) {
    header("refresh:1; url=dashboard.php");
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}

?>