<?php
$arr = array("orange", "banana", "apple", "raspberry");


$arr1 = array(1=>"orange", 2=>"banana", 3=>"apple", 4=>"raspberry");



$arr2 = array("Cam" => "Orange" , "Chuối "=>"Banana", "Táo" =>"Apple" , "Dâu"=> "raspberry");


// chèn 1 hàm vào 1 vị trí bất kỳ
$arr2 = array_splice($arr2 , 2,0,"PHP");
print_r($arr2);
// Hàm Array search
   echo array_search("Orange",$arr2);
   $check = in_array("Orange", $arr2);
   var_dump($check); //  var_dump là biến để in true or false :v


for($i =0 ; $i <count($arr);$i++){
    print_r($arr[$i]);
    echo "<br>";
}
foreach ($arr1 as $value){
    echo $value;
    echo"<br>";
}

//Mảng Lồng
$arr5 = array(1=>[
    'PHP' =>"Lập trình PHP",
    'HTML' =>"HỌC HTML"], 2=>"banana", 3=>"apple", 4=>"raspberry");

print_r($arr5[1]);
echo"<br>";
//Lấy HTML  trong key 1

echo $arr5[1] ['HTML'];
echo"<br>";


print_r($arr5);
foreach ($arr5 as $key => $value){
    echo $key;
    echo $value;
    echo "<br>";
}


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

//VD Mảng lồng


$ArrProduct = array( ["name" => "Iphone6 32GB ",
                        "price" =>"200000",
                        "Image" => "https://cdn.tgdd.vn/UserUpload/CampaignManager/20180328/i22YV9H-640.png"
],

    ["name" => "ViVo  ",
        "price" =>"500000",
        "Image" => "https://cdn.tgdd.vn/UserUpload/CampaignManager/20180328/i22YV9H-640.png"
    ],
    ["name" => "SAMSUNG GALAXY S6",
        "price" =>"4500000",
        "Image" => "https://cdn.tgdd.vn/UserUpload/CampaignManager/20180328/i22YV9H-640.png"
    ],
    ["name" => "Apple S1",
        "price" =>"100000000",
        "Image" => "https://cdn.tgdd.vn/Products/Images/42/147939/samsung-galaxy-s9-plus-3-400x460.png"
    ],
);
    foreach ($ArrProduct as $value){

        echo [$value][0]["name"];
       // echo [$ArrProduct]['name'];
     echo "<br>";
//        echo [$value][0]["Image"];


}
// Vòng lặp for lấy giá trị thứ i => "name"  echo $ArrProduct[$i]["name"];
     echo "<pre>";
print_r($ArrProduct);
echo "</pre>";


// BTVN  Làm bài Reponsive cho bài tập bán hafnhg điện thoại :v

?>