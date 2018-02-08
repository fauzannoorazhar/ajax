<html>
<head>
	<meta charset="utf-8">
	<title>Ajax Practice 3</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/adminlte.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
						<!-- Button trigger modal create -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create">
							Create Data
						</button>

						<div>&nbsp;</div>

						<table class="table table-stripped table-bordered table-consended table-hover">
							<thead>
								<tr>
									<th class="text-center" width="50px">No</th>
									<th class="text-center">Nama</th>
									<th class="text-center">Email</th>
									<th class="text-center">Action</th>
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

<!-- Modal create -->
<div class="modal fade" id="modal-create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" action="api/create.php">
					<input type="hidden" name="id" class="edit-id">
					
					<div class="form-group">
						<label for="exampleInputPassword1">Nama</label>
							<input type="text" name="nama" class="form-control" placeholder="Enter Your Nama">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
							<input type="email" name="email" class="form-control" placeholder="Enter email">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<button type="submit" class="btn btn-primary" id="createData">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal Update -->
<div class="modal fade" id="modal-update" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" action="api/update.php">
					<input type="hidden" name="id" class="edit-id">
					
					<div class="form-group">
						<label for="exampleInputPassword1">Nama</label>
							<input type="text" name="nama" class="form-control" placeholder="Enter Your Nama">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
							<input type="email" name="email" class="form-control" placeholder="Enter email">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<button type="submit" class="btn btn-primary" id="updateData">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
