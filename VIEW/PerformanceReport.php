<?php  
 function fetch_data()  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "", "", "test");  
      $sql = "SELECT * FROM Travel ORDER BY Emp_id ASC"; 
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row[" Emp_id"].'</td>  
                          <td>'.$row["F_name"].'</td>  
                          <td>'.$row["L_name"].'</td>  
                          <td>'.$row["Travel_id"].'</td>  
                           
                     </tr>  
                          ';  
      }  
      return $output;  
 }  
 
?>  
 <!DOCTYPE html>  
 <html>  
<head>  
    <title>CAL.lk</title>  
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />-->
</head>  
<body>  
    <br/><br/>  
    <div class="container" style="width:700px;" id="content">


        <h3 align="center">Travel Request Report</h3>
        <br />

        <form action="/action_page.php">
  <div class="form-group">
    <label for="Search"></label>
    <input type="Emp_id" class="form-control" id="Emp_id">
  </div>

  <button type="submit" class="btn btn-primary">Search</button>
</form>
        
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th width="20%">EMP ID</th>
                    <th width="30%">First Name</th>
                    <th width="30%">Last Name</th>
                    <th width="20%">Travel id</th>
                    

                </tr>
            </thead>
            <?php
                echo fetch_data();
            ?>
        </table>
            <br/>
            
       
      
    <div id="editor"></div>
    <button onclick="printFunction()" id="cmd">Print this Document</button>
    <script>
        function printFunction() {
        document.getElementById('cmd').style.visibility='hidden';
        window.print();
            }
    </script>
     </div>
</body>  
 </html>  