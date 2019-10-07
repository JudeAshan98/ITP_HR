<!-- retrive data to All my leaves table  -->
<?php  
 function fetch_data_to_allMYLeaves()  
 {  


      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "ITP_HR");  
      $sql = "SELECT * FROM apply_leaves ORDER BY id ASC";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["Type"].'</td>  
                          <td>'.$row["Start_Date"].'</td>  
                          <td>'.$row["End_Date"].'</td>  
                          <td>'.$row["Status"].'</td>
                        
                    </tr>  
                          ';  
      }  
      return $output;  
 }  

?> 



<!-- end of php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Leave</title>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 


 
</head>

<body>

    <div class="container">
    
    <div class="jumbotron text-center"style="padding-top:40px; padding-bottom:0px; background-color: transparent;" >
        <h2>Leave  Report</h2>  
        <a href="dashboard.php" class="site_title" id="myCheck" onclick="myFunction()"  style="float:right"><img src="../IMG/favicon.ico" style="width:70px; height:70px" ></i> <span>CAL HRM</span></a> 
    </div>    
    
        <ul class="nav nav-pills">
            <li class="active"><a data-toggle="pill" href="#home">All my Leaves</a></li>
           
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <br>
                <br>

                

                <br>
                <br>
                <br>
                <table class="table table-bordered table-hover ">
                    <thead>
                        <tr>
                            <th scope="col">Leave Type</th>
                            <th scope="col">Starting date</th>
                            <th scope="col">End date</th>
                            <th scope="col">Status</th>
                            
                        </tr>
                    </thead>
                    <?php
                         echo fetch_data_to_allMYLeaves();
                     ?>
                </table>
                <br>
                
            </div>
            
           
            <!-- <div id="menu3" class="tab-pane fade">
                <h3>Menu 3</h3>
                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div> -->
        </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
       
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                </div> 

                <div class="modal-body"> 
                    
                   
                </div>
                
            </div>

        </div>
        </div>

</body>
    <!-- print button -->
       
    <button onclick="printFunction()" id="cmd" class="btn btn-primary"  style="float:right" >Print this Document</button>
    <script>
        function printFunction() {
        document.getElementById('cmd').style.visibility='hidden';
        window.print();
            }
    </script>


</html>