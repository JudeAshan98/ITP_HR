<?php
$start_date = filter_input(INPUT_POST,'Start_date');
$end_date = filter_input(INPUT_POST,'End_date');
$Projects=filter_input(INPUT_POST,'Project');
$Description=filter_input(INPUT_POST,'Description');

$Emp_ID=filter_input(INPUT_POST,'Emp_id');
$connect = new mysqli("localhost", "root", "", "ITP_HR");  
$sql= "INSERT INTO kpi(Start_date,End_date,Project,kpi_name,Emp_id)
values ('$start_date','$end_date','$Projects','$Description','$Emp_ID')";
if($connect-> query($sql))
{
    header("refresh:1; url=dashboard.php");
}
else{
    echo "Error " . $connect->error;
    }
 ?>
 
