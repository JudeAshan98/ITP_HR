<!DOCTYPE html>
<html lang="en">
<head>
    <title>Leave Admin</title>
</head>
<body>
<div class="container" role= "main">
    <div class="jumbotron text-center"style="padding-top:40px; padding-bottom:0px; background-color: transparent;" >
        <h2>Leave Management</h2>
    </div>
    <br/><br/><br/>
      <div style="float:right">
          <button type="button" class="btn btn-primary" style="padding:10px">Update</button>
          <!-- <button type="button" class="btn btn-danger" style="padding:10px" >Reject</button> -->
          <br/><br/>
      </div>

      <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col">Employee</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
                <th scope="col">Status</th>
                <th scope="col"> </th>
              </tr>
            </thead>
            <tbody>
            <!-- send data to db -->
            
              <?php
                  $connect = new mysqli("localhost", "root", "", "ITP_HR");  
                  $sql = "SELECT * FROM apply_leaves"; //need to add where clause for the loging users details
                  $result= mysqli_query($connect,$sql);
                  // var_dump($result);
                   while($row =  mysqli_fetch_array($result) ){
                      $ID = $row['ID'];
                      $Start_Date =$row['Start_Date'];
                      $End_Date = $row['End_Date'];
                      $Status = $row['Status'];
                      // $statusp =$row['Tstatus'];
               ?>
                  <tr>
                      <!-- <td scope="row"><?=$num?></td> -->
                      <td scope="row"><?=$ID?></td>
                      <td scope="row"><?=$Start_Date?></td>
                      <td scope="row"><?=$End_Date?></td>
                      <td scope="row"><?=$Status?></td>
                      <!-- <td scope="row"><!?=$statusp?></td> -->
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