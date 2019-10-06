<?php
  require_once "config.php";
  $result = mysqli_query($db, "SELECT * FROM travel_request");
?>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Travel Admin</title>
</head>
<body>
<div class="container" role= "main">
    <div class="jumbotron text-center"style="padding-top:40px; padding-bottom:0px; background-color: transparent;" >
        <h2>Travel Requests Management</h2>
    </div>
    <br/><br/><br/>




    
    <form name="frmUser" method="post" action="">
      <div style="float:right">
      <button type="button" class="btn btn-primary" style="padding:10px" onClick="setComAction();">Completed</button>
          <button type="button" class="btn btn-primary" style="padding:10px" onClick="setUpdateAction();">Approve</button>
          <button type="button" class="btn btn-danger" style="padding:10px" onClick="setDeleteAction();">Reject</button>
          <button type="button" class="btn btn-danger" style="padding:10px" onClick="setDelAction();">Delete</button>
          <br/><br/>
      </div>
      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Travel id.." title="Type in a kpi">
  
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
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
              </tr>
            </thead>
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
                      <td scope="row"><?php echo $row["Travel_id"]; ?></td>
                      <td scope="row"><?php echo $row["Tdate"]; ?></td>
                      <td scope="row"><?php echo $row["Tfrom"]; ?></td>
                      <td scope="row"><?php echo $row["Tto"]; ?></td>
                      <td scope="row"><?php echo $row["Tstatus"]; ?></td>
                      <td scope="row"><input type="checkbox" name="Travel_id[]" value="<?php echo $row["Travel_id"]; ?>"></td>
                  </tr>
                  <?php
                   $i++;
              }
              ?>
                  </tbody>
                  
            </tbody>
          </table>
          </form>
      <script>
        function setUpdateAction() {
          if(confirm("Are you sure want to Accept these Travel requests?")) {
            document.frmUser.action = "accept_travel.php";
            document.frmUser.submit();
        }
        }
      </script>

        <script>
          function setDeleteAction() {
          if(confirm("Are you sure want to Reject these Travel requests?")) {
          document.frmUser.action = "Reject_travel.php";
          document.frmUser.submit();
          }
          }
        </script>
        
        <script>
          function setComAction() {
          if(confirm("Are you sure want to Complete these Travel requests?")) {
          document.frmUser.action = "Com_travel.php";
          document.frmUser.submit();
          }
          }
        </script>
        
        <script>
          function setDelAction() {
          if(confirm("Are you sure want to Delete these Travel requests?")) {
          document.frmUser.action = "delete_travel.php";
          document.frmUser.submit();
          }
          }
        </script>
</div>  
</body>      
</html>