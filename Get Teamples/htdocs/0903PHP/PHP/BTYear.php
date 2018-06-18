<?php
echo "<table  width=\"270px\" cellspacing=\"0px\" cellpadding=\"0px\" border=\"1px\">";
for($i =1 ;  $i <=8 ; $i++){
    echo "<tr>";
    for ($j = 1; $j <= 8; $j++) {
        $total=$i + $j;
        if($total%2 == 0)
        {

            echo "<td height=30px width=30px bgcolor=#FFFFFF   ></td>";
        }
        else
        {
            echo "<td height=30px width=30px bgcolor=#000000></td>";
        }

    }
    echo "<tr>";
}





?>
