<?php
    if (isset($_GET['key-search'])){
        // Lay dl tu o input tim kiem
        $keyword = $_GET['key-search'];
        $product = $db -> search('product','name',$keyword);
    }
    // Neu ko ton tai hien thi all o trang product
    else{
        $product = $db -> get('product', array());
    }
    require_once('./view/V_trangchu.php');
?>
