<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		.login-form {
			width: 340px;
			margin: 50px auto;
		}

		.login-form form {
			margin-bottom: 15px;
			background: #f7f7f7;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			padding: 30px;
		}

		.login-form h2 {
			margin: 0 0 15px;
		}

		.form-control,
		.btn {
			min-height: 38px;
			border-radius: 2px;
		}

		.btn {
			font-size: 15px;
			font-weight: bold;
		}

	</style>
	<title>
		<?= $title ?>
	</title>
</head>

<body>
	<div class="login-form">
		<form action="" method="post">
			<h2 class="text-center">Log in</h2>
			<?php 
        if($this->session->flashdata('pesan') == TRUE) 
        { ?>
			<div class="alert alert-primary" role="alert">
				<?= $this->session->flashdata('pesan'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			</div>
			<?php }
?>

			<div class="form-group">
				<input type="text" name="username" id="username" class="form-control" placeholder="Username" required="required">
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Password" required="required">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block">Log in</button>
			</div>
			<div class="clearfix">
				<label class="pull-left checkbox-inline">
					<input type="checkbox"> Remember me</label>
				<a href="#" class="pull-right">Forgot Password?</a>
			</div>
		</form>
		<p class="text-center">
			<a href="#">Create an Account</a>
		</p>
	</div>
</body>

</html>
