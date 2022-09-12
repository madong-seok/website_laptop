<?php
    session_start();
?>  
<!DOCTYPE html>
<html lang="de">
<head>
	<title>Laptop Hp - LapTopCDC</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="responsive.css">
	<link rel="stylesheet" type="text/css" href="style_login.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
</head>
<body>
	
<div id="wrapper">
 

<div class="page-home">
	<!--------------Header--------------------->
    <div class="header">
		
		<div class="header-top clearix">
			<div class="container">
				<div class="row">
					<div class="banner">
						<ul class="header-top pull-left" style="list-style-type:none;">
							<li><a href="#" target="_blank">Cảm ơn  vì đã chọn chúng tôi!!!</a></li>
						</ul>
						<ul class="header-top pull-right" style="list-style-type:none;">
							<li class="lienhe"><a href="register.php">Đăng ký</a></li>
							<li>
								
                                <!-- Trigger/Open The Modal -->
                                <a id="myBtn" href="#"><i class="fa fa-user"></i>Đăng nhập</a>

                                <!-- The Modal -->
                                <div id="myModal" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content wrapper">
                                    <span class="close">&times;</span>
                                    
                                    <form  method="POST" class="bg" >
                                        <label>Nhập Email : </label></br>
                                        <input class="form2" type="text" name="txt_usname"/></br>
                                        <label>Mật khẩu : </label></br>
                                        <input class="form2" type="password" name="txt_passwd"/>
                                        
                                        <p></p>
                                        <input class="butt" type="submit"  name="bt_ok" value="Đăng Nhập">
										<br>
                                        <div><a href="dangky.html">Đăng ký</a></div>
                                        <div><a href="#">Quên mật khẩu</a></div>





										<p></p>
                                    </form>

									<?php 
                                        include('control.php') ;
                                        $get_data = new data() ;
                                        // kiểm tra xem nút submit chưa
                                        if(isset($_POST['bt_ok'])){
                                            if(empty($_POST['txt_usname']) || empty($_POST['txt_passwd'])) {
                                                echo "<script>alert('Chưa nhập đủ thông tin')</script>" ;
                                            }

                                            // đặt điều kiện là phải login mới vào đc trang select
                                            else{
                                                $check = $get_data -> ad_Login($_POST['txt_usname'] , $_POST['txt_passwd']) ;
                                                if($check == 1){
                                                    $_SESSION['admin'] = $_POST['txt_usname'] ; // user
                                                    header('location:admin_index.php') ;
                                                }
                                                else{
                                                    $check2 = $get_data -> Login($_POST['txt_usname'] , $_POST['txt_passwd']) ;
                                                if($check2 == 1){
                                                    $_SESSION['username'] = $_POST['txt_usname'] ; // user
                                                    header('location:login_index.php') ;
                                                }
                                                }
                                            }
                                        }
                                    
                                    ?>
                                    
                                </div>
                                </div>

                                <script>
                                    // Get the modal
                                    var modal = document.getElementById("myModal");
                                    
                                    // Get the button that opens the modal
                                    var btn = document.getElementById("myBtn");
                                    
                                    // Get the <span> element that closes the modal
                                    var span = document.getElementsByClassName("close")[0];
                                    
                                    // When the user clicks the button, open the modal 
                                    btn.onclick = function() {
                                      modal.style.display = "block";
                                    }
                                    
                                    // When the user clicks on <span> (x), close the modal
                                    span.onclick = function() {
                                      modal.style.display = "none";
                                    }
                                    
                                    // When the user clicks anywhere outside of the modal, close it
                                    window.onclick = function(event) {
                                      if (event.target == modal) {
                                        modal.style.display = "none";
                                      }
                                    }
                                    </script>

                            </li>   

							<li class="lienhe"><a href="contact.php">Liên Hệ</a></li>
							<li class="gioithieu"><a href="gioithieu.php">Giới Thiệu</a></li>
							<li class="tintuc"><a href="dichvu.php">Dịch vụ</a></li>
							<li class="chinhsach"><a href="chinhsach.php">Chính Sách</a></li>
						</ul>
					</div>		
				</div>	
			</div>
		</div>
		<div class="header-content clearix">
			<div class="container">
				<div class="row clearfix">
					<div class="header-left">
						<div class="logo">
							<a href="index.php"><img src="images/logo.gif" width="125"></a>
						</div>
					</div>
					<div class="header-right">
						<div class="top-content clearix">
							<ul class="ul1 clearfix">
								<li class="shipping"><img src="images/img01.png" class="img01">Giao Hàng Miễn Phí</li>
								<li class="payment"><img src="images/img02.png" class="img02">Thanh Toán Linh Hoạt</li>
								<li class="return"><img src="images/img03.png" class="img03">Trả Hàng Trong 30 Ngày</li>
							</ul>
						</div>
						<div class="row">
						<div class="form-search">
								<div class="form-search controls">
									<div class="controls-left">
										<form method="POST" action="search_product.php">
										<div class="text-search">
											<input type="text" name="search" id="txtsearch1" placeholder="Nhập từ khóa tìm kiếm ...">
										</div>
										<div class="controls-right">
											 
											<div class="select-categories">
												<button class="btn btn-search" type="submit" id="btnsearch" name="submit" >Tìm kiếm 
												<a><i class="fa-search"><img src="images/img04.png" class="img04"></i></a></button>
											</div>
										</div>
										</form>
									</div>
																		
								</div>
								
							</div>
						</div>
					</div>
					<div class="header-cart">
						<a href="cart.php"><img src="images/img05.png" class="icon-cart"></a><br>
						<p>Giỏ Hàng</p>	
					</div>
				</div>
			</div>			
		</div>
    </div>
	<!-------------Menu----------->
	<div class="menu">
		<div class="container">
				<button class="menu_mobi">MENU</button>
			<ul class="menu-laptopcdc">
				<li><a href="index.php" target="_blank">Trang Chủ</a></li>
				<li><a title="Laptop Mới" href="#">Laptop Mới</a>
					<ul>
						
								<li><a href="laptop_student.php">LapTop cho Học sinh, Sinh viên</a></li>
								<li><a href="laptop_gaming.php">LapTop Gaming</a></li>
								<li><a href="laptop_design.php">LapTop Đồ họa</a></li>
								<li><a href="laptop_office.php">LapTop Văn phòng</a></li>
								<li><a href="laptop_dev.php">LapTop Lập trình viên</a></li>
							
					</ul>
				</li>
				<li><a title="Laptop" href="laptop_acer.php">Laptop Acer</a></li>
				<li><a title="Laptop" href="laptop_asus.php">Laptop Asus</a></li>
				<li><a title="Laptop" href="laptop_dell.php">Laptop Dell</a></li>
				<li><a title="Laptop" href="laptop_hp.php">Laptop Hp</a></li>
				<li><a title="Laptop" href="laptop_lenovo.php">Laptop Lenovo</a></li>
				<li><a title="Laptop" href="laptop_msi.php">Laptop Msi</a></li>
				<li><a title="Laptop" href="laptop_macbook.php">Macbook</a></li>
				
				<li><a href="dichvu.php">Dịch Vụ</a>

				</li>
			</ul>
		</div>
	</div>

	<!-------------nd----------->



	<div class="nd">
		<div class="container">
			<div class="laptop_new clearfix">
				<div class="nd_left">
				<div class="x1">
						<h3><strong>Danh Mục Sản Phẩm</strong></h3>
						<p><a href="laptop_student.php">LAPTOP CHO HỌC SINH / SINH VIÊN</a></p>
						<p><a href="laptop_dev.php">LAPTOP CHO LẬP TRÌNH VIÊN</a></p>
						<p><a href="laptop_design.php">LAPTOP CHUYÊN ĐỒ HỌA</a></p>
						<p><a href="laptop_gaming.php">LAPTOP GAMING</a></p>
						<p><a href="laptop_office.php">LAPTOP VĂN PHÒNG</a></p>
					</div>
					<div class="x2">
						<h3><strong>VIDEO</strong></h3>
						<iframe src="https://www.youtube.com/embed/Jlls_dQtEoY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<p><strong>• Để sử dụng và bảo quản laptop đúng cách.</strong></p>
						<p><strong>• Các bước sau đây sẽ giúp bạn hiểu rõ hơn về laptop và cho chúng ta những hướng dẫn một cách tốt nhất, bền nhất, đúng nhất nha.</strong></p>
						<ul>
							<li> Sử dụng nguồn sạc đ&uacute;ng nhất</li>
							<li> Gập mở m&agrave;n h&igrave;nh an to&agrave;n</li>
							<li> Khởi động m&aacute;y t&iacute;nh dễ d&agrave;ng</li>
							<li> Tắt nguồn laptop hiệu quả</li>
							<li> Bảo quản laptop khi ở nh&agrave;</li>
							<li> Sử dụng pin bền bỉ</li>
							<li> Bảo vệ laptop khi di chuyển ra ngo&agrave;i</li>
						</ul>
					</div>
				</div>
				<div class="nd_right">
					<h1><strong>LAPTOP HP</strong></h1>
                    <?php 

                        $products = $get_data -> se_product_hp();
                    ?>
					<div class="new_laptop clearfix">
                        <?php
                            foreach($products as $pro) {
                        ?>
						<div class="laptop_new1">
							<a href="product_detail.php?id=<?php echo $pro['MASP'] ?>"><img src="img/<?php echo $pro['HINHANH'] ?>"></a>
							<p class="p1"><a href="product_detail.php?id=<?php echo $pro['MASP'] ?>">[Mới 100%] <?php echo $pro['TENSP'] ?> (<?php echo $pro['CPU'] ?>, <?php echo $pro['RAM'] ?>, <?php echo $pro['ROM'] ?>, <?php echo $pro['SCREEN'] ?>, <?php echo $pro['VGA'] ?>)</a></p>
							
							<div class="gia">
								<p class="p2"><strong><?php echo number_format($pro['GIASP']) ?> Đ</strong></p>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
		



	<!-------------Menu----------->
	<div class="end">
		<div class="container">
			<div class="end-cdc clearfix">
			<div class="end-left clearfix">
					<div class="end-left-1">
						<h3><span>VỀ CHÚNG TÔI</span></h3>
						<ul>
							<li><a href="gioithieu.php">Giới Thiệu</a></li>
							<li><a href="chinhsach.php">Giao Hàng - Đổi Trả</a></li>
							<li><a href="chinhsach.php">Chính Sách Bảo Mật</a></li>
							<li><a href="contact.php">Liên Hệ</a></li>
						</ul>
					</div>
					<div class="end-left-2">
						<h3><span>TRỢ GIÚP</span></h3>
						<ul>
							<li><a href="chinhsach.php">Hướng Dẫn Mua Hàng</a></li>
							<li><a href="chinhsach.php">Hướng Dẫn Thanh Toán</a></li>
							<li><a href="register.php">Tài Khoản Giao Dịch</a></li>
						</ul>
					</div>
				</div>
				<div class="end-right clearfix">
					<div class="end-right-1">
						<h3><span>THÔNG TIN CÔNG TY</span></h3>
						<p class="er1">CÔNG TY TNHH PHÁT TRIỂN CÔNG NGHỆ CDC</p>
						<p>Lê Thanh Nghị, Hai Bà Trưng, Hà Nội</p>
						<p><a href="mailto:info@latopcdc.vn">info@latopcdc.vn</a></p>
						<p>Phone: (+84) 888 1234 56</p>
					</div>
					<div class="end-right-2">
						<h3><span>LIÊN KẾT</span></h3>
						<div class="lk">
							<ul>
								<li><a href="https://www.google.com/" target="_blank"><img src="images/icon1.png"></a></li>
								<li><a href="https://www.facebook.com/" target="_blank"><img src="images/icon2.png"></a></li>
								<li><a href="https://www.youtube.com/" target="_blank"><img src="images/icon3.png"></a></li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
</div>
 <script>
    var myIndex = 0;
    carousel();
    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 3000); 
    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
	$(document).ready(function(){
	  $("button").click(function(){
	    $(".menu-laptopcdc").slideToggle();
	  });
	});
</script>

</body>
</html>

