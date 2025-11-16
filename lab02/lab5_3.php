<?php
    $a=2;
    $b=5;
    $c=3;
    $denta=$b*$b-4*$a*$c;
    if($denta<0)
    {
        echo"pt vo nghiem";
    }else if($denta==0)
    {
        echo"pt co 1 nghiem la".-$b/2*$a;
    }else
    {
        echo "pt co 2 nghiem la ".-$b+sqrt($denta/2*$a) . "va" .-$b-sqrt($denta/2*$a);
    }
?>