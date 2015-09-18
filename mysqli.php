<?php
$link = mysqli_connect("127.0.0.1:3307", "root", "usbw", "boeken");

if (!$link) {
	echo "foutmelding kan geen verbinding maken <br />";
	echo mysqli_connect_error();
	die();

}

echo "we hebben een verbinding";

?>