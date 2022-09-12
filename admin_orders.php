<?php
    session_start();
    if(empty($_SESSION['admin'])) header('location:index.php');
?>  
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản trị viên - Đơn đặt hàng</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	
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
			<li ><a href="admin_users.php"><em class="fa fa-clone">&nbsp;</em> Khách hàng</a></li>
			<li><a href="admin_products.php"><em class="fa fa-clone">&nbsp;</em> Sản phẩm</a></li>
			<li ><a href="admin_contacts.php"><em class="fa fa-clone">&nbsp;</em> Liên hệ</a></li>
			<li class="active"><a href="admin_orders.php"><em class="fa fa-clone">&nbsp;</em> Hóa đơn</a></li>
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Đăng xuất</a></li>	
		</ul>
	</div><!--/.sidebar-->		
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Hóa đơn</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý đơn đặt hàng</h1>
			</div>
		</div><!--/.row-->
		
       
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Danh sách đơn đặt hàng
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<?php
						include 'control.php';
						$get_data=new data();
							$select = $get_data->se_order();	
						?>
						<div class="canvas-wrapper">
                            <table>
                                <thead>
                                  <tr>
                                    <th>Mã HD</th>
                                    <th>Tên Khách Hàng</th>
                                    <th>Số Điện Thoại</th>
									<th>Địa Chỉ</th>
									<th>Ghi Chú</th>
									<th>Trạng Thái</th>
									<th>Ngày Lập</th>
									<th>Tổng Tiền</th>
									<th>HT Vận Chuyển</th>
									<th>HT Thanh Toán</th>
                                    <th colspan="2">Option</th>
                                  </tr>
                                <thead>
                                <tbody>
									<?php
									foreach($select as $se)
									{
									?>
                                  <tr>
                                    <td><?php echo $se['ID_HD']; ?></td>
									<td><?php echo $se['TENKH']; ?></td>
                                    <td><?php echo $se['SDT']; ?></td>
									<td><?php echo $se['DIACHI']; ?></td>
									<td><?php echo $se['GHICHU']; ?></td>
									<td><?php echo $se['TRANGTHAI']; ?></td>
									<td><?php echo $se['NGAYLAP']; ?></td>
									<td><?php echo number_format($se['TONGTIEN']) ?></td>
									<td><?php echo $se['HTVANCHUYEN']; ?></td>
									<td><?php echo $se['HTTHANHTOAN']; ?></td>
									<td><span><a href="admin_orders_delete.php?del=<?php echo $se['ID_HD']?>">Xóa</a></span></td>
									<td><span><a href="admin_orders_detail.php?up=<?php echo $se['ID_HD']?>">Xem chi tiết</a></span></td>
                                  </tr>
								  <?php } ?>
                                </tbody>
                            </table>
							<canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
                            
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	
	</div>	<!--/.main-->		
</body>
</html>