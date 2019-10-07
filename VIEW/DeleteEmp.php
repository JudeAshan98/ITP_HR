<?php
require_once "config.php";

$rowCount = count($_POST["Emp_id1"]);
for ($i = 0; $i < $rowCount; $i++) {
    $sql ="DELETE FROM employee where Emp_id='" . $_POST["Emp_id1"][$i] . "'";

    if ($db->query($sql) === TRUE) {
        header("Location:dashboard.php");
    } else {
         echo "Error: " . $sql . "<br>" . $sql->error;
    }
}
 

?>