<?php
include_once "nsp1.php";
include_once "nsp2.php";
$sv = new NSP1\SinhVien("huy",18);
$sv->hienThiThongTinSV();
$sv1 = new NSP2\SinhVien("dức",2003);
$sv1->hienThiThongTinSV();