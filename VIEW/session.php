<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"SELECT Emp_id , F_name FROM employee where Emp_id = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
  
   $login_session = $row['Emp_id'];
   $login_name = $row['F_name'];
   
   $sqlp = mysqli_query($db,"SELECT e.Emp_id AS EID, p.image AS Pimage,e.F_name AS fr_name FROM emp_profile p,employee e where e.D_id  = (select D_id from employee where emp_id=$login_session) AND e.emp_id = p.emp_id"); 
   
   $row1 = mysqli_fetch_array($sqlp,MYSQLI_ASSOC);
   $imagedp = $row1['Pimage'];


   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>