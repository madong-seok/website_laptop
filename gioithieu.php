<?php
    session_start();
?> 
<!DOCTYPE html>
<html lang="de">
<head>
	<title>Giới Thiệu - LapTopCDC</title>
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
				<h2>Giới Thiệu</h2>
			</div>
			<div>
				<h2>Lịch sử phát triển.</h2>
					<p>Xuất hiện trên thị trường từ năm 2022,  đến nay Laptop CDC tự tin là nơi mang đến cho các bạn những mẫu laptop chất lượng phục vụ cho công việc, đặc biệt những dòng laptop xách tay của các hãng DELL. HP. LENOVO THINKPAD, các dòng laptop GAMING, Business, WORKSTATION tốt nhất trên thị trường.</p>
				<h2>Địa chỉ:</h2>
					<p>Laptop CDC có trụ sở chính tại địa chỉ 92 Lê Thanh Nghị, Hai Bà Trưng, HN,</p>
					<p>Nhằm đáp ứng nhu cầu gia tăng của khách hàng, TCC đã khai chương Chi nhánh 2 tại  P. Tạ Quang Bửu,  Hai Bà Trưng, Hà Nội, Việt Nam</p>
					<p>Quý khách có thể qua một trong 3 cơ sở để trải nghiệm tất cả các dịch vụ của TCC.<br><br>
					Hiểu được tâm lí khách hàng khi mua đồ điện tử, nhất là hàng đã qua sử dụng, sẽ rất khó để lựa chọn một nơi uy tín, chất lượng giữa vô vàn các sự lựa chọn . Laptop TCC luôn nỗ lực từng ngày để hoàn thiện :
					<br> -Hoàn thiện chất lượng sản phẩm bán ra.
					<br> -Hoàn thiện cung cách dịch vụ.
					<br> -Hoàn thiện chế độ bảo hành sau bán ( bởi vì : đồ điện tử không một hãng hay một nhà phân phối lớn nào có thể nói không bao giờ hỏng, nếu đã không hỏng thì các hãng đã không phải mở các trung tâm bảo hành ).</p>
				<h2>Để đảm bảo quyền lợi cho khách hàng:</h2>
					<p> Mỗi sản phẩm đến tay khách hàng đều qua 15 bước kiểm định kĩ càng, để đảm bảo đạt được chất lượng tốt nhất, ổn định nhất.
						<br>- Ngoài ra, tất cả khách hàng khi đến với TCC đều sẽ được tận hưởng các gói dịch vụ hậu mãi sau bán hàng như vệ sinh máy, cài phần mềm, cân màu màn hình… hoàn toàn miễn phí.
						<br>- Đối với khách hàng ở xa không thể trải nghiệm được máy một cách trọn vẹn, TCC đã có một đỗi ngũ chuyên viên tư vấn 24/7, tận tình cặn kẽ tư vấn máy.
						<br>- Ngoài ra, đội ngũ kĩ thuật viên Sẵn sàng hỗ trợ tất cả các khách hàng xử lí các sự cố về máy cũng như phần mềm trực tiếp qua videos call, qua  teamvew…</p>
				<h2>Kết :</h2>
					<p>Sự khác biệt của TCC là chúng tôi sẵn sàng lắng nghe, sẵn sàng chia sẻ mọi điều quý khách mong muốn, và chúng tôi hiểu được giá trị cốt lõi của sự phát triển, đó chính là niềm tin của khách hàng. Với đội ngũ nhân viên dày dặn kinh nghiệm trong các khâu bán hàng, bảo hành, CSKH, MKT,.. TCC tin rằng đây sẽ nơi trải nghiệm tốt nhất cho khách hàng.</p>
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
						<p>92 Lê Thanh Nghị, Hai Bà Trưng, Hà Nội</p>
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

