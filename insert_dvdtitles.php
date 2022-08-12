<?php
include "databaseConnection.php";

$asin = $_POST['asin'];
$title = $_POST['title'];
$price = $_POST['price'];
$sql = "INSERT INTO dvdtitles(asin,title,price) " .
"VALUES ('$asin','$title', '$price')";
$query = $connection->query($sql) or
die ("Problem in storing the new actor");
if($query)
{
?>
<script language="JavaScript">document.location="index_dvdtitles.php"</script>
<?php
}
?>