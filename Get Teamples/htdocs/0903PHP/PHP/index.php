<?php
echo "Hello World! ";
echo "<br>";
$a = 1;
$b = 3;
$c = $a + $b;
echo "Tổng của $a và $b là :   $a + $b = " . ($a + $b);
echo "<br>";
$arr = array(
    1 => 'so 1 ',
    3 => 'so 3 '
);
echo "<pre>";

print_r($arr);
echo "</pre>";

$bool = true;
echo $bool;
if ($bool) echo "YES";
else echo "NO";


echo "<br>";
$json = json_encode($arr);// Chuỗi kiễu string .
echo $json;

// Kiễu dữ liệu Object

echo "<br>";

class ObjA
{
    public $a = 1;
    public $b = "so";

}

$ObjA = new ObjA();

print_r($ObjA);


echo "<br>";
define('PI', 3.14);
echo PI; // Không có Dấu $ khi in ra Define .


echo "<br>";
// Vòng lặp Forr
$arrFor = array(
    'so 1 ',
    'so 3 ',
    'so 7 '
);
for ($i = 0; $i < count($arrFor); $i++) {
    echo $arrFor[$i];
    echo "<br>";
}

echo "<br>";
//  Vòng lặp foreach
foreach ($arrFor as $key => $item) { // in ra khóa thì dùng $key => $item.
    echo "-- ";
    echo $key;
    echo "-- ";
    echo $item;


}
switch('user') {
    case 3: {
        echo "SỐ 3 ";
        break;
    }
    case 0: {
        echo "SỐ 5";
        break;
    }
    default: echo"Không Tồn tại " ;
}

?>