<!DOCTYPE html>
<html>
<head>
    <title>Information Product</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- fortawesome bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 300px;
        }
    </style>
</head>
<body>
  <!-- slide-show-navbar -->
  <!-- Atribute data-ride = "carousel" in bootstrap: để chỉ định liệu băng chuyền có tự động chuyển qua các mục của nó hay không-->
	<div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>    
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../images/Images-product/banner1.png" alt="Điện thoại thông minh" style="width:100vw; height:50vh;">
        <div class="carousel-caption">
          <h3>OPPO</h3>
          <p>Điện thoại thông minh</p>
        </div>   
      </div>
      <div class="carousel-item">
          <img src="../images/Images-product/banner2.jpg" alt="Điện thoại thông minh" style="width:100vw; height:50vh;">
          <div class="carousel-caption">
            <h3>SAMSUNG</h3>
            <p>Điện thoại thông minh</p>
          </div>   
      </div>
      <div class="carousel-item">
          <img src="../images/Images-product/banner3.jpg" alt="Điện thoại thông minh" style="width:100vw; height:50vh;">
          <div class="carousel-caption">
            <h3>Iphone</h3>
            <p>Điện thoại thông minh</p>
          </div>   
      </div>
    </div>
    <!-- Tạo mũi tên điều hướng navbar -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

<!-- MENU -->
<div class="navbar navbar-expand-sm" style="background-color:#ee4d2d;">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <!-- ?controller=trangchu điều hướng về trang chủ -->
        <a class="nav-link text-white" href="?controller=trangchu"><b>Trang chủ</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#"><b>Sản phẩm</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#"><b>Giới thiệu</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#"><b>Liên hệ</b></a>
      </li>
    </ul>
    <form class="form-inline ml-sm-4 d-flex" action="#">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-danger" style="background-color: #ee4d2d; width:6vw;">
        <i class="fa-solid fa-magnifying-glass text-white"></i>
      </button>
    </form>
  </div>
	<div class="container">
	
	<div class="container mt-2">
		<!-- Phần hiển thị sản phẩm chính -->
		<div class="row mt-4">
			<h3 class="col-md-12 text-center">Chi tiết sản phẩm</h3>
		
			<div class="col-md-4 mt-5">
				<div class="card">
					<img style="width: 350px; height: 300px;" src="<?php echo $product[$id-1]['img_link'] ?>" class="card-img-top img-thumbnail">
				</div>
			</div>
			<div class="col-md-4 mt-5">
                <!-- Sửa cái này -->
				<h5 class="card-title text-secondary">Tên sản phẩm :<?php echo $product[$id-1]['name'] ?></h5>
				<p class="card-text">Tồn kho: <?php echo number_format($product[$id-1]['amount']) ?></p>
				<p class="card-text">Đơn giá: <?php echo number_format($product[$id-1]['price']) ?>đ</p>
				<p class="card-text">Mô tả: <?php echo $product[$id-1]['content'] ?></p>
				<a href="" class="btn btn-success">+Giỏ hàng</a>
			</div>	
		</div>
		<!-- Phần hiển thị sản phẩm liên quan -->
		<div class="row mt-5">
			<h3 class="col-md-12 text-center">Những sản phẩm liên quan</h3>
		</div>
		<div class="row mt-3">
		<?php foreach ($product_lienquan as $key => $value) {?>
			<div class="col-md-3 mt-5">
				<div class="card">
					<a href="?controller=chitiet&id=<?php echo $value['id'] ?>"><img style="width: 250px; height: 200px;" src="<?php echo $value['img_link'] ?>" class="card-img-top img-thumbnail"></a>
					<h5 class="card-title text-center text-secondary"><?php echo $value['name'] ?></h5>
					<p class="card-text">Đơn giá: <?php echo number_format($value['price']) ?>vnđ</p>
					<p class="card-text">Mô tả: <?php echo $value['content'] ?></p>
					<a href="" class="btn btn-success">+Giỏ hàng</a>
				</div>
			</div>		
		<?php } ?>
		</div>
	</div>
</body>
</html>