<?php
	
	// session_start();
	// if (!isset($_SESSION["login_user"])) 
	// {
	// 	header("location:login.php");
	// }
	include("session.php");
?>
<?php

$type = filter_input(INPUT_POST,'type');
$priority=filter_input(INPUT_POST,'priority');
$tag=filter_input(INPUT_POST,'tag');
$description=filter_input(INPUT_POST,'description');
$date = date("Y/m/d");
// $Emp = $_SESSION["login_user"];


$connect =new mysqli("localhost","root","", "ITP_HR");  
$sql= "INSERT INTO incidents(Emp_ID,type,Priority,Tagged_Dept,Description,date)
values ('$login_session','$type','$priority','$tag','$description','$date')";

    if($connect->query($sql))
    {
        echo "New record is inserted sucessfully";
        header("location:dashboard.php");
    }
    else
    {
        echo "Error";
    }
 ?>