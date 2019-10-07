<?php
$row;
function fetch_data()  
{  
     $output = '';  
     $connect = mysqli_connect("localhost", "root", "", "ITP_HR");  
     $sql = "SELECT * FROM incidents ORDER BY Incident_ID ASC";  
     $result = mysqli_query($connect, $sql);  
     while($row = mysqli_fetch_array($result))  
     {       
     $output .= '<tr>  
                         <td>  <input type="checkbox" id="defaultCheck" name="example2">
                         </td>
                         <td>'.$row["Emp_ID"].'</td>
						 <td>'.$row["Date"].'</td> 
                         <td>'.$row["Incident_ID"].'</td>    
                         <td>'.$row["type"].'</td>
                         <td>'.$row["Priority"].'</td>
                         <td>'.$row["Tagged_Dept"].'</td>
                         <td>'.$row["Description"].'</td>
                         <td>'.$row["Status"].'</td> 
                         <td><a href="deleteinc.php?id=' . $row["Incident_ID"] . '">Delete</a></td>   
                    </tr>  
                         ';  
     }  
     return $output;   
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Incident test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Boostrap files-->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
   <!--Boostrap files end-->
</head>
<body>

<div class="container" role= "main">
<div class="jumbotron text-center"style="padding-top:40px; padding-bottom:0px; background-color: transparent;" >
  <h3 >Incidents Management</h3>
</div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="float: right">
          +Add Incident
    </button>
<br><br><br>
<div>

  
<div class="container">
  
  <table class="table">


                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Emp_ID</th>
					<th scope="col">Date</th>
                    <th scope="col">Incident ID</th>
                    <th scope="col">Type</th>
                    <th scope="col">Priority</th>
                    <th scope="col">Department</th>
                    <th scope="col">Incident</th>
                    <th scope="col">Status</th>
                   
                    
                  </tr>
                </thead>

                
                <tbody>
                  <tr>
                  <?php
                echo fetch_data();
                  ?>
                  </tr>
                </tbody>


            
              </table>
  
</div>
   
   

  <!--popup-->

<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Add Incident</h4>
          </div>

          <div class="modal-body">



<form action="add_inc.php" method="POST" >

    <div class="form-group">
      <label for="sel1">Type *</label>
      <select class="form-control" name="type" id="sel1" required>
        <option selected hidden value="">Select</option>
        <option>Task</option>
        <option>Issue</option>
      </select>

    </div>

    <div class="form-group">
      <label for="sel1">Priority*</label>
      <select class="form-control" name="priority" id="sel1" required>
        <option selected hidden value="">Select</option>
        <option>High</option>
        <option>Medium</option>
        <option>Low</option>
      </select>
    </div>

    <div class="form-group">
      <label for="sel1">Tag the Department*</label>
      <select class="form-control" name="tag" id="sel1" required>
        <option selected hidden value="">Select</option>
        <option>Admin Department</option>
        <option>IT Department</option>
        <option>Software Development Department</option>
      </select>
    </div>

    <!--issue box -->
    <div class="form-group">


    <label for="comment">Description:</label>
      <textarea class="form-control" rows="5" id="comment"  name="description"></textarea>

    </div>

    <div>
    </div>

    <!--label for="input-folder-2">Upload Image</label>
    <div class="file-loading">
        <input id="input-folder-2" name="input-folder-2[]" type="file" multiple webkitdirectory accept="image/*">
    </div>
    <div id="errorBlock" class="help-block"></div>
    <script>
    $(document).on('ready', function() {
        $("#input-folder-2").fileinput({
            browseLabel: 'Select Folder...',
            previewFileIcon: '<i class="fas fa-file"></i>',
            allowedPreviewTypes: null, // set to empty, null or false to disable preview for all types
            previewFileIconSettings: {
              
                'jpg': '<i class="fas fa-file-image text-warning"></i>',
              
            },
            previewFileExtSettings: {
              
                'jpg': function(ext) {
                    return ext.match(/(jp?g|png|gif|bmp)$/i);
                },
                
            }
        });
    });
    </script>
    <div>
    </div-->


    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    <button type="reset" class="btn btn-primary btn-lg">Reset</button>

</form>


<div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>



</body>


</html>

