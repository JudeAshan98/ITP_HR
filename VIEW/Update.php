<?php

require_once "config.php"; 

if(count($_POST)>0) {
  $query="UPDATE employee set Emp_id='" . $_POST['Emp_id'] . "', F_name='" . $_POST['F_name'] . "', L_name='" . $_POST['L_name'] . "', DOB='" . $_POST['DOB'] . "' ,contact='" . $_POST['contact'] . "',mail='" . $_POST['mail'] . "',
    gender='" . $_POST['gender'] . "',address='" . $_POST['address'] . "',D_id='" . $_POST['D_id'] . "',password='" . $_POST['password'] . "', designation='" . $_POST['tag'] . "'  WHERE Emp_id='" . $_POST['Emp_id'] . "'";
   // $message = "Record Modified Successfully";
    }
  

 
$result = mysqli_query($db, $query);
   
   if($result)
   {
       echo 'Data Updated';
       header("refresh:1; url=dashboard.php");
   }else{
       echo 'Data Not Updated';
       header("refresh:1; url=dashboard.php");
   }
   



?>