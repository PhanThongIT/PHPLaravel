<html>
<header>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/bootstrap.js"></script>
    <script src="../css/css_Get_Post.css"></script>
</header>

<body class="container">


    <?php
             echo "Họ Tên : " .$_GET['name'].'<br>';
                echo "Email :" .$_GET['email'].'<br>';
    ?>

    <form method="GET" name="frmThongTin">
        Name: <input type="text" value="" name="name">
        Email:<input type="text" value ="" name="email">
        <input type="Submit" value="Click Me ">


    </form>


</div>



</body>
</html>