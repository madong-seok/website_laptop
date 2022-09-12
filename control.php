<?php 
  include('connect.php');
  class data{
	  public function ins_user($us,$email,$pass,$number,$gend,$birthd,$addr){
		  global $conn;
		  $sql="insert into khachhang(HOVATEN,EMAIL,MATKHAU,SDT,GIOITINH,NGAYSINH,DIACHI) 
		  values ('$us','$email','$pass','$number','$gend','$birthd','$addr')";
		  $exec=mysqli_query($conn,$sql);
		  return $exec;
		  }
		  //Đăng ký
		  public function se_user()
		  {
			  global $conn;
			  $sql="select * from khachhang";
			  $exec=mysqli_query($conn,$sql);
			  return $exec;
		  } 
		  //Lấy thông tin khách hàng
		 
		public function id_user($id)
		{	  
			global $conn;
			$sql="select * from khachhang where ID_KH='$id'";
			$exec=mysqli_query($conn,$sql);
			return $exec;
			}
			//lấy thông tin kh theo id
			public function ss_user($name)
			{	  
				global $conn;
				$sql="select * from khachhang where EMAIL='$name'";
				$exec=mysqli_query($conn,$sql);
				return $exec;
				}
			//lấy thông tin kh theo tên
		public function del_user($id)
			{
			
			  global $conn;
			  $sql="delete from khachhang where ID_KH='$id'";
			  $exec=mysqli_query($conn,$sql);
			  return $exec;
			  }  
		  //xóa khách hàng
		  public function up_user($us,$email,$pass,$number,$gend,$birthd,$addr,$id){
			  
			  global $conn;
			  $sql="update khachhang set HOVATEN='$us',
			  EMAIL='$email',
			  MATKHAU='$pass',
			  SDT='$number',
			  GIOITINH='$gend',
			  NGAYSINH='$birthd',	
			  DIACHI='$addr'
			  where ID_KH='$id'";
			  $exec=mysqli_query($conn,$sql);
			  return $exec;
			  }
			  //cập nhật tt khách hàng
			  public function up_user_vd($us,$email,$pass,$number,$gend,$birthd,$addr,$id){
			  
				global $conn;
				$sql="update khachhang set HOVATEN='$us',
				EMAIL='$email',
				MATKHAU='$pass',
				SDT='$number',
				GIOITINH='$gend',
				NGAYSINH='$birthd',	
				DIACHI='$addr'

				where ID_KH='$id'";
				$exec=mysqli_query($conn,$sql);
				return $exec;
				}

		  public function ins_prod($id,$name,$image,$cpu,$ram,$rom,$screen,$vga,$pri,$br,$cate,$date){
			global $conn;
			$sql="insert into sanpham(MASP,TENSP,HINHANH,CPU,RAM,ROM,SCREEN,VGA,GIASP,HANGSX,THELOAI,NGAYNHAP) 
			values ('$id','$name','$image','$cpu','$ram','$rom','$screen','$vga','$pri','$br','$cate','$date')";
			$exec=mysqli_query($conn,$sql);
			return $exec;
			}

			

		public function se_product()
			{
				global $conn;
				$sql="select * from sanpham ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			
			}
			public function se_product_acer()
			{
				global $conn;
				$sql="select * from sanpham Where HANGSX='ACER' ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}

			public function se_product_asus()
			{
				global $conn;
				$sql="select * from sanpham Where HANGSX='ASUS' ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}

			public function se_product_dell()
			{
				global $conn;
				$sql="select * from sanpham Where HANGSX='DELL' ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}

			public function se_product_hp()
			{
				global $conn;
				$sql="select * from sanpham Where HANGSX='HP' ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}

			public function se_product_lenovo()
			{
				global $conn;
				$sql="select * from sanpham Where HANGSX='LENOVO' ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}

			public function se_product_msi()
			{
				global $conn;
				$sql="select * from sanpham Where HANGSX='MSI' ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}

			public function se_product_mac()
			{
				global $conn;
				$sql="select * from sanpham Where HANGSX='MACBOOK' ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}

			public function se_product_student()
			{
				global $conn;
				$sql="select * from sanpham Where THELOAI='Laptop Sinh viên' ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}

			public function se_product_gaming()
			{
				global $conn;
				$sql="select * from sanpham Where THELOAI='Laptop Gaming' ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}

			public function se_product_office()
			{
				global $conn;
				$sql="select * from sanpham Where THELOAI='Laptop Văn phòng' ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}

			public function se_product_des()
			{
				global $conn;
				$sql="select * from sanpham Where THELOAI='Laptop Đồ họa' ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}

			public function se_product_dev()
			{
				global $conn;
				$sql="select * from sanpham Where THELOAI='Laptop Lập trình viên' ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}

			public function se_product_top3_price()
			{
				global $conn;
				$sql="SELECT * FROM `sanpham` ORDER BY GIASP ASC LIMIT 3";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}

			public function se_product_top9_price()
			{
				global $conn;
				$sql="SELECT * FROM `sanpham` ORDER BY GIASP ASC LIMIT 9";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}

			public function se_product_top3_des()
			{
				global $conn;
				$sql="SELECT * FROM `sanpham` WHERE THELOAI='Laptop Đồ họa' ORDER BY GIASP DESC LIMIT 3";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}

			public function se_product_top3_gaming()
			{
				global $conn;
				$sql="SELECT * FROM `sanpham` WHERE THELOAI='Laptop Gaming' ORDER BY GIASP DESC LIMIT 3";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}

			public function se_product_top3_hp()
			{
				global $conn;
				$sql="SELECT * FROM `sanpham` WHERE HANGSX='HP' LIMIT 3";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}

			public function se_product_top3_lenovo()
			{
				global $conn;
				$sql="SELECT * FROM `sanpham` WHERE HANGSX='LENOVO' LIMIT 3";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}

			public function se_product_byid($id)
			{
				global $conn;
				$sql="select * from sanpham where MASP = '$id'";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}
			public function del_product($id)
			{
			
			  global $conn;
			  $sql="delete from sanpham where MASP='$id'";
			  $exec=mysqli_query($conn,$sql);
			  return $exec;
			  } 

			  public function up_product($name,$image,$cpu,$ram,$rom,$screen,$vga,$pri,$br,$cate,$date,$id){
			  
				global $conn;
				$sql="update sanpham set TENSP='$name',
				HINHANH='$image',
				CPU='$cpu',RAM='$ram',ROM='$rom',SCREEN='$screen',VGA='$vga',
				GIASP='$pri',
				HANGSX='$br',
				THELOAI='$cate',
				NGAYNHAP='$date'
				where MASP='$id'";
				$exec=mysqli_query($conn,$sql);
				return $exec;
				}
			
				public function up_product_vd($name,$id){
			  
					global $conn;
					$sql="update sanpham set TENSP='$name'
					where MASP='$id'";
					$exec=mysqli_query($conn,$sql);
					return $exec;
					}

			public function search_product($name)
			{
				global $conn;
				$sql="select * from sanpham where TENSP like '%$name%' or GIASP like '%$name%' OR RAM,ROM,VGA,SCREEN,CPU like '%$name%' ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}	
			
	  
	  
	  public function Login($us,$pass){
		  global $conn;
		  $sql= "select * from khachhang where EMAIL='$us' and MATKHAU='$pass'";
		  $exec=mysqli_query($conn,$sql);
		  $count= mysqli_num_rows($exec);
		  return $count;
		  }
		
	 public function ad_Login($us,$pass){
		  global $conn;
		  $sql= "select * from quantrivien where TENQTV='$us' and MATKHAU='$pass'";
		  $exec=mysqli_query($conn,$sql);
		  $count= mysqli_num_rows($exec);
		  return $count;
		  }
	  
	  
		
		  public function ins_contact($us,$email,$sub,$content){
		  global $conn;
		  $sql="insert into lienhe(HOTEN,EMAIL,TIEUDE,NOIDUNG) 
		  values ('$us','$email','$sub','$content')";
		  $exec=mysqli_query($conn,$sql);
		  return $exec;
		  }

		 public function se_contact()
		{
			global $conn;
			$sql="select * from lienhe";
			$exec=mysqli_query($conn,$sql);
			return $exec;
    	} 
			public function id_contact($id)
		{
			global $conn;
			$sql="select * from lienhe where ID_LH='$id'";
			$exec=mysqli_query($conn,$sql);
			return $exec;
		}

		public function del_contact($id)
    	{
			global $conn;
			$sql="delete from lienhe where ID_LH=$id";
			$run=mysqli_query($conn,$sql);
			return $run;
    	}

		public function update_contact($name,$email,$sub,$content,$id)
    	{
			global $conn;
			$sql="update contact set name='$name',email='$email',subject='$sub',content='$content' 
			where ID_contact=$id";
			$run=mysqli_query($conn,$sql); 
			return $run;
    	}
	    
		public function se_order()
		{
			global $conn;
			$sql="select * from hoadon";
			$exec=mysqli_query($conn,$sql);
			return $exec;
    	} 

		public function se_order_detail()
		{
			global $conn;
			$sql="select * from chitiet_hoadon";
			$exec=mysqli_query($conn,$sql);
			return $exec;
    	} 

		

		public function id_order_detail($id)
		{
			global $conn;
			$sql="SELECT * FROM `chitiet_hoadon` INNER JOIN `hoadon` ON chitiet_hoadon.ID_HD=hoadon.ID_HD WHERE chitiet_hoadon.ID_HD='$id'";
			$exec=mysqli_query($conn,$sql);
			return $exec;
		}

		public function del_order($id)
    	{
			global $conn;
			$sql="delete from hoadon where ID_HD=$id";
			$run=mysqli_query($conn,$sql);
			return $run;
    	}
		public function up_order($name,$image,$cpu,$ram,$screen,$vga,$pri,$br,$id){
			  
			global $conn;
			$sql="update hoadon set TENKH='$name',
			SDT='$image',
			DIACHI='$cpu',GHICHU='$ram',TRANGTHAI='$screen',NGAYLAP='$vga',
			HTVANCHUYEN='$pri',
			HTTHANHTOAN='$br'
			where ID_HD='$id'";
			$exec=mysqli_query($conn,$sql);
			return $exec;
			}
			
  }
?>
