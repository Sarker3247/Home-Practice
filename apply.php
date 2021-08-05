<?php

	$DATE_OF_TRAVEL = $_GET["DATE_OF_TRAVEL"];

	$REASON_OF_TRAVEL = $_GET["REASON_OF_TRAVEL"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO apply VALUES ( '', '$DATE_OF_TRAVEL', '$REASON_OF_TRAVEL' ,'')" )

		or die("Can not execute query");



	echo "Record inserted:<br> DATE_OF_TRAVEL = $DATE_OF_TRAVEL <br> REASON_OF_TRAVEL = $REASON_OF_TRAVEL";



	echo "<p><a href=read.php>READ all records</a>";

?>