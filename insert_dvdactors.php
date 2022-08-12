<?php
include "databaseConnection.php";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$sql = "INSERT INTO dvdactors(fname ,lname) " .
"VALUES ('$fname','$lname')";
$query = $connection->query($sql)or
die ("Problem in storing the new actor");
if($query)
{
?>
<script language="JavaScript">document.location="index_dvdactors.php"</script>
<?php
}
?>