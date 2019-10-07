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
                         <td>'.$row["Total"].'</td>
                         <td>'.$row["Paycheck_id"].'</td> 
                        
                    </tr>  
                         ';  
     }  
     return $output;   
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>paychecks</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<div class="jumbotron text-center" style="background-color:white">
    <h1 style="color: #160a57;">PAYCHECK</h1>



</head>

<body>
<div class="container">

<div>
<input type="text" id="myInput1" onkeyup="myFunction1()" placeholder="Search for emp code.." title="Type in a name">


<script>
function myFunction1() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</div>

<br>


<img src="../IMG/pic.jpg" class="img-circle" alt="Cinque Terre" width="250" height="200">

<br><br>


<table id="myTable" class="table table-hover table-bordered" style="padding:30px">
<tbody>
<thead class="thead-dark">

                  <tr>
                    
                    <th scope="col">Emp ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Deparment ID</th>
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


<br><br>

<div style="margin-left:75%">
<button type="button" class="btn btn-primary">Print</button>
<button type="button" class="btn btn-primary">cancel</button>
</div>



</div>
</body>


</html>