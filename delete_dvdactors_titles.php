<?php
include "databaseConnection.php";
$asin = $_GET['asin'];
$actorID = $_GET['actorID'];

$sql = "DELETE FROM dvdactorstitles WHERE asin = '$asin' and actorID =$actorID";
$query = $connection->query($sql)or
die ("Problem in deleting the data");
if($query)
{
?>
<script language="JavaScript">document.location="dvdactors_titles.php"</script>
<?php
}
?>