<?php
$getal = $_GET['getal'];
	if ( $getal % 2 == 0) {
		echo "even";
	}elseif ( $getal % 1 == 0) {
		echo "oneven";
	}

?>