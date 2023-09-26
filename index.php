<!-- Điều hướng tới trang khác -->
<?php
    //Chi tiết sản phẩm

    // require ('model/database.php');
    // $db= new database();

    // if (isset($_GET['controller'])){
    //     $controller = $_GET['controller'];
    // }else{
    //     $controller = 'trangchu';  
    // }

    // switch($controller){
    //     case 'trangchu': 
    //         require('./controller/C_trangchu.php');
    //         break;
    //     case 'chitiet': 
    //         require('./controller/C_chitiet.php');
    //         break;
    //     default:

    //         break;
    // }


    // Chi tiết sản phẩm, Giỏ hàng
    // Chạy hàm session_start() để dùng với SESSION
    session_start();
    // require file database.php vào
    require ('model/database.php');
    // Tạo đối tượng db
    $db = new database();
    //
    // $conn = $db->getConnection(); 

    // Kiểm tra xem đường link có controller chưa
    if (isset($_GET['controller'])){
        // Nếu có lấy giá trị đó
        $controller = $_GET['controller'];
    }else{
        // Nếu không
        $controller = 'trangchu';  
    }
    // Kiểm tra biến $controller bằng gì để require file tương ứng
    switch($controller){
        case 'trangchu': 
            require_once('./controller/C_trangchu.php');
            break;
        case 'dangnhap': 
            require_once('./controller/C_dangnhap.php');
            break;
        case 'dangky': 
            require_once('./controller/C_dangky.php');
            break;
        case 'chitiet': 
            require_once('./controller/C_chitiet.php');
            break;
        case 'giohang': 
            require_once('./controller/C_giohang.php');
            break;
        case 'add_giohang': 
            require_once('./controller/C_add_giohang.php');
            break;    
        default:
            echo"Trang web hiện không khả dụng!";
            break;
    }
?>

<!-- <img src="../images/Images-product/OPPO A95.jpg" alt=""> -->
<!-- Hỏi làm sao đề gắn link ảnh đây với 1 web khác -->