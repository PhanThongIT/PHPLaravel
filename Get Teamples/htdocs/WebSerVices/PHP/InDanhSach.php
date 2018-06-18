<?php
/**
 * Created by PhpStorm.
 * User: Phan Thông  IT
 * Date: 4/8/2018
 * Time: 4:20 PM
 */

$json_Data  = file_get_contents("http://localhost:81/WebSerVices/PHP/WebServices.php?format=json");
header('Content-Type: text/html; charset=utf-8');
$json_Array = json_encode($json_Data ,true);



foreach ($json_Array as $value){
    echo $value["id"];
}



?>

