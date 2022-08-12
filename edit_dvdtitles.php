<?php
include "databaseConnection.php";
$asin = $_GET['asin'];
$sql = "SELECT * FROM dvdtitles WHERE asin = '$asin'";
$query = $connection->query ($sql); 
if ($row = $query->fetch_array())
{
$title = $row['title'];
$price = $row['price'];
}
?>

<html>
<body>
<h1>Update Database</h1>
<form method="post"
action="update_dvdtitles.php?asin=<?php echo $asin ?>">
<br>
<table>
<tr>
<td>Name</td><td>:</td>
<td><input type="text" name="title"
value="<?php echo $title?>" size='30'>&nbsp;</td>
</tr>
<tr>
<td>Last Name</td>
<td>:</td>
<td><input type="number" name="price"
value="<?php echo $price?>" size='30'>&nbsp;</td>
</tr>
<tr>
<td></td><td></td>
<td><input type="submit" name="submit" value="Update"/></td>
</tr>
</table>
</form>
</body>
</html>
