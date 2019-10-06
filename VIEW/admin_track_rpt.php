<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Tracker</title>

      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
<div class="container" role= "main">
    <div class="jumbotron text-center"style="padding-top:40px; padding-bottom:0px; background-color: transparent;" >
        <h2>Admin Tracker Report</h2>
    </div>
    <br/><br/><br/>
      <div style="float:right">
      <button type="button" id="cmd"  class="btn btn-primary" style="padding:10px;margin-right:10px;padding-right:35px;padding-left:25px" onclick="printFunction()">Print</button>
          <!-- <button type="button" class="btn btn-danger" style="padding:10px" >Reject</button> -->
          <br/><br/>
      </div> 
      <!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Travel ID.." title="Type in a kpi"> -->

    <script>
        function printFunction() {
        document.getElementById('cmd').style.visibility='hidden';
        window.print();
            }
    </script>
    
      <table class="table table-bordered table-hover" id="myTable">
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
                  $sql = "SELECT tr.Travel_id,em.F_name,lt.Time_sent,tr.Vehicle,lt.Link
                   FROM location_track AS lt , travel_request AS tr,employee AS em 
                   where tr.Travel_id = lt.Travel_id and tr.Emp_id =em.Emp_id";

                  $result= mysqli_query($connect,$sql);
                  // var_dump($result);
                  if (!$result) {
                    printf("Error: %s\n", mysqli_error($connect));
                    exit();
                }

                   while($row =  mysqli_fetch_array($result) ){
                      $Travel_id = $row['Travel_id'];
                      $F_name =$row['F_name'];
                      $Time_sent = $row['Time_sent'];
                      $Vehicle = $row['Vehicle'];
                      $Link = $row['Link'];
               ?>
                  <tr>
                      <td scope="row"><?=$Travel_id?></td>
                      <td scope="row"><?=$F_name?></td>
                      <td scope="row"><?=$Time_sent?></td>
                      <td scope="row"><?=$Vehicle?></td>
                      <td scope="row"><a href ="<?=$Link?>" target="_blank"> <?=$Link?></a></td>
                      
                  </tbody>
                  <?php
              }
              ?>
            </tbody>
        
        </table>       

</div>        
</html>