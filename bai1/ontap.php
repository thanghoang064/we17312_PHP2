<?php
$a = 7;//kiểu dữ liệu số nguyên
$b = "FPT" ; //kiểu dữ liệu chuỗi/chữ
$c = false;// kiểu dữ liệu boolean
//echo $b.$a;
//mảng tuần tự
$mang = [1,2,3,4,78,98];
//echo $mang[5];
//duyệt mảng
//echo "<pre>";
//echo var_dump($mang);//in mảng
//die();
//foreach ($mang as $key=>$value) {
//    if ($value % 2 != 0 ) {
//        echo $value . "<br>";
//    }
//}
//in những phần tử là số lẻ
//mảng liên hợp (key=>value)
$manglh = ["A"=>1,"B"=>2,"C"=>3,"D"=>4,"E"=>5];
//echo $manglh["D"];
$mausac = ["blue"=>"Màu xanh",
    "yellow"=>"Màu vàng",
    "orange"=>"Màu cam",
    "pink"=>"Màu hồng",
    "red"=>"Màu đỏ",
    "green"=>"Màu xanh"
    ];
// dựa vào mảng đã cho đổ dữ liệu ra bảng tương ứng
//mỗi 1 dòng trong bảng là 1 màu tương đương với trong key
//tạo 1 mảng liên hợp 1 chiều gồm  thông tin sau
// masv,tensv,tuoi,diachi
// yêu cầu in thông tin ra bảng hàng ngang
//tô màu ô tuổi với điều kiện
//tuổi > = 18 màu đỏ
//tuổi < 18 màu xanh
$thongtin = ["masv"=>"PH12345"
    ,"tensv"=>"A",
    "diachi"=>"ABC",
    "tuoi"=>18];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>KEY</td>
            <td>VALUE</td>
        </tr>
        <?php foreach ($manglh as $key=>$value) { ?>
        <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo $value; ?></td>
        </tr>
        <?php } ?>
    </table>
    <table border="1">
        <tr>
            <?php foreach ($thongtin as $key=>$value) {
                $mau ="";
                if ($key == "tuoi") {
                    $mau = $value >= 18 ? "red" : "green";
                }
                ?>
            <td bgcolor="<?php echo $mau; ?>">
                <?php echo $value; ?>
            </td>
            <?php } ?>
        </tr>
    </table>
</body>
</html>
