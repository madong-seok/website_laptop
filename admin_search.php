<?php
    session_start();
    if(empty($_SESSION['admin'])) header('location:index.php');
?>  
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản trị viên - Sản phẩm</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
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
			<li ><a href="admin_users.php"><em class="fa fa-clone">&nbsp;</em> Khách hàng</a></li>
			<li ><a href="admin_products.php"><em class="fa fa-clone">&nbsp;</em> Sản phẩm</a></li>
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
				<li class="active">Products</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tìm kiếm sản phẩm</h1>
			</div>
		</div><!--/.row-->

		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Kết quả tìm kiếm 
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						
						<div class="canvas-wrapper">
                            <table>
                                <thead>
                                  <tr>
                                    <th>Mã SP</th>
                                    <th>Tên SP</th>
                                    <th>Image</th>
									<th>CPU</th>
									<th>RAM</th>
									<th>ROM</th>
									<th>SCREEN</th>
									<th>VGA</th>
                                    <th>Giá SP</th>
                                    <th>Hãng SX</th>
                                    <th>Thể loại</th>
                                    <th>Ngày nhập</th>
                                    <th colspan="2">Option</th>
                                  </tr>
                                <thead>
                                <tbody>
									<?php
                                    include 'connect.php';
                                    include 'control.php';
                                    if(ISSET($_POST['submit'])){
                                        $keyword = $_POST['search'];
									$query = mysqli_query($conn, "SELECT * FROM `sanpham` WHERE `TENSP` LIKE '%$keyword%' OR `GIASP` LIKE '%$keyword%' OR `HANGSX` LIKE '%$keyword%'  OR `THELOAI` LIKE '%$keyword%'  ORDER BY `TENSP`");
                                    while($se = mysqli_fetch_array($query)){
									?>
                                  <tr>
                                    <td><?php echo $se['MASP']; ?></td>
									<td><?php echo $se['TENSP']; ?></td>
                                    <td><img src="img/<?php echo $se['HINHANH']; ?>" width="100px" height="100px" ></td>
									<td><?php echo $se['CPU']; ?></td>
									<td><?php echo $se['RAM']; ?></td>
									<td><?php echo $se['ROM']; ?></td>
									<td><?php echo $se['SCREEN']; ?></td>
									<td><?php echo $se['VGA']; ?></td>
									<td><?php echo number_format($se['GIASP']) ?></td>
									<td><?php echo $se['HANGSX']; ?></td>
									<td><?php echo $se['THELOAI']; ?></td>
									<td><?php echo $se['NGAYNHAP']; ?></td>
									<td><span><a href="admin_products_delete.php?del=<?php echo $se['MASP']?>">Delete</a></span></td>
									<td><span><a href="admin_products_update.php?up=<?php echo $se['MASP']?>">Update</a></span></td>
                                  </tr>
								  <?php } } ?>
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