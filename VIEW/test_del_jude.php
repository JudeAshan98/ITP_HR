<?php
require_once "config.php";
$result = mysqli_query($db, "SELECT * FROM travel_request");
?>
<html>

<head>
    <title>Users List</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <script language="javascript" src="users.js" type="text/javascript"></script>
</head>

<body>
    <form name="frmUser" method="post" action="">
        <div style="width:500px;">
            <table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
                <tr class="listheader">
                    <td></td>
                    <td>Username</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                </tr>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($result)) {
                    if ($i % 2 == 0)
                        $classname = "evenRow";
                    else
                        $classname = "oddRow";
                    ?>
                    <tr class="<?php if (isset($classname)) echo $classname; ?>">
                        <td><input type="checkbox" name="Travel_id[]" value="<?php echo $row["Travel_id"]; ?>"></td>
                        <td><?php echo $row["Travel_id"]; ?></td>
                        <td><?php echo $row["Tfrom"]; ?></td>
                        <td><?php echo $row["Tto"]; ?></td>
                    </tr>
                <?php
                    $i++;
                }
                ?>
                <tr class="listheader">
                    <td colspan="4"><input type="button" name="update" value="Update" onClick="setUpdateAction();" /> <input type="button" name="delete" value="Delete" onClick="setDeleteAction();" /></td>
                </tr>
            </table>
    </form>
    <script>
        function setUpdateAction() {
            document.frmUser.action = "edit_user.php";
            document.frmUser.submit();
        }
    </script>
        <script>
        function setDeleteAction() {
        if(confirm("Are you sure want to delete these rows?")) {
        document.frmUser.action = "delete_user.php";
        document.frmUser.submit();
        }
        }
        </script>
    </div>
</body>

</html>