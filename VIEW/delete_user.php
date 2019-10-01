<?php
require_once "config.php";
$rowCount = count($_POST["Travel_id"]);
for ($i = 0; $i < $rowCount; $i++) {
    mysqli_query($db, "DELETE FROM travel_request WHERE Travel_id='" . $_POST["Travel_id"][$i] . "'");
}
header("Location:dashboard.php");
