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

</head>

<body>

  <div class="container" role="main">
    <div class="jumbotron text-center" style="padding-top:40px; padding-bottom:0px; background-color: transparent;">
      <h2>Drivers</h2>
    </div>
    <br />
 

    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Driver</th>
          <th scope="col">Name</th>
          <th scope="col">Availabiblity</th>
          <!-- <th scope="col">Status</th> -->
          <!-- <th scope="col"></th> -->
        </tr>
      </thead>
      <tbody>
        <?php
    //    $connect = new mysqli("localhost", "root", "", "ITP_HR");
        // $sql = "SELECT d.Availability, d.id, em.F_name ,ep.image FROM drivers d, emp_profile ep , employee em where (d.id = ep.emp_id AND d.id = em.Emp_id)";
      //  $sql = "SELECT  d.Availability, d.id, em.F_name ,ep.image FROM 'drivers' AS d, 'emp_profile' AS ep, 'employee' AS em where (d.id = ep.emp_id AND d.id = em.Emp_id)";

      $sql = "SELECT d.Availability
          , d.id
          , em.F_name
          , ep.image
          FROM drivers AS d
          JOIN emp_profile AS ep ON d.id = ep.Emp_id
          JOIN employee AS em ON d.id = em.Emp_id";


        $result = mysqli_query($db, $sql);

        if (!$result) {
          printf("Error: %s\n", mysqli_error($db));
          exit();
      }

        // var_dump($result);
        while ($row =  mysqli_fetch_array($result)) {
          $id = $row['id'];
          $image = $row['image'];
          $name = $row['F_name'];
          $Availability = $row['Availability'];
          ?>
          <tr>
             <td scope="row"><?= $id ?></td>
            <td scope="row"> <img src="data:image/jpeg;base64,<?php echo base64_encode($image); ?>"class="rounded-circle" alt="Cinque Terre" width=100px height=70px></td>
            <!-- <td scope="row"><!?= $Vehicle_type ?></td> -->
            <td scope="row"><?= $name ?></td>
            <td scope="row"><?= $Availability ?></td>
            <!-- <td scope="row"><!?= $statusp ?></td> -->
            <!-- <td scope="row"><button type="button" class="btn btn-success btn-view-transport" id="" data-id="<!?= $trav_idp ?>" onclick="">View</button></td> -->
          </tr>
      </tbody>
    <?php
    }
    ?>
    </tbody>
    </table>

</body>
</html>