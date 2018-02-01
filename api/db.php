<?php

try {
	$db = New PDO('mysql:host=localhost;dbname=ajax', "root", "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	echo $e->getMessage();
	die();
}

?>