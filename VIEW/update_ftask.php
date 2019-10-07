<?php
   // $loc  = $_POST['Duckburg'];
  
    $Fin_Rating =$_GET['Fin_Rating'];
    $kpi_id =$_GET['kpi_idp'];
    
    if ($Fin_Rating<=100 && $Fin_Rating>=0) {
            $connect = new mysqli("localhost", "root", "", "ITP_HR");  
            $sql= " UPDATE kpi SET Fin_Rating ='$Fin_Rating' where kpi_id ='$kpi_id'";
                if ($connect->query($sql) === TRUE) {
                    header("refresh:1; url=dashboard.php");
                    } else {
                        echo "Error: " . $sql . "<br>" . $connect->error;
                            }

    }else
            {
                echo "Please enter a value between 0 and 100";
                header("refresh:1; url=dashboard.php");
            }


?>