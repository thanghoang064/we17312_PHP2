<?php
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        require_once 'controllers/ProductController.php';
        echo listProduct();
        break;
    case 'add-product':
        require_once 'controllers/ProductController.php';
        echo addProduct();
        break;
}
?>