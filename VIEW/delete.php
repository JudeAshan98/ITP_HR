<?php 


$entry_to_be_deleted = $_GET['kpi_idp'];



$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con,'ITP_HR');

$sql="DELETE  FROM kpi WHERE kpi_id=$entry_to_be_deleted";


if(mysqli_query($con,$sql)){
header("refresh:1; url=dashboard.php");
//echo "Success";
}else{
echo "Error deleting Data";
}

?>