<?php
  require_once "config.php";
  $result = mysqli_query($db, "SELECT * FROM time_sheet");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Boostrap files-->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
   <!--Boostrap files end-->
</head>
<body>
<button onclick="printFunction()" id="cmd">Print this Document</button>

<div class="container" role= "main">
<div class="jumbotron text-center"style="padding-top:40px; padding-bottom:0px; background-color: transparent;" >
  <h3 >Time Management</h3>
</div>
<form name="frmUser" method="post" action="">
<button type="button" class="btn btn-danger" style="padding:10px" onClick="setDeleteAction();">Delete</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="float: right">
  +Add Enrty
  </button>
  <br/><br/><br/>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Task</th>
      <th scope="col">Start Time</th>
      <th scope="col">End Time</th>
      <th scope="col">Break Time</th>
      <th scope="col">KPI</th>
      <th scope="col">#</th>
      
    </tr>
  </thead>
  <tbody>
  <tbody>
              <?php
                  $i = 0;
                   while($row =  mysqli_fetch_array($result) ){
                    if ($i % 2 == 0)
                      $classname = "evenRow";
                    else
                       $classname = "oddRow";
                ?>             
                  <tr>
                      <td scope="row"><?php echo $row["Date"]; ?></td>
                      <td scope="row"><?php echo $row["Description"]; ?></td>
                      <td scope="row"><?php echo $row["Start_Time"]; ?></td>
                      <td scope="row"><?php echo $row["End_Time"]; ?></td>
                      <td scope="row"><?php echo $row["Break"]; ?></td>
                      <td scope="row"><?php echo $row["KPI_ID"]; ?></td>
                      <td scope="row"><input type="checkbox" name="id[]" value="<?php echo $row["id"]; ?>"></td>
                  </tr>
                  <?php
                   $i++;
              }
              ?>
                  </tbody>
  
    </tbody>
    </form>
  </table>
</div>



<!--pop-->

<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Timesheet</h4>
          </div>

          <div class="modal-body">
              <form action="db.php"onsubmit="return validateform()" method="POST">
              
                  <div class="form-row">
                      <div class="form-group">
    
                          <label for="sel1">KPI ID </label>
                          <input type="text" class="form-control"   name="KPI_ID" placeholder="KPI ID" pattern="[0-9]{1,100}" title = "KPI number should contain only Sdigits" required>
                      </div>
                  </div>
                  <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="startDate">Start Time</label><br/>
                    <input type ="time" class="form-control" name="start_time"id="sd" * required>
                  </div>
                  <div  class="form-group col-md-6">
                    <label for="EndDate">End Time</label><br/>
                    <input type ="time" class="form-control" name="end_time" id="ed" required>
                  </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="sel1">Break</label>
                        <input type="time" class="form-control" name="Break" id="sel1" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="sel1">Description</label>
                        <input type="textarea" class="form-control" name="Description" required>
                      </div>
                 
                  </div>
                  <!-- <div class="form-group">
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                                Check me out
                              </label>
                      </div>
                  </div> -->
                  <button type="submit" class="btn btn-primary">Add</button>
              </form>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
      </div>

  </div>

</div>
<script>
    function validateForm(){
      var startDate = document.getElementById("sd").value;
      var endDate = document.getElementById("ed").value;

    if ((Time.parse(endDate) <= Time.parse(startDate))) {
        alert("End Time should be greater than Start Time");
        document.getElementById("inputEndDate").value = "";
    }


    }

  </script>
   <script>
          function setDeleteAction() {
          if(confirm("Are you sure want to Reject these Travel requests?")) {
          document.frmUser.action = "DeleteTime.php";
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