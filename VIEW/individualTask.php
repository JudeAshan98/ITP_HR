
<?php
function fetch_data()  
{  
     $output = '';  
     $connect = mysqli_connect("localhost", "root", "", "ITP_HR");  
     $sql = "SELECT FROM kpi where kpi_id = 21";  
     $result = mysqli_query($connect, $sql);  
     while($row = mysqli_fetch_array($result))  
     {       
     $output .= '<tr>  
                         
                         <td>'.$row["Start_date"].'</td>  
                         <td>'.$row["End_date"].'</td>  
                         <td>'.$row["kpi_name"].'</td>  
                          
                            
                    </tr>  
                         ';  
     }  
     return $output;   
}

?>