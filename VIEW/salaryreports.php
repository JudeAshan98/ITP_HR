<!DOCTYPE html>
<html lang="en">
<head>
  <title>Salary Reports</title>
 <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
</head>

<class="jumbotron text-center" style="background-color:white">
    <h1 style="color: #160a57; margin-left:40%;">Salary Reports</h1>
</head>
<body>


<div class="container">
  
 
<input type="text" id="myInput1" onkeyup="myFunction1()" placeholder="Search for emp code.." title="Type in a name">
<input type="text" id="myInput2" onkeyup="myFunction2()" placeholder="Search for emp Name.." title="Type in a name">


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


<table id="myTable" class="table table-hover table-bordered" style="padding:30px">
<tbody>
<thead class="thead-dark">
    <tr>
      <th scope="col">Emp_id</th>
      <th scope="col">Emp_name</th>
      <th scope="col">basic</th>
      <th scope="col">increment</th>
      <th scope="col">Total</th>
      <th scope="col">Paycheck_id</th>
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
    $basic = $row['basic'];
    $increment = $row['increment'];
    $Total = $row['Total'];
    $Paycheck_id = $row['Paycheck_id'];
   ?>
    <tr>
     
      <td scope="row"><?=$Emp_id?></td>
      <td scope="row"><?=$Emp_name?></td>
      <td scope="row"><?=$basic?></td>
      <td scope="row"><?=$increment?></td>
      <td scope="row"><?=$Total?></td>
      <td scope="row"><?=$Paycheck_id?></td>
      
    </tr>
    </tbody>
  <?php
    // $i++;
  }
  ?>

  </tbody>



</table>


<br><br>

<?php
$Emp_id = filter_input(INPUT_POST,'Emp_id');
$Emp_name = filter_input(INPUT_POST,'Emp_name');
$basic=filter_input(INPUT_POST,'basic');
$increment=filter_input(INPUT_POST,'increment');
$Total=filter_input(INPUT_POST,'Total');
$Paycheck_id=filter_input(INPUT_POST,'Paycheck_id');
$connect = new mysqli("localhost", "root", "", "ITP_HR");  
$sql= "INSERT INTO payroll(Emp_id,Emp_name,basic,increment,Total,Paycheck_id)
values ('$Emp_id','$Emp_name','$basic','$increment','$Total','$Paycheck_id')";
if($connect-> query($sql))
{
    echo "New record is inserted sucessfully";
}
 ?>

<td scope="row">
                        
                            <button type="button" class="btn btn-danger" method="post">Remove </button>
                        </a>
                    </td>

                    <?php 
//$con = mysqli_connect('localhost', 'root', '');
//mysqli_select_db($con,'ITP_HR');
//$safeid = mysql_real_escape_string($id);
//$query = mysql_query("delete from class where id=$safeid");

//$id = get['kpi_id'];

//if(isset($_POST['delete']))
//$id = $_POST['id'];

$entry_to_be_deleted = $_GET['Emp_idp'];

// test to see if it actually capturing the kpi_idp
// echo $entry_to_be_deleted;

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con,'ITP_HR');

$sql="DELETE  FROM payroll WHERE Emp_id=$entry_to_be_deleted";


if(mysqli_query($con,$sql)){
echo "Success";
}else{
echo "Error deleting Data";
}

?>
<div style="margin-left:75%">
<button type="button" class="btn btn-primary">Generate</button>
<button type="button" class="btn btn-primary">cancel</button>
</div>

</div>
<body>
</html>