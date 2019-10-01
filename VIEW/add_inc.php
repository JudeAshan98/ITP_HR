<?php

$type = filter_input(INPUT_POST,'type');
$priority=filter_input(INPUT_POST,'priority');
$tag=filter_input(INPUT_POST,'tag');
$description=filter_input(INPUT_POST,'description');
$date = date("Y/m/d");


$connect =new mysqli("localhost","root","", "ITP_HR");  
$sql= "INSERT INTO incidents(type,Priority,Tagged_Dept,Description,date)
values ('$type','$priority','$tag','$description','$date')";

    if($connect->query($sql))
    {
       // echo "New record is inserted sucessfully";
       header("refresh:1; url=dashboard.php");
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
 ?>
