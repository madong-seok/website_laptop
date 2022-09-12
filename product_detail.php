<?php
    session_start();
	
?>  
<!DOCTYPE html>
<html lang="de">
<head>
	<title>Chi tiết sản phẩm</title>
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
							<li><a href="#" target="_blank">Cảm ơn vì đã chọn chúng tôi!!!</a></li>
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
								<li><a href="laptop_ofice.php">LapTop Văn phòng</a></li>
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

   

<div class="chitietlaptop">
     <?php 
                                
        $select = $get_data -> se_product_byid($_GET['id']);
        foreach($select as $se)
    ?>
    <div class="container">
        <div class="x1">
            <h1>[New 100%] <?php echo $se['TENSP']?> (2022) <?php echo $se['CPU']?> - <?php echo $se['RAM']?>- <?php echo $se['ROM']?> - <?php echo $se['SCREEN']?> - <?php echo $se['VGA']?></h1>
            <hr />
            <div class="x2 clearfix">
                <div class="chitietlaptop_left">
                    <div class="slide">
                        <img src="img/<?php echo $se['HINHANH']?>" class="mySlides" width="100%" />
                        <img src="img/detail/1.jpeg" class="mySlides" width="100%" />
                        <img src="img/detail/2.jpeg" class="mySlides" width="100%" />
                        <img src="img/detail/3.png" class="mySlides" width="100%" />
                        <img src="img/detail/4.jpeg" class="mySlides" width="100%" />
                        <img src="img/detail/5.jpeg" class="mySlides" width="100%" />
                        <img src="img/detail/6.jpeg" class="mySlides" width="100%" />
                        <img src="img/detail/7.jpeg" class="mySlides" width="100%" />
                        <img src="img/detail/8.jpeg" class="mySlides" width="100%" />
                        <img src="img/detail/9.jpeg" class="mySlides" width="100%" />
                        
                    </div>
                    <div class="thongso">
                        <h3>THÔNG SỐ KỸ THUẬT</h3>
                        <ul>
                            <li>CPU : <?php echo $se['CPU']?> (2.9GHz Turbo Boost 3.9GHz, 8MB Cache)</li>
                            <li>RAM: <?php echo $se['RAM']?> DDR4 2400MHz</li>
                            <li>Ổ cứng: <?php echo $se['ROM']?></li>
                            <li>Màn hình: <?php echo $se['SCREEN']?> (1920×1080)</li>
                            <li>Card màn hình: Card <?php echo $se['VGA']?></li>
                            <li>Cổng kết nối: Jack tai nghe 3.5 mm2 x USB 3.2HDMILAN (RJ45)USB 2.0</li>
                            <li>Hệ điều hành: Windows 10 Home SL</li>
                            <li>Thiết kế: Vỏ nhựa</li>
                        </ul>
                    </div>
                </div>
                <div class="chitietlaptop_right">
                    <h2><strong><?php echo number_format($se['GIASP']) ?> VNĐ</strong></h2>
                    <ul>
                        <li><strong>CPU</strong> <?php echo $se['CPU']?></li>
                        <li><strong>Ram</strong> <?php echo $se['RAM']?> DDR4 2666MHz</li>
                        <li><strong>Ổ cứng</strong> <?php echo $se['ROM']?></li>
                        <li><strong>Màn hình</strong> <?php echo $se['SCREEN']?>1920*1080</li>
                        <li><strong>VGA</strong> <?php echo $se['VGA']?></li>
                    </ul>
                    <div class="cauhinh">
                        <form action="cart.php?action=add" method="POST">
                            <input type="text" value="1" name="quantity[<?php echo $se['MASP']?>]" size="2">
                            <input   type="submit" value="Mua Ngay" name="sub_add">
                        </form>
                    </div><br>
                    <h3>Cấu Hình</h3>
                    <div class="cauhinh">
                        <p><?php echo $se['CPU']?>/ <?php echo $se['RAM']?>/ <?php echo $se['ROM']?>/ <?php echo $se['VGA']?> <?php echo $se['SCREEN']?></p>
                        <p style="color: #f00;"><strong><?php echo number_format($se['GIASP']) ?></strong></p>
                    </div>
                    <div class="quatang">
                        <p><a href="#" style="color: #00d;">Trả Góp 80% Giá Trị Sản Phẩm</a></p>
                        <p>✔ Tặng bộ quà tặng 650.000đ cho toàn bộ đơn hàng trên 5 triệu bao gồm: Balo thời trang, túi chống sốc, chuột không dây, lót di chuột</p>
                        <p>✔ Bảo hành 12 tháng 1 đổi 1</p>
                        <p>✔ Miễn phí vận chuyển trong bán kính 10km từ cửa hàng LAPTOP CDC gần nhất</p>
                        <p>✔ Miễn phí cân màu hình bằng Spyder X Elite</p>
                    </div>
                    
                </div>
            </div>
            <div class="x3">
                <div class="mota">
                    
                    <div class="x4">
                        <p class="p1"><strong>CAM KẾT CỦA CÔNG TY</strong></p>

                        <p>✔ Laptop mới của các hãng như DELL. HP. ASUS. ACER. APPLE đều được công ty nhập hàng chính hãng và có đầy đủ giấy tờ chứng minh nguồn gốc hàng hóa</p>
                        <p>
                            ✔ Laptop cũ tại công ty được xách tay nguyên bản 100% chưa qua sửa chữa, Là hàng loại 1 đã qua tuyển chọn từng chiếc ( khi mua máy quý khách hàng sẽ được hướng dẫn check 15 bước để kiểm tra. Tránh mua hàng dựng,
                            hàng qua sửa chữa, hàng loại 2.3 trôi nổi trên thị trường với giá rất rẻ )
                        </p>
                        <p>✔ 100% máy tại laptop CDC đều là hàng xách tay tại các nước như Mỹ , Nhật , Úc , khối EU Máy cũ đẹp trên 90% – 98%</p>
                        <p>✔ Hỗ trợ sau bán hàng luôn luôn cố gắng tốt nhất, để quý khách hàng hài lòng nhất.</p>
                        <p>✔ Là công ty có bề dày gần 20 năm trong nghề, luôn đặt sự phát triển bền vững lên trên hết, để có được điều đó thì lòng tin của quý khách là điều mà chúng tôi trân trọng hơn cả giá trị tiền bạc.</p>
                        <p>✔ Công Ty vẫn vệ sinh, cài đặt miễn phí với tất cả khách hàng dù máy quý khách không mua tại công ty. Điều mà công ty duy trì từ năm thành lập 2002 !</p>
                        <p>
                            ✔ Đối với quý khách hàng ở xa. Khi máy gặp vấn đề quý khách sẽ được hỗ trợ từ xa qua teamview. Zalo. Facebook. Điện thoại… Nếu lỗi phần cứng không khắc phục được, quý khách có thể gửi máy qua bưu điện hoặc nhà
                            xe, công ty sẽ nhận máy, kiểm tra, bảo hành và gửi lại quý khách trong thời gian sớm nhất! Với lần đầu tiên máy lỗi, quý khách chịu tiền cước vận chuyển, nếu lỗi từ lần 2 công ty chịu toàn bộ chi phí vận chuyển
                            hoặc đổi máy mới cho quý khách
                        </p>
                    </div>
                    <div class="x4">
                        <p class="p1"><strong>CHÍNH SÁCH BẢO HÀNH MÁY TÍNH LAPTOP CŨ</strong></p>

                        <p>✔ Thời gian bảo hành được tính bắt đầu từ ngày mua hàng</p>
                        <p>✔ Toàn bộ máy được bảo hành lỗi linh kiện nào được đổi mới linh kiện đó chính hãng, bảo hành cả cháy nổ ic trong 15 ngày đầu mua máy</p>
                        <p>✔ Riêng đối với SSD Kingston, Liteon,Samsung, WD… để nâng cấp sẽ được bảo hành 36 tháng.</p>
                        <p>✔ Trong 15 ngày đầu, nếu máy không đáp ứng được yêu cầu công việc, hoặc bị lỗi. Quý khách có thể mang đổi máy mà khác không mất bất kỳ chi phí nào , thời gian bảo hành được giữ theo ngày mua cũ.</p>
                        <p>✔ Trong thời gian bảo hành như trên, khi có bất cứ linh kiện nào bị hỏng, LAPTOP CDC sẽ thay thế mới hoàn toàn linh kiện đó chứ không sửa chữa.</p>
                        <p>✔ Quý khách được vệ sinh laptop và hỗ trợ cài đặt phần mềm trọn đời tại LAPTOP CDC</p>
                        <p>✔ Nếu máy bị lỗi khi đã hết hạn bảo hành, Công ty sẽ hỗ trợ hết mức có thể với khách hàng. Có thể giao động từ 10-20% giá linh kiện chính hãng thay cho máy!</p>
                    </div>
                    <div class="x1">
                        <p class="p1"><strong>CHÍNH SÁCH BẢO HÀNH MÁY TÍNH LAPTOP MỚI</strong></p>

                        <p>✔ Áp dụng hoàn toàn chính xách bảo hành của hãng sản xuất. Khi nhân viên tư vấn máy sẽ nói rõ tất cả điều khoản của từng hãng máy với quý khách hàng</p>
                    </div>
                    <div class="x1">
                        <p class="p1"><strong>QUÀ TẶNG KÈM THEO KHI MUA MÁY</strong></p>

                        <p>✔ Tặng bộ quà tặng 650.000đ cho toàn bộ đơn hàng trên 5 triệu bao gồm: Balo thời trang, túi chống sốc, chuột không dây, lót di chuột</p>
                    </div>
                    <div class="x1">
                        <p class="p1"><strong>CHẾ ĐỘ VẬN CHUYỂN VÀ THANH TOÁN</strong></p>

                        <p>✔ Free ship trong nội thành Hà Nội ( áp dụng trong bán kính 10km từ cửa hàng LAPTOP CDC gần nhất ).</p>
                        <p>✔ Với các đơn hàng ra ngoại thành hoặc các tỉnh khác, công ty sẽ gửi ship cod qua các đối tác vận chuyển, chi phí giao nhận sẽ được tính vào đơn hàng khi quý khách nhận hàng KIỂM TRA HÀNG và thanh toán.</p>
                        <p>✔ Chi phí giao hàng toàn quốc dao động từ 150.000 đ đến 200.000 đ. Quý khách có thể tham khảo thêm <a href="#" style="color: #00d;">tại đây</a></p>
                        <p>✔ Nhận thanh toán dưới mọi hình thức khi mua máy tại công ty như Tiền mặt, Chuyển khoản, Các đổi máy, Quẹt thẻ tất cả các ngân hàng…</p>
                        <p>✔ Hỗ trợ mua máy trả góp qua thẻ ghi nợ ( thẻ visa các ngân hàng… ) Xem chi tiết <a href="#" style="color: #00d;">tại đây</a></p>
                        <p>✔ Hỗ trợ mua trả góp qua Chứng minh thư, Bằng lái xe, sổ hộ khẩu qua ngân hàng HD saison. Thủ tục đơn giản, chi phí thấp, trả trước chỉ 10% giá máy… Xem chi tiết <a href="#" style="color: #00d;">tại đây</a></p>
                    </div>
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

