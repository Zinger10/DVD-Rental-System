<html>
<head>
<title>Add New Movie</title>
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


<h1> Adding a New Movie</h1>
<form action="insert_dvdtitles.php" method="POST">
<table>
<tr>
<td>ASIN</td>
<td>:</td>
<td><input type="text" name="asin" size="30"></td>
</tr>    
<tr>
<td>TITLE</td>
<td>:</td>
<td><input type="text" name="title" size="30"></td>
</tr>
<tr>
<td>PRICE</td>
<td>:</td>
<td><input type="float" name="price" size="30"></td>
</tr>
<tr>
<td></td><td></td>
<td><input type="submit" value="Add">
<a href="index_dvdtitles.php">Back</a>
</td>
</tr>
</table>
</form>
</center>
</body>
</html>