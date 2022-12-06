<?php
session_start();
if (isset($_SESSION["email"]) && isset($_SESSION["password"])) {
	header("location: admin.php");
}

include_once("./shared/connect.php");

?>



<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vietpro Mobile Shop - Administrator</title>
	<base href="./public/" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/bootstrap-table.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

	<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<?php

	if (isset($_POST["sbm"])) {
		$email = $_POST["email"];
		$password = $_POST["password"];
		$error = null;
		$sql = "SELECT * FROM user
				WHERE user_mail ='$email'
				AND user_pass = '$password'";
		$query = mysqli_query($conn, $sql);
		if ($email == "" || $password == "") {
			$error = "Thông tin không được để trống !";
		} elseif (mysqli_num_rows($query) > 0) {
			$_SESSION["email"] = $email;
			$_SESSION["password"] = $password;
			header("location: admin.php");
		} else {
			$error = "Tài khoản không hợp lệ !";
		}
	}

	?>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Vietpro Mobile Shop - Administrator</div>
				<div class="panel-body">
					<?php
					if (isset($error)) { ?>
						<div class="alert alert-danger"><?php echo $error; ?></div><?php } ?>
					<form role="form" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Mật khẩu" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Nhớ tài khoản
								</label>
							</div>
							<button type="submit" name="sbm" class="btn btn-primary">Đăng nhập</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
</body>


</html>