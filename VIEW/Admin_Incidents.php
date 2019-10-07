
<!-- get data from table -->
<?php
require_once "config.php";
$result = mysqli_query($db, "Select * from incidents");


?>

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
                         <td><a href="editinc.php?id=' . $row["Incident_ID"] . '">Status - Update</a></td> 
						 <td><a href="deleteinc.php?id=' . $row["Incident_ID"] . '">Delete</a></td>
                    </tr>  
                         ';  
     }  
     return $output;   
}
?>
<?php
$row;
function fetch_dataAdmin()  
{  
     $output = '';  
     $connect = mysqli_connect("localhost", "root", "", "ITP_HR");  
     $sql = "SELECT * FROM incidents WHERE Tagged_Dept = 'Admin Department' ORDER BY Incident_ID ASC";  
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
                         <td><a href="editinc.php?id=' . $row["Incident_ID"] . '">Status - Update</a></td> 
						 <td><a href="deleteinc.php?id=' . $row["Incident_ID"] . '">Delete</a></td>
                    </tr>  
                         ';  
     }  
     return $output;   
}
?>
<?php
$row;
function fetch_dataIT()  
{  
     $output = '';  
     $connect = mysqli_connect("localhost", "root", "", "ITP_HR");  
     $sql = "SELECT * FROM incidents WHERE Tagged_Dept = 'IT Department' ORDER BY Incident_ID ASC";  
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
                         <td><a href="editinc.php?id=' . $row["Incident_ID"] . '">Status - Update</a></td> 
						 <td><a href="deleteinc.php?id=' . $row["Incident_ID"] . '">Delete</a></td>
                    </tr>  
                         ';  
     }  
     return $output;   
}
?>
<?php
$row;
function fetch_dataSoftware()  
{  
     $output = '';  
     $connect = mysqli_connect("localhost", "root", "", "ITP_HR");  
     $sql = "SELECT * FROM incidents WHERE Tagged_Dept = 'Software Development Department' ORDER BY Incident_ID ASC";  
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
                         <td><a href="editinc.php?id=' . $row["Incident_ID"] . '">Status - Update</a></td> 
						 <td><a href="deleteinc.php?id=' . $row["Incident_ID"] . '">Delete</a></td>
                    </tr>  
                         ';  
     }  
     return $output;   
}
?>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("container").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Incidents</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<script language="javascript">
function Clickheretoprint2()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("menu2").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Incidents</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<script language="javascript">
function Clickheretoprint3()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("menu3").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Incidents</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<script language="javascript">
function Clickheretoprint4()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("menu4").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Incidents</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Incident - Admin</title>
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
  <h3 >Incidents Management - Admin</h3>
</div>

<!-- finalized -->



<ul class="nav nav-pills">
            <li class="active"><a data-toggle="pill" href="#container">All Incidents</a></li>
            <li><a data-toggle="pill" href="#menu2">Admin Department</a></li>
            <li><a data-toggle="pill" href="#menu3">IT Department</a></li>
			<li><a data-toggle="pill" href="#menu4">Software Department</a></li>
        </ul>
   
<br>
<div>

<div class="tab-content">  
<div  class="tab-pane fade in active" id="container">
<form name="frmUser" method="post" action="">
      <div style="float:right">
      <button type="button" class="btn btn-primary" style="padding:10px" onClick="setUpdateAction();" style="float: right">Finalized</button>
  <!--<a href="javascript:Clickheretoprint()">-->
  <button type="button" onclick="printFunction()" id="cmd" class="btn btn-primary" data-toggle="modal" style="float: right">
         Print
    </button></a>
  <table class="table">


                <thead>
                  <tr>
                    
                    <th scope="col">Emp_ID</th>
					<th scope="col">Date</th>
                    <th scope="col">Incident ID</th>
                    <th scope="col">Type</th>
                    <th scope="col">Priority</th>
                    <th scope="col">Department</th>
                    <th scope="col">Incident</th>
                    <th scope="col">Status</th>
					<th scope="col">Action</th>
					<th scope="col">Action</th>
                  </tr>
                </thead>

                
                <tbody id="incident">
                
                <?php
                $i=0;
                while($row = mysqli_fetch_array($result)){
                 if($i % 2==0)
                    $classname = "evenRow";
                    else
                    $classname = "oddRow";
                ?>
                     <tr>
                     <!-- <td scope ="row"><?php echo $row[""];?></td> -->
                     <td scope ="row"><?php echo $row["Emp_ID"];?></td>
                     <td scope ="row"><?php echo $row["Date"];?></td>
                     <td scope ="row"><?php echo $row["Incident_ID"];?></td>
                     <td scope ="row"><?php echo $row["type"];?></td>
                     
                     <!-- <td scope ="row"><?php echo $row["Department"];?></td> -->
                     <td scope ="row"><?php echo $row["Priority"];?></td>
                     <td scope ="row"><?php echo $row["Tagged_Dept"];?></td>
                     
                     <td scope ="row"><?php echo $row["Description"];?></td>
                     <td scope ="row"><?php echo $row["Status"];?></td>
                     <td scope="row"><input type="checkbox" name="Incident_ID[]" value ="<?php echo $row ["Incident_ID"]; ?>"></td>


                     </tr>
                     <?php
                      $i++;

                }
                     ?>


                               


                </tbody>
            
              </table>

              
  </div>
</div>
<div  class="tab-pane fade" id="menu2">
  <!--<a href="javascript:Clickheretoprint2()">-->
  <button type="button" onclick="printFunction()" id="cmd" class="btn btn-primary" data-toggle="modal" style="float: right">
         Print
    </button></a>
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
					<th scope="col">Action</th>
					<th scope="col">Action</th>
                  </tr>
                </thead>

                
                <tbody>
                  <tr>
                  <?php
                echo fetch_dataAdmin();
                  ?>
                  </tr>
                </tbody>
            
              </table>
  
</div>
<div  class="tab-pane fade" id="menu3">
  <!--<a href="javascript:Clickheretoprint3()">-->
  <button type="button" onclick="printFunction()" id="cmd" class="btn btn-primary" data-toggle="modal" style="float: right">
         Print
    </button></a>
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
					<th scope="col">Action</th>
					<th scope="col">Action</th>
                  </tr>
                </thead>

                
                <tbody>
                  <tr>
                  <?php
                echo fetch_dataIT();
                  ?>
                  </tr>
                </tbody>
            
              </table>
  
</div>
<div  class="tab-pane fade" id="menu4">
  <!--<a href="javascript:Clickheretoprint4()">-->
  <button type="button" onclick="printFunction()" id="cmd" class="btn btn-primary" data-toggle="modal" style="float: right">
         Print
    </button></a>
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
					<th scope="col">Action</th>
					<th scope="col">Action</th>
                  </tr>
                </thead>

                
                <tbody>
                  <tr>
                  <?php
                echo fetch_dataSoftware();
                  ?>
                  </tr>
                </tbody>
            
              </table>
  </form>
</div>
</div>
<!-- finalizze-->
<script>
        function setUpdateAction() {
          if(confirm("This incident has finalized?")) {
            document.frmUser.action = "finalize_incident.php";
            document.frmUser.submit();
        }
        }
</script>


<script>
        function printFunction() {
        document.getElementById('cmd').style.visibility='hidden';
        window.print();
            }
    </script>

</body>


</html>

