<?php

	$traveler_id = $_GET["traveler_id"];

    /*$DATE_OF_TRAVEL=$GET[" DATE_OF_TRAVEL"];
    $REASON_OF_TRAVEL=$GET[" REASON_OF_TRAVEL"];
    $STATUSS=$_GET["STATUSS"];
*/

	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM apply WHERE traveler_id=$traveler_id" )

		or die("Can not execute query");



	echo "Record deleted<br>";



	echo "<p><a href=read.php>READ all records</a>";

?>