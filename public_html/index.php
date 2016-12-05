<!DOCTYPE html>
<html lang="en">

<!-- change for backup -->

<head>

    <!--=========================================== WEBPAGE METADATA ====================================-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blank Bootstrap</title>

    <!--=========================================== CSS FILES ===========================================-->
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <!-- Custom Fonts -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!--=========================================== MAIN FILES ==========================================-->
    <?php
        $page = "index-page";
        $hasGmap = true;
        include_once "html_elements/navBar.php";
        include_once "html_elements/header.php";
        include_once "html_elements/gallery.php";
        include_once "html_elements/carouselThree.php";
        include_once "html_elements/faq.php";
        include_once "html_elements/carouselTitle.php";
        include_once "html_elements/contactUs1.php";
        include_once "html_elements/googleMaps.php";
        include_once "html_elements/events.php";
        include_once "html_elements/footerTicker.php";
        include_once "html_elements/footer.php";
        include_once "html_elements/footer2.php";
    ?>









    <!--=========================================== JS SCRIPTS ==========================================-->
    <!-- jQuery -->
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- Plugin JavaScript -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- <script src="js/jqBootstrapValidation.js"></script>-->
    <!-- <script src="js/contact_me.js"></script>-->

    <!-- Theme JavaScript -->
    <script src="assets/js/freelancer.js"></script>
    <script src="assets/js/material.min.js"></script>
    <script src="assets/js/material-kit.js" type="text/javascript"></script>

    <!-- Additional JS Files-->
    <script src="assets/js/nob.js" type="text/javascript"></script>

    <!-- Google Maps API File -->
    <script src="//maps.google.com/maps/api/js?key=AIzaSyBjGkX6gbOjiM6Ewg3cTeqGyK25z6YFdqQ&callback=loadedGmap" async defer>
        loadedGmap();
    </script>
</body>

</html>