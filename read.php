<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM apply" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>DATE_OF_TRAVEL</th> <th>REASON_OF_TRAVEL</th> <th>STATUS</th>  <th>APPROVE/REJECT</th><th>DELETE</th>\n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		//print rows
		extract( $rows );
		echo "<tr>";
		echo "<td> $DATE_OF_TRAVEL</td>";
		echo "<td> $REASON_OF_TRAVEL </td>";
		echo "<td> <a href = 'approve.php?traveler_id=$traveler_id&DATE_OF_TRAVEL=$DATE_OF_TRAVEL&REASON_OF_TRAVEL=$REASON_OF_TRAVEL&STATUS=$STATUS'>$STATUS  </a> </td>";
		echo "<td> <a href = 'approve_input.php?traveler_id=$traveler_id&DATE_OF_TRAVEL=$DATE_OF_TRAVEL&REASON_OF_TRAVEL=$REASON_OF_TRAVEL&STATUS=$STATUS'>   Approve/Reject</a></td>";
		//echo "<td> <a href = 'approve_input.php?traveler_id=$traveler_id&STATUS=$STATUS'> REJECT</a> </td>";
		//echo "<td> <a href = 'update_input.php?id=$traveler_id&DATE_OF_TRAVEL=$DATE_OF_TRAVEL&REASON_OF_TRAVEL=$REASON_OF_TRAVEL'> REJECTE </a> </td>";
		echo "<td> <a href = 'delete.php?traveler_id=$traveler_id'> Delete </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=apply_input.php>CREATE a new record</a>";
?>