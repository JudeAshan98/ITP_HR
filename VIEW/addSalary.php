<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Salary</title>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../CSS/profile.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

</head>
<body>

  
<div class="container">
    <h1 >Add Details... </h1>
    <br>
    
            
  <form action="insertSalary.php" method="post"  >
            
                <div class="form-group">
                  <label for="Emp_id">Emp ID:</label>
                  <input type="Number" class="form-control" id="Emp_id" name="Emp_id">
                </div>
                <div class="form-group">
                  <label for="F_name">First Name:</label>
                  <input type="text" class="form-control" id="F_name" name="F_name">
                </div>
                <div class="form-group">
                  <label for="L_name">Last Name:</label>
                  <input type="text" class="form-control" id="L_name" name="L_name">
                </div>
                <div class="form-group">
                  <label for="D_id">Department ID:</label>
                  <input type="number" class="form-control" id="D_id" name="D_id">
                </div>
                <div class="form-group">
                  <label for="nett_sal">Nett Salary:</label>
                  <input type="number" class="form-control" id="nett_sal" name="nett_sal">
                </div>
                <div class="form-group">
                  <label for="increments">Increments:</label>
                  <input type="number" class="form-control" id="increments" name="increments">
                </div>
                <div class="form-group">
                  <label for="decrements">Decrements:</label>
                  <input type="number" class="form-control" id="decrements" name="decrements">
                </div>
                <div class="form-group">
                  <label for="Paycheck_id">Paycheck ID:</label>
                  <input type="number" class="form-control" id="Paycheck_id" name="Paycheck_id">
                </div>

              
                <button type="submit" class="btn btn-primary" onclick="salaryValidation()">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
                
              
  
</form>
</div>
  
    
</body>
</html>
