<?php
$entry_to_be_deleted = $_GET['Emp_id'];

$connect = mysqli_connect("localhost", "root", "", "ITP_HR");

$sql="DELETE  FROM kpi WHERE Emp_id=$entry_to_be_deleted";


if(mysqli_query($connect,$sql)){
echo "Success";
}else{
echo "Error deleting Data";
}

?>