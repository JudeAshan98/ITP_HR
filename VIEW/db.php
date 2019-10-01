<?php
$KPI_ID = filter_input(INPUT_POST,'KPI_ID');
$start_time=filter_input(INPUT_POST,'start_time');
$end_time=filter_input(INPUT_POST,'end_time');
//$Employee_Name=filter_input(INPUT_POST,'Employee_Name');
$Break=filter_input(INPUT_POST,'Break');
$Description=filter_input(INPUT_POST,'Description');
$date = date("Y/m/d");


$connect =new mysqli("localhost","root","", "ITP_HR");  
$sql= "INSERT INTO time_sheet(KPI_ID,Date,start_time,end_time,Break,Description)
values ('$KPI_ID','$date','$start_time','$end_time','$Break','$Description')";

    if($connect->query($sql))
    {
      //  echo "New record is inserted sucessfully";
          header("refresh:1; url=dashboard.php");
    }
    else
    {
        echo "Error";
    }
 ?>