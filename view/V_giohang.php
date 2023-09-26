<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shopping cart</title>
	 <!-- css bootstrap 5 -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- fortawesome bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
		/* Navbar */
			#nav1{
			display: flex;
			justify-content: space-between; 
			background-color: #ee4d2d;
			}
			.nav_1_list{
				display: flex;
				list-style: none;
				padding: 0 10em 0 10em;
			}
			.nav_1_item{
				margin-right: 1em;
			}
			#nav2{
				background-color: white;
				padding: 1em;
			}
			.nav_2_list{
				display: flex;
				justify-content: space-between;
				padding: 0 10em 0 10em;
			}
			.nav_2_list_left{
				list-style: none;
			}
			.nav_2_list_right{
				list-style: none;
				padding-top: 2px;
			}
			/* xem lại */
			.logo_shopee_cart{
				width: 7vw;
				height: 5vh;
			}
			/* Mã tạo đường kẻ dọc bên trái */
			#right-object {
				color:#ee4d2d;
				margin: 12px 0 0 12px;
        		border-left: 1px solid #ee4d2d;
        		padding-left: 12px;
				align-items: center;
				width: fit-content;
   			}
			
	</style>
</head>
<body> 
<!-- Nav 1 -->
	<div id="nav1">
		<!-- Left -->
		<ul id="navbar_1_list_left" class="nav_1_list">
			<li class="nav_1_item">
				<a class="text-decoration-none text-white" href="#">Kênh người bán</a>
			</li>
			<li class="nav_1_item">
				<a class="text-decoration-none text-white" href="https://shopee.vn/web/">Tải ứng dụng</a>
			</li>
			<li class="nav_1_item">
				<a class="text-decoration-none text-white" href="#">Kết nối</a>
			</li>
			<li class="nav_1_item">
				<a class="text-decoration-none text-white" href="https://www.facebook.com/">
					<i class="fa-brands fa-facebook"></i>
				</a>
			</li>
			<li class="nav_1_item">
				<a class="text-decoration-none text-white" href="https://www.instagram.com/">
					<i class="fa-brands fa-instagram "></i>
				</a>
			</li>
		</ul>
		<!-- Right -->
		<ul id="navbar_1-list_right" class="nav_1_list">
			<li class="nav_1_item">
				<a class="text-decoration-none text-white" href="#"><i class="fa-regular fa-bell"></i>
					Thông báo
				</a>
			</li>
			<li class="nav_1_item">
				<a class="text-decoration-none text-white" href="https://help.shopee.vn/portal">
					<i class="fa-regular fa-circle-question"></i>
					Hỗ trợ
				</a>
			<li class="nav_1_item">
				<a class="text-decoration-none text-white" href="#" >
					<div>
					<i class="fa-solid fa-globe"></i>
					Tiếng Việt
					</div>
				</a>
			</li>
			<li class="nav_1_item">
				<a class="text-decoration-none text-white" href="">Tài khoản</a>
			</li>
		</ul>
	</div>
<!-- Nav 2 -->
<div id="nav2">
	<ul class="nav_2_list">
		<!-- Logo -->
		<li class="nav_2_list_left">
			<a class="d-flex text-decoration-none" id="left-object" href="">
			<img class="logo_shopee_cart" src="../images/logo/logo-login.jpg" alt="logo-shopee">
			<h5 class="" id="right-object">Giỏ Hàng</h5>
			</a>
		</li>
		<li class="nav_2_list_right">
			<form class="d-flex" action="">
				<input type="text" class="form-control border border-danger" style="width: 30vw;" placeholder="Tìm sản phẩm, thương hiệu và tên shop">
				<button class="btn btn-danger" style="background-color: #ee4d2d; width:5vw;"><!--padding: 0 2em;-->
					<i class="fa-solid fa-magnifying-glass text-white"></i>
				</button>
			</form>
		</li>
	</ul>
</div>
<!-- Hiển thị sản phẩm thanh toán -->
<div id="table">
	<div class="col-md-8">
		<div class="row">
			<table class="border border-black mt-4 ms-3">
				<thead>
					<tr>
						<th scope="col">Sản Phẩm</th>
						<th scope="col">Tên Sản Phẩm</th>
						<th scope="col">Đơn Giá</th>
						<th scope="col">Số Lượng</th>
						<th scope="col">Tổng tiền sản phẩm</th>
						<th scope="col">Thao Tác</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						// Đoạn mã lạp với tính thành tiền sp
						$Sum_amount= 0;
						if (isset($_SESSION['cart']))
						{
							foreach($_SESSION['cart'] as $key => $value)
							{
								$Sum_amount += $value['amount']*$value['price'];	
					?>
					<tr>
						<td>
							<a href="?controller=chitiet%id=<?php echo $value['id'];?> ">
								<img witdh="50" height="50" src="<?php echo $value['img_link']; ?>" alt="">
							</a>
						</td>
						<td>
							<?php echo $value['name']?>
						</td>
						<td>
							<?php echo $value['price'];?>
						</td>
						<td>
							<?php echo $value['amount'];?>
						</td>
						<td>
							<?php echo $value['amount']*$value['price']?>
						</td>
						<td style="align-items: center;">
							<a href="?controller=xuli_cart&id" style="text-decoration:none;">
								<button class="fa-solid fa-minus btn btn-primary"></button>
							</a>
							<a href="?controller=xuli_cart&id" style="text-decoration:none;">
								<button class="fa-solid fa-circle-plus btn btn-success"></button>
							</a>
							<a href="?controller=xuli_cart&id" style="text-decoration:none;" class="text-decoration-none text-white">
								<button class="btn btn-danger">
									Xóa
								</button>
							</a>
						</td>
					</tr>
					<?php } 
					}else{?>
						<h3 class="text-danger">Giỏ hảng rỗng</h3>
					<?php
					}?>
				</tbody>
				</table>
		</div>
		<div class="col-md-4">
			<div class="row border-bottom">
				<div>
					<p class="col-md-6"><b>Tổng tiền:</b></p>
					<p class="col-md-6"><?php echo number_format($Sum_amount) ?> vnđ</p>
				</div>
				<div class="row">
					<a href="?controller=thanhtoan">
						<button class="btn btn-success">Thành Toán</button>
					</a>
				</div>
			</div>
		</div>	
	</div>
</div>
</body>
</html>