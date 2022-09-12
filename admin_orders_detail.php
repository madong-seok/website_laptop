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
		
        <?php
        include 'control.php';
        $get_data=new data();
            $select = $get_data->id_order_detail($_GET['up']);	
            foreach($select as $se)
        ?>
       
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Chi tiết đơn hàng: <?php echo $se['ID_HD'] ?> <a href="admin_orders.php">Trở Về</a>
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						
						<div class="canvas-wrapper">
							<form method="post">
                            <div class="detail">
                                <label class="lb_cart">Tên khách hàng:  </label>
                                <input class="detail_cart" type="text" name="txt_name" value="<?php echo $se['TENKH'] ?>"><br><br>
                                <label class="lb_cart">Số điện thoại:  </label>
                                <input class="detail_cart" type="text" name="txt_number" value="<?php echo $se['SDT'] ?>"><br><br>
                                <label class="lb_cart">Địa chỉ:  </label>
                                <input class="detail_cart" type="text" name="txt_addr" value="<?php echo $se['DIACHI'] ?>"><br><br>
                                <label class="lb_cart">Ghi chú:  </label>
                                <input class="detail_cart" type="text" name="txt_note" value="<?php echo $se['GHICHU'] ?>"><br><br>
								<label class="lb_cart">Trạng thái:  </label>
								<select class="detail_cart"   name="txt_tt">
									<option><?php echo $se['TRANGTHAI'] ?></option>
									<option>Chưa xử lý</option>
									<option>Shiper đã lấy hàng</option>
									<option>Đang giao hàng</option>
									<option>Đã hoàn thành</option>	
								</select><br><br>
                                
								<label class="lb_cart">Ngày nhập:  </label>
                                <input class="detail_cart" type="text" name="txt_date" value="<?php echo $se['NGAYLAP'] ?>"><br><br>
                                <label class="lb_cart">Vận chuyển:  </label>
                                <input class="detail_cart" type="text" name="txt_ship" value="<?php echo $se['HTVANCHUYEN'] ?>"><br><br>
                                <label class="lb_cart">Thanh toán:  </label>
                                <input class="detail_cart" type="text" name="txt_pay" value="<?php echo $se['HTTHANHTOAN'] ?>"><br><br>
                            </div><br>
                            <div>
                            <table>
                                <thead>
                                  <tr>
                                    <th>Mã SP</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Số Lượng</th>
									<th>Đơn Giá</th>
                                    <th>Thành Tiền</th>
                                  </tr>
                                <thead>
                                <tbody>
                                    <?php 
                                    
                                    foreach($select as $se2) { 
                                    ?>
                                  <tr>
                                    <td><?php echo $se2['MASP']; ?></td>
									<td><?php echo $se2['TENSP']; ?></td>
                                    <td><?php echo $se2['SOLUONG']; ?></td>
									<td><?php echo number_format($se2['GIASP']) ?></td>
									<td><?php echo number_format($se2['GIASP'] *  $se2['SOLUONG'] ) ?></td>
                                  </tr>
                                  <?php }?>
                                  <tr>
                                    <th>&nbsp;</th>
                                    <th>Tổng Cộng</th>
                                    <th>&nbsp;</th>
									<th>&nbsp;</th>
                                    <th><?php echo number_format($se2['TONGTIEN']) ?></th>
                                  </tr>
                                </tbody>
                            </table><br>
							
                            <div><button class="print" name="sub_send" type="submit">Cập nhật</button></div>
                            </div><br>
							<canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
                            </form>
							<?php 
                                if(isset($_POST['sub_send']))
                                {
                                    $update = $get_data->up_order($_POST['txt_name'],$_POST['txt_number'],$_POST['txt_addr'],$_POST['txt_note'],$_POST['txt_tt'],$_POST['txt_date'],$_POST['txt_ship'],$_POST['txt_pay'],$_GET['up']);
                                    if($update)	
                                    
                                         echo "<script>alert('Thành công')</script>";
                                        
                                    else echo "<script>alert('Không thành công')</script>";
                                }
                            ?>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	
	</div>	<!--/.main-->		
</body>
</html>