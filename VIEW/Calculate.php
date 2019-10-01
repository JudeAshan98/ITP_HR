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
  <style>
.slidecontainer {
  width: 50%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}


</style>
</head>

<body>
<div class="container" role="main">
<div class="jumbotron text-center" style="background-color:white">
  <h1 style="color:#160a57;margin-bottom: -2.5rem;">Natasha Amarasinghe</h1>
</div>
<div style = "margin-left: 10px; margin-top: 60px";>
<img src="../IMG/finalize.jpg" class="rounded-circle" alt="Cinque Terre">
</div>
<br/>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"> KPI ID</th>
      <th scope="col">KPI Name</th>
      <th scope="col">Weightage</th>
      <th scope="col">Rating</th>
    
      
    </tr>
  </thead>
  <tbody>
  <?php
  
  $connect = new mysqli("localhost", "root", "", "ITP_HR");  
  $sql = "SELECT kpi_id,kpi_name,rating,Weight FROM kpi where Emp_ID =1002"; 
  $result=mysqli_query($connect,$sql);
//   var_dump($result);
  while($row =  mysqli_fetch_array($result) ){
     
    $kpi_idp = $row['kpi_id'];
    $kpi_namep =$row['kpi_name'];
    $Weight = $row['Weight'];
   ?>
    <tr>
    <td scope="row"><?=$kpi_idp?></td>
    <td scope="row"><?=$kpi_namep?></td>
    <td scope="row"><?=$Weight?></td> 
    <th scope="row"><input type="number" data-toggle="modal" data-target="#myModal"></button></th>
  </div></td>

    </tr>
    </tbody>
  <?php
    // $i++;
  }
  ?> 

  </tbody>
</table>
</table>
<div>

  
  
  <button type="submit" class="btn btn-primary">Calculate</button>
  <input type="number" data-toggle="modal" data-target="#myModal"></button></th>                              
  
</div>
  <div>
        <br/>
        <button type="submit" class="btn btn-primary">Submit</button> 
        
  </div>


</div>
</body>
</html>
