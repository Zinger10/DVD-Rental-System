<?php
include "databaseConnection.php";
?>
<html>
<head>
<title>dvdactors</title>
<link rel="stylesheet" href="layoutstyle.css">
</head>
<body>

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
<center>
<h1>DVD Actors</h1>
<a href="add_dvdactors.php">Add New</a>
<br><br>
<table border="1">
<tr>
<th>No.</th>
<th>Actor ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Action</th>
</tr>

<?php
$j = 0;
$result = $connection->query("SELECT * FROM dvdactors ORDER BY actorID");
if ($result->num_rows > 0)
{
while ($row = $result->fetch_array())
{
echo "<tr><td>";
echo $j+1;
echo "</td>";
echo "<td>";
echo $row["actorID"];
echo "</td>";
echo "<td>";
echo $row["fname"];
echo "</td>";
echo "<td>";
echo $row["lname"];
echo "</td>";
echo"<td>";
echo "<a href=\"delete_dvdactors.php?actorID=" . $row['actorID'] .
"\"" .
">Delete</a>";
echo"/";
echo "<a href=\"edit_dvdactors.php?actorID=" . $row['actorID'] .
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