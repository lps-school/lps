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
    <link href="css/megamenu.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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
                <h3>Search news</h3>

                <div class="form-group">
                    <form class="form-search form-inline">
                        <input type="text" class="input-medium form-control">
                        <button type="submit" class="button_medium" style="position:relative; top:2px;">Search</button>
                    </form>
                </div>
                <hr>
                <h3>Latest news</h3>

                <div class="widget">
                    <ul class="latest_news">
                        <li><i class="icon-calendar-empty"></i> 16th July, 2020
                            <div><a href="#">It is a long established fact that a reader will be distracted </a></div>
                        </li>
                        <li><i class="icon-calendar-empty"></i> 16th July, 2020
                            <div><a href="#">It is a long established fact that a reader will be distracted </a></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="box-style-1 ribbon borders">
                <span class="date"><i class="icon-calendar-empty"></i> 25 June 2013</span>
                <h4><a href="#">Athletics program exceeding</a></h4>

                <p>Autem possim his cu, quodsi nominavi fabellas ut sit, mea ea ullum epicurei. Saepe tantas ocurreret
                    duo ea, has facilisi vulputate an. </p>
            </div>


            <div class="box-style-1 borders">
                <span class="date"><i class="icon-calendar-empty"></i> 25 June 2013</span>
                <h4><a href="#">Native American documentary</a></h4>

                <p>Autem possim his cu, quodsi nominavi fabellas ut sit, mea ea ullum epicurei. Saepe tantas ocurreret
                    duo ea, has facilisi vulputate an. </p>
            </div>

        </aside>

        <!-- =========================Start Col right section ============================= -->
        <section class="col-md-8 col-sm-8">
            <div class="col-right">
                <p class="lead">An utinam reprimique duo, putant mandamus cu qui. Priaeque iuvaret nominati et, ad mea
                    clita numquam. Maluisset dissentiunt et per, dico liber erroribus vis te. Dolor consul graecis nec
                    ut, scripta eruditi scriptorem et nam.</p>

                <hr>

                <div class="news-strip">
                    <ul>

                        <li class="row">
                            <div class="date-news"><strong>05</strong>Oct 2013</div>
                            <h5><a href="#"><i class="icon-file"></i> Saepe tantas ocurreret duo ea</a></h5>

                            <p>Autem possim his cu, quodsi nominavi fabellas ut sit, mea ea ullum epicurei. Priaeque
                                iuvaret nominati et, ad mea clita numquam. Maluisset dissentiunt et per, dico liber
                                erroribus vis te. </p>
                        </li>

                        <li class="row">
                            <div class="date-news"><strong>15</strong>Oct 2013</div>
                            <h5><a href="#"><i class="icon-file"></i>Dolor consul graecis nec ut</a></h5>

                            <p>An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi
                                fabellas ut sit, mea ea ullum epicurei. Saepe tantas ocurreret duo ea, has facilisi
                                vulputate an. Priaeque iuvaret nominati et, ad mea clita numquam. Maluisset dissentiunt
                                et per, dico liber erroribus vis te.</p>
                        </li>

                        <li class="row">
                            <div class="date-news"><strong>25</strong>Oct 2013</div>
                            <h5><a href="#"><i class="icon-file"></i>An utinam reprimique duo</a></h5>

                            <p>Putant mandamus cu qui. Autem possim his cu, quodsi nominavi fabellas ut sit, mea ea
                                ullum epicurei. Saepe tantas ocurreret duo ea, has facilisi vulputate an. Priaeque
                                iuvaret nominati et, ad mea clita numquam.</p>
                        </li>

                        <li class="row">
                            <div class="date-news"><strong>28</strong>Oct 2013</div>
                            <h5><a href="#"><i class="icon-file"></i>Autem possim his cu</a></h5>

                            <p>An utinam reprimique duo, putant mandamus cu qui. Quodsi nominavi fabellas ut sit, mea ea
                                ullum epicurei. Saepe tantas ocurreret duo ea, has facilisi vulputate an. Priaeque
                                iuvaret nominati et, ad mea clita numquam. Maluisset dissentiunt et per, dico.</p>
                        </li>

                        <li class="row">
                            <div class="date-news"><strong>30</strong>Oct 2013</div>
                            <h5><a href="#"><i class="icon-file"></i>Maluisset dissentiunt et per</a></h5>

                            <p>An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi
                                fabellas ut sit, mea ea ullum epicurei. Saepe tantas ocurreret duo ea, has facilisi
                                vulputate an. Priaeque iuvaret nominati et, ad mea clita numquam. Dico liber erroribus
                                vis te.</p>
                        </li>

                    </ul>
                </div>

                <hr>
                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="#">Prev</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
                <!-- end pagination-->

            </div>

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