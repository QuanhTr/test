<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link CSS bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Link fortawesome bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    /* Navbar */
    #navbar-main {
        display: none;
        justify-content: space-between;
    }

    .navbar-main-list {
        display: flex;
        text-decoration: none;
        list-style: none;
        padding: 1em;
    }

    /* Content */
    /* Để chuyển đổi giữa đơn vị px và em, bạn có thể sử dụng công thức sau:
                em = px / baseFontSize */
    #content {
        padding: 0 6em 0 6em;
    }

    #content-1 {
        margin: 4em 5em 4em 1em;

    }

    #content-2 {
        background-color: white;
        margin: 4em 5em 4em 1em;
        padding: 2em;
    }

    .navbar-content {
        padding: 0 0 1em 0;
    }
</style>

<body>
    <!-- Code Html -->
    <!-- Navbar -->
    <div id="navbar-main" class="container-fluid">
        <ul class="navbar-main-list">
            <li class="navbar-item">
                <a href="../Home/home-shopee.php">
                    <img class="mt-2" src="../../images/logo/logo-login.jpg" alt="logo-login" style="width: 10em; height: 3.125em;">
                </a>
            </li>
            <li class="navbar-item">
                <h3 class="mt-4 ms-3">Đăng nhập</h3>
            </li>
        </ul>
        <ul class="navbar-main-list">
            <a class="text-decoration-none" href="https://help.shopee.vn/vn/s">
                <h5 class="pt-4" style="color: #ee4d2d;">Bạn cần giúp đỡ?</h5>
            </a>
        </ul>
    </div>
    <!-- Content -->
    <div id="content" class="container-fluid" style="background-color: #ee4d2d;">
        <div class="row ">
            <div id="content-1" class="col md-6" style="text-align:center;"><!--col md-6 chia view web ra 2 phần mỗi phần chiếm 6/12-->
                <img src="../../images/logo/lo_login_shopee.png" alt="" style="width: 23em; height:23em;">
                <h3 class="mt-4 text-white" style="width:18em; height:4em">Nền tảng thương mại điện tử yêu thích ở Đông Nam Á & Đài Loan</h3>
            </div>
            <div id="content-2" class="col md-6">
                <div class="d-flex justify-content-between">
                    <h3 class="navbar-content">Đăng nhập</h3>
                    <h5 class="navbar-content" style="color: #eda500; margin: 0.5em;">
                        Đăng nhặp với mã QR
                    </h5>
                </div>
                <div>
                    <form action="#" method="post">
                        <!-- Attribute required bắt buộc -->
                        <input id="username" class="form-control mb-4" type="text" placeholder="Email/Số điện thoại/Tên đăng nhập" name="username" required>
                        <div class="d-flex">
                            <input id="password" class="form-control mb-4" type="password" placeholder="Mật khẩu" name="password" required>
                            <span class="show-btn"><i class="fas fa-eye"></i></span>
                        </div>
                        <button class="btn btn-danger form-control" name="btnlogin" type="submit">Đăng nhập</button>
                    </form>
                    <div class="d-flex justify-content-between my-1">
                        <a class="text-decoration-none" href="">
                            <p class="text-primary">Quên mật khẩu?</p>
                        </a>
                        <a class="text-decoration-none" href="">
                            <p class="text-primary">Đăng nhập với SMS</p>
                        </a>
                    </div>
                    <div style="text-align:center">
                        <p style="text-align: center; color:darkgray">-----------------------------Hoặc-----------------------------</p>
                        <button class="btn btn-facebook me-2 broder border-dark">
                            <img src="../../images/logo/icon-facebook.jpg" alt="" width="25em" height="25em">
                            Facebook
                        </button>
                        <button class="btn btn-google me-2 broder border-dark">
                            <img src="../../images/logo/google-icon.svg" alt="" width="25em" height="25em">
                            Google
                        </button>
                        <button class="btn btn-apple broder border-dark">
                            <img src="../../images/logo/Apple_logo_black.svg.png" alt="" width="24em" height="24em">
                            Apple
                        </button>
                    </div>
                    <div class="d-flex justify-content-center mt-2">
                        <p style="color:darkgray">Bạn mới biết đến Shopee?</p>
                        <a class="ms-2 text-decoration-none" href="../Register/register.php">
                            <p style="color:#ee4d2d">Đăng ký</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Phần dưới -->
    <footer>
        <h1>Phần footer</h1>
    </footer>
    <!-- Code PHP -->
    <!-- Chưa được -->
    <?php
    include '../Database/create-connect_database.php';
    $sqluser = "SELECT username FROM users";
    $sqlpass = "SELECT password FROM users";
    // Hàm isset() được dùng để kiểm tra một biến nào đó đã được khởi tạo trong bộ nhớ của máy tính hay chưa, nếu nó đã khởi tạo (tồn tại) thì sẽ trả về TRUE và ngược lại sẽ trả về FALSE.
    if (isset($_POST['btnlogin'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == $sqluser && $password == $sqlpass) {
            // khởi tạo cookie và xác định time tồn tại của cookie
            // setcookie('username',$username, time()+2000);
            echo "<span id='hello'>
                                Xin chao: " . $username . '
                        </span>
                        <span>
                            <a href="../Home/home-shopee.php">Back</a>
                        </span>';
        } else {
            echo "Dang nhap that bai";
        };
    }
    ?>
</body>
<!-- Link Js -->
<script src=""></script>

</html>