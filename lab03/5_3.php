<?php
function SumArr(string $string): int {
    $sum = 0;
    $characters = str_split($string);   
    foreach ($characters as $char) {
        if (ctype_digit($char)) {
            $sum += (int)$char; 
        }
    }
    return $sum;
}


$inputString = "ngay15thang7nam2015";
$totalSum = SumArr($inputString);

echo "Chuỗi đầu vào: '{$inputString}'\n";
echo "Tổng các chữ số: 1 + 5 + 7 + 2 + 0 + 1 + 5 = **{$totalSum}**\n";

?>