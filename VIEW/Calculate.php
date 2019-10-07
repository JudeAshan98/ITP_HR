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
<?php
  
  $connect = new mysqli("localhost", "root", "", "ITP_HR");  
  $id = $_GET['id'];
  $sql = "SELECT p.image AS Pimage,e.F_name AS fr_name FROM emp_profile p,employee e where e.Emp_ID =$id AND e.Emp_id = p.Emp_id";
   $result=mysqli_query($connect,$sql);
//   var_dump($result);
  while($row =  mysqli_fetch_array($result) ){
    
    $imagep = $row['Pimage'];
    $pfname = $row['fr_name'];
    
  }
   ?>
<div class="container" role="main">

<div class="jumbotron text-center" style="background-color:white">
<img src="data:image/jpeg;base64,<?php echo base64_encode($imagep); ?>"class="rounded-circle" alt="Cinque Terre" width=100px height=100px></td>
<?=$pfname?>
       
</div>
<!--div class="jumbotron text-center" style="background-color:white">
  <h1 style="color:#160a57;margin-bottom: -2.5rem;">Natasha Amarasinghe</h1>
</div>
<div style = "margin-left: 10px; margin-top: 60px";>
<img src="../IMG/finalize.jpg" class="rounded-circle" alt="Cinque Terre">
</div-->
<!--<form action="update_ftask.php" method="GET">-->

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"> KPI ID</th>
      <th scope="col">KPI Name</th>
      <th scope="col">Emp Rating</th>
      <th scope="col">Final Rating</th>
    
      
    </tr>
  </thead>
  <tbody>
  <?php
  
  $connect = new mysqli("localhost", "root", "", "ITP_HR"); 
  $id = $_GET['id']; 
  $sql = "SELECT kpi_id,kpi_name,Rating,Fin_Rating FROM kpi where Emp_ID =$id"; 
  $result=mysqli_query($connect,$sql);
//   var_dump($result);
  while($row =  mysqli_fetch_array($result) ){
    
    $kpi_idp = $row['kpi_id'];
    $kpi_namep =$row['kpi_name'];
    $kpi_rating =$row['Rating'];
    $Fin_Rating =$row['Fin_Rating'];
   ?>
  

    <tr> 

    <td scope="row"><?=$kpi_idp?></td>
    <td scope="row"><?=$kpi_namep?></td>
    <td scope="row"><?=$kpi_rating?></td>
    
    <!-- <td scope="row"><!?=$Fin_Rating?></td> -->
    <td scope="row">
        <form action="update_ftask.php" method="GET">
              <input type="hidden" name="kpi_idp" value="<?=$kpi_idp?>">
              <input type="number" name="Fin_Rating" value="<?=$Fin_Rating?>">
              <button type="submit" class="btn btn-primary">Finalize</button>
          </form>   
    </td>
    
     

    </tr>
   
    </tbody>
  <?php
    // $i++;
  }
  ?> 

  </tbody>
</table>

  

<form method="GET" action="calculate_ftask.php">
    <input type="hidden" name="idu" value="<?=$id?>" />

    <input type="submit" value="Submit" />
</form>
<br>
<br>
<!-- <form action="mailtask.php" method="POST" >
    email:<input type="email" name="email"><br><br>

    <input type="submit" value="Send Email" />
</form> -->
<br>

 <!-- <div>
        <br/>
        <button type="submit" class="btn btn-primary">Submit</button> 
        
  </div>-->




</body>
</html>
