<?php
error_reporting('0');
$path = $_SERVER['PHP_SELF'];
$page = basename($path);
$page = basename($path, '.php');
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



<?php include('includes/header.php') ?>

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <h1><?php if ('computer_lab' == $page) {
                    echo "Computer Lab";
                } elseif ('library' == $page) {
                    echo "Library";
                } elseif ('knowledge_center' == $page) {
                    echo "Knowledge Center";
                } elseif ('medical_facility' == $page) {
                    echo "Medical Facility";
                } elseif ('transport' == $page) {
                    echo "Transport";
                }
                ?></h1>
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a> <span class="divider">/</span></li>
                <li class="active"><?php if ('computer_lab' == $page) {
                        echo "Computer Lab";
                    } elseif ('library' == $page) {
                        echo "Library";
                    } elseif ('knowledge_center' == $page) {
                        echo "Knowledge Center";
                    }elseif ('medical_facility' == $page) {
                        echo "Medical Facility";
                    } elseif ('transport' == $page) {
                        echo "Transport";
                    }
                    ?></li>
            </ul>
        </div>

        <!-- =========================Start Col left section ============================= -->
        <aside class="col-md-4 col-sm-4">
            <div class="col-left">
                <h3>Campus</h3>
                <ul class="submenu-col">
                    <li><a href="computer_lab.php"<?php if ('computer_lab' == $page) {
                            echo "id=\"active\"";
                        } ?>>Computer Lab</a></li>
                    <li><a href="library.php" <?php if ('library' == $page) {
                            echo "id=\"active\"";
                        } ?>>Library</a></li>
                    <li><a href="knowledge_center.php" <?php if ('knowledge_center' == $page) {
                            echo "id=\"active\"";
                        } ?>>Knowledge Center</a></li>
                    <!--<li><a href="medical_facility.php" <?php /*if ('medical_facility' == $page) {
                            echo "id=\"active\"";
                        } */?>>Medical Facility</a></li>-->
                    <!--<li><a href="transport.php" <?php /*if ('transport' == $page) {
                            echo "id=\"active\"";
                        } */?>>Transport</a></li>-->
                </ul>

                <hr>

                <!--<h5>Upcoming Courses</h5>

                <p>Suspendisse quis risus turpis, ut pharetra arcu. Donec adipiscing, quam non faucibus luctus, mi arcu
                    blandit diam, at faucibus mi ante vel augue.</p>

                <p><a href="#" class=" button_red_small">View Courses</a></p>-->

            </div>
            <p><?php include('includes/month_update_calendar.php'); ?></p>
        </aside>

        <!-- =========================Start Col right section ============================= -->
        <section class="col-md-8 col-sm-8">
            <div class="col-right">


                <div class="strip-lessons">
                    <div class="row">
                        <!--<div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="box-style-one borders"><img src="img/icon-user-default.png" alt=""
                                                                    class="picture img-responsive"><h5>R. N. Grover</h5>
                            </div>
                        </div>-->
                        <div class="clearfix visible-xs-block"></div>
                        <div class="text-justify">
                            <h4>Knowledge Center :-</h4>

                                <?php $sql = "SELECT page_content FROM content WHERE page_name = 'knowledge_center'";
                                $result = $db_handle->runObjectQuery($sql);

                                // print_r($result);
                                echo $result[0]->page_content;

                                ?>

                        </div>
                    </div>
                </div>
                <!-- End Strip course -->


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

</body>
</html>