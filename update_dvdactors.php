<?php
include "databaseConnection.php";

$actorID = $_GET['actorID'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];

$sql = "UPDATE dvdactors SET fname='$fname', lname='$lname' " . 
"WHERE actorID = '$actorID'";

$query = $connection->query($sql)or
die ("Problem in updating the actor data");
 if($query)
{
?>
<script language="JavaScript">document.location="index_dvdactors.php"</script>
<?php
}
?>
