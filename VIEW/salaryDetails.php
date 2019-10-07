

<?php

function fetch_data()  
{  
     $output = '';  
     $connect = mysqli_connect("localhost", "root", "", "itp_hr");  
     $sql = "SELECT * FROM payroll ORDER BY Emp_id ASC";  
     $result = mysqli_query($connect, $sql);  
     while($row = mysqli_fetch_array($result))  
     {       
     $output .= '<tr>  
                         
                         <td>'.$row["Emp_id"].'</td>  
                         <td>'.$row["F_name"].'</td>  
                         <td>'.$row["L_name"].'</td>    
                         <td>'.$row["D_id"].'</td>
                         <td>'.$row["nett_sal"].'</td>
                         <td>'.$row["increments"].'</td>
                         <td>'.$row["decrements"].'</td>
                         <td>'.$row["Total"].'</td>
                         <td>'.$row["Paycheck_id"].'</td> 
                         
                         
                         <td><button type="button" class="btn btn-danger" name ="delete" action="deleteSalary.php">Delete</button>
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
  <title>Salary Details</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
        <h1 >Salary Details</h1>
        <br>
        <div>
      <button type="button" class="btn btn-primary" onclick="window.open('addSalary.php')">Add Salary +</button>
    
    <button type="button" class="btn btn-primary" onclick="window.open('editDetails.php')">Edit Details </button>
    
    </div>
    <br>
<div>

        <table class="table table-hover">
                <thead>
                  <tr>
                    
                    <th scope="col">Emp ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Deparment ID</th>
                    <th scope="col">Nett Salary</th>
                    <th scope="col">Increments</th>
                    <th scope="col">Decrements</th>
                    <th scope="col">Total Salary</th>
                    <th scope="col">Paycheck ID</th>
                    
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

<br><br>
<div style="margin-left:75%">
<button type="button" class="btn btn-primary" onclick="window.open('paychecks.php')">Generate Paycheck</button>
</div>



</div>>
    

</body>
</html>