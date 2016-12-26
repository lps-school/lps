<?php
require 'includes/dbcontroller.php';
$db_handle = new Db_Controller();

?>
<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="ie ie9" lang="en"> <![endif]-->
<html lang="en">
<!--<![endif]-->
<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Lions Public School | Ashok Vihar</title>
    <meta name="description" content="EDU - Educational and Courses Boostrap based site template only 14$">
    <meta name="author" content="Ansonika">

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/logofavicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
          href="img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
          href="img/apple-touch-icon-144x144.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/megamenu.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="js/fancybox/source/jquery.fancybox.css?v=2.1.4">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Jquery -->
    <script src="js/jquery.js"></script>

    <!-- Support media queries for IE8 -->
    <script src="js/respond.min.js"></script>

    <!-- HTML5 and CSS3-in older browsers-->
    <script src="js/modernizr.custom.17475.js"></script>

    <!--[if IE 7]>
    <link rel="stylesheet" href="font-awesome/css/font-awesome-ie7.min.css">
    <![endif]-->

</head>

<body>
<!--[if !IE]><!-->
<script>if (/*@cc_on!@*/false) {
        document.documentElement.className += ' ie10';
    }</script>
<!--<![endif]--> <!-- Border radius fixed IE10-->



<?php include('includes/header.php'); ?>

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <h1>About us</h1>
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a><span class="divider">/</span></li>
                <li class="active">About us</li>
            </ul>
        </div>
        <!-- =========================Start Col left section ============================= -->
        <aside class="col-md-4 col-sm-4">
            <div class="col-left">
                <h4>Mission</h4>

                <p>
                    Our endeavour is to make entire process of learning so interesting that the students fall in love
                    with the school.
                    Modern and latest teaching techniques, discipline through example and encouragement, excellent
                    failities for co-curricular and sporting activities make the school an ideal platform for physical,
                    mental, emotional and spiritual growth of the kids in its fold.
                </p>
                <a href="about-us.php" class=" button_red_small">Read more</a>
                <hr>

                <h4>Strategies</h4>

                <p>
                    Suspendisse quis risus turpis, ut pharetra arcu. Donec adipiscing, quam non faucibus luctus, mi arcu
                    blandit diam, at faucibus mi ante vel augue.
                </p>
                <a href="about-us.php" class=" button_red_small">Read more</a>
                <hr>

                <!--<h4>How to apply</h4>
                <ul class=" list_2">
                    <li>Vivamus sagittis lacus vel augue laoreet </li>
                    <li>Nullam quis risus eget urna mollis</li>
                    <li>Nullam id dolor id nibh ultricies</li>
                    <li>Donec id elit non mi porta</li>
                </ul>
                <p><a href="contact.php" class=" button_medium">Apply now</a></p>-->
            </div>
            <!--End col left -->

            <!--<p><img src="img/banner.jpg" alt="Banner" class="img-rounded img-responsive"></p>-->
            <p><?php include('includes/month_update_calendar.php'); ?></p>

        </aside>

        <!-- =========================Start Col right section ============================= -->
        <section class="col-md-8 col-sm-8">
            <div class="col-right">
                <div class="main-img">
                    <img src="img/about1.jpg" alt="" class="img-responsive">

                    <p class="lead">About Us </p>
                </div>

                <?php $sql = "SELECT page_content FROM content WHERE page_name = 'about'";
                $result = $db_handle->runObjectQuery($sql);

                // print_r($result_index);
                echo $result[0]->page_content;

                ?>

            </div>
            <!-- end col right-->
        </section>
    </div>
    <!-- end row-->
</div>
<!-- end container-->

<?php include('includes/footer.php') ?>
<div id="toTop">Back to Top</div>

<!-- MEGAMENU -->
<script src="js/jquery.easing.js"></script>
<script src="js/megamenu.js"></script>

<!-- OTHER JS -->
<script src="js/bootstrap.js"></script>
<script src="js/functions.js"></script>
<script src="assets/validate.js"></script>

<!-- FANCYBOX -->
<script src="js/fancybox/source/jquery.fancybox.pack.js?v=2.1.4" type="text/javascript"></script>
<script src="js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5" type="text/javascript"></script>
<script src="js/fancy_func.js" type="text/javascript"></script>
</html>