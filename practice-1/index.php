<?php 

require_once '../api/db.php';

/*try {
	$result = $db->query('select * from film');
} catch (Exception $e) {
	echo $e->getMessage();
	die();
}*/

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajax Basic</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.css"> -->		

	<script type="text/javascript">
		/**
		* Create object XMLHttpRequest use for interactive with web server
		* Create anonymous function property XMLHttpRequest.onreadystatechange
		* property XMLHttpRequest.eadyState
		*/
		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function() {
			if (xhr.readyState === 4) {
				document.getElementById('ajax').innerHTML = xhr.responseText;
			}
		};
		xhr.open('GET','_form.php');
		function sendAjax(){
			xhr.send();
			document.getElementById('load').style.display = "none";	
		}
	</script>
</head>
<body>
	<div class="jumbotron">
		<div class="heading">
			<h2>Bring On Ajax</h2>
		</div>
		<button id="load" onclick="sendAjax()" class="btn btn-info">Form Register</button>
		<div id="ajax">
			
		</div>
	</div>
</body>
</html>