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
			<li class="active"><a href="admin_products.php"><em class="fa fa-clone">&nbsp;</em> Sản phẩm</a></li>
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
				<h1 class="page-header">Quản lý sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
        <div class="panel panel-container">
                <?php 
                include('control.php');
                $get_data = new data();
                $select_pro = $get_data->se_product_byid($_GET['up']);
				foreach($select_pro as $se)
                ?>
                <form  method="post" >

				<table  cellspacing="8">
					<tr>
						<td ><label>Mã sản phẩm:</label></td>
						<td ><input class="textres1" type="text" placeholder="Mã sản phẩm" name="txt_id" value="<?php echo $se['MASP'] ?>"/></td>
					</tr>
					<tr>
						<td ><label class="label_u">Tên sản phẩm:</label></td>
						<td><input class="textres" type="text" placeholder="Tên sản phẩm" name="txt_name" value="<?php echo $se['TENSP'] ?>"/></td>
					</tr>
					<tr>
						<td ><label>Hình ảnh:</label></td>
						<td><input class="textres" type="text" name="image" value="<?php echo $se['HINHANH'] ?>"/></td>
					</tr>
					<tr>
						<td ><label>Thông tin CPU:</label></td>
						<td><input class="textres" type="text" placeholder="CPU" name="txt_cpu" value="<?php echo $se['CPU'] ?>"/> </td>
					</tr>
					<tr>
						<td ><label>Thông tin RAM:</label></td>
						<td><input class="textres" type="text" placeholder="RAM" name="txt_ram" value="<?php echo $se['RAM'] ?>"/></td>
					</tr>
					<tr>
						<td ><label>Thông tin ROM:</label></td>
						<td><input class="textres" type="text" placeholder="ROM" name="txt_rom" value="<?php echo $se['ROM'] ?>"/> </td>
					</tr>
					<tr>
						<td ><label>Thông tin SCREEN:</label></td>
						<td> <input class="textres" type="text" placeholder="SCREEN" name="txt_screen" value="<?php echo $se['SCREEN'] ?>"/></td>
					</tr>
					<tr>
						<td ><label>Thông tin VGA:</label></td>
						<td> <input class="textres" type="text" placeholder="VGA" name="txt_vga" value="<?php echo $se['VGA'] ?>"/> </td>
					</tr>
					<tr>
						<td ><label>Giá sản phẩm:</label></td>
						<td> <input class="textres" type="text" placeholder="Giá sản phẩm" name="txt_price" value="<?php echo $se['GIASP'] ?>"/></td>
					</tr>
					<tr>
						<td ><label>Hãng sản xuất:</label></td>
						<td> 
						<select class="textres"   name="txt_brand">
						<option><?php echo $se['HANGSX'] ?></option>
						<option>ACER</option>
						<option>ASUS</option>
						<option>DELL</option>
						<option>HP</option>
						<option>LENOVO</option>
						<option>MSI</option>
						<option>MACBOOK</option>
						</select>
						</td>
					</tr>
					<tr>
						<td ><label>Thể loại:</label></td>
						<td> 
						<select class="textres"  name="txt_cate">
						<option><?php echo $se['THELOAI'] ?></option>
						<option>Laptop Đồ họa</option>
						<option>Laptop Gaming</option>
						<option>Laptop Văn phòng</option>
						<option>Laptop Sinh viên</option>
						<option>Laptop Lập trình viên</option>
						
						</select>
						</td>
					</tr>
					<tr>
						<td ><label>Ngày nhập:</label></td>
						<td> <input class="textres" type="date" name="date"  value="<?php echo $se['NGAYNHAP'] ?>"/></td>
					</tr>
					<tr>
						<td  style="text-align:center">
						<input style="margin-bottom: 20px;" type="submit" name="sub_dk" class="submitres" value="Cập nhật"/>
							<a href="admin_products.php">.     Trở về</a>
						</td>
					</tr>
				</table>

            </form>

            <?php 

            if(isset($_POST['sub_dk'])){

				 $update= $get_data -> up_product($_POST['txt_name'],$_POST['image'],$_POST['txt_cpu'],$_POST['txt_ram'],
				$_POST['txt_rom'],$_POST['txt_screen'],$_POST['txt_vga'],$_POST['txt_price'],$_POST['txt_brand'],$_POST['txt_cate'],$_POST['date'],$_GET['up']);
				
				
				if($update) echo "<script>alert('Nhập thành công!')</script>";
				
				else echo "<script>alert('Nhập lỗi!')</script>"; 
				}
				else echo "";  
                
            ?>
			
		</div>
		
		
	
	</div>	<!--/.main-->		
</body>
</html>