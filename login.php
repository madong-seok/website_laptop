<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng nhập để mua hàng</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Đăng nhập để mua hàng</div>
				<div class="panel-body">
					<form method="post" role="form">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Lưu tài khoản
								</label>
							</div>
							<input class="btn btn-primary" type="submit"  name="bt_ok" value="Đăng Nhập">
							
					</form>

					<?php 
							include('control.php') ;
							$get_data = new data() ;
							// kiểm tra xem nút submit chưa
							if(isset($_POST['bt_ok'])){
								if(empty($_POST['email']) || empty($_POST['password'])) {
									echo "<script>alert('Chưa nhập đủ thông tin')</script>" ;
								}

								// đặt điều kiện là phải login mới vào đc trang cart
								else{
									$check = $get_data -> Login($_POST['email'] , $_POST['password']) ;
									if($check == 1){
										$_SESSION['username'] = $_POST['email'] ; // user
										header('location:cart.php');
									}
									echo "Sai nhập lại";
									
							}}
						
                    ?>

				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
