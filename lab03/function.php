<?php
function tonghopFunc()
{
    $functions = ['BCC', "BanCo"];
    $result = "";
    foreach ($functions as $value) {
        if (function_exists($value)) {
            $result .= $value() . "";
        }
    }
    return trim($result);
}
echo tonghopFunc();
?>
