<?php
include "databaseConnection.php";
$asin = $_POST["asin"];
$actorID = $_POST['actorID'];

$sql = "INSERT INTO dvdactorstitles(asin,actorID) " .
"VALUES ('$asin','$actorID')";
$query = $connection->query($sql)or
die ("Problem in storing the new actor");
if($query)
{
?>
<script language="JavaScript">document.location="dvdactors_titles.php"</script>
<?php
}
?>