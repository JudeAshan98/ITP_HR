<?php
$entry_to_be_deleted =$_GET['id'];
$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con,'ITP_HR');

$sql="DELETE  FROM incidents WHERE Incident_ID=$entry_to_be_deleted";


if(mysqli_query($con,$sql)){
echo "Success";
}else{
echo "Error deleting Data";
}
?>