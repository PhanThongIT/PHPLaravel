<?php
//Xóa files :)) unlink

class SinhVien {
   public $nameSV ='Quang';
    function getName (){
      return $this->nameSV;
    }
};
$sv = new SinhVien();
echo "<pre>";
$sv->nameSV ='Khuyến';
echo $sv->nameSV."\n";
$sv->getName("Hùng");









?>