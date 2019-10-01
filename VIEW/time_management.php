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

<div class="container" role= "main">
<div class="jumbotron text-center"style="padding-top:40px; padding-bottom:0px; background-color: transparent;" >
  <h3 >Time Management</h3>
</div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="float: right">
  +Add Enrty
  </button>
  <br/><br/><br/>

<table class="table">
  <thead>
    <tr>
      <th>Date</th>
      <th>Task</th>
      <th>Start Time</th>
      <th>End Time</th>
      <th>Break Time</th>
      <th>KPI</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    // $x = 10;
    // $i = 0;
    $connect = new mysqli("localhost", "root", "", "ITP_HR");  
    $sql = "SELECT *  FROM time_sheet"; 
    $result=mysqli_query($connect,$sql);
  //   var_dump($result);
    while($row =  mysqli_fetch_array($result) ){
      $kpi_idp = $row['KPI_ID'];
      $Date = $row['Date'];
      $Start_time = $row['Start_Time'];
      $End_time =$row['End_Time'];
      $break = $row['Break'];
      $Description =$row['Description'];
      $kpi_desc =$row['KPI_Description'];
      //$rate = $row['rating'];
     ?>
      <tr>
        <td scope="row"><?=$Date?> </td>
        <td scope="row"><?=$Description?></td>
        <td scope="row"><?=$Start_time?> </td>
        <td scope="row"><?=$End_time?></td>
        <td scope="row"><?=$break?> </td>
        <!-- <td scope="row"><!?=$Description?></td> -->
        <td scope="row"><?=$kpi_idp?></td>
      
      </tr>
      </tbody>
    <?php
      // $i++;
    }
    ?>
  
    </tbody>
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
                          <input type="number" class="form-control"   name="KPI_ID" placeholder="KPI ID" required>
                      </div>
                  </div>
                  <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="startDate">Start Time</label><br/>
                    <input type ="time" class="form-control" name="start_time"id="sd" required>
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
</body>
</html>