<?php
include_once "DBConnect.php";
class HomeModel extends DBConnect{
    //1. function Load ảnh background cho trang Home
    function selectBackground(){
        $sql = "
        SELECT * FROM backgrounds WHERE status=1
        ";
        return $this->loadMoreRows($sql);
    }

}

?>