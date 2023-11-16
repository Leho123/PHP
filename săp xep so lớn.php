<?php
// Mảng số cần sắp xếp
$numbers = [5, 2, 8, 1, 3];

// Sắp xếp theo thứ tự tăng dần
sort($numbers);
echo "Sắp xếp tăng dần: " . implode(", ", $numbers) . "\n";

// Sắp xếp theo thứ tự giảm dần
rsort($numbers);
echo "Sắp xếp giảm dần: " . implode(", ", $numbers) . "\n";
?>