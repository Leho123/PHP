<?php
// Mảng số
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Biến tổng số lẻ
$sumOfOddNumbers = 0;

// Duyệt qua từng phần tử trong mảng
foreach ($numbers as $number) {
    // Kiểm tra số lẻ
    if ($number % 2 != 0) {
        // Cộng dồn số lẻ vào tổng
        $sumOfOddNumbers += $number;
    }
}

// In tổng số lẻ
echo "Tổng các số lẻ trong mảng là: " . $sumOfOddNumbers;
?>