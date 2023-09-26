<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- css bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- fortawesome bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
  /* Navbar */
      #nav1{
          display: flex;
          justify-content: space-between; 
          background-color: #ee4d2d;
          padding: 0 5% 0 5%;
      }
      
      #nav2{
          display: flex;
          background-color: #ee4d2d;
          padding: 0 5% 0 5%;
      }

      .group-list{
          display: flex;
          list-style: none; /*Bỏ kí hiệu đánh thứ tự của ul*/
          padding: 0 3em 0 3em; /*Cách lề 2 bên*/
      }

      .group-item{
          margin: 0 1em 0 0;
          /* text-decoration: none !important;  ---bỏ gạch chân nếu ko đc dùng bootstrap inline style với text-decoration-none  */
      }

      .logo-shopee{
          width: 13vw;
          height: 12vh;
      }

      .group-list-item{
          display: flex;
          padding: 0;
          justify-content: space-around;
          list-style: none;
      }
      .container{
          display: inline-block;
      }
      /*display:flex; justify-content: space-around; flex-wrap: wrap; -- sd flex, cách đều xung quanh, xuống dòng*/
  /* List Product */
      .list-product{
        text-align: center;
      }
      .main-product{
        padding: 1%;
        list-style: none;
        display: inline-block;
        border: 2px solid black;
      }
</style>
<body>
  <!-- Navbar-1-->
  <div id="nav1">
    <!-- Left -->
    <ul id="navbar_1-list-left" class="group-list">
      <li class="group-item">
          <a class="text-decoration-none text-white" href="#">Kênh người bán</a>
      </li>
      <li class="group-item">
          <a class="text-decoration-none text-white" href="#">Trở thành Người bán Shopee</a>
      </li>
      <li class="group-item">
          <a class="text-decoration-none text-white" href="https://shopee.vn/web/">Tải ứng dụng</a>
      </li>
      <li class="group-item">
          <a class="text-decoration-none text-white" href="#">Kết nối</a>
      </li>
      <li class="group-item">
          <a class="text-decoration-none text-white" href="https://www.facebook.com/">
            <i class="fa-brands fa-facebook mt-1"></i>
          </a>
      </li>
      <li class="group-item">
          <a class="text-decoration-none text-white" href="https://www.instagram.com/">
            <i class="fa-brands fa-instagram mt-1"></i>
          </a>
      </li>
    </ul>
    <!-- Right -->
    <ul id="navbar_1-list-right" class="group-list">
      <li class="group-item">
          <a class="text-decoration-none text-white" href="#">
            <i class="fa-regular fa-bell"></i>
            Thông báo
          </a>
      </li>
      <li class="group-item">
          <a class="text-decoration-none text-white" href="https://help.shopee.vn/portal">
            <i class="fa-regular fa-circle-question"></i>
            Hỗ trợ
          </a>
      <li class="group-item">
          <a class="text-decoration-none text-white" href="#" >
            <div>
              <i class="fa-solid fa-globe"></i>
              Tiếng Việt
            </div>
          </a>
      </li>
      <li class="group-item">
        <a class="text-decoration-none text-white" id="register" href="?controller=dangky">
          Đăng Ký
        </a>
      </li>
      <li class="group-item">
        <a class="text-decoration-none text-white" href="?controller=dangnhap">
          Đăng nhập
        </a>
      </li>
    </ul>
</div>
<!-- Navbar-2 -->
<div id="nav2">
  <ul class="group-list">
    <!-- Logo -->
    <li class="group-list-first">
      <a href="?controller=trangchu#">
        <img class="logo-shopee" src="../images/logo/logo-shopee-main.jpg" alt="logo-shopee">
      </a>
    </li>
    <!-- Form search & List Product -->
    <li class="group-list-second ms-3">
      <div class = "form-search" style="width:58vw">
        <form  class="form-control" style="display: flex;" action="">
          <input class="form-control" style="width: 55vw;" type="text" name="key-search" aria-label="Search" placeholder="Đăng ký và nhận voucher bạn mới đến 70k!" 
            value="<?php
                echo (isset($_GET['key-search'])) ? $_GET['key-search'] : ''
            ?>">
          <button class="btn btn-danger ms-2" style="background-color: #ee4d2d; padding: 0 2%; border-radius:5%;">
            <i class="fa-solid fa-magnifying-glass text-white"></i>
          </button>
        </form>
      </div>
      <div class="list product mt-2" style="width:58vw">
        <ul class="group-list-item">
            <li><a class="text-decoration-none text-white" href="">Dép</a></li>
            <li><a class="text-decoration-none text-white ms-3" href="">Áo Khoác</a></li>
            <li><a class="text-decoration-none text-white ms-3" href="">Áo Phông</a></li>
            <li><a class="text-decoration-none text-white ms-3" href="">Áo Croptop</a></li>
            <li><a class="text-decoration-none text-white ms-3" href="">Túi Xách nữ</a></li>
            <li><a class="text-decoration-none text-white ms-3" href="">Váy</a></li>
            <li><a class="text-decoration-none text-white ms-3" href="">Điện thoại</a></li>
            <li><a class="text-decoration-none text-white ms-3" href="">Ốp Iphone</a></li>
            <li><a class="text-decoration-none text-white ms-3" href="">Tai Nghe Blutooth</a></li>
            <li><a class="text-decoration-none text-white ms-3" href="">Phụ kiện</a></li>
          </ul>
      </div>
    </li>
    <!-- Cart -->
    <li class="group-list-third">
      <a href="?controller=giohang&">
        <button class="btn btn-outline ms-3 mt-3 align-irtems-center">
          <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="8vw" height="5vh" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
          <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>
        </button>   
      </a> 
    </li>
  </ul>
</div>
<!-- Code PHP list product  --> 
<h3 class="ms-5 mt-1">I.Danh sách sản phẩm</h3>
<div class="list-product">
  <?php foreach($product as $key => $value) 
  { ?>
      <ul class="main-product">
        <li>
          <a href="?controller=chitiet&id=<?php echo $value['id'] ?>">
            <img style="width: 15vw; height: 21vh;" src="<?php echo $value['img_link'] ?>" class="card-img-top img-thumbnail">
          </a>
        </li>
        <li>
          <b><?php echo $value['name'];?></b>
        </li>
        <li>
          <b>Đơn giá: </b><?php echo number_format($value['price'])?>
        </li>
        <li>
          <?php echo $value['content']?>
        </li>
        <li>
          <a href="?controller=add_giohang&id=<?php echo $value['id']?>">
            <button type="submit" class="btn btn-danger mt-1" style="width:100%">
              <i class="fa-solid fa-circle-plus"></i>
              Mua
            </button>
          </a>
        </li>
      </ul> 
  <?php } ?>
</div>
</body>
</html>
