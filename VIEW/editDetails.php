<?php
$connect = new mysqli("localhost", "root", "", "itp_hr");
$sql = "SELECT * FROM payroll";
$result = mysqli_query($connect, $sql);
while ($row =  mysqli_fetch_array($result)) {
  $emp_id = $row['Emp_id'];
  $f_name = $row['F_name'];
  $l_name = $row['L_name'];
  $d_id = $row['D_id'];
  $Nett_sal = $row['nett_sal'];
  $Increments = $row['increments'];
  $Decrements = $row['decrements'];
  $total = $row['Total'];
  $paycheck_id = $row['Paycheck_id'];

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Edit Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../CSS/edit.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="../JS/salaryValidation.js"></script>
 
<script src="../JS/salaryValidation.js"></script>
</head>

<body>



  <div class="container">

    <br />
    <h1>Edit details... </h1>

    <form action="updateSalary.php" >
      <div class="container">
       
      <div class="form-row">
          <div class="form-group col-md-6">
            <label for="Emp_id">Emp ID:</label>
            <input type="Number" class="form-control" id="Emp_id" value="<?= $emp_id ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="F_name">First Name:</label>
            <input type="text" class="form-control" id="F_name" value="<?= $f_name ?>">
          </div>
        
        <div class="form-group col-md-6">
          <label for="L_name">Last Name:</label>
          <input type="text" class="form-control" id="L_name" value="<?= $l_name ?>">
        </div>

        <div class="form-group col-md-6">
          <label for="D_id">Department ID:</label>
          <input type="number" class="form-control" id="D_id" value="<?= $d_id ?>">
        </div>
        <div class="form-group col-md-6">
          <label for="nett_sal">Department ID:</label>
          <input type="number" class="form-control" id="nett_sal" value="<?= $Nett_sal ?>">
        </div>
        <div class="form-group col-md-6">
          <label for="increments">Department ID:</label>
          <input type="number" class="form-control" id="increments" value="<?= $Increments ?>">
        </div>
        <div class="form-group col-md-6">
          <label for="decrements">Department ID:</label>
          <input type="number" class="form-control" id="decrements" value="<?= $Decrements ?>">
        </div>

        
        <div class="form-group col-md-6">
          <label for="Total">Total Salary:</label>
          <input type="number" class="form-control" id="Total" value="<?= $total ?>">
        </div>

        
        <div class="form-group col-md-6">
          <label for="Paycheck_id">Paycheck ID:</label>
          <input type="number" class="form-control" id="Paycheck_id" value="<?= $paycheck_id ?>">
        </div>
       

        <button type="submit" name="submit" class="btn btn-primary" onclick="salaryValidation()" action="updateSalary.php">Update</button>
</div>
</div>

      </form>
 
  

</div>


</body>

</html>