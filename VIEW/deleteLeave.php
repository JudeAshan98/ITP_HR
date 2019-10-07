<?php
require_once "config.php";
$rowCount = count($_POST["ID"]);
for ($i = 0; $i < $rowCount; $i++) {
    mysqli_query($db, "Delete From apply_leaves  WHERE ID='" . $_POST["ID"][$i] . "'");
    
}
 header("Location:dashboard.php");
?>