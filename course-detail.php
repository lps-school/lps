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
    <h1>Administration</h1>
    <ul class="breadcrumb">
        <li><a href="index.php">Home</a> <span class="divider">/</span></li>
        <li><a href="all-courses.php">All Courses</a> <span class="divider">/</span></li>
        <li class="active">Administration</li>
    </ul>
</div>

<!-- =========================Start Col left section ============================= -->
<aside class="col-md-4 col-sm-4">
    <div class="col-left">
        <h3>Browse Courses</h3>
        <ul class="submenu-col">
            <li><a href="all-courses.php">All Courses</a></li>
            <li><a href="course-detail.php" id="active">Administration (10)</a></li>
            <li><a href="course-detail.php">Business (08)</a></li>
            <li><a href="course-detail.php">Communication (05) <img src="img/new.png" alt="New"></a></li>
            <li><a href="course-detail.php">Computing (08) </a></li>
            <li><a href="course-detail.php">Counseling (04)</a></li>
            <li><a href="course-detail.php">Education (06)</a></li>
            <li><a href="course-detail.php">Engineering (08)</a></li>
        </ul>

        <hr>

        <h5>Upcoming Courses</h5>

        <p>Suspendisse quis risus turpis, ut pharetra arcu. Donec adipiscing, quam non faucibus luctus, mi arcu
            blandit diam, at faucibus mi ante vel augue.</p>

        <p><a href="#" class=" button_red_small">View Courses</a></p>

    </div>
    <p> <?php include('includes/month_update_calendar.php'); ?></p>
</aside>

<!-- =========================Start Col right section ============================= -->
<section class="col-md-8 col-sm-8">
    <div class="col-right">
        <div class="main-img">
            <img src="img/pic-4.jpg" alt="" class="img-responsive">

            <p class="lead">Tibique dolores adversarium ne vel. At vide errem duo, vis luptatum menandri
                ullamcorper id. </p>
        </div>

        <div class="strip-lessons">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="box-style-one borders"><img src="img/lessons.png" alt=""><h5>Intro one</h5>
                    </div>
                </div>
                <div class="clearfix visible-xs-block"></div>
                <div class="col-md-9 col-sm-12">
                    <h4>Autem possim his</h4>

                    <p>An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi
                        fabellas ut sit, <strong>mea ea ullum epicurei</strong>. Saepe tantas ocurreret duo ea,
                        has facilisi vulputate an. Pri aeque iuvaret nominati et, ad mea clita numquam. </p>
                    <ul class="data-lessons">
                        <li><i class="icon-time"></i>Duration: 3 hours</li>
                        <li><i class="icon-film"></i><a class="fancybox-media"
                                                        href="http://www.youtube.com/watch?v=pgk-719mTxM">Play
                                video</a></li>
                        <li><i class="icon-cloud-download"></i><a href="#">Donwload prospect</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Strip course -->

        <div class="strip-lessons">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="box-style-one borders"><img src="img/lessons.png" alt=""><h5>Intro two</h5>
                    </div>
                </div>
                <div class="clearfix visible-xs-block"></div>
                <div class="col-md-9 col-sm-12">
                    <h4>Ulum epicurei</h4>

                    <p>An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi
                        fabellas ut sit, <strong>mea ea ullum epicurei</strong>. Saepe tantas ocurreret duo ea,
                        has facilisi vulputate an. Pri aeque iuvaret nominati et, ad mea clita numquam. </p>
                    <ul class="data-lessons">
                        <li><i class="icon-time"></i>Duration: 3 hours</li>
                        <li><i class="icon-film"></i><a class="fancybox-media"
                                                        href="http://www.youtube.com/watch?v=pgk-719mTxM">Play
                                video</a></li>
                        <li><i class="icon-cloud-download"></i><a href="#">Donwload prospect</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Strip course -->

        <div class="strip-lessons">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="box-style-one borders"><img src="img/teacher.jpg" alt=""
                                                            class="picture img-responsive"><h5>Lesson one</h5>
                    </div>
                </div>
                <div class="clearfix visible-xs-block"></div>
                <div class="col-md-9 col-sm-12">
                    <h4>Putant mandamus</h4>

                    <p>An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi
                        fabellas ut sit, <strong>mea ea ullum epicurei</strong>. Saepe tantas ocurreret duo ea,
                        has facilisi vulputate an. Pri aeque iuvaret nominati et, ad mea clita numquam. </p>
                    <ul class="data-lessons">
                        <li><i class="icon-time"></i>Duration: 3 hours</li>
                        <li><i class="icon-film"></i><a class="fancybox-media"
                                                        href="http://www.youtube.com/watch?v=pgk-719mTxM">Play
                                video</a></li>
                        <li><i class="icon-cloud-download"></i><a href="#">Donwload prospect</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Strip course -->

        <div class="strip-lessons">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="box-style-one borders"><img src="img/teacher-2.jpg" alt=""
                                                            class="picture img-responsive"><h5>Lesson two</h5>
                    </div>
                </div>
                <div class="clearfix visible-xs-block"></div>
                <div class="col-md-9 col-sm-12">
                    <h4>Quodsi nominavi</h4>

                    <p>An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi
                        fabellas ut sit, <strong>mea ea ullum epicurei</strong>. Saepe tantas ocurreret duo ea,
                        has facilisi vulputate an. Pri aeque iuvaret nominati et, ad mea clita numquam. </p>
                    <ul class="data-lessons">
                        <li><i class="icon-time"></i>Duration: 3 hours</li>
                        <li><i class="icon-film"></i><a class="fancybox-media"
                                                        href="http://www.youtube.com/watch?v=pgk-719mTxM">Play
                                video</a></li>
                        <li><i class="icon-cloud-download"></i><a href="#">Donwload prospect</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Strip course -->

        <div class="strip-lessons">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="box-style-one borders"><img src="img/teacher-3.jpg" alt=""
                                                            class="picture img-responsive"><h5>Lesson three</h5>
                    </div>
                </div>
                <div class="clearfix visible-xs-block"></div>
                <div class="col-md-9 col-sm-12">
                    <h4>Saepe tantas</h4>

                    <p>An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi
                        fabellas ut sit, <strong>mea ea ullum epicurei</strong>. Saepe tantas ocurreret duo ea,
                        has facilisi vulputate an. Pri aeque iuvaret nominati et, ad mea clita numquam. </p>
                    <ul class="data-lessons">
                        <li><i class="icon-time"></i>Duration: 3 hours</li>
                        <li><i class="icon-film"></i><a href="#">Play video</a></li>
                        <li><i class="icon-cloud-download"></i><a href="#">Donwload prospect</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Strip course -->

        <div class="widget borders widget-table">

            <div class="widget-header">
                <h5>Course detail</h5>
            </div>
            <!-- .widget-header -->

            <div class="widget-content">
                <table class="table table-bordered table-striped">

                    <thead>
                    <tr>
                        <th>Lesson</th>
                        <th>Instructor</th>
                        <th>Time</th>
                        <th>Room</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>Curabitur blandit tempus porttitor</td>
                        <td>Mark Twain</td>
                        <td>10.30 AM</td>
                        <td>004</td>
                    </tr>
                    <tr>
                        <td>Pellentesque ornare sem</td>
                        <td>Janet Hope</td>
                        <td>10.30 AM</td>
                        <td>014</td>
                    </tr>
                    <tr>
                        <td>Integer posuere erat a ante venenatis</td>
                        <td>Tom Cruise</td>
                        <td>12.30 AM</td>
                        <td>094</td>
                    </tr>
                    <tr>
                        <td>Sed posuere consectetur</td>
                        <td>Bob Sinclair</td>
                        <td>11.30 AM</td>
                        <td>054</td>
                    </tr>

                    </tbody>
                </table>

            </div>
            <!-- .widget-content -->

        </div>
        <!-- /widget -->


        <p class="text-center"><a href="contact.php" class="button_large">Apply now </a></p>


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