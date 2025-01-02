<?php
if (isset($data_layout)) {
    foreach ($data_layout as $value) { ?>

        <?php
      
        $_SESSION['mail'] = $value['mail'];
        $_SESSION['phone'] = $value['phone'];
        $_SESSION['diachi'] = $value['diachi'];
        ?>

<?php }
} ?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Home </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="public/css/owl.carousel.css">
    <link rel="stylesheet" href="public/css/owl.theme.css">
    <link rel="stylesheet" href="public/css/owl.transitions.css">
    <!-- jquery-ui CSS
        ============================================ -->
    <link rel="stylesheet" href="public/css/jquery-ui.css">
    <!-- meanmenu CSS
        ============================================ -->
    <link rel="stylesheet" href="public/css/meanmenu.min.css">
    <!-- nivoslider CSS
        ============================================ -->
    <link rel="stylesheet" href="public/lib/css/nivo-slider.css">
    <link rel="stylesheet" href="public/lib/css/preview.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="public/css/animate.css">
    <!-- magic CSS
        ============================================ -->
    <link rel="stylesheet" href="public/css/magic.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="public/css/normalize.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="public/css/main.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="public/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="public/css/responsive.css">
    <!-- modernizr JS-->
    <link rel="stylesheet" type="text/css" href="public2/css/style.css">

    <link rel="stylesheet" type="text/css" href="public2/css/main.css" >   
    <!-- <link rel="stylesheet" type="text/css" href="public2/css/dangnhap.css" >   
    <link rel="stylesheet" type="text/css" href="public2/css/style.css" >    -->


    <script src="theme/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
    <?php
    require_once('header/header2.php');
    ?>

    <?php
    require_once('dieuhuong.php');
    ?>

    <?php
    require_once('footer/footer.php');
    ?>

 <!-- jquer
        ============================================ -->
    <script src="public/js/vendor/jquery-1.12.1.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="public/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="public/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="public/js/jquery-price-slider.js"></script>
    <!-- nivoslider JS
        ============================================ -->
    <script src="theme/lib/js/jquery.nivo.slider.js"></script>
    <script src="theme/lib/home.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="public/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="public/js/owl.carousel.min.js"></script>
    <!-- elevatezoom JS
        ============================================ -->
    <script src="public/js/jquery.elevatezoom.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="public/js/jquery.scrollUp.min.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="public/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="public/js/main.js"></script>
</body>

</html>