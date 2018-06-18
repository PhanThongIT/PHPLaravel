<?php

////get code json
$jsonData = file_get_contents("http://x2bdev.com/api/article");
$jsonArray[] = json_decode($jsonData, true);


//var_dump($jsonArray);die;

//foreach ($jsonArray as $key => $value) {
//    foreach ($value as $key1 => $value1) {
//        $youtube = $value1['youtube'];
//        echo "<pre>";
//        echo "<iframe width=\"854\" height=\"480\" src=\"https://www.youtube.com/embed/$youtube\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>";
//
//    }
//}
//die;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Phan Thông IT </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/contactstyle.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/faqstyle.css" type="text/css" media="all"/>
    <link href="css/single.css" rel='stylesheet' type='text/css'/>
    <link href="css/medile.css" rel='stylesheet' type='text/css'/>
    <!-- banner-slider -->
    <link href="css/jquery.slidey.min.css" rel="stylesheet">
    <!-- //banner-slider -->
    <!-- pop-up -->
    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- //pop-up -->
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <!-- //font-awesome icons -->
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- banner-bottom-plugin -->
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds

                items: 5,
                itemsDesktop: [640, 4],
                itemsDesktopSmall: [414, 3]

            });

        });
    </script>
    <!-- //banner-bottom-plugin -->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300'
          rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <!--    css-->

</head>
<body>


<!-- header -->
<div class="header">
    <div class="container">
        <div class="w3layouts_logo">
            <a href="index.php"><h1>One<span>Movies</span></h1></a>
        </div>
        <div class="w3_search">
            <form action="#" method="post">
                <input type="text" name="Search" placeholder="Search" required="">
                <input type="submit" value="Go">
            </form>
        </div>
        <div class="w3l_sign_in_register">
            <ul>
                <li><i class="fa fa-phone" aria-hidden="true"></i> WEBSERVICES NHÓM 7</li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //header -->
<!-- bootstrap-pop-up -->

<!-- //bootstrap-pop-up -->
<!-- nav -->
<div class="movies_nav" style="width:100%; height:100% ; align-items: center">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav>
                    <ul class="nav navbar-nav " style="width:100%; height:100% ">
                        <li class="active"><a href="index.php">TRANG CHỦ </a></li>

                        <li class="dropdown">
                            <a href="TheLoai.php" class="dropdown-toggle" data-toggle="dropdown"> THỂ LOẠI <b
                                        class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <li>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="TheLoai.php">Hành Động </a></li>
                                            <li><a href="TheLoai.php">Viễn tưởng</a></li>
                                            <li><a href="TheLoai.php">Tài liệu</a></li>
                                            <li><a href="TheLoai.php">Tất cả phim</a></li>
                                        </ul>
                                    </div>

                                </li>
                            </ul>
                        </li>
                        <li><a href="login.php">QUẢN LÝ</a></li>
                        <li><a href="LienHe.php">LIÊN HỆ </a></li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
</div>
<!-- //nav -->
<!-- banner -->
<div id="slidey" style="display:none;">
    <ul>
        <li><img src="images/2.jpg" alt=" ">
            <p class='title'>Tomb Raider:Huyền Thoại Bắt Đầu</p>
            <p class='description'>Đây là phim Tomb Raider</p></li>
        <li><img src="images/5.jpg" alt=" ">
            <p class='title'>Tarzan</p>
            <p class='description'> Tarzan, having acclimated to life in London, is called back to his former home in
                the jungle to investigate the activities at a mining encampment.</p></li>
        <li><img src="images/3.jpg" alt=" ">
            <p class='title'>Black Panther: Chiến Binh Báo Đen</p>
            <p class='description'>Đây là phim Black Panther : Chiến Binh báo Đen </p></li>
        <li><img src="images/4.jpg" alt=" ">
            <p class='title'>Thor 3 :Tận Thế Ragnarok</p>
            <p class='description'>Đây là phim Thor 3 :Tận Thế Ragnarok</p></li>
        <li><img src="images/6.jpg" alt=" ">
            <p class='title'>Pacific Rim: Trỗi Dậy"</p>

            <p class='description'>Lấy bối cảnh 10 năm sau những sự kiện đã diễn ra ở phần 1, Jake Pentecost – truyền
                nhân duy nhất của huyền thoại Stacker Pentecost đã thực hiện lời hứa với cha mình, gia nhập nhóm người
                điều khiển Jaeger</p></li>

        <p class='description'>Lấy bối cảnh 10 năm sau những sự kiện đã diễn ra ở phần 1, Jake Pentecost – truyền nhân
            duy nhất của huyền thoại Stacker Pentecost đã thực hiện lời hứa với cha mình, gia nhập nhóm người điều khiển
            Jaeger</p></li>
        <li><img src="images/7.jpg" alt=" ">
            <p class='title'>X - Man</p>
            <p class='description'> In 1977, paranormal investigators Ed (Patrick Wilson) and Lorraine Warren come out
                of
                a self-imposed sabbatical to travel to Enfield, a borough in north ... </p></li>
    </ul>
</div>
<script src="js/jquery.slidey.js"></script>
<script src="js/jquery.dotdotdot.min.js"></script>
<script type="text/javascript">
    $("#slidey").slidey({
        interval: 8000,
        listCount: 5,
        autoplay: false,
        showList: true
    });
    $(".slidey-list-description").dotdotdot();
</script>

<!-- banner-bottom -->
<!-- //general -->
<!-- Latest-tv-series -->
<div class="Latest-tv-series">
    <h4 class="latest-text w3_latest_text w3_home_popular">Phim Đang Được Chiếu </h4>
    <div class="container">
        <section class="slider">
            <div class="flexslider" style="text-align: center">
                <?php foreach ($jsonArray as $keymangNgoai => $mangNgoai) { ?>
                    <ul class="slides">

                        <?php foreach ($mangNgoai as $keyMangTrong => $mangTrong) { ?>
                            <li>

                                <!--//Đặt foreach ngay chỗ này . Load lên -->
                                <div class="agile_tv_series_grid">
                                    <div class="col-md-5 agile_tv_series_grid_left">
                                        <div class="w3ls_market_video_grid1">
                                            <img  style="width: 200px ; height: 400px ; float: right" src="<?= $mangTrong["image"] ?>"  alt=" "/>
                                        </div>
                                    </div>
                                    <div class="col-md-7" style="width: 600px ; height: 400px ; background: #d58512">

                                        <p class="fexi_header"><?= $mangTrong["name"] ?></p>
                                        <p class="fexi_header_para">
                                            <span>Thể Loại<label>:</label></span><?= $mangTrong["type"] ?> </p>
                                        <p class="fexi_header_para">
                                            <span>Ngày Khởi Chiếu<label>:</label></span><?= $mangTrong["release_date"] ?>
                                        </p>
                                        <p class="fexi_header_para">
                                            <span>Tác Giả<label>:</label></span><?= $mangTrong["director"] ?> </p>
                                        <p class="fexi_header_para">
                                            <span>Diễn Viên<label>:</label></span> <?= $mangTrong["cast"] ?></p>
                                        <p class="fexi_header_para">
                                            <span>Tác Giả<label>:</label></span><?= $mangTrong["content"] ?> </p>
                                        <div class="row" style="margin-top: 20px">
                                            <div class="col-md-4" style="font-size: 30px">
                                                <a style="text-align: center; width: 200px ;height: 50px"
                                                   href="https://www.youtube.com/embed/<?= $mangTrong['youtube'] ?>"> Xem
                                                    trailer</a>
                                            </div>
                                            <div class="col-md-4" >
                                                <form method="POST"
                                                      action="ChiTietPhim.php?id_phim=<?php echo $mangTrong['id'] ?>">
                                                    <input style="height: 50px ;width: 200px ;background: #d9edf7;color: black;border-radius: 12px;font-size: 30px;  type="submit" value="Chi Tiết" name="chiTiet">
                                            </div>
                                            <div class="col-lg-4"></div>

                                        </div>


                                            <!--                                                <a style="border: 1px ;padding: 30px; text-align: center ; font-size: 20px ;" > Xem Chi Tiết</a>-->
                                        </form>


                                    </div>


                                    <div class="clearfix" style="margin: auto"></div>

                                </div>
                            </li>
                        <?php } ?>

                    </ul>
                <?php } ?>
                <ul class="flex-direction-nav">
                    <li><a class="flex-prev" href="#">Previous</a></li>
                    <li><a class="flex-next" href="#">Next</a></li>
                </ul>
            </div>

        </section>
        <!-- flexSlider -->
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property=""/>
        <script defer src="js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!-- //flexSlider -->
    </div>
</div>
<!-- pop-up-box -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<!--//pop-up-box -->
<div id="small-dialog" class="mfp-hide">
    <!--    <iframe src="https://www.youtube.com/watch?v=6Vz6PrOjSpU"></iframe>-->
    <iframe src="https://player.vimeo.com/video/148284736"></iframe>
</div>
<div id="small-dialog1" class="mfp-hide">
    <iframe src="https://player.vimeo.com/video/148284736"></iframe>
</div>
<div id="small-dialog2" class="mfp-hide">
    <iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
</div>
<script>
    $(document).ready(function () {
        $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<!-- //Latest-tv-series -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="w3ls_footer_grid">
            <div class="col-md-6 w3ls_footer_grid_left">
                <div class="w3ls_footer_grid_left1">
                    <h2>Subscribe to us</h2>
                    <div class="w3ls_footer_grid_left1_pos">
                        <form action="#" method="post">
                            <input type="email" name="email" placeholder="Your email..." required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 w3ls_footer_grid_right">
                <a href="index.html"><h2>One<span>Movies</span></h2></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-5 w3ls_footer_grid1_left">
            <p>Môn học Phát triển Phần mềm Hướng Dịch Vụ</p>
            <p>Giảng viên: Huỳnh Trung Trụ</p>
            <p>Thành viên nhóm </p>
            <p>Sinh viên : Phan Văn Thông</p>

        </div>
        <div class="col-md-7 w3ls_footer_grid1_right">
            <ul>
                <li>
                    <a href="index.php">Movies</a>
                </li>
                <li>
                    <a href="faq.html">FAQ</a>
                </li>
                <li>
                    <a href="horror.html">Action</a>
                </li>
                <li>
                    <a href="genres.html">Adventure</a>
                </li>
                <li>
                    <a href="comedy.html">Comedy</a>
                </li>
                <li>
                    <a href="icons.html">Icons</a>
                </li>
                <li>
                    <a href="contact.html">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!-- //here ends scrolling icon -->

</body>
</html>