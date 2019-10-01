<?php
require_once "config.php";

if (isset($_POST["submit"]) && $_POST["submit"] != "") {
    $usersCount = count($_POST["Travel_id"]);
    for ($i = 0; $i < $usersCount; $i++) {
        mysqli_query($db, "UPDATE Travel_request set Travel_id='" . $_POST["Travel_id"][$i] . "', Tfrom='" . $_POST["Tfrom"][$i] . "', Tto='" . $_POST["Tto"][$i] . "', priority='" . $_POST["priority"][$i] . "' WHERE Travel_id='" . $_POST["Travel_id"][$i] . "'");
    }
    header("Location:dashbord.php");
}
?>
<html>

<head>
    <title>Edit Multiple User</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
    <form name="frmUser" method="post" action="">
        <div style="width:500px;">
            <table border="0" cellpadding="10" cellspacing="0" width="500" align="center">
                <tr class="tableheader">
                    <td>Edit User</td>
                </tr>
                <?php
                $rowCount = count($_POST["Travel_id"]);
                for ($i = 0; $i < $rowCount; $i++) {
                    $result = mysqli_query($db, "SELECT * FROM travel_request WHERE Travel_id='" . $_POST["Travel_id"][$i] . "'");
                    $row[$i] = mysqli_fetch_array($result);
                    ?>
                    <tr>
                        <td>
                            <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
                                <tr>
                                    <td><label>Username</label></td>
                                    <td><input type="hidden" name="Travel_id[]" class="txtField" value="<?php echo $row[$i]['Travel_id']; ?>"><input type="text" name="Travel_id[]" class="txtField" value="<?php echo $row[$i]['Travel_id']; ?>"></td>
                                </tr>
                                <tr>
                                    <td><label>Password</label></td>
                                    <td><input type="text" name="Tfrom[]" class="txtField" value="<?php echo $row[$i]['Tfrom']; ?>"></td>
                                </tr>
                                <td><label>First Name</label></td>
                                <td><input type="text" name="Tto[]" class="txtField" value="<?php echo $row[$i]['Tto']; ?>"></td>
                    </tr>
                    <td><label>Last Name</label></td>
                    <td><input type="text" name="priority[]" class="txtField" value="<?php echo $row[$i]['priority']; ?>"></td>
                    </tr>
            </table>
            </td>
            </tr>
        <?php
        }
        ?>
        <tr>
            <td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
        </tr>
        </table>
        </div>
    </form>
</body>

</html>