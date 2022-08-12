<?php
include "databaseConnection.php";
?>
<html>
<head>
<title>DVD TITLES</title>
<link rel="stylesheet" href="layoutstyle.css">
</head>
<body>
<center>
<div id = "header">




<center>


<h1>

DVD Rental System

</h1></center>

</div>

<div id = "navigation">
<ul>

<li><a href = "index_dvdtitles.php">DVD TITLES</a></li>
<li><a href = "index_dvdactors.php">DVD ACTORS</a></li>
<li><a href = "dvdactors_titles.php"> DVD TITLES AND ACTORS</a></li>
<li><a href = "dvdlisting.php"> DVD LISTING</a></li>
<li><a href = "dvdlisting_improved.php">DVD LISTING IMPROVED</a></li>

</ul>
</div>
<br>
<br>

<h1>DVD TITLES</h1>

<a href="add_dvdtitles.php">Add New</a>
<br><br>
<table border="1">
<tr>
<th>No.</th>
<th>ASIN</th>
<th>TITLE</th>
<th>PRICE (RM)</th>
<th>Action</th>
</tr>

<?php
$j = 0;
$result = $connection->query("SELECT * FROM dvdtitles");
if ($result->num_rows > 0)
{
while ($row = $result->fetch_array())
{
echo "<tr><td>";
echo $j+1;
echo "</td>";
echo "<td>";
echo $row["asin"];
echo "</td>";
echo "<td>";
echo $row["title"];
echo "</td>";
echo "<td>";
echo $row["price"];
echo "</td>";
echo"<td>";
echo "<a href =\"delete_dvdtitles.php?asin=" . $row['asin'] .
"\"" .
">Delete</a>";
echo"/";
echo "<a href =\"edit_dvdtitles.php?asin=" . $row['asin'] .
"\"" .
">Edit</a>";
echo "</td></tr>\n";
$j++;
}
}
$connection->close();
?>
</table>
</center>
</body>
</html>