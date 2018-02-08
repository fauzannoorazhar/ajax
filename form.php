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
	<!-- <script src="/js/pace.js"></script> -->
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
						
						<div id="signup">
							<form method="post" action="api/create.php">
								<div class="form-group">
									<label for="exampleInputPassword1">Nama</label>
										<input type="text" name="nama" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Nama">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Email address</label>
										<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
									<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					
					</div>
				</div>
			</div>

			<div class="col-sm-1">
			</div>
		</div>
	</div>
</body>
</html>