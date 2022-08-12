<html>
<head>
<title>Add New Actor</title>
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

<h1> Adding a New Actor</h1>
<form action="insert_dvdactors.php" method="POST">
<table>
<tr>
<td>Actor ID</td>
<td>:</td>
<td><input type="text" name="fname" size="30"></td>
</tr>
<tr>
<td>First Name</td>
<td>:</td>
<td><input type="text" name="fname" size="30"></td>
</tr>
<tr>
<td>Last Name</td>
<td>:</td>
<td><input type="text" name="lname" size="30"></td>
</tr>
<tr>
<td></td><td></td>
<td><input type="submit" value="Add">
<a href="index_dvdactors.php">Back</a>
</td>
</tr>
</table>
</form>
</center>
</body>
</html>