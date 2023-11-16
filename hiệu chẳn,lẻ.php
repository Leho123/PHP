<?php
// Hàm tính hiệu chẵn lẻ
function tinhHieuChanLe($number) {
    if ($number % 2 == 0) {
        return "Số $number là số chẵn.";
    } else {
        return "Số $number là số lẻ.";
    }
}

// Sử dụng hàm tính hiệu chẵn lẻ
$number1 = 10;
$number2 = 15;

echo tinhHieuChanLe($number1); // Kết quả: "Số 10 là số chẵn."
echo tinhHieuChanLe($number2); // Kết quả: "Số 15 là số lẻ."
?>