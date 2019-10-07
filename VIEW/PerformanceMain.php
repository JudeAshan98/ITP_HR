
<?php
     include('session.php');
    $link=mysqli_connect("localhost","root","","ITP_HR");
   // mysqli_select_db($link,"ITP_HR");
    
?>
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
  <script>
function openWin() {
  window.open("http://localhost/ITP_HR/VIEW/printmytask.php");
}
</script>
</head>

<body>
    <div class="container" role="main">
        <div class="jumbotron text-center" style="background-color:white">
            <h1 style="color:#160a57;margin-bottom: -2.5rem;">Performance Management</h1>

        </div>

        <div style="margin-left: 10px;margin-top:10px">
            <button type="button" class="btn btn-primary">My Performance</button>
            <button type="button" class="btn btn-primary" id ="test" a href='TeamPerformance.php'>Team
                Performance</button>
                

        

        </div>
        <div style="margin-left: 10px; margin-top: 60px" ;>
            <img src="../IMG/mainimg.jpg" class="rounded-circle" alt="Cinque Terre">
        </div>
        <div style="margin-left: 10px;margin-top:50px" ;>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">+Add Task</button>
        </div>
        <br />

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">KIP #</th>
                    <th scope="col">KPI Name</th>
                    <th scope="col">Rating</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
  // $x = 10;
  // $i = 0;
  
  $connect = new mysqli("localhost", "root", "", "ITP_HR");  
  $sql = "SELECT kpi_id,kpi_name,rating FROM kpi where Emp_id=$login_session"; 
  $result=mysqli_query($connect,$sql);
//   var_dump($result);
  while($row =  mysqli_fetch_array($result) ){
     
    $kpi_idp = $row['kpi_id'];
    $kpi_namep =$row['kpi_name'];
    $rate = $row['rating'];

 
    
   ?>


                <tr>
                    <td scope="row"> <button type="button" class="btn btn-outline-info" class="btn btn-primary">
                    <a href=<?="Task.php?id=".$row['kpi_id']?>><?=$kpi_idp?></button></td>
                    <td scope="row"><?=$kpi_namep?></td>
                    <td scope="row">
                        <div style="margin-left: 10px; margin-top:10px" class="progress">
                            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                <?=$rate?>
                    <td scope="row">
                        <a href=<?="delete.php?kpi_idp=".$row['kpi_id']?>>
                            <button type="button" class="btn btn-danger" method="post">Remove </button>
                        </a>
                    </td>
    </div>
    </td>
    </tr>

    </tbody>
    <?php  }  ?>
    </tbody>
    </table>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Task</h4>
                </div>
                <div class="modal-body">
                    <form action="add_task.php" onsubmit="return validateForm()" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputStartDate">Start Date</label>
                                <input type="date" class="form-control" name="Start_date" id="inputStartDate" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEndDate">End Date</label>
                                <input type="date" class="form-control" name="End_date" id="inputEndDate" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputProject">Project</label>
                            <input type="text" class="form-control" name="Project" id="inputProject">
                        </div>
                        <div class="form-group">
                            <label for="inputTask">Task</label>
                            <input type="text" class="form-control" name="Description" id="inputTask" required>
                        </div>
                        <!--div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputWeightage">Weightage</label>
                                <input type="number" class="form-control" name="Weight" id="inputWeightage" required>
                            </div-->
                            <div class="form-group col-md-4">
                                <label for="inputEmp">Employee</label>
                                <select id="inputEmp" name="Emp_id" class="form-control" >required>
                                    <?php
                                    $res=mysqli_query($link,"SELECT Emp_id FROM employee where D_id=(select D_id from employee where Emp_id=$login_session)");
                                    while($row=mysqli_fetch_array($res)){
                                        
                                    ?>
                                    <option>
                                    <?php echo $row["Emp_id"]?>
                                    </option>
                                    <?php
                                    }
                                    ?>
                                    
                                    
                                </select>
                                <br>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>

                        </div>

                       
                    </form>
                </div>
                
            </div>
</div>
        </div>
    </div>
    <form>
  <input type="button" class="btn btn-primary"value="Print" onclick="openWin()">
</form>
    <script>
    function validateForm() {
        var startDate = document.getElementById("inputStartDate").value;
        var endDate = document.getElementById("inputEndDate").value;

        if ((Date.parse(endDate) <= Date.parse(startDate))) {
            alert("End date should be greater than Start date");
            document.getElementById("inputEndDate").value = "";
        }


    }
  
    </script>
                <script>
              $(document).ready(function() {
                  $('#test').click(function(e) {  
                  e.preventDefault();
              $("#content1").load($(this).attr('href'));
              });
              });
            </script>

<script>
              $(document).ready(function() {
            //    var x = document.getElementById('myCheck').value;
              //   var y = document.getElementById('logout').value;
              $('a').click(function(e) {  
                          
              e.preventDefault();
              $("#content1").load($(this).attr('href'));
              });
              });
            </script>
</body>

</html>