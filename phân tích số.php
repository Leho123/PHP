<?php
// Hàm phân tích số thành các thừa số nguyên tố
function primeFactorization($number) {
    $factors = array();

    // Kiểm tra thừa số 2
    while ($number % 2 === 0) {
        $factors[] = 2;
        $number = $number / 2;
    }

    // Kiểm tra các thừa số nguyên tố khác
    for ($i = 3; $i <= sqrt($number); $i = $i + 2) {
        while ($number % $i === 0) {
            $factors[] = $i;
            $number = $number / $i;
        }
    }

    // Nếu số còn lại lớn hơn 2, nghĩa là nó là một thừa số nguyên tố
    if ($number > 2) {
        $factors[] = $number;
    }

    return $factors;
}

// Sử dụng hàm để phân tích số
$number = 84;
$factors = primeFactorization($number);

echo "Phân tích số " . $number . " thành các thừa số nguyên tố: " . implode(", ", $factors);
?>