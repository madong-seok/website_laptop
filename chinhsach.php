<?php
    session_start();
?>  
<!DOCTYPE html>
<html lang="de">
<head>
	<title>Chính sách - LapTopCDC</title>
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

		<!-------------nd----------->

	<div class="slide_top">
		<div class="container">
			<div class="slide_top_main clearfix">
				<div class="slide_top_l">
					<div class="a">
					    <img src="images/1.jpg" class="mySlides" width="100%">
					    <img src="images/2.jpg" class="mySlides" width="100%">
					    <img src="images/3.jpg" class="mySlides" width="100%">
					    <img src="images/4.jpg" class="mySlides" width="100%">
					    <img src="images/5.jpg" class="mySlides" width="100%">
					</div>
				</div>
				<div class="slide_top_r">
					<img src="images/1.jpg" width="100%">
					<img src="images/5.jpg" width="100%">
				</div>
			</div>


			<div class="slide_3_item clearfix">
				<div class="item_1">
					<img src="images/6.jpg">
				</div>
				<div class="item_1">
					<img src="images/7.jpg">
				</div>
				<div class="item_1">
					<img src="images/8.jpg">
				</div>
			</div>


			<div class="title_home">
				<h2>Chính Sách Bảo Hành</h2>
			</div>
			<div>
				<strong>Laptop CDC kính gửi quý khách hàng chế độ bảo hành chi tiết như sau:</strong><br>
				 (Cập nhật chế độ bảo hành từ ngày 08/10/2021).
				<p style="color:#08CC3B;font-size: 25px">ĐỐI VỚI LAPTOP CŨ</p>
				 LAPTOP CDC BẢO HÀNH TOÀN BỘ MÁY TỪ 03 – 06 – 12 THÁNG.<br>

				(Tại mỗi sản phẩm của chúng tôi đều có chế độ bảo hành cụ thể).<br>

				* <i>Điều kiện để được bảo hành: Quý khách hàng cần cung cấp đúng thông tin đăng ký mua hàng và trên sản phẩm còn nguyên TEM bảo hành của LAPTOP CDC.<br>
				* Thời gian bảo hành được tính bắt đầu từ ngày mua hàng.</i><br>
								<p></p>
				<div style="margin-left: 30px; ">
				1. Bảo hành <strong>MỘT ĐỔI MỘT</strong> với các linh kiện trong thời gian Bảo Hành và đủ điều kiện để Bảo Hành (đổi mới <strong>KHÔNG SỬA CHỮA)</strong>.<br>
				2. <strong>MÀN HÌNH</strong> được bảo hành trong trường hợp có từ 05 điểm chết trở lên. Riêng đối với màn cảm ứng, được bảo hành màn 03 tháng.<br>
				(<strong>KHÔNG</strong> bảo hành với các trường hợp như: rơi, vỡ, chảy mực, ngập nước, sọc ngang màn hình do tì đè hoặc va đập).<p></p>
				3. <strong>PIN</strong> là linh kiện hao mòn nên DCD bảo hành <strong>03</strong> tháng. Vì Pin chính hãng theo máy nên CDC đưa ra mức đảm bảo để được đổi pin là tháng đầu quý khách sử dụng trên 1 giờ 30 phút, các tháng tiếp theo pin sẽ được đổi trong trường hợp pin chết, lỗi không sạc vào, hoặc dưới 30 phút.<br>
				<i>(Mức đảm bảo trên được test khi quý khách sử dụng máy với nhu cầu văn phòng, lướt web thông thường)</i><p></p>
				4. Đối với các <strong>OPTION TÙY CHỌN</strong>: led phím, vân tay, camera, trackpoint, bluetooth khi bán ra không cộng phí nên CDC không bảo hành.<br>
				(Cụ thể: Trường hợp quý khách đang dùng máy có các option này như phím có led, trackpoint… CDC sẽ bảo hành cho quý khách bằng linh kiện chính hãng khác <strong>CÓ</strong> hoặc <strong>KHÔNG CÓ</strong> led phím, trackpoint…tùy thời điểm trong kho còn hàng hay không, mong quý khách <strong>LƯU Ý</strong>).<p></p>
				5. Được <strong>TRẢ</strong> máy trong 7 ngày đầu <strong>NẾU</strong> máy lỗi main. (Main là bo mạch chủ trên máy).<br>
				6.Được <strong>ĐỔI</strong> máy: Trong 7 ngày đầu, nếu máy không đáp ứng được yêu cầu của quý khách, quý khách có thể mang đổi máy khác tương đương, cao hơn hoặc thấp hơn (thấp hơn chênh KHÔNG QUÁ 20% giá trị máy ban đầu) mà KHÔNG MẤT PHÍ SỬ DỤNG. Thời gian bảo hành được giữ theo ngày mua máy đầu tiên.<br>
				7. <strong>KHÔNG</strong> bảo hành tất cả linh kiện, phần cứng nếu có dấu hiệu vào nước, có vết dung dịch, côn trùng, bị ẩm mốc, lỗi người dùng (đứt dây, vỡ, móp,…) không còn tình trạng như ban đầu. Tuy nhiên, DCD sẽ HỖ TRỢ quý khách mức giá ưu đãi nhất.<br>
				8. <strong>KHÔNG</strong> bảo hành và không chịu trách nhiệm về dữ liệu và tính hợp pháp của các phần mềm, dữ liệu có trong sản phẩm của khách hàng. Do vậy khách hàng vui lòng lưu lại dữ liệu sang thiết bị khác trước khi gửi bảo hành.<br>
				9. <strong>KHÔNG</strong> bảo hành máy đối với trường hợp mất toàn bộ tem mặt trước hoặc mặt sau, nhưng vẫn giữ bảo hành đối với các phần linh kiện được nâng cấp – thay thế, nếu linh kiện đó còn tem của Laptop CDC và của nhà cung cấp.<br>
				10. Đối với <strong>QUÝ KHÁCH HÀNG Ở XA</strong>: Khi máy gặp vấn đề quý khách sẽ được hỗ trợ từ xa qua teamview, Zalo, Facebook, Điện thoại… Nếu lỗi phần cứng không khắc phục được, quý khách vui lòng gửi máy qua bưu điện hoặc nhà xe, công ty sẽ nhận máy, kiểm tra, bảo hành và gửi lại quý khách trong thời gian sớm nhất. Với lần đầu tiên máy lỗi, quý khách vui long thanh toán cước phí vận chuyển, nếu máy phát sinh lỗi từ lần thứ 2 công ty chịu toàn bộ chi phí vận chuyển hoặc đổi máy mới cho quý khách.</div>
								
				<p style="color:#08CC3B; font-size: 25px">ĐỐI VỚI LAPTOP MỚI</p>
				<strong>Bảo hành toàn bộ máy 12 Tháng.</strong><br>
				<i>*Thời gian bảo hành được tính bắt đầu từ ngày mua hàng.</i><p></p>
				<div style="margin-left: 30px">
				1. Bảo hành <strong>MỘT ĐỔI MỘT</strong> với các linh kiện trong thời gian Bảo Hành và đủ điều kiện để Bảo Hành (đổi mới <strong>KHÔNG SỬA CHỮA</strong>).<br>
				2. <strong>MÀN HÌNH</strong> được bảo hành trong trường hợp có từ 05 điểm chết trở lên. Riêng đối với màn cảm ứng, được bảo hành màn 03 tháng.<br>
				(<strong>KHÔNG</strong> bảo hành với các trường hợp như: rơi, vỡ, chảy mực, ngập nước, sọc ngang màn hình do tì đè hoặc va đập).<br><p></p>
				3. Pin chính hãng theo máy nên CDC đưa ra mức đảm bảo để được đổi pin là tháng đầu quý khách sử dụng trên 1 giờ 30 phút, các tháng tiếp theo pin sẽ được đổi trong trường hợp pin chết, lỗi không sạc vào, hoặc dưới 30 phút.<br>
				<i>(Mức đảm bảo trên được test khi quý khách sử dụng máy với nhu cầu văn phòng, lướt web thông thường)</i><p></p>
				4. Đối với các <strong>OPTION TÙY CHỌN</strong>: led phím, vân tay, camera, trackpoint, bluetooth khi bán ra không cộng phí nên CDC không bảo hành.<br>
				(Cụ thể: Trường hợp quý khách đang dùng máy có các option này như phím có led, trackpoint… TCC sẽ bảo hành cho quý khách bằng linh kiện chính hãng khác <strong>CÓ</strong> hoặc <strong>KHÔNG CÓ</strong>  led phím, trackpoint…tùy thời điểm trong kho còn hàng hay không, mong quý khách <strong>LƯU Ý</strong>.<p></p>
				5. <strong>KHÔNG</strong> bảo hành tất cả linh kiện, phần cứng nếu có dấu hiệu vào nước, có vết dung dịch, côn trùng, bị ẩm mốc, lỗi người dùng (đứt dây, vỡ, móp,…) không còn tình trạng như ban đầu. Tuy nhiên, CDC sẽ HỖ TRỢ quý khách mức giá ưu đãi nhất.<br>
				6. <strong>KHÔNG</strong> bảo hành và không chịu trách nhiệm về dữ liệu và tính hợp pháp của các phần mềm, dữ liệu có trong sản phẩm của khách hàng. Do vậy khách hàng vui lòng lưu lại dữ liệu sang thiết bị khác trước khi gửi bảo hành.<br>
				7. <strong>KHÔNG</strong> bảo hành máy đối với trường hợp mất toàn bộ tem mặt trước hoặc mặt sau, nhưng vẫn giữ bảo hành đối với các phần linh kiện được nâng cấp – thay thế, nếu linh kiện đó còn tem của Laptop TCC và của nhà cung cấp.<br>
				8. Đối với <strong>QUÝ KHÁCH HÀNG Ở XA</strong>: Khi máy gặp vấn đề quý khách sẽ được hỗ trợ từ xa qua teamview, Zalo, Facebook, Điện thoại… Nếu lỗi phần cứng không khắc phục được, quý khách vui lòng gửi máy qua bưu điện hoặc nhà xe, công ty sẽ nhận máy, kiểm tra, bảo hành và gửi lại quý khách trong thời gian sớm nhất. Với lần đầu tiên máy lỗi, quý khách vui long thanh toán cước phí vận chuyển, nếu máy phát sinh lỗi từ lần thứ 2 công ty chịu toàn bộ chi phí vận chuyển hoặc đổi máy mới cho quý khách.</div>	
								
				<p style="color:#08CC3B;font-size: 25px">ĐỐI VỚI LINH KIỆN MUA MỚI </p>	1.<strong> BÀN PHÍM</strong> (mới 100%)<br>
				    + Bảo hành 12 tháng hoặc 06 tháng (tùy từng loại bàn phím cụ thể) và bảo hành một đổi một trong thời gian bảo hành.<br>

				    + Miễn phí toàn bộ công thay thế lắp đặt.<br>

				2.<strong> MÀN HÌNH</strong><br>
				+ Tất cả màn hình tại công ty đều là hàng chính hãng, được bảo hành 6 đến 12 tháng tùy từng mã màn hình.<br>

				+ Bảo hành điểm chết (từ 5 điểm trở lên), bảo hành ố vàng, hoặc đứt nét – (trường hợp <strong>không</strong> bảo hành: rơi, vỡ, ngập nước, sọc ngang màn hình do tì đè hoặc va đập).<br>

				3.<strong> PIN</strong>
				+ Pin mới 100% (pin nhà máy sản xuất thay thế – chất lượng tương đương hàng chính hãng) – HOẶC CÓ LOẠI CHÍNH HÃNG.<br>

				+ Nếu dòng máy đã sản xuất trên 2 năm công ty không cung cấp sản phẩm pin chính hãng vì nếu còn cũng chỉ là pin tồn dung lượng không còn đảm bảo.<br>

				+ Pin sản xuất thay thế nhưng dung lượng luôn đảm bảo về thời gian sử dụng và chế độ bảo hành.<br>

				+ Tất cả pin mới tại Laptop TCC được bảo hành 06 đến 12 tháng (tùy từng mã pin).<br>

				+ KHÔNG bảo hành đối với các trường hợp cháy, nổ, tác động của người dùng.<br>

				4. <strong>SẠC LAPTOP </strong>
				Bảo hành đổi mới dây sạc hoặc sạc cho khách trong thời gian bảo hành kể cả cháy chập( ngoại trừ rơi vỡ )<br>

				CÓ HÀNG CHÍNH HÃNG – HÀNG LOẠI 1 – HOẶC LOẠI OEM<br>
				Để đảm bảo nguồn và mạch sạc của máy luôn được đảm bảo.<br>

				+ Tất cả sạc tại Laptop TCC luôn được bảo hành 1 đổi 1 trong thời gian 6 tháng.<br>

				+ Là công ty chuyên cung cấp linh kiện laptop, chúng tôi tự hào luôn đi đầu trong lĩnh vực linh kiện về chất lượng sản phẩm và chế độ bảo hành.<br>

				5. <strong>Ổ CỨNG </strong>
				Ổ cứng SSD mới được bảo hành toàn bộ 36 tháng. Ổ cứng HDD mới được bảo hành 24 tháng, hoặc 36 tháng tùy từng loại ổ.<br>

				6. <strong>RAM </strong>
				+ Tất cả ram tại Laptop TCC đều là ram tháo máy chính hãng, không bán hàng kém chất lượng và được bảo hành 12 tháng.<br>

				+ Ram tháo máy lên có nhều sự lựa chọn cho bạn như samsung, hynix, kingston…<br><p></p>

				<strong>LƯU Ý</strong>: Laptop CDC <strong>CÓ</strong> hầu hết tất cả các loại phím, pin có mặt trên thị trường. Nhưng do có quá nhiều dòng máy nên Laptop CDC không thể update hết các mã sản phẩm lên website. Nếu quý khách không tìm thấy bàn phím mình cần, hãy gọi trực tiếp theo số hotline hoặc số công ty, nhân viên kinh doanh sẽ phục vụ và báo giá trực tiếp cho quý khách.<br><p></p>

				SĐT LIÊN HỆ: <font style="color:blue">  0234 567 8910</font>hoặc <font style="color:blue"> 098 765 4321</font>.<br>

				 

				<div style="margin-top: 30px; margin-bottom: 20px">Laptop DCD hỗ trợ cài đặt phần mềm và vệ sinh máy hoàn toàn <strong>MIỄN PHÍ TRỌN ĐỜI</strong> – áp dụng đối với tất cả các khách hàng (bao gồm khách hàng <strong>KHÔNG</strong> mua máy tại DCD).</div>	
				<hr>
				

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

