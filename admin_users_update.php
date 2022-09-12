<?php
    session_start();
    if(empty($_SESSION['admin'])) header('location:index.php');
?>  
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản trị viên - Khách hàng</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="style_register.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Quản trị </span>Admin</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="img/logo.gif" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Admin</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search" method="POST" action="admin_search.php">
			<div class="form-group">
				<input type="text" name="search" class="form-control" placeholder="Tìm sản phẩm .."><br>  
                <button type="submit" name="submit">Tìm kiếm</button>
			</div>
		</form>
		<ul class="nav menu">
		<li ><a href="admin_index.php"><em class="fa fa-dashboard">&nbsp;</em> Trang chủ</a></li>
			<li class="active"><a href="admin_users.php"><em class="fa fa-clone">&nbsp;</em> Khách hàng</a></li>
			<li><a href="admin_products.php"><em class="fa fa-clone">&nbsp;</em> Sản phẩm</a></li>
			<li ><a href="admin_contacts.php"><em class="fa fa-clone">&nbsp;</em> Liên hệ</a></li>
			<li><a href="admin_orders.php"><em class="fa fa-clone">&nbsp;</em> Hóa đơn</a></li>
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Đăng xuất</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Khách hàng</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý khách hàng</h1>
			</div>
		</div><!--/.row-->
		
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Cập nhật thông tin
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <?php
                            include('control.php');
                            $get_data = new data();
                            $select_user = $get_data->id_user($_GET['up']);
                            foreach($select_user as $se)
                        ?>
						<div class="canvas-wrapper">
                            
                            <form method="post" action="">
							
							<table  cellspacing="8">
								<tr>
									<td ><label>Họ và tên:</label></td>
									<td ><input class="textres1" type="text" name="txtname" placeholder="Họ và Tên" value="<?php echo $se['HOVATEN'] ?>" /></td>
								</tr>
								<tr>
									<td ><label class="label_u">Email:</label></td>
									<td><input class="textres1" type="text" name="txtemail" placeholder="Email" value="<?php echo $se['EMAIL'] ?>"/></td>
								</tr>
								<tr>
									<td ><label>Mật khẩu:</label></td>
									<td><input class="textres1" type="text" name="txtpass" placeholder="Mật khẩu" value="<?php echo $se['MATKHAU'] ?>"/></td>
								</tr>
								<tr>
									<td ><label>Số điện thoại:</label></td>
									<td><input class="textres1" type="text" name="txtnumber" placeholder="Số điện thoại" value="<?php echo $se['SDT'] ?>"/></td>
								</tr>
								<tr>
									<td ><label>Giới tính:</label></td>
									<td><input class="textres1" type="text" name="txtgender" placeholder="Giới tính" value="<?php echo $se['GIOITINH'] ?>"/></td>
								</tr>
								<tr>
									<td ><label>Ngày sinh:</label></td>
									<td><input class="textres1" type="text" name="txtbirthday" placeholder="Ngày sinh" value="<?php echo $se['NGAYSINH'] ?>"/></td>
								</tr>
								<tr>
									<td ><label>Địa chỉ:</label></td>
									<td> <input class="textres1" type="text" name="txtaddress" placeholder="Địa chỉ" value="<?php echo $se['DIACHI'] ?>"/></td>
								</tr>
								<tr>
									<td style="text-align:center">
										<input  type="submit" name="sub_send" value="Cập nhật"/>    
										<a href="admin_users.php">.    Trở về</a>
									</td>
								</tr>
							</table>
                            </form>
                            <?php 
                                if(isset($_POST['sub_send']))
                                {
                                    $update = $get_data->up_user_vd($_POST['txtname'],$_POST['txtemail'],$_POST['txtpass'],$_POST['txtnumber'],$_POST['txtgender'],$_POST['txtbirthday'],$_POST['txtaddress'],$_GET['up']);
                                    if($update)	
                                    
                                         echo "<script>alert('Thành công')</script>";
                                        
                                    else echo "<script>alert('Không thành công')</script>";
                                }
                            ?>

							<canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
                            
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	
	</div>	<!--/.main-->		
</body>
</html>