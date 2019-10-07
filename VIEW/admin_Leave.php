<?php
  require_once "config.php";
  $result = mysqli_query($db, "SELECT * FROM apply_leaves");
?>
<html>
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
    <!-- search -->
    <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<input id="myInput" type="text" placeholder="Search..">

    <form name="frmUser" method="post" action="">
      <div style="float:right">
          <button type="button" class="btn btn-primary" style="padding:10px" onClick="setUpdateAction();">Approve</button>
          <button type="button" class="btn btn-danger" style="padding:10px" onClick="setDeleteAction();">Reject</button>
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
            <tbody id="myTable">
              <?php
                  $i = 0;
                   while($row =  mysqli_fetch_array($result) ){
                    if ($i % 2 == 0)
                      $classname = "evenRow";
                    else
                       $classname = "oddRow";
                ?>             
                  <tr>
                      <!-- <td scope="row"><?=$num?></td> -->
                      <td scope="row"><?php echo $row["ID"];?></td>
                      <td scope="row"><?php echo $row["Start_Date"]; ?></td>
                      <td scope="row"><?php echo $row["End_Date"]; ?></td>
                      <td scope="row"><?php echo $row["Status"]; ?></td>
                      
                       <!-- <td>  <input type = "checkbox" name="admincheckbox"/> </td> -->
                       <td scope="row"><input type="checkbox" name="ID[]" value="<?php echo $row["ID"]; ?>"></td>
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
            document.frmUser.action = "accept_leave.php";
            document.frmUser.submit();
        }
      </script>

        <script>
          function setDeleteAction() {
          if(confirm("Are you sure want to delete these rows?")) {
          document.frmUser.action = "Reject_leave.php";
          document.frmUser.submit();
          }
          }
        </script>
</div>  
</body>      
</html>