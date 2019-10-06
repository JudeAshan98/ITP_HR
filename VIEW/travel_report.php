<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>travel report</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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

</head>

<body>

  <div class="container" role="main">
    <div class="jumbotron text-center" style="padding-top:40px; padding-bottom:0px; background-color: transparent;">
      <h2>Travel Requests Report</h2>
    </div>
    <br /><br /><br />
    <div style="float:right">
      <button type="button" id="cmd"  class="btn btn-primary" style="padding:10px;margin-right:10px;padding-right:35px;padding-left:25px" onclick="printFunction()">Print</button>
      <!-- <button type="button" class="btn btn-primary" style="padding:10px" data-toggle="modal" data-target="#myModal">+ Add New</button> -->
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
          <!-- <th scope="col"></th> -->
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
            <!-- <td scope="row"><button type="button" class="btn btn-success btn-view-transport" id="" data-id="<?= $trav_idp ?>" onclick="">View</button></td> -->
          </tr>
      </tbody>
    <?php
    }
    ?>
    </tbody>
    </table>
  </div>
  <script>
        function printFunction() {
        document.getElementById('cmd').style.visibility='hidden';
        window.print();
            }
    </script>
</body>
</html>
