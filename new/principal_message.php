<?php
error_reporting('0');
$path = $_SERVER['PHP_SELF'];
$page = basename($path);
$page = basename($path, '.php');
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
    <h1><?php if('chairman_message' == $page) {echo "Chairman Message";}
        elseif('vice_chairman_message' == $page){
            echo "Vice Chairman Message";
        }elseif('principal_message' == $page){
            echo "Principal Message";
        }
        ?></h1>
    <ul class="breadcrumb">
        <li><a href="index.php">Home</a> <span class="divider">/</span></li>
        <li class="active"><?php if('chairman_message' == $page) {echo "Chairman Message";}
            elseif('vice_chairman_message' == $page){
                echo "Vice Chairman Message";
            }elseif('principal_message' == $page){
                echo "Principal Message";
            }
            ?></li>
    </ul>
</div>

<!-- =========================Start Col left section ============================= -->
<aside class="col-md-4 col-sm-4">
    <div class="col-left">
        <h3>From Desk</h3>
        <ul class="submenu-col">
            <li><a href="chairman_message.php"<?php if('chairman_message' == $page) {echo "id=\"active\"";}?>>Chairman Message</a></li>
            <li><a href="vice_chairman_message.php" <?php if('vice_chairman_message' == $page) {echo "id=\"active\"";}?> >Vice Chairman Message</a></li>
            <li><a href="principal_message.php" <?php if('principal_message' == $page) {echo "id=\"active\"";}?>>Principal Message</a></li>
            <!--<li><a href="course-detail.php">Communication (05) <img src="img/new.png" alt="New"></a></li>
            <li><a href="course-detail.php">Computing (08) </a></li>
            <li><a href="course-detail.php">Counseling (04)</a></li>
            <li><a href="course-detail.php">Education (06)</a></li>
            <li><a href="course-detail.php">Engineering (08)</a></li>-->
        </ul>

        <hr>

            <!--<h5>Upcoming Courses</h5>

            <p>Suspendisse quis risus turpis, ut pharetra arcu. Donec adipiscing, quam non faucibus luctus, mi arcu
                blandit diam, at faucibus mi ante vel augue.</p>

            <p><a href="#" class=" button_red_small">View Courses</a></p>-->

    </div>
    <p> <?php include('includes/month_update_calendar.php'); ?></p>
</aside>

<!-- =========================Start Col right section ============================= -->
<section class="col-md-8 col-sm-8">
    <div class="col-right">






        <div class="strip-lessons">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="box-style-one borders"><img src="img/icon-user-default.png" alt=""
                                                            class="picture img-responsive"><h5>Mrs. Manju
                            Lamba</h5>
                    </div>
                </div>
                <div class="clearfix visible-xs-block"></div>
                <div class="col-md-9 col-sm-12">
                    <h4>Principal Message</h4>

                    <p>" I express my gratidue to all for responding faith in us. </p>

                    <p>The word "Success" is very important in teh present scenario, but dear students remmeber,
                        there is no shortcut to success. It can only be achieved by Persistence.
                        The indomitable spirit of never giving up & refusing to be discourage under any
                        circumstances.
                        So, dear students dream big, identify your goal, believe in yourself. Never forget,
                        faith gives strength,
                        but doubts lead to weakness, failure and struggles are the stepping stones to success.
                        "</p>
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