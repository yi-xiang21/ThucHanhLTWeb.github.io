<?php
function isPalindrome(string $string): bool {
    $reversedString = strrev($string);
    return $string === $reversedString;
}
$a = "abcba";
if (isPalindrome($a)) {
    echo " Chuỗi '{$a}' là chuỗi đối xứng.\n";
} else {
    echo " Chuỗi '{$a}' không phải là chuỗi đối xứng.\n";
}
