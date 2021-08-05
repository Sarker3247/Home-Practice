<?php

    $traveler_id = $_GET["traveler_id"];
	$DATE_OF_TRAVEL=$_GET["DATE_OF_TRAVEL"];
	$REASON_OF_TRAVEL=$_GET["REASON_OF_TRAVEL"];
	$STATUS=$_GET["STATUS"];




	require_once('db_connect.php'); 

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE Apply SET STATUS='Approved'  WHERE traveler_id = $traveler_id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> Traveler_Id = $traveler_id <br> Status = $STATUS";



	echo "<p><a href=read.php>READ all records</a>";

?>