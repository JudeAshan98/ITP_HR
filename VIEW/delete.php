<?php 
//$con = mysqli_connect('localhost', 'root', '');
//mysqli_select_db($con,'ITP_HR');
//$safeid = mysql_real_escape_string($id);
//$query = mysql_query("delete from class where id=$safeid");

//$id = get['kpi_id'];

//if(isset($_POST['delete']))
//$id = $_POST['id'];

$entry_to_be_deleted = $_GET['kpi_idp'];

// test to see if it actually capturing the kpi_idp
// echo $entry_to_be_deleted;

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