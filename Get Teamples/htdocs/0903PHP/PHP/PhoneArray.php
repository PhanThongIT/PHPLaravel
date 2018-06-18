<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Style.css">

</head>

<body>
<div class="header">

</div>
<?php

$arrPhone = array(["namePhone" => "IPHONE X",
    "pricePhone" => "26000000.34343",
    "Description1" => "Chống nước , Camera Kép",
    "Description2" => "Màn hình Siêu Cảm ứng ",
    "KM" => "Khuyến mãi",
    "Image" => "../Images/iphone1.png"
],
    ["namePhone" => "SAMSUNG",
        "pricePhone" => "12000000",
        "Description1" => "Chống nước , Camera Kép",
        "Description2" => "Màn hình Siêu Cảm ứng ",
        "KM" => "Khuyến mãi",
        "Image" => "../Images/SAMSUNG1.jpg"
    ],
    ["namePhone" => "SAMSUNG S9",
        "pricePhone" => "17000000",
        "Description1" => "Chống nước , Camera Kép",

        "Description2" => "Màn hình Siêu Cảm ứng ",
        "KM" => "Khuyến mãi",
        "Image" => "../Images/index.jpg"
    ]);
?>


<div class="content">
    <?php
    foreach ($arrPhone as $item) {?>
        <div class="item">
        <div class="image">
            <img src="<?= $item["Image"]?>" alt="OPPO F5">
        </div>
        <div class="info">
            <h3><?= $item["namePhone"]?></h3>
            <p><?= $item["Description1"]?></p>
            <p><?= $item["Description2"]?></p>
            <p class="promotion"><?= $item["KM"] ?></p>
            <p>Phiếu mua hàng trị giá 100.000đ khi mua online</p>
        </div>
        <div class="footer">
            <p class="name"><?= $item["namePhone"]?></p>
            <p class="price"> <?=


               // number_format($item["pricePhone"])
                number_format($item["pricePhone"],2,'.',',');
                ?> vnđ</p>
        </div>
    </div>
</div>


<?php } ?>



<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function(){
        $('.footer').click(function(){
            var price = $(this).find('.price').html()
            console.log(price)
        })
    })
</script>
</body>

</html>