<?php
class SinhVien {
    // khai báo thuộc tính hay được gọi là khai báo biến
    public $tenSV;
    public $maSV;
    public $namSinh;
    //hàm khởi tạo (Hàm đặc biệt trong class)
    public function __construct($tenSV,$maSV,$namSinh)
    {
       $this->tenSV = $tenSV;
       $this->maSV = $maSV;
       $this->namSinh = $namSinh;
    }

    //tạo phương thức set giá trị cho tên sinh viên
    public function setTenSV($tenSV) {
        $this->tenSV = $tenSV;
    }
    //tạo phương thức tính tủi
    public function tinhTuoi() {
        return date('Y') - $this->namSinh;
    }
    //khai báo phương thức hay được là khai báo hàm
    public function hienThiThongTin() {
        echo "Tên SV:".$this->tenSV."Mã SV: ".
            $this->maSV."Năm sinh".$this->namSinh."Tuổi".$this->tinhTuoi();
    }
}
// khởi tạo đối tượng PHÁT
$phat = new SinhVien("PHÁT 1","PH12345",2003);
$phat->setTenSV("PHÁT");
$phat->hienThiThongTin();
//tạo class GiangVien gồm các thuộc tính :maGV,tenGV,namBatDau,luongCoBan,soGioDay
//tạo hàm khởi tạo cho các thuộc tính trên
// tạo hàm tính thâm niên có trả về thâm niên bằng (năm hiện tại - namBatDau)
// tạo hàm tính tổng lương = lương cơ bản * số giờ dạy (Có trả về)
// tạo hàm xếp loại kiểm tra nếu :
//tongluong >=  5000 đạt
//tongluong < 5000 ko đạt
//tạo hàm hiển thị thông tin gồm maGV-TenGV-Thâm niên- Tổng lương- Xếp loại
