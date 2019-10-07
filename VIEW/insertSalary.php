<?php
 
    $emp_id = filter_input(INPUT_POST,'Emp_id');
    $f_name =filter_input(INPUT_POST,'F_name');
    $l_name = filter_input(INPUT_POST,'L_name');
    $d_id=filter_input(INPUT_POST,'D_id');
    $nett_sal=filter_input(INPUT_POST,'nett_sal');
    $increments=filter_input(INPUT_POST,'increments');
    $decrements=filter_input(INPUT_POST,'decrements');
    $paycheck_id=filter_input(INPUT_POST,'Paycheck_id');

    $total = $nett_sal + $increments - $decrements;



 
  $connect = mysqli_connect("localhost", "root", "", "itp_hr"); 
  $sql="INSERT INTO payroll (Emp_id,F_name,L_name,D_id,nett_sal,increments,decrements,Total,Paycheck_id) 
  VALUES ('$emp_id','$f_name','$l_name','$d_id','$nett_sal','$increments','$decrements','$total','$paycheck_id')";
 
if ($connect  ->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}

    
?>