<?php
// Hàm kiểm tra số hạnh phúc
function isHappyNumber($number) {
    $visited = array(); // Mảng lưu trữ các số đã xét

    // Lặp cho đến khi thu được 1 hoặc số đã xét trước đó
    while ($number != 1 && !in_array($number, $visited)) {
        $visited[] = $number; // Thêm số vào mảng đã xét

        // Tính tổng bình phương các chữ số
        $sum = 0;
        $digits = str_split($number);
        foreach ($digits as $digit) {
            $sum += $digit * $digit;
        }

        $number = $sum; // Gán số mới cho số tiếp theo
    }

    return $number == 1; // Trả về true nếu là số hạnh phúc, ngược lại trả về false
}

// Hàm tạo dãy số hạnh phúc
function generateHappyNumbers($count) {
    $happyNumbers = array();
    $number = 1;

    while (count($happyNumbers) < $count) {
        if (isHappyNumber($number)) {
            $happyNumbers[] = $number;
        }
        $number++;
    }

    return $happyNumbers;
}

// Sử dụng hàm để in ra 10 số hạnh phúc đầu tiên
$happyNumbers = generateHappyNumbers(10);
echo "Dãy số hạnh phúc: " . implode(", ", $happyNumbers);
?>