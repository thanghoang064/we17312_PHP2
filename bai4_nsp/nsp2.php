<?php
namespace NSP2;
class SinhVien {
    public $ten;
    public $namsinh;
    public function __construct($ten,$namsinh)
    {
        $this->ten = $ten;
        $this->namsinh = $namsinh;
    }
    public function hienThiThongTinSV() {
        echo "Tên ".$this->ten."<br>";
        echo "Tuổi ".$this->namsinh;
    }
}