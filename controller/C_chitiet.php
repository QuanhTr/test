<?php
    $id = $_GET['id'];
    $product = $db->get('product',array('id'=>$id));
    require('./view/V_chitiet.php');
?>
