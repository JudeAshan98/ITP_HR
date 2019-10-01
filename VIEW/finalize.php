<!DOCTYPE html>
<html lang="en">
<head>
  <title>Performance Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container" role="main">
<div class="jumbotron text-center" style="background-color:white">
  <h1 style="color:#160a57;margin-bottom: -2.5rem;">Natasha Amarasinghe</h1>
 
</div>


<div style = "margin-left: 10px; margin-top: 60px";>
<img src="../IMG/finalize.jpg" class="rounded-circle" alt="Cinque Terre">
</div>
<div style="margin-left: 10px;margin-top:50px";>
    <button type="button" class="btn btn-primary" data-toggle="modal" onclick="window.location.href='Calculate.php'"data-target="#myModal">Finalize</button>
</div>

<br/>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">KIP #</th>
      <th scope="col">KPI Name</th>
      <th scope="col">Rating</th>
  
    </tr>
  </thead>
  <tbody>
  <?php
  
  $connect = new mysqli("localhost", "root", "", "ITP_HR");  
  $sql = "SELECT kpi_id,kpi_name,rating FROM kpi where Emp_ID =1002"; 
  $result=mysqli_query($connect,$sql);
//   var_dump($result);
  while($row =  mysqli_fetch_array($result) ){
     
    $kpi_idp = $row['kpi_id'];
    $kpi_namep =$row['kpi_name'];
    $rate = $row['rating'];
   ?>
    <tr>
    <td scope="row"> <button type="button" class="btn btn-outline-info" class="btn btn-primary" onclick="window.location.href='Task.php'"><?=$kpi_idp?></button></td>
      <td scope="row"><?=$kpi_namep?></td>
      <td scope="row"><div style="margin-left: 10px; margin-top:10px" class="progress">
      <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
  aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
    <?=$rate?>
  </div></td>

    </tr>
    </tbody>
  <?php
    // $i++;
  }
  ?> 

  </tbody>
</table>


<!--div>
<div style="margin-left: 10px; margin-top:10px" class="progress">
<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:40%" 40%></div>
 
</div>
<div style="margin-left: 10px; margin-top:10px">
<button type="button" class="btn btn-outline-info" class="btn btn-primary" onclick="window.location.href='Task.php'">KP11</button>

</div>

</div>
<div>
<div style="margin-left: 10px; margin-top:10px" class="progress">
<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:40%" 40%></div>
 
</div>
<div style="margin-left: 10px; margin-top:10px">
<button type="button" class="btn btn-outline-info">KP14</button>
</div>
-->
</div>
</body>
</html>