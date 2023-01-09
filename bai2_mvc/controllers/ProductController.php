<?php
require_once "models/Product.php";
function listProduct() {
    $products = getProduct();
    include_once 'views/product/list.php';
}
function addProduct() {
    return "Day la chuc nang them san pham";
}
// tao fuction giong nhu tren
// tao bang nhan vien gom id,ten,luong
// lamf chuc nang danh sach,them,xoa bang mvc da hoc
?>