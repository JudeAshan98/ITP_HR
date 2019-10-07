<?php
require_once "config.php";
$rowCount = count($_POST["Incident_ID"]);
for ($i = 0; $i < $rowCount; $i++) {
    mysqli_query($db, "UPDATE incidents set Status='Finalized' WHERE Incident_ID='" .$_POST["Incident_ID"][$i] . "'"); 
}
header("Location:dashboard.php");