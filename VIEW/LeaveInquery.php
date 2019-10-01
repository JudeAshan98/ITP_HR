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
<!--retirve date to approved leaves table -->
<?php  
 function fetch_data_to_approvedLeaves()  
 {  


      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "ITP_HR");  
      $sql = "SELECT * FROM apply_leaves  Where Status = 'Approved' ORDER BY id ASC";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["Type"].'</td>  
                          <td>'.$row["Start_Date"].'</td>  
                          <td>'.$row["End_Date"].'</td>  
                          
                     </tr>  
                          ';  
      }  
      return $output;  
 }  

?> 

<!-- retrive data to pending leaves table -->
<?php  
 function fetch_data_to_pendingLeaves()  
 {  


      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "ITP_HR");  
      $sql = "SELECT * FROM apply_leaves  Where Status = 'Pending' ORDER BY id ASC";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["Type"].'</td>  
                          <td>'.$row["Start_Date"].'</td>  
                          <td>'.$row["End_Date"].'</td>  
                          
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
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->


 
</head>

<body>
    <div class="container">
    <div class="jumbotron text-center"style="padding-top:40px; padding-bottom:0px; background-color: transparent;" >
        <h2>Leave Inquiry</h2>
    </div>    
        <ul class="nav nav-pills">
            <li class="active"><a data-toggle="pill" href="#home">All my Leaves</a></li>
            <!-- <li><a data-toggle="pill" href="#menu1">Approved Leaves</a></li> -->
            <li><a data-toggle="pill" href="#menu2">Pending Leaves</a></li>
            <li><a data-toggle="pill" href="#menu3">Approved Leaves</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <br>
                <br>

                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="float:right">Add Leave +</button>

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
                <button type="button" class="btn btn-primary" onclick="window.location.href='LeaveReport.php' ">&nbsp;Get report &nbsp;</button>
            </div>
            <div id="menu3" class="tab-pane fade">
                <!-- <h3>Approved Leaves</h3> --><br/><br/><br/>
                <table class="table table-bordered table-hover ">
                    <thead>
                        <tr>
                            <th scope="col">Leave Type</th>
                            <th scope="col">Starting date</th>
                            <th scope="col">End date</th>
                        </tr>
                    </thead>
                   
                    <?php
                         echo fetch_data_to_approvedLeaves();
                     ?>

                </table>
            </div>
            <div id="menu2" class="tab-pane fade">
                <!-- <h3>Pending Leaves</h3> --><br/><br/><br/>
                <table class="table table-bordered table-hover ">
                    <thead>
                        <tr>
                            <th scope="col">Leave Type</th>
                            <th scope="col">Starting date</th>
                            <th scope="col">End date</th>
                            
                        </tr>
                    </thead>
                   
                    <?php
                         echo fetch_data_to_pendingLeaves();
                     ?>

                </table>
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
                    
                    <form class="row" action="inputLeaveForm.php" method = "post" onsubmit="return validateForm()">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                    <label for="inputAddress">Leave type</label>
                                    <select id="inputAddress" class="form-control" name ="Type">
                                        <option selected>Annual</option>
                                        <option>Casual</option>
                                        <option>Medical</option>
                                        </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="startingdate">Starting Date</label>
                                <input type="date" class="form-control" id="startingdate" placeholder="date" name="Start_Date">
                            </div>
                                        
                                <div class="form-group col-md-6">
                                <label for="enddate">End Date</label>
                                <input type="date" class="form-control" id="enddate" placeholder="date" name="End_Date">
                            </div>

                        </div>
                                 <!-- addcoveredPerson       -->
                                 <div class="form-group col-md-12">
                                    <label for="inputAddress">Covered Person</label>
                                    <select id="inputAddress" class="form-control" name="Covering_Emp">
                                        <option selected>judeashanlakmal@gmail.com</option>
                                        <option>1818164886@my.sliit.lk</option>
                                        <option>hmadushan@evis.com.au</option>
                                        </select>
                            </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputReason">Reason</label>
                                <!-- <input type="text" class="form-control" id="inputReason"> -->
                                <textarea class="form-control" rows="5" id="comment" name="Reason"  required></textarea>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>

        </div>
        </div>

</body>

<script>
    function validateForm(){
      var startDate = document.getElementById("startingdate").value;
      var endDate = document.getElementById("enddate").value;

    if ((Date.parse(endDate) <= Date.parse(startDate))) {
        alert("End date should be greater than Start date");
        document.getElementById("enddate").value = "";
    }


    }

  </script>

</html>