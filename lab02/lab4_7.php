<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>lab 2_5</title>
</head>

<body>
<?php
	include("lab2_5a.php");
	include("lab2_5b.php");
    include_once("lab2_5b.php");
	if(isset($x))
		echo "Giá trị của x là: $x";
	else
		echo "Biến x không tồn tại";
    echo"<br>";
    echo"ket qua sau khi them include_one luc nay php chi cho phep chay 1 lan qua file php dc lien ket nen ket qua x la 20 vi truoc do da co include 1 lan nen include_one se ko lap lai nua";
?>
</body>
</html>