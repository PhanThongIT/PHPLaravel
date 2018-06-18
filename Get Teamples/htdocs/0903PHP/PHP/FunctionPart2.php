<?php
/**
 * Created by PhpStorm.
 * User: Phan Thông  IT
 * Date: 4/4/2018
 * Time: 7:36 PM
 */

function inSo(){
 return $so =2 ;
}


function SHCN($a , $b ){
    $sHinhChuNhat = $a * $b ;
    return $sHinhChuNhat;
}
echo SHCN(4,5);
//Tăng lên 1 đơn vị
function  IndexDes($a){

}
//In ra 30 chuỗi


function tinhTong ($n){
    $tong =0 ;
    for($i = 2 ; $i<=$n ; $i+=2){
        $tong+=$i;

    }

    echo $tong;
}
echo "<br>";
tinhTong(11);

echo "<br>";
//Tính ra số nguyên tố
function soNguyenTo( $n)
{
    $kq='';
    if ($n < 2)
       return  null;

    for ($i=2; $i<$n; $i++)
     {
        $prime=true;
        for ( $j=2; $j*$j<=$i; $j++)
        {

            if ($i % $j == 0)
            {
                $prime=false;
                break;
            }
        }

        if($prime)  echo $i ."<br>";
      }
    echo "SỐ" .$n."Là số nguyên tố : " ;
    echo "<br>";
}




echo soNguyenTo(32);

//In ra chuỗi Finbonacci
function Fibo ($n){
    $so1 = 0; $so2=1;
    $soc =0 ;
    echo  $so1 ." - " . $so2;
    for($i = 1; $i<$n ;$i++ ){
        $soc = $so1 + $so2;
        echo  " - " ;
        echo $soc ;
        $so1 =$so2;
        $so2 = $soc;
    }


}
Fibo(10);




//Tổng chẵn từ a-> b
function Sumatob($a,$b){
    $tong =0 ;
    if($a < $b) {
        for ($i = $a; $i <= $b; $i++) {
            if ($i % 2 == 0) {
                $tong += $i;

            } else {
                continue;
            }
        }
    }
        else{
            return null;
        }
    return $tong;
}
echo "<br>";
echo Sumatob(1,100);
echo "<br>";

function PTBac1 ($a, $b ){
    $x = ((-$b)/$a);
   return $x;

}
echo "<br>";
echo "Nghiệm của PT Bậc 1 là: ".PTBac1(4,5);


// Giải phương trình bậc 2
function PTBac2($a,$b,$c){

    if($a==0){
      return PTBac1($b,$c);
    }
    else {
        $delta = ($b*$b) - (4*$a*$c);

        if($delta > 0 ){
            //Phương trình có 2 nghiệm phân biệt
            $x1 = ((-$b) + sqrt(($delta ))/(2*$a));
            $x2 = ((-$b) - sqrt(($delta ))/(2*$a));
            echo $x1;
            echo $x2;
            echo "<br>";
        }else if($delta ==0 ){
            //Phương trình có n1 nghiệm kép
            $x= (-$b) /(2*$a);
         echo $x;
            echo "<br>";
        }else{
            //phương trình vô nghiệm ;
            echo "PHƯƠNG TRÌNH VÔ NGHIỆM ";

        }

    }


}
PTBac2(0,1,2);
echo "<br>";
PTBac2(2,51,-10);









?>