<?php
$images =  $_FILES["image"];
if($images['error'][0]> 0){
echo "Vui Lòng chọn file";
die;
}



foreach ($images["size"] as $size){
    if($size > 1024*1024){
        echo "File too large!";
        die;
    }
}
foreach ($images["size"] as $size){
    if($size > 1024*1024){
        echo "File too large!";
        die;
    }
}
echo "Thõa mãn";
?>