<?php
if (isset($_GET['submit'])) {
    $emp_id = $_GET['Emp_id'];
    $f_name = $_GET['F_name'];
    $l_name = $_GET['L_name'];
    $d_id  = $_GET['D_id'];
    $Nett_sal  = $_GET['nett_sal'];
    $Increments  = $_GET['increments'];
    $Decrements  = $_GET['decrements'];
    $total  = $_GET['Total'];
    $paycheck_id  = $_GET['paycheck_id'];
    $connect = new mysqli("localhost", "root", "", "itp_hr");
$query=mysql_query("UPDATE payroll set Emp_id='$emp_id',F_name='$f_name',L_name='$l_name',D_id='$d_id',nett_sal='$Nett_sal',increments='$Increments',decrements='$Decrements',Total='$total',Paycheck_id='$paycheck_id' where Emp_id='$emp_id'",$connect);
 
if(mysql_query($connect,$query)){
echo"Success";
}
else "Error upadting data";
}
?>