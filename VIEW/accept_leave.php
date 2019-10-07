<?php
require_once "config.php";
$rowCount = count($_POST["ID"]);
for ($i = 0; $i < $rowCount; $i++) {
    mysqli_query($db, "UPDATE apply_leaves set Status='Approved' WHERE ID='" . $_POST["ID"][$i] . "'");
}
header("Location:dashboard.php");