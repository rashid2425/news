<?php
	$mysqli = false;
	function connectDB () {
		global $mysqli;
		$mysqli = new mysqli("localhost", "root", "rashid24", "test");
		$mysqli->query("SET NAMES 'utf8mb4'");
	}

	function closeDB () {
		global $mysqli;
		$mysqli->close ();
	}
?>