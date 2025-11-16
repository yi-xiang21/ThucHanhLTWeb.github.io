<?php
function Rectangle(int $d, int $r): void {
    if ($d <= 0 || $r <= 0) {
        echo "Lỗi: Chiều dài và chiều rộng phải lớn hơn 0.\n";
        return;
    }

    for ($i = 1; $i <= $r; $i++) {
        for ($j = 1; $j <= $d; $j++) {
            if ($i == 1 || $i == $r || $j == 1 || $j == $d) {
                echo "* "; 
            } else {
                echo "  "; 
            }
        }
        echo "\n";
    }
}

$chieuDai = 6;
$chieuRong = 4;

echo "Kết quả Hình chữ nhật rỗng d={$chieuDai}, r={$chieuRong}\n";
rectangle($chieuDai, $chieuRong);
?>