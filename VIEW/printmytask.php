
<?php
     include('session.php');
    $link=mysqli_connect("localhost","root","","ITP_HR");
   // mysqli_select_db($link,"ITP_HR");
    
?>
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
            <h2 style="color:#160a57;margin-bottom: -2.5rem;">My KPIs</h1>

        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">KIP #</th>
                    <th scope="col">KPI Name</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Final Rating</th>
                  
                </tr>
            </thead>
            <tbody>
                <?php
  // $x = 10;
  // $i = 0;
  
  $connect = new mysqli("localhost", "root", "", "ITP_HR");  
  $sql = "SELECT kpi_id,kpi_name,rating,Fin_Rating FROM kpi where Emp_id=$login_session";
  $result=mysqli_query($connect,$sql);
//   var_dump($result);
  while($row =  mysqli_fetch_array($result) ){
     
    $kpi_idp = $row['kpi_id'];
    $kpi_namep =$row['kpi_name'];
    $rate = $row['rating'];
    $Fin_Rating= $row['Fin_Rating'];

 
    
   ?>


                <tr>
                    <td scope="row"> <button type="button" class="btn btn-outline-info" class="btn btn-primary">
                    <a href=<?="Task.php?id=".$row['kpi_id']?>><?=$kpi_idp?></button></td>
                    <td scope="row"><?=$kpi_namep?></td>
                    <td scope="row"><?=$rate?></td>
                    <td scope="row"><?=$Fin_Rating?></td>
                    
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
    <button style="margin-left:90px" class="btn btn-primary" onclick="printFunction()" id="cmd" >Print</button>
        <script>
            function printFunction(){
                document.getElementById('cmd').style.visibility="hidden";
                window.print();
            }
</script>
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