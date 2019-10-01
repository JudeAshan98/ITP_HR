<!DOCTYPE html>
<html lang="en">
<head>
  <title>Performance Management</title>
 <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
</head>

<div class="jumbotron text-center" style="background-color:white">
  <h1 style="color:#160a57;margin-bottom: -2.5rem;">My Team</h1>
 
</div>
<br/>
<body>
<div class = "container" role = "main">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"> Employee</th>
      <th scope="col">Employee Name</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
  
  $connect = new mysqli("localhost", "root", "", "ITP_HR");  
  $sql = "SELECT e.Emp_id AS EID, p.image AS Pimage,e.F_name AS fr_name FROM emp_profile p,employee e where e.D_id  = (select D_id from employee where emp_id=1002) AND e.emp_id = p.emp_id"; 
  $result=mysqli_query($connect,$sql);
//   var_dump($result);
  while($row =  mysqli_fetch_array($result) ){
    $id = $row['EID'];
    $imagep = $row['Pimage'];
    $pfname = $row['fr_name'];

   ?>
    <tr>

    <td><img src="data:image/jpeg;base64,<?php echo base64_encode($imagep); ?>"class="rounded-circle" alt="Cinque Terre" width=100px height=100px></td>
       <td scope="row"><?=$pfname?></td>
       <th scope="row"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"onclick="window.location.href='finalize.php'">View</button></th>
      
    </tr>

    </tr>
    </tbody>
  <?php
    // $i++;
  }
  ?> 

  </tbody>
</table>
<br/>
<!--
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">+Add Member</button>
<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Task</h4>
                </div>
                <div class="modal-body">
                    <form>
                       
                        <div class="form-group">
                        <label for="inputEmp">Employee</label>
                                <select id="inputEmp" class="form-control" required>
                                      <option></option>
                                      <option>email</option>
                                      <option>...</option>
                                    </select>
                        </div>
                        <div class="form-group">
                            <label for="inputDepartment">Department</label>
                            <input type="text" class="form-control" id="inputDepartment" required>
                        </div>
                        <div class="form-group">
                            <label for="inputKPI">KPI</label>
                            <input type="text" class="form-control" id="inputKPI" required>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputWeightage">Weightage</label>
                                <input type="number" class="form-control" id="inputWeightage" required>
                            </div>
                            
                            
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
-->
</div>
</body>
</html>