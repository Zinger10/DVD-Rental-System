<?php
include "databaseConnection.php";

$asin = $_GET['asin'];
$title = $_POST['title'];
$price = $_POST['price'];

$sql = "UPDATE dvdtitles SET title='$title', price='$price' " . 
"WHERE asin = '$asin'";

$query = $connection->query($sql)or
die ("Problem in updating the actor data");
 if($query)
{
?>
<script language="JavaScript">document.location="index_dvdtitles.php"</script>
<?php
}
?>
