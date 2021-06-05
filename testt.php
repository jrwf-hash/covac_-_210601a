<?php
	require("covacDB.php");
?>

<?php
/*
$query = $db->query("select * from Seoul");
while ($row = $query->fetch()) {
	echo $row["date"];
	echo " ";
	echo $row["human"];
	echo "<br>";
	*/

	$query = $db->query("select * from Covac_status");
	$arrayName = array();
	while ($row = $query->fetch()) {

		echo $row["mus"]->toString();
		/*
		echo " ";
		echo $row["national"];
		echo " ";
		echo $row["count"];
		*/
		echo "<br>";
	}
?>
