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
                ?>
                <form  method="post" action="admin_products.php"  enctype="multipart/form-data">
                    <p></p>
                    <hr></hr>            
                    <p></p>

					<input class="textres" type="text" placeholder="Nhập mã sản phẩm" name="txt_id"/> 
					<input class="textres" type="text" placeholder="Nhập tên sản phẩm" name="txt_name"/> <br>
                    <label>Ảnh sản phẩm:</label>
                    <input type="file" name="image"/>
					<br>
					<input class="textres" type="text" placeholder="Nhập CPU" name="txt_cpu"/>  
					<input class="textres" type="text" placeholder="Nhập RAM" name="txt_ram"/>  <br>
					<input class="textres" type="text" placeholder="Nhập ROM" name="txt_rom"/>  
					<input class="textres" type="text" placeholder="Nhập SCREEN" name="txt_screen"/>  <br>
					<input class="textres" type="text" placeholder="Nhập VGA" name="txt_vga"/> 
                    <input class="textres" type="text" placeholder="Nhập giá sản phẩm" name="txt_price"/>  <br><br>
					<label>Hãng sản xuất:</label><br>
					<select class="textres"   name="txt_brand">
					<option>--Chọn hãng sản xuất--</option>
					<option>ACER</option>
					<option>ASUS</option>
					<option>DELL</option>
					<option>HP</option>
					<option>LENOVO</option>
					<option>MSI</option>
					<option>MACBOOK</option>
					</select><br>

					<label>Thể loại:</label><br>
					<select class="textres"  name="txt_cate">
					<option>--Chọn thể loại--</option>
					<option>Laptop Đồ họa</option>
					<option>Laptop Gaming</option>
					<option>Laptop Văn phòng</option>
					<option>Laptop Sinh viên</option>
					<option>Laptop Lập trình viên</option>
					
					</select><br>
         
                    <label>Ngày nhập hàng:</label>
                    <input class="textres" type="date" name="date"  /> <br>
                    <input style="margin-bottom: 20px;" type="submit" name="sub_dk" class="submitres" value="Xác nhận"/>
                    
                    
            	</form>

            <?php 

            if(isset($_POST['sub_dk'])){
                $img=move_uploaded_file($_FILES['image']['tmp_name'],
				"img/".$_FILES['image']['name']);  

                $image="img/".$_FILES['image']['name'];

				$ins= $get_data -> ins_prod($_POST['txt_id'],$_POST['txt_name'],$_FILES['image']['name'],$_POST['txt_cpu'],$_POST['txt_ram'],$_POST['txt_rom'],
				$_POST['txt_screen'],$_POST['txt_vga'],$_POST['txt_price'],$_POST['txt_brand'],$_POST['txt_cate'],$_POST['date']);
				
				if($ins) echo "<script>alert('Nhập thành công!')</script>";
				
				else echo "<script>alert('Nhập lỗi!')</script>"; 
				}
				else echo "";  
                
            ?>
			
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Danh sách sản phẩm
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<?php
							$select = $get_data->se_product();	
						?>
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
									foreach($select as $se)
									{
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