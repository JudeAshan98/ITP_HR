<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!--title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"-->
  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"-->



  <!--sample for datepicker-->
  <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> -->
  <!-- <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet"> -->
  <!-- <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script> -->
  <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script> -->
  <!-- <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script> -->
  <!--sample-->
  <script>
    function myFunction() {
      window.open("http://localhost:8080/ITP_HR/VIEW/travel_report.php");
    }
  </script>
</head>

<body>

  <div class="container" role="main">
    <div class="jumbotron text-center" style="padding-top:40px; padding-bottom:0px; background-color: transparent;">
      <h2>Travel Requests</h2>
    </div>
    <br /><br /><br />
    <div style="float:right">
      <button type="button" class="btn btn-primary" style="padding:10px;margin-right:10px;padding-right:35px;padding-left:25px"onclick="myFunction()">Print Report</button>
      <button type="button" class="btn btn-primary" style="padding:10px" data-toggle="modal" data-target="#myModal">+ Add New</button>
      <br /><br />
    </div>

    <table class="table table-bordered table-hover">
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
        $connect = new mysqli("localhost", "root", "", "ITP_HR");
        $sql = "SELECT Travel_id,Tfrom,Tto,Tdate,Tstatus FROM travel_request where Emp_id = $login_session"; //need to add where clause for the loging users details
        $result = mysqli_query($connect, $sql);
        // var_dump($result);
        while ($row =  mysqli_fetch_array($result)) {
          $trav_idp = $row['Travel_id'];
          $fromp = $row['Tfrom'];
          $toT = $row['Tto'];
          $datep = $row['Tdate'];
          $statusp = $row['Tstatus'];
          ?>
          <tr>
            <td scope="row"><?= $trav_idp ?></td>
            <td scope="row"><?= $datep ?></td>
            <td scope="row"><?= $fromp ?></td>
            <td scope="row"><?= $toT ?></td>
            <td scope="row"><?= $statusp ?></td>
            <td scope="row"><button type="button" class="btn btn-success btn-view-transport" id="" data-id="<?= $trav_idp ?>" onclick="">View</button></td>
          </tr>
      </tbody>
    <?php
    }
    ?>
    </tbody>
    </table>

    
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h2 class="modal-title">New Travel Reqest</h2>
          </div>
          <div class="modal-body">
            <form action="AddTravel.php" onsubmit="return validateForm()" method="POST">
              <div class="form-row">
                <div class="form-group col-md-6"><input type="hidden" name="Emp_id" value=<?=$login_session?>>
                  <label for="inputFrom">Travel From</label>
                  <input type="text" class="form-control" id="inputFrom" placeholder="Location" name="Tfrom" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputTo">Travel To</label>
                  <input type="text" class="form-control" id="inputTo" placeholder="Location" name="Tto" required>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputFromDate">Start Date</label>
                  <!-- <div class='input-group date' id='datetimepicker1' >
                                  <input type='text' class="form-control" name="Tdate">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                                <script type="text/javascript">
                                   $(function () {
                                        $('#datetimepicker1').datetimepicker();
                                      });
                                </script>
                            </div>    -->
                  <input type="date" class="form-control" name="Tdate" id="Tdate">
                </div>
                <div class="form-group col-md-6">
                  <label for="Edate">End Date</label>
                  <!-- <div class='input-group date' id='datetimepicker2' >
                                  <input type='text' class="form-control" name="EndDate">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                                <script type="text/javascript">
                                   $(function () {
                                        $('#datetimepicker2').datetimepicker();
                                      });
                                </script>
                            </div>  -->
                  <input type="date" class="form-control" name="EndDate" id="Edate" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Prority</label>
                  <select id="inputState" class="form-control" name="priority" required>
                    <!-- <option selected>Choose...</option> -->
                    <option>Low</option>
                    <option>Medium</option>
                    <option>High</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Vehicle</label>
                  <select id="inputState" class="form-control" name="Vehicle" required>
                    <!-- <option selected>Choose...</option> -->
                    <?php
                                    $res=mysqli_query($connect,'SELECT * FROM vehicles where Availabiblity="Available"');
                                    while($row=mysqli_fetch_array($res)){
                                        
                                    ?>
                                    <option>
                                    <?php echo $row["v_id"]?>
                                    </option>
                                    <?php
                                    }
                                    ?>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Driver</label>
                  <select id="inputState" class="form-control" name="driver_id" required>
                    <!-- <option selected>Choose...</option> -->
                    <?php
                                    $res=mysqli_query($connect,'SELECT * FROM drivers where Availability="Available"');
                                    while($row=mysqli_fetch_array($res)){
                                        
                                    ?>
                                    <option>
                                    <?php echo $row["id"]?>
                                    </option>
                                    <?php
                                    }
                                    ?>
                  </select>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">Notes</label>
                  <textarea class="form-control" id="inputCity" name="description"></textarea>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">+ Request</button>
              <button type="reset" class="btn btn-primary">Clear</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- >Model for table table view buttons<-->
    <div class="modal fade" id="BtnModal" role="dialog" aria-hidden="true">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h2 class="modal-title">New Travel Reqest</h2>
          </div>
          <div class="modal-body">
            <form action="#" onsubmit="#" method="POST">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Travel From</label>
                  <input type="text" disabled class="form-control Tfrom" id="inputFrom" placeholder="Location" name="Tfrom"  value="<?=$row[1]?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Travel To</label>
                  <input type="text" disabled class="form-control Tto" id="inputFrom" id="inputTo" placeholder="Location" name="Tto" value="<?=$Tto?>">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputFromDate">Start Date</label>
                  <input type="text" disabled class="form-control Tdate" id="inputFrom" name="Tdate" value="<?=$row[3]?>">
                  
                </div>
                <div class="form-group col-md-6">
                  <label for="inputFromDate">End Date</label>
                  <input type="date" disabled class="form-control EndDate" id="inputFrom" name="EndDate" value="<?=$EndDate?>">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Prority</label>
                  <!-- <select id="inputState" class="form-control" name="priority" value="<!?=$EndDate?>">
                    <option selected><!?=$priority?></option>

                  </select> -->
                  <input type="text" disabled class="form-control priority" name="priority" value="<?=$priority?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Vehicle</label>
                  <!-- <select id="inputState" class="form-control" name="Vehicle">
                    <option selected><!?=$Vehicle?></option>
                  </select> -->
                  <input type="text" disabled class="form-control Vehicle" name="Vehicle" value="<?=$Vehicle?>">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-">
                  <label for="inputCity">Notes</label>
                  <input type="textarea" disabled class="form-control description"  id="inptFrom" name="description" value="<?=$description?>"></textarea>
                </div>
              </div>
              <!-- <button type="submit" class="btn btn-primary">Update</button> -->
              <!-- <button type="reset" class="btn btn-primary">Clear</button> -->
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
      var startDate = document.getElementById("Tdate").value;
      var endDate = document.getElementById("Edate").value;
      console.log("Edate");
    if ((Date.parse(endDate) <= Date.parse(startDate))) {
        alert("End date should be greater than Start date");
        document.getElementById("inputEndDate").value = "";
    }


    }

  </script>

<script>
      $(document).ready(function() {
        $(document).on('click', ".btn-view-transport", function() {
          var id = $(this).data('id');
          $.ajax({
           url: "view_travel.php?id=" + id,
           methos: 'GET',
            success: function(result) {
             //  event.preventDefault();
             if(result){
              result = JSON.parse(result);
              console.log(result);

              $('#BtnModal .Tfrom').val('');
              $('#BtnModal .Tfrom').val(result.Tfrom);
              $('#BtnModal .Tto').val('');
              $('#BtnModal .Tto').val(result.Tto);
              $('#BtnModal .Tdate').val('');
              $('#BtnModal .Tdate').val(result.TDate);
              $('#BtnModal .EndDate').val('');
              $('#BtnModal .EndDate').val(result.EndDate);
              $('#BtnModal .priority').val('');
              $('#BtnModal .priority').val(result.priority);
              $('#BtnModal .Vehicle').val('');
              $('#BtnModal .Vehicle').val(result.Vehicle);
              $('#BtnModal .description').val('');
              $('#BtnModal .description').val(result.description);

                $('#BtnModal').modal('show');

              }
           }
          });

        });
      });
    </script>
</body>

</html>