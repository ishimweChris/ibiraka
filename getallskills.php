<?php
	include "vacancy/dbcon.php";
	include "vacancy/session.php";
		
	$qstring = "SELECT * FROM `tblskills` ORDER BY RAND() LIMIT 1000 OFFSET 4";
	$sql = $conn->prepare($qstring)or die(mysql_error());

	$sql->execute();
	$data = [];
	while ($row = $sql->fetch()) {
		
		array_push($data, $row);
	}
	echo json_encode($data);
	
?>


