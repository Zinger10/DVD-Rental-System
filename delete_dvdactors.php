<?php
include "databaseConnection.php";
$actorID = $_GET['actorID'];
$sql = "DELETE FROM dvdactors WHERE actorID = $actorID";
$query = $connection->query($sql)or
die ("Problem in deleting the actor data");
if($query)
{
?>
<script language="JavaScript">document.location="index_dvdactors.php"</script>
<?php
}
?>