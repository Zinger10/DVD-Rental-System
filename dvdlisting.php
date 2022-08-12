<?php
include "databaseConnection.php";
?>
<html>
<head>
<center>


<title>dvdlisting</title>

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
<br><br>

<h1>DVD LISTING</h1>

<br><br>
<table border="1">
<tr>
<th>No.</th>
<th>ASIN</th>
<th>Title</th>
<th>Price</th>
<th>Actor ID</th>
<th>First Name</th>
<th>Last Name</th>

</tr>

<?php
$j = 0;
$result = $connection->query("SELECT *  FROM dvdtitles t JOIN dvdactorstitles at 
                            ON t.asin = at.asin JOIN dvdactors a ON a.actorID = at.actorID ");
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
echo "<td>";
echo $row["actorID"];
echo "</td>";

echo "<td>";
echo $row["fname"];
echo "</td>";

echo "<td>";
echo $row["lname"];
echo "</td>";


$j++;
}
}
$connection->close();
?>
</table>
</body>
</html>