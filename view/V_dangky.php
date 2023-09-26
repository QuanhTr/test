<!-- Form đăng kí -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Link bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Link fortawesome bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<style>
    body{
        background-color: #ee4d2d;
        width: 100%;
    }
    .container{
       margin-top: 5em;
       width: 50%;
       background-color: white;
    }
</style>
<body>
    <!-- HTML Form Đăng ký -->
        <div class="container border border-light">
            <div class="row">
                <div class="col sm-9">
                    <!-- navbar -->
                    <div class="p-3 mb-2 d-flex justify-content-between">
                        <div class="d-flex">
                            <a href="?controller=trangchu">
                                <img class="mt-1" src="../images/logo/logo-login.jpg" alt="logo-login" style="width: 7em; height: 3em;">
                            </a>
                            <h3 class="ms-3 mt-3">Đăng ký</h3>
                        </div>
                        <a class="text-decoration-none" href="?controller=dangnhap">
                            <h4 class="mt-4" style="color: #ee4d2d">Đăng nhập</h4>
                        </a>
                    </div>
                    <!-- Form nhập dl đăng ký-->
                    <form method="post">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="username"><b>Tên đăng nhập</b></label>
                                    <input id="username" class="form-control" type="text" name="username" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="password"><b>Mật khẩu</b></label>
                                    <input id="password" class="form-control" type="password" name="password" required>
                                    <span><i>Must be 8-20 characters long.</i></span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="fullname"><b>Họ và tên</b></label>
                                    <input id="fullname" class="form-control" type="text" name="fullname" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone"><b>Phone</b></label>
                                    <input id="phone" class="form-control" type="text" name="phone" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="email"><b>Email</b></label>
                                    <input id="email" class="form-control" type="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="address"><b>Address</b></label>
                                    <input id="address" class="form-control" type="text" name="address" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control btn btn-danger btn-block mt-3" type="submit" name="btnregister" value="Đăng ký">    
                                </div>
                                <div class="form-group mt-2">
                                    <i class="d-flex justify-content-center">Bằng việc đăng kí bạn đã đông ý với Shopee về<p class="ms-1 me-1" style="color: #ee4d2d">Điều khoản dịch vụ</p> & <p class="ms-1" style="color: #ee4d2d">Chính sách bảo mật</p></i>
                                </div>
                        </form>
                <!-- Đăng ký theo cách khác -->
                    <p style="text-align: center; color:darkgray">Đăng kí</p>
                    <div class="text-center">
                        <a href="">
                            <button style="background-color: rgb(46, 202, 202);" class="btn btn-email text-white" name="btnEmail">
                                <i class="fa-solid fa-bag-shopping"></i>
                                Email
                            </button>
                        </a>
                        <a href="#">
                            <button style="background-color: blue" class="btn btn-facebook text-white" name="btnFacebook">
                                <i class="fa-brands fa-square-facebook"></i>
                                    Facebook
                            </button>
                        </a> 
                    </div>
                
                </div>
            </div>
        </div>
    <!-- Đoạn mã php khi nhập dl nó sẽ tự đọng insert lên sql -->
    <?php
        // require tương đương include để link đế file PHP khác
        // 
        require './model/database.php';
        
        if(isset($_POST['btnregister'])){
            // Liệt kê danh sách các biến thêm vào mysql
            // $id = $_POST['SELECT FLOOR(UUID() * 1000000) AS ID'];
            $username = $_POST['username'];
            // md5 mk mã hóa
            $password = md5($_POST['password']);
            $fullname = $_POST['fullname'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $address = $_POST['address'];

            // Chú ý dấu nháy
            $sql="INSERT INTO `users` (`username`,`password`,`fullname`,`phone`,`email`,`address`) VALUES ('$username','$password','$fullname','$phone','$email','$address')";
            // trường id trong mysql để auto_increment
            $ketqua = mysqli_query($conn,$sql);
            
        //     if (!$ketqua){
        //         echo "Insert Thất bại!";
        //     }else{
        //         echo "Insert Thành công!";
        //     }
        }
    ?> 
</body>
</html>