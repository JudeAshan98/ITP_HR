<?php


if (isset($_GET['submit'])) {
    $EPF = $_GET['Emp_id'];
    $Fi_name = $_GET['F_name'];
    $La_name = $_GET['L_name'];
    $dob = $_GET['DOB'];
    $Contact = $_GET['contact'];
    $Mail = $_GET['mail'];
    $Gender = $_GET['gender'];
    $Address = $_GET['address'];
    $De_id  = $_GET['D_id'];

    $connect = new mysqli("localhost", "root", "", "ITP_HR");

$query=mysql_query("UPDATE employee set Emp_id='$EPF',F_name='$Fi_name',L_name='$La_name',DOB='$dob',contact='$Contact',
mail='$Mail',gender='$Gender',address='$Address',D_id='$De_id' where Emp_id='$EPF'",$connect);

 
if(mysql_query($connect,$query)){
echo"Success";
}
else "Error upadting data";

}


?>