<?php
   // $loc  = $_POST['Duckburg'];
    $Notes =$_GET['Notes'];
    $Rating =$_GET['demo1'];
    
    $kpi_id =$_GET['kpi_id'];
    

    $connect = new mysqli("localhost", "root", "", "ITP_HR");  

  $sql= UPDATE kpi SET Notes =$Notes,Rating=$Rating where kpi_id=$kpi_id;

    if ($connect->query($sql) === TRUE) {
        header("refresh:1; url=dashboard.php");
} else {
    echo "Error updating record: " . $connect->error;
}

?>
