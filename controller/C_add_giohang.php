<?php
// Lấy id từ url
$id = $_GET['id'];
// Lấy dữ liệu theo id 
$product = $db->get('product',array('id'=>$id));
/* Kiểm tra xem có giỏ hàng chưa 
    +, Nếu chưa có thì tạo
    +, Nếu có rồi:
      - Kiểm tra sản phẩm có chưa nếu chưa thì tạo còn có rồi thì tăng số lượng 1 
*/

    //  Kiểm tra SESION['cart'] ?
    if(isset($_SESSION['cart'])){
        // Nếu đã tồn tại thì xem sản phẩm tồn tại chưa
        // Nếu sp tồn tại
        if(isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id]['amount']+=1;
        }
        // Nếu sp chưa
        else{
            $_SESSION['cart'][$id]['id'] = $product[$id-1]['id'];
            $_SESSION['cart'][$id]['img_link'] = $product[$id-1]['img_link'];
            $_SESSION['cart'][$id]['name'] = $product[$id-1]['name'];
            $_SESSION['cart'][$id]['price'] = $product[$id-1]['price'];
            $_SESSION['cart'][$id]['amount'] = 1; 
        }
    }
    // Nếu chưa tồn tại giỏ hàng
    else{
        $_SESSION['cart'][$id]['id'] = $product[$id-1]['id'];
        $_SESSION['cart'][$id]['img_link'] = $product[$id-1]['img_link'];
        $_SESSION['cart'][$id]['name'] = $product[$id-1]['name'];
        $_SESSION['cart'][$id]['price'] = $product[$id-1]['price'];
        $_SESSION['cart'][$id]['amount'] = 1;   
    }
    header('location:?controller=trangchu');
?>