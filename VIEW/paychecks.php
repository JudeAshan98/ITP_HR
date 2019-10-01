



<!DOCTYPE html>
<html lang="en">
<head>
  <title>paychecks</title>
  <!--<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
</head>

<class="jumbotron text-center" style="background-color:white">
    <h1 style="color: #160a57; margin-left:40%;">Paychecks</h1>



</head>

<body>
<div class="container">

<input type="text" id="myInput1" onkeyup="myFunction1()" placeholder="Search for emp code.." title="Type in a name">
<input type="text" id="myInput2" onkeyup="myFunction2()" placeholder="Search for department.." title="Type in a name">


<script>
function myFunction1() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

<script>
function myFunction2() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<br><br>
<img src="../IMG/pic.jpg" class="img-circle" alt="Cinque Terre" width="250" height="200"style="margin-left:35%">


<table id="myTable" class="table table-hover table-bordered" style="padding:30px">
<tbody>
<thead class="thead-dark">
    <tr>
      <th scope="col">Emp_id</th>
      <th scope="col">Emp_name</th>
      <th scope="col">Department</th>
      <th scope="col">paid_date</th>
      
</tr>
<tbody>
  <?php
  // $x = 10;
  // $i = 0;
  $connect = new mysqli("localhost", "root", "", "ITP_HR");  
  $sql = "SELECT * FROM payroll"; 
  $result=mysqli_query($connect,$sql);
//   var_dump($result);
  while($row =  mysqli_fetch_array($result) ){
     
    $Emp_id = $row['Emp_id'];
    $Emp_name = $row['Emp_name'];
   
   ?>
    <tr>
     
      <td scope="row"><?=$Emp_id?></td>
      <td scope="row"><?=$Emp_name?></td>
      
      
    </tr>
    </tbody>
  <?php
    // $i++;
  }
  ?>

  </tbody>



</table>


<h2 style="color: #160a57">Earnings...</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Rate</th>
      <th scope="col">Hours</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Regular:</th>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <th scope="row">Overtime:</th>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
</table>

<h3 style="color: #160a57; margin-left:40%;">Gross Pay:</h3>

<h2 style="color: #160a57">Deductions...</h2>

<table class="table">

  <tbody>
    <tr>
      <th scope="row">EPF:</th>
      <td> </td>
    </tr>
    <tr>
      <th scope="row">ETF:</th>
      <td> </td>
    </tr>
    <tr>
      <th scope="row">Advanced:</th>
      <td> </td>
    </tr>
</table>

<h3 style="color: #160a57; margin-left:40%;">Total Salary:</h3>

<br><br>

<div style="margin-left:75%">
<button type="button" class="btn btn-primary">Print</button>
<button type="button" class="btn btn-primary">cancel</button>
</div>



</div>
</body>


</html>