<?php
include("mysqli-connection.php");
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'ITP_HR';

$db_conx = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('could not connect to database');
?>

<?php

	$id = $_GET['id'];
	
	$sql = ("SELECT * FROM incidents WHERE Incident_ID=$id");
	$query = mysqli_query($db_conx,$sql);
	
	while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
	{
		$id = $row['Incident_ID'];
		$date = $row['Date'];
		$type = $row['type'];
		$desc = $row['Description'];
		$dept = $row['Tagged_Dept'];
		$priority = $row['Priority'];
		
		
	}

?>

<!DOCTYPE html>
<html>
<head>
<title>Incident Status</title>
</head>
<body>

<br />
<div align="center">
<table border="0" cellpadding="1" cellspacing="0" width="100%">
  <tr>
    <td colspan="5" height="96">
		<form name="formRegister" method="post" action="confirmeditprod.php">
        <table width="400" align="center" border="0">
        <tr>
            <td bgColor="c6d3ce">
              <table width="400" border="0">
			  <tr bgColor="dee7e7">
				 <td width="165"><strong>ID : <?php echo $id; ?></strong></td>
				 <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
			  </tr>
				<tr bgColor="dee7e7">
                  <td width="165">Date</td>
                  <td><b><input type="text" size="25" name="date" value="<?php echo $date; ?>"></b></td>
                </tr>
                <tr bgColor="e7efef">
                  <td>Type</td>
                  <td><b><input type="text" size="25" name="type" value="<?php echo $type; ?>"></b></td>
				</tr>
                <tr bgColor="e7efef">
                  <td>Priority</td>
                  <td><b><input type="text" size="20" name="pri" value="<?php echo $priority; ?>"></b></td>
                </tr>
                <tr bgColor="e7efef">
                  <td>Department</td>
                  <td><b><input type="text" name="dept" size="20" value="<?php echo $dept; ?>"></b></td>
                </tr>
                <tr bgColor="e7efef">
                  <td>Incident Description</td>
                  <td><b><input type="text" size="30" name="desc" value="<?php echo $desc; ?>"></b></td>
                </tr>
				<tr bgColor="e7efef">
                  <td>Status</td>
                  <td><b>
				  <select name="status">
				  <option>Pending</option>
				  <option>Finished</option>
				  </select>
				  </b></td>
                </tr>
				</table>
            </td>
        </tr>
        </table>
        <br>
        <table width="400" align="center" border="0">
          <tr>
            <td align="center" width="200"><input type="submit" value="Submit"></td>
            <td align="center" width="200"><input type="reset" name="reset" value="Reset Form" onClick="return confirm('Are you sure you want to reset the current information?');"></td>
          </tr>
        </table>
      </form>
    </td>
  </tr>
</table>
</div>
</body>
</html>