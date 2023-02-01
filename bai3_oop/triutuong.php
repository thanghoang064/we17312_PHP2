<?php
//định nghĩa 1 class trìu tượng
//class trìu tượng được gọi là 1 class cho nên nó có đầy đủ  thuộc tính và phương
//thức nhưng có thêm phương thức trìu tượng
// class trìu tượng thì không thể khởi tạo được
abstract class DongVat {
    //định nghĩa 1 phương thức trìu tượng
    abstract function chay();
    
}

class ConCho extends DongVat {
    public function chay()
    {
        echo "Con chó chạy bằng 4 chân";
    }
}
class ConNguoi extends DongVat {
    public function chay()
    {
        echo "Con người chạy bằng 2 chân";
    }
}
//khởi tạo concho và trỏ đến phương thức chạy
$cc = new ConCho();
$cc->chay();
//xây dựng 1 class tính chu vi và diện tích hình chữ nhật
//xây dựng 1 class tính chu vi và diện tích hình vuông
//xây dựng 1 class tính chu vi và diện tích hình tam giác
//xây dựng 1 class trìu tượng và xác định các phương thức trìu tượng cho
//3 class trên
?>