<?PHP
	require("KikHer.php"); /* Get the class for KikHer */
	$KikUser = new KikHer("Lgnotus"); /* Get the User Data */

	/* Print out the user data */
	echo(
		"<h1>" . $KikUser->FirstName() . " " . $KikUser->LastName() . "</h1>" .
		"<img src=\"" . $KikUser->displayPicURL() . "\" height=\"142\" width=\"142\"><br>" . 
		"Last Modified: " . gmdate("y-m-d h:i:s", $KikUser->displayPicLastModified()) .
		"<hr>" . print_r($KikUser->UserData, true));
?>