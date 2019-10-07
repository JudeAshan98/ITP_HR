<?php
  $kpi_id = $_GET['id']; 
  $connect = new mysqli("localhost", "root", "", "ITP_HR"); 
  
  $sql = mysqli_query($connect,"SELECT Start_date,End_date,kpi_name,Notes,Rating FROM kpi where KPI_ID=$kpi_id"); 
  // $result=mysqli_query($connect,$sql);
  $row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
  // while($row =  mysqli_fetch_array($result) ){
    $Start_date=$row['Start_date'];
    $End_date=$row['End_date'];
    $kpi_name=$row['kpi_name'];
    $Notes=$row['Notes'];
    $Rating=$row['Rating'];
  
  // }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Performance Management</title>
  <!--meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script-->

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
<div class = "container" role = "main">
<h1>Rate your KPI</h1>
<br/>
<br/>
<div class="slidecontainer">
  <input type="range" min="0" max="100" value="50" class="slider" id="myRange">
  <Br/><Br/>
  <p style = "margin-left:40%">Value: <span id="demo"></span></p>

</div>


<form action="update_task.php" method="GET">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputStartDate">Start Date:</label>
      <input type="date" class="form-control" name="StartDate" value="<?=$Start_date?>" id="inputStartDate" disabled>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEndDate">End Date:</label>
    
    <input type="date" class="form-control" name = "EndDate" id="inputEndDate" value="<?=$End_date?>" disabled >
    </div>
  </div>
  <input type="hidden" name="kpi_id" Value="<?=$kpi_id?>">
  <div class="form-group">
    <label for="KPIName">KPI Description:</label>
    <input type="text" class="form-control" name = "Description" id="KPIName" value="<?=$kpi_name?>" disabled>
  </div>
  <div class="form-group">
    <label for="Notes">Notes:</label>
    <input type="text" class="form-control" name = "Notes" id="Notes" value="<?=$Notes?>">
  </div>
  
  <input type="hidden" name="demo1" id="hdemo" value="<?=$Rating?>"> 
  <button type="submit" class="btn btn-primary">Submit</button>  
</form>


<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
var output1 = document.getElementById("hdemo");
var a = 50;
slider.value = a;
output.innerHTML = a;

slider.oninput = function() {
  output.innerHTML = this.value;
  output1.value = this.value;
}

</script>
</div>
</body>
</html>