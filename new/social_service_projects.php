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
            <h1><?php if ('house_system' == $page) {
                    echo "House System";
                } elseif ('co_scholastic_activities' == $page) {
                    echo "Co Scholastic Activities";
                } elseif ('endeavours_and_initiatives' == $page) {
                    echo "Endeavours and Initiatives";
                } elseif ('social_service_projects' == $page) {
                    echo "Social Service Projects";
                } elseif ('student_club' == $page) {
                    echo "Student Club";
                } elseif ('excursions' == $page) {
                    echo "Excursions";
                } elseif ('sports' == $page) {
                    echo "Sports";
                }elseif('news-events' == $page){
                    echo "News & Events";
                }
                ?></h1>
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a> <span class="divider">/</span></li>
                <li class="active"><?php if ('house_system' == $page) {
                        echo "House System";
                    } elseif ('co_scholastic_activities' == $page) {
                        echo "Co Scholastic Activities";
                    } elseif ('endeavours_and_initiatives' == $page) {
                        echo "Endeavours and Initiatives";
                    } elseif ('social_service_projects' == $page) {
                        echo "Social Service Projects";
                    } elseif ('student_club' == $page) {
                        echo "Student Club";
                    } elseif ('excursions' == $page) {
                        echo "Excursions";
                    } elseif ('sports' == $page) {
                        echo "Sports";
                    }elseif('news-events' == $page){
                        echo "News & Events";
                    }
                    ?></li>
            </ul>
        </div>

        <!-- =========================Start Col left section ============================= -->
        <aside class="col-md-4 col-sm-4">
            <div class="col-left">
                <h3>Co-Curriculars</h3>
                <ul class="submenu-col">
                    <li><a href="house_system.php"<?php if ('house_system' == $page) {
                            echo "id=\"active\"";
                        } ?>>House System</a></li>
                    <li><a href="co_scholastic_activities.php" <?php if ('co_scholastic_activities' == $page) {
                            echo "id=\"active\"";
                        } ?>>Co Scholastic Activities</a></li>
                    <li><a href="endeavours_and_initiatives.php" <?php if ('endeavours_and_initiatives' == $page) {
                            echo "id=\"active\"";
                        } ?>>Endeavours and Initiatives</a></li>
                    <li><a href="social_service_projects.php" <?php if ('social_service_projects' == $page) {
                            echo "id=\"active\"";
                        } ?>>Social Service Projects</a></li>
                    <li><a href="student_club.php" <?php if ('student_club' == $page) {
                            echo "id=\"active\"";
                        } ?>>Student Club</a></li>
                    <li><a href="excursions.php" <?php if ('excursions' == $page) {
                            echo "id=\"active\"";
                        } ?>>Excursions</a></li>
                    <li><a href="sports.php" <?php if ('sports' == $page) {
                            echo "id=\"active\"";
                        } ?>>Sports</a></li>

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
                            <h4>Social Service Projects</h4>
                            <?php $sql = "SELECT page_content FROM content WHERE page_name = 'social_service_projects'";
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