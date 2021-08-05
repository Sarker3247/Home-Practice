<?php

	$traveler_id = $_GET["traveler_id"];
	$DATE_OF_TRAVEL=$_GET["DATE_OF_TRAVEL"];
	$REASON_OF_TRAVEL=$_GET["REASON_OF_TRAVEL"];
	$STATUS=$_GET["STATUS"];




?>



<h1>Update Record</h1>



<form method=get action=approve.php>



	<input type=hidden name=traveler_id value='<?php echo $traveler_id; ?>'> <br>

	REASON OF TRAVEL: <input type=text name=REASON_OF_TRAVEL value='<?php echo $REASON_OF_TRAVEL; ?>'>

   <p>


	Status: <input type=text name=STATUS value='<?php echo $STATUS; ?>'>

	<p>


	<input type=submit value=Update>

</form>