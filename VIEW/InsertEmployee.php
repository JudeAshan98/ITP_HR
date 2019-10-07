<?php
  $connect = mysqli_connect("localhost", "root", "", "ITP_HR");
if(isset($_POST["submit"])) {
  $imgData = addslashes(file_get_contents($_FILES['Image']['tmp_name']));
  $ScanData = addslashes(file_get_contents($_FILES['Scan_docs']['tmp_name']));
  $query = "INSERT INTO emp_img(Emp_id,Pro_pic,Scan_docs) VALUES ('$EPF','$imgData','$ScanData')" ;
  $current_id = mysqli_query($connect,$query) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($connect));
   
  }



   // $PRO=
    $EPF = filter_input(INPUT_POST,'Emp_id');
    $Fi_name =filter_input(INPUT_POST,'F_name');
    $La_name = filter_input(INPUT_POST,'L_name');
    $dob=filter_input(INPUT_POST,'DOB');
    $Contact=filter_input(INPUT_POST,'contact');
    $Mail=filter_input(INPUT_POST,'mail');
    $Gender=filter_input(INPUT_POST,'gender');
    $Address=filter_input(INPUT_POST,'address');
    $De_id=filter_input(INPUT_POST,'D_id');
    $password=filter_input(INPUT_POST,'password');
    $designation=filter_input(INPUT_POST,'tag');

  //$sql_image="INSERT INTO emp_img(Emp_id,Pro_pic,Scan_docs) VALUES ('$_POST[Emp_id]','$_POST[Pro_pic]','$_POST[Scan_docs]')";
  $connect = mysqli_connect("localhost", "root", "", "ITP_HR"); 
  $sql="INSERT INTO employee (Emp_id,F_name,L_name,DOB,contact,mail,gender,address,D_id,password,Designaton) 
  VALUES ('$EPF','$Fi_name','$La_name','$dob','$Contact','$Mail','$Gender','$Address','$De_id','$password','$designation')";
 
if ($connect  ->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}




    
?>