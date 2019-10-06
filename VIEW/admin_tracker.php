<!DOCTYPE html>
<html lang="en">
<head>
    <title>Leave Tracker</title>
    
  <script>
    function myFunction1() {
        window.open("http://localhost:8080/ITP_HR/VIEW/admin_track_rpt.php");
    }
  </script>
</head>
<body>
<div class="container" role= "main">
    <div class="jumbotron text-center"style="padding-top:40px; padding-bottom:0px; background-color: transparent;" >
        <h2>Admin Tracker</h2>
    </div>
    <br/><br/><br/>
      <div style="float:right">
          <button type="button" class="btn btn-primary" style="padding:10px" onclick="myFunction1()">Get Report</button>
          <!-- <button type="button" class="btn btn-danger" style="padding:10px" >Reject</button> -->
           <br/><br/>
      </div>
      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Travel ID.." title="Type in a kpi">
  
  <script>
      function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
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