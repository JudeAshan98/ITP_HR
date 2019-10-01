<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




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
      <h2>Vehicles</h2>
    </div>
    <br />
    <div style="float:right">
      <!-- <button type="button" class="btn btn-primary" style="padding:10px;margin-right:10px;padding-right:35px;padding-left:25px">Edit</button> -->
     <?php
      if($login_session==1002){ ?> <!--hardcoded for admin or not !-->
         <!-- echo' <button type="button" class="btn btn-primary" style="padding:10px" data-toggle="modal" data-target="#myModal">+ Add New</button>';    -->
         <button type="button" class="btn btn-primary" style="padding:10px" data-toggle="modal" data-target="#myModal">+ Add New</button>
         <?php
    }
    else{ ?>
    <input type="hidden" class="btn btn-danger" style="padding:10px" data-toggle="modal" data-target="#myModal">
    <?php
    }?>
    
      <br/><br/>
    </div>

    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th scope="col">Vehicle</th>
          <th scope="col">Modle</th>
          <th scope="col">Availabiblity</th>
          <th scope="col">Reg.no</th>
          <!-- <th scope="col">Status</th> -->
          <!-- <th scope="col"></th> -->
        </tr>
      </thead>
      <tbody>
        <?php
        $connect = new mysqli("localhost", "root", "", "ITP_HR");
        $sql = "SELECT * FROM vehicles"; //need to add where clause for the loging users details
        $result = mysqli_query($connect, $sql);
        // var_dump($result);
        while ($row =  mysqli_fetch_array($result)) {
          $Vehicle_type = $row['Vehicle_type'];
          $Availabiblity = $row['Availabiblity'];
          $img_vehicle = $row['img_vehicle'];
          $Reg_no = $row['Reg_no'];
          $v_id = $row['v_id'];
          ?>
          <tr>
            <td scope="row"> <img src="data:image/jpeg;base64,<?php echo base64_encode($img_vehicle); ?>"class="rounded-circle" alt="Cinque Terre" width=120px height=80x></td>
            <td scope="row"><?= $Vehicle_type ?></td>
            <td scope="row"><?= $Availabiblity ?></td>
            <td scope="row"><?= $Reg_no ?></td>
            <!-- <td scope="row"><!?= $statusp ?></td> -->
            <!-- <td scope="row"><button type="button" class="btn btn-success btn-view-transport" id="" data-id="<?= $trav_idp ?>" onclick="">View</button></td> -->
          </tr>
      </tbody>
    <?php
    }
    ?>
    </tbody>
    </table>

   
</body>

</html>