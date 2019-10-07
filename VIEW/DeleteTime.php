<?php
require_once "config.php";
$rowCount = count($_POST["id"]);
for ($i = 0; $i < $rowCount; $i++) {
    mysqli_query($db, "DELETE FROM time_sheet WHERE id='" . $_POST["id"][$i] . "'");
}
header("Location:dashboard.php");