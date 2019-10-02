<!DOCTYPE html>
<html lang="en">
<head>
    <title>Leave Tracker</title>
</head>
<body>
<div class="container" role= "main">
    <div class="jumbotron text-center"style="padding-top:40px; padding-bottom:0px; background-color: transparent;" >
        <h2>Admin Tracker</h2>
    </div>
    <br/><br/><br/>
      <!-- <div style="float:right">
          <button type="button" class="btn btn-primary" style="padding:10px">Update</button> -->
          <!-- <button type="button" class="btn btn-danger" style="padding:10px" >Reject</button> -->
          <!-- <br/><br/>
      </div> -->

      <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col">Travel ID</th>
                <th scope="col">Traveler</th>
                <th scope="col">Last update</th>
                <th scope="col">Vehicle</th>
                <th scope="col">Location </th>
              </tr>
            </thead>
            <tbody>
            <!-- send data to db -->
            
              <?php
                  $connect = new mysqli("localhost", "root", "", "ITP_HR");  
                  $sql = "SELECT *,employee.Emp_name FROM location_track,travel_request,employee where travel_request.Travel_id = location_track.Travel_id and travel_request.Emp_id =employee.Emp_id";
                  $result= mysqli_query($connect,$sql);
                  // var_dump($result);
                   while($row =  mysqli_fetch_array($result) ){
                      $Travel_id = $row['Travel_id'];
                      $Emp_name =$row['Emp_name'];
                      $Tto = $row['Time_sent'];
                      $Status = $row['Vehicle'];
                      $Status = $row['Link'];
                      // $statusp =$row['Tstatus'];
               ?>
                  <tr>
                      <td scope="row"><?=$Travel_id?></td>
                      <td scope="row"><?=$Emp_name?></td>
                      <td scope="row"><?=$Time_sent?></td>
                      <td scope="row"><?=$Vehicle?></td>
                      <td scope="row"><?=$Link?></td>
                      <td scope="row"><div class="form-group">
                      <select class="form-control" id="sel1">
                          <option>Approve</option>
                          <option>Reject</option>
                          <option>Pending</option>
                        </select>
                        </td>
                  </tr>
                  </tbody>
                  <?php
              }
              ?>
            </tbody>
        
        </table>       

</div>        
</html>