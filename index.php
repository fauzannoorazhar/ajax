<?php 

require_once 'api/db.php';

try {
	$result = $db->query('select * from anggota');
} catch (Exception $e) {
	echo $e->getMessage();
	die();
}

$anggota = $result->fetchAll(PDO::FETCH_ASSOC);

/*echo json_encode($anggota);
die();*/

?>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajax Practice 3</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/adminlte.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.css"> -->		
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
	<script src="/js/jquery-3.3.1.min.js"></script>
	<script src="/js/pace.js"></script>
	<script src="/js/widget.js"></script>

</head>
<body>
	<div class="box-artikel">
		<div class="row">
			<div class="col-sm-1">
			</div>

			<div class="col-sm-10">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Ajax Practice 3</h3>
					</div>

					<div class="box-body">
						<div id="formHere">
						</div>

						<div>&nbsp;</div>

						<table class="table table-stripped table-bordered table-consended table-hover">
							<thead>
								<tr>
									<th class="text-center" width="50px">No</th>
									<th class="text-center">Nama</th>
									<th class="text-center">Email</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>

					</div>
				</div>
			</div>

			<div class="col-sm-1">
			</div>
		</div>
	</div>
</body>
</html>
