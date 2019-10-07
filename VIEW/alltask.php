
<?php
     include('session.php');
    $link=mysqli_connect("localhost","root","","ITP_HR");
   // mysqli_select_db($link,"ITP_HR");
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Performance Management</title>
    
    <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
  <script>
function openWin() {
  window.open("http://localhost/ITP_HR/VIEW/printtask.php");
}
</script>
</head>

<body>
<div class="container" role="main">

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for kpis.." title="Type in a kpi">
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
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

        <div class="jumbotron text-center" style="background-color:white">
            <h2 style="color:#160a57;margin-bottom: -2.5rem;">All KPIs</h1>

        </div>
        <table class="table table-hover"id="myTable">
            <thead>
                <tr>
                    <th scope="col">Emp Name</th>
                    <th scope="col">KIP #</th>
                    <th scope="col">KPI Name</th>
                    <th scope="col">Rating</th>
                   
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
  // $x = 10;
  // $i = 0;
  
  $connect = new mysqli("localhost", "root", "", "ITP_HR");  
  $sql = "SELECT e.F_name AS F_name, k.kpi_id AS kpi_id,k.kpi_name AS kpi_name,k.rating AS rating  FROM kpi k,employee e where e.D_id=(select D_id from employee where Emp_id=$login_session) AND e.emp_id = k.emp_id";
  $result=mysqli_query($connect,$sql);
//   var_dump($result);
  while($row =  mysqli_fetch_array($result) ){
    $name = $row['F_name']; 
    $kpi_idp = $row['kpi_id'];
    $kpi_namep =$row['kpi_name'];
    $rate = $row['rating'];

 
    
   ?>


                <tr>
                <th scope="row"><?=$name?></th>
                    <td scope="row"> <button type="button" class="btn btn-outline-info" class="btn btn-primary">
                    <a href=<?="Task.php?id=".$row['kpi_id']?>><?=$kpi_idp?></button></td>
                    <td scope="row"><?=$kpi_namep?></td>
                    <td scope="row">
                        <div style="margin-left: 10px; margin-top:10px" class="progress">
                            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                <?=$rate?>
                    <td scope="row">
                        <a href=<?="delete.php?kpi_idp=".$row['kpi_id']?>>
                            <button type="button" class="btn btn-danger" method="post">Remove </button>
                        </a>
                    </td>
    </div>
    </td>
    </tr>

    </tbody>
    <?php  }  ?>
    </tbody>
    </table>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            
                </div>
                
            </div>
</div>
        </div>
    </div>

   
     
    <!-- <button type="button" class="btn btn-primary" id ="test" a href='printtask.php' target="_blank" >Print</button> -->
    <form>
  <input type="button" class="btn btn-primary" value="Print" onclick="openWin()">
</form>
                <script>
              $(document).ready(function() {
                  $('#test').click(function(e) {  
                  e.preventDefault();
              $("#content1").load($(this).attr('href'));
              });
              });
            </script>

<script>
              $(document).ready(function() {
            //    var x = document.getElementById('myCheck').value;
              //   var y = document.getElementById('logout').value;
              $('a').click(function(e) {  
                          
              e.preventDefault();
              $("#content1").load($(this).attr('href'));
              });
              });
            </script>
</body>

</html>