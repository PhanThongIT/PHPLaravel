<?php
/**
 * Created by PhpStorm.
 * User: Phan Thông  IT
 * Date: 4/16/2018
 * Time: 8:33 PM
 */

class SinhVien{
    private $Name='Nguyen A';

    function getName(){
        return $this->Name;
    }
    function setName($fullName){
        $this->Name = $fullName;
    }

}
class HocSinh extends SinhVien{
    function getName1(){
      return   parent::getName();

    }
}
echo "<pre>";
$hs = new HocSinh();
echo $hs->getName1();

?>