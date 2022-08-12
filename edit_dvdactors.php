<?php
include "databaseConnection.php";
$actorID = $_GET['actorID'];
$sql = "SELECT * FROM dvdactors WHERE actorID = '$actorID'";
$query = $connection->query ($sql); 
if ($row = $query->fetch_array())
{
$fname = $row['fname'];
$lname = $row['lname'];
}
?>

<html>
<body>
<h1>Update Database</h1>
<form method="post"
action="update_dvdactors.php?actorID=<?php echo $actorID ?>">
<br>
<table>
<tr>
<td>Name</td><td>:</td>
<td><input type="text" name="fname"
value="<?php echo $fname?>" size='30'>&nbsp;</td>
</tr>
<tr>
<td>Last Name</td>
<td>:</td>
<td><input type="text" name="lname"
value="<?php echo $lname?>" size='30'>&nbsp;</td>
</tr>
<tr>
<td></td><td></td>
<td><input type="submit" name="submit" value="Update"/></td>
</tr>
</table>
</form>
</body>
</html>
