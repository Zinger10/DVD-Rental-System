<?php
include "databaseConnection.php";
$asin = $_GET['asin'];
$sql = "DELETE FROM dvdtitles WHERE asin = '$asin'";
$query = $connection->query($sql)or
die ("Problem in deleting the movie data");
if($query)
{
?>
<script language="JavaScript">document.location="index_dvdtitles.php"</script>
<?php
}
?>