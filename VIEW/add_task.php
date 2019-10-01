<?php
$start_date = filter_input(INPUT_POST,'Start_date');
$end_date = filter_input(INPUT_POST,'End_date');
$Projects=filter_input(INPUT_POST,'Project');
$Description=filter_input(INPUT_POST,'Description');
$Weight=filter_input(INPUT_POST,'Weight');
$Emp_ID=filter_input(INPUT_POST,'Emp_ID');
$connect = new mysqli("localhost", "root", "", "ITP_HR");  
$sql= "INSERT INTO kpi(Start_date,End_date,Project,kpi_name,Weight,Emp_ID)
values ('$start_date','$end_date','$Projects','$Description','$Weight','$Emp_ID')";
if($connect-> query($sql))
{
    header("refresh:1; url=dashboard.php");
}
else{
    echo "Error deleting Data";
    }
 ?>
 
