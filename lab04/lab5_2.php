<?php
    $arr= array();
    $r = array("id"=> "sp1", "name "=> "Sản phẩm 1 ");
    $arr[] = $r;
    $r = array("id"=> "sp2", "name "=> "Sản phẩm 2 ");
    $arr[] = $r;
    $r = array("id"=> "sp3", "name "=> "Sản phẩm 3 ");
    $arr[] = $r;
    print_r($arr);
    showArraytable2($arr);
    function showArraytable2($a)
	{
		echo"<table border=1>";
		echo"<tr><td>Stt</td><td>Ma san pham</td><td>Ten san pham</td></tr>";
			$i=0;
			foreach($a as $k=>$v)
                {
                    $i++;
                    echo "<tr><td>$i</td>";
                    foreach($v as $kv=>$vv){
				        echo "<td>$vv</td>";
                    }
                    echo"</tr>";
                }
		echo"</table>";
	}
?>