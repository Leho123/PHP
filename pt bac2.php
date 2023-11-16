<?php
function giaiPTBac2($a, $b, $c)
{
    // Tính delta
    $delta = ($b * $b) - (4 * $a * $c);

    // Xét các trường hợp
    if ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);

        echo "Phương trình có 2 nghiệm phân biệt:<br>";
        echo "x1 = " . $x1 . "<br>";
        echo "x2 = " . $x2 . "<br>";
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);

        echo "Phương trình có nghiệm kép:<br>";
        echo "x = " . $x . "<br>";
    } else {
        echo "Phương trình vô nghiệm";
    }
}

// Thử nghiệm với phương trình x^2 - 5x + 6 = 0
$a = 1;
$b = -5;
$c = 6;

giaiPTBac2($a, $b, $c);
?>