<?php
//hàm dùng để gom code , dễ quản lý và mang tính tái sử dụng
// hàm có trả về

// hàm không trả về
function tinh($a,$b,$c=9){
    echo $a + $b + $c;
}
//tinh(5,6,10);
// xây dựng 1 hàm thông tin gồm những tham số truyền vào
// masv,hoten,diachi,namsinh
// hiển thị những tham số đó ra
// masv-hoten-diachi-tuổi
// tuổi = năm hiện tại - năm sinh
//get current year in php
function tinhtuoi($namsinh) {
    return  date("Y") - $namsinh;
}
function thongtinsv($masv,$hoten,$diachi,$namsinh) {
    $tuoi =  tinhtuoi($namsinh);
    echo $masv."-".$hoten."-".$diachi."-".$tuoi;
}
// tao 1 ham khong tra ve gom nhung tham so truyen vao
// nhu sau
//magv,tengv,namsinh,luongcb,sogioday
//hien thi magv-tengv,tuoi-tongluong-xeploai
//tuoi = namhientai - namsinh
//xay dung ham co tra ve tinh tongluong = luongcb*sogioday;
//xep loai dua vao tongluong (yeu cau xay dung ham)
//tongluong >=6000 (Dat)
//tongluong < 6000 (Khum dat) 
thongtinsv("SV002","Phamj Viet duc","ABC",2003);