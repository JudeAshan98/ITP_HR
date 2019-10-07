<?php

require_once "config.php";
$result = mysqli_query($db, "SELECT * FROM employee");

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
    <h1>Employee Management</h1>
    <br>

    <br>
    <div>
      <form name="frmUser" method="post" action="">
        <!-- <button type="button" class="btn btn-primary" action="EmployeeProfile.php">Add Employee +</button> -->
        <!-- <button type="button" class="btn btn-primary" action="EditEmployee.php">View Employee </button> -->
        <button type="button" class="btn btn-danger" name="deleteEmp" onClick="setDeleteAction();">Delete</button>
        <button class="btn btn-primary" onclick="printFunction()" id="cmd">Print this Document</button>

        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Emp ID</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Date of birth</th>
              <th scope="col">Contact no</th>
              <th scope="col">E-mail</th>
              <th scope="col">Gender</th>
              <th scope="col">Address</th>
              <th scope="col">Deparment ID</th>
              <th scope="col">Scan</th>
              <th scope="col">Password</th>
              <th scope="col">Designation</th>
              
              <th scope="col">#</th>
              <th scope="col">Select</th>
            </tr>
          </thead>
          <tbody>

            <?php
            //echo fetch_data();

            $i = 0;
            while ($row =  mysqli_fetch_array($result)) {
              if ($i % 2 == 0)
                $classname = "evenRow";
              else
                $classname = "oddRow";
              ?>
              <tr>
                <td scope="row"><?php echo $row["Emp_id"]; ?></td>
                <td scope="row"><?php echo $row["F_name"]; ?></td>
                <td scope="row"><?php echo $row["L_name"]; ?></td>
                <td scope="row"><?php echo $row["DOB"]; ?></td>
                <td scope="row"><?php echo $row["contact"]; ?></td>
                <td scope="row"><?php echo $row["mail"]; ?></td>
                <td scope="row"><?php echo $row["gender"]; ?></td>
                <td scope="row"><?php echo $row["address"]; ?></td>
                <td scope="row"><?php echo $row["D_id"]; ?></td>
                <td scope="row"><?php echo $row["Scanned_docs"]; ?></td>
                <td scope="row"><?php echo $row["password"]; ?></td>
                <td scope="row"><?php echo $row["designation"]; ?></td>
                <td scope="row"><input type="checkbox" name="Emp_id1[]" value="<?php echo $row["Emp_id"]; ?>"></td>
                <td scope="row"> <a href='EditEmployee.php?Emp_id=<?php echo $row["Emp_id"]; ?> role="button"'>View</a></td>

              </tr>
            <?php
              $i++;
            }
            ?>
          </tbody>
        </table>
      </form>
    </div>
  </div>
  <script>
    function setDeleteAction() {
      if (confirm("Are you sure you want to delete these Employees?")) {
        document.frmUser.action = "DeleteEmp.php";
        document.frmUser.submit();
      }
    }
  </script>

<script>
        function printFunction() {
        document.getElementById('cmd').style.visibility='hidden';
        window.print();
            }
    </script>

</body>

</html>