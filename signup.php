<?php

if (isset($_POST['submit'])) {

	$mailFrom = $_POST['email'];

	$mailTo = "info@maarble.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have a new subscriber!";

	mail($mailTo, $txt, $headers);
	header("Location: index.html?mailsend");

}

?>