<?php
   // $loc  = $_POST['Duckburg'];
    $id =$_GET['idu'];
    
    
    $connect = new mysqli("localhost", "root", "", "ITP_HR");  

    $sql= "SELECT AVG(Fin_Rating) AS average_rating FROM kpi where Emp_id='$id'";
    $result = mysqli_query($connect, $sql);
     
    $total = 0;
     
    $num = mysqli_num_rows($result);
     
    while($row = mysqli_fetch_assoc($result)) {
        $total += $row['average_rating'];
    }
     
    $Rating= ($total / $num);
     
    $sql2="UPDATE emp_type SET Rating ='$Rating' WHERE Emp_id='$id'";
    $result = mysqli_query($connect, $sql2);
if($connect-> query($sql))
{
    echo ($total / $num);
    //echo "Successful";
   
   header("refresh:1; url=dashboard.php");

}
else{
    echo "Error deleting Data";
    }
 ?>