<?php
function fetch_data()  
{  
     $output = '';  
     $connect = mysqli_connect("localhost", "root", "", "ITP_HR");  
     $sql = "SELECT * FROM employee ORDER BY Emp_id ASC";  
     $result = mysqli_query($connect, $sql);  
     while($row = mysqli_fetch_array($result))  
     {       
     $output .= '<tr>  
                         <td>  <input type="checkbox" id="defaultCheck" name="example2">
                         </td>
                         <td>'.$row["Emp_id"].'</td>  
                         <td>'.$row["F_name"].'</td>  
                         <td>'.$row["L_name"].'</td>  
                         <td>'.$row["DOB"].'</td>  
                         <td>'.$row["contact"].'</td>
                         <td>'.$row["mail"].'</td>  
                         <td>'.$row["gender"].'</td>  
                         <td>'.$row["address"].'</td>  
                         <td>'.$row["D_id"].'</td> 
                         <td><button type="button" class="btn btn-danger" action="EmployeeProfile.php">Delete</button>
                         </td>
                           
                    </tr>  
                         ';  
     }  
     return $output;   
} 


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee Management</title>
 <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
</head>
<body>
<div class="container">
        <h1 >Employee Management</h1>
        <br>
        <div>
    <!-- <button type="button" class="btn btn-primary" action="EmployeeProfile.php">Add Employee +</button> -->
    <button type="button" class="btn btn-primary" action="EditEmployee.php">View Employee </button>
    
    </div>
    <br>
<div>

        <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Emp ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Date of birth</th>
                    <th scope="col">Contact no</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                    <th scope="col">Deparment ID</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php
                echo fetch_data();
                  ?>
                  </tr>
                </tbody>
              </table>
</div>
</div>>
    

</body>
</html>