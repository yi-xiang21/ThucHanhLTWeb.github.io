<?php
$ten = $_GET["tensp"];
$cachtim = $_GET["ct"];
$loai = $_GET["loai"];

echo "ten sp " . $ten;
echo "<br>";
if ($cachtim == 1) {
    echo " tim gan dung";
} else {
    echo " tim chinh xac";
}
echo "<br>";
echo "Các Loại SP được chọn: <br>";
foreach ($loai as $a) {
    if ($a == 1) {
        echo " loai 1";
        echo " loai 2";
        echo " loai 3";
        break;
    } else if ($a == 2) {
        echo "Loại 1";
    } else if ($a == 3) {
        echo "Loại 2";
    } else if ($a == 4) {
        echo "Loại 3";
    }
}
