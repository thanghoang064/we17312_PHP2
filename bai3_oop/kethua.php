<?php
class ConNguoi {
    public $chan;
    public $tay;
    public $mat;
    public $mui;
    //hàm khởi tạo
    public function __construct($chan,$tay,$mat,$mui)
    {
        $this->chan = $chan;
        $this->tay = $tay;
        $this->mat = $mat;
        $this->mui = $mui;
    }

    public function an() {
        echo "Ăn bằng mồm";
    }
    public function setChan($chan) {
        $this->chan = $chan;
    }
    public function setTay($tay) {
        $this->tay = $tay;
    }
}
//nếu class con chưa có hàm khởi tạo thì class con sẽ tự động nhận hàm khởi tạo của class
//cha
//class con
//khi class con có hàm khởi tạo thì class con sẽ nhận hàm khởi tạo của chính
// nó
class NguoiLon extends ConNguoi {

    public $longNach;
    public function __construct($chan,$tay,$mat,$mui,$longNach)
    {
        //gọi hàm khởi tạo từ cha
        parent::__construct($chan,$tay,$mat,$mui);
        $this->longNach = $longNach;
    }

    public function di() {
        echo "đi bằng".$this->chan."Chân".$this->tay.
            "Tay".$this->mat."Mũi".$this->mui;
        echo $this->longNach;

    }

    public function noi(){

    }
}
//class con
class TreCon extends ConNguoi {

    public function bo() {
        echo "tre con bo bang ".$this->chan."chan <br>";
        echo $this->tay."tay ";
    }

}
$nl = new NguoiLon(1,2,3,4);
//$nl->an();
//$nl->setChan(2);
$nl->di();
//$tc  = new TreCon();
////tre con bo bang 2 chan 2 tay
//$tc->setTay(2);
//$tc->setChan(2);
//$tc->bo();
//$tc->an();

?>