<?php

$jsonData = file_get_contents("http://x2bdev.com/api/article");
$jsonArray[] = json_decode($jsonData, true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>One Movies an Entertainment Category Flat Bootstrap Responsive Website Template | General :: w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/medile.css" rel='stylesheet' type='text/css' />
    <link href="css/single.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/contactstyle.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/faqstyle.css" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- //font-awesome icons -->
    <!-- news-css -->
    <link rel="stylesheet" href="news-css/news.css" type="text/css" media="all" />
    <!-- //news-css -->
    <!-- list-css -->
    <link rel="stylesheet" href="list-css/list.css" type="text/css" media="all" />
    <!-- //list-css -->
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds

                items : 5,
                itemsDesktop : [640,5],
                itemsDesktopSmall : [414,4]

            });

        });
    </script>
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
<script>
    $('.toggle').click(function(){
        // Switches the Icon
        $(this).children('i').toggleClass('fa-pencil');
        // Switches the forms
        $('.form').animate({
            height: "toggle",
            'padding-top': 'toggle',
            'padding-bottom': 'toggle',
            opacity: "toggle"
        }, "slow");
    });
</script>
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

<!-- /w3l-medile-movies-grids -->
<div class="col-md-12 single-right">
    <h3>Up Next</h3>
    <?php
    foreach ($jsonArray as $keymangNgoai => $mangNgoai){?>
        <?php foreach ($mangNgoai as $keyMangTrong => $mangTrong) {?>
            <div class="single-grid-right">

                <div class="single-right-grids">
                    <div class="col-md-2 single-right-grid-left">
                        <a href="index.php"><img style="height: 400px ; width: 200px;" src="<?= $mangTrong['image']?>" alt="" /></a>
                    </div>
                    <div class="col-md-10 single-right-grid-right " style="background: #d58512;height: 400px;">
                        <p class="fexi_header"><?= $mangTrong["name"] ?></p>
                        <p class="fexi_header_para">
                            <span>Thể Loại<label>:</label> </span><?= $mangTrong["type"] ?></p>
                        <p class="fexi_header_para">
                            <span>Thời Gian<label>:</label></span><?= $mangTrong["running_time"] ?></p>
                        <p class="fexi_header_para">
                            <span>Ngày Khởi Chiếu<label>:</label></span><?= $mangTrong["release_date"] ?>
                        </p>
                        <p class="fexi_header_para">
                            <span>Nội dung <label>:</label></span><?= $mangTrong["content"] ?>
                        </p>
                        <p class="fexi_header_para">
                            <span>Tác Giả<label>:</label></span><?= $mangTrong["director"] ?> </p>
                        <p class="fexi_header_para">
                            <span>Diễn Viên<label>:</label></span> <?= $mangTrong["cast"] ?></p>

                        <div class="row" style="text-align: center; margin-top: 20px "  ">
                            <div class="col-md-3">
                                <a style="border: 1px ;padding: 30px; text-align: center ; font-size: 30px ; border-radius: 12px"
                                   href="https://www.youtube.com/embed/<?= $mangTrong['youtube'] ?>"> Xem
                                    trailer</a>
                            </div>
                            <div class="col-md-3">
                                <form method="POST"
                                      action="ChiTietPhim.php?id_phim=<?php echo $mangTrong['id'] ?>">
                                    <input style="width: 200px; height: 50px ;background: #017572 ; font-size: 30px ; border-radius: 12px" type="submit" value="Chi Tiết" name="chiTiet">
                                </form>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>



                    </div>
                    <div class="clearfix"> </div>
                </div>
                    <?php }?>
            </div>
        <?php  }?>
</div>
<!-- //comedy-w3l-agileits -->
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
                    <a href="genres.html">Movies</a>
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
    $(document).ready(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
</body>
</html>