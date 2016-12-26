<?php
require 'includes/dbcontroller.php';

$db_handle = new Db_Controller();

$query = "SELECT slider_image FROM slider";

$result  = $db_handle->runArrayQuery($query);

//print_r($result);

//echo $result[1]['slider_image'];


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
    <title>Welcome to Lions Public School</title>
    <meta name="description"
          content="EDU - Educational, College and Courses Boostrap site template with Responsive Megamenu 14$">
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

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" href="css/fullwidth.css" media="screen">
    <link rel="stylesheet" href="rs-plugin/css/settings.css" media="screen">

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



<!--Star slider-->
<section class="slider">
    <div class="fullwidthbanner-container">
        <div class="fullwidthbanner">
            <ul>
                <!-- THE FIRST SLIDE -->
                <li data-transition="flyin" data-slotamount="1" data-masterspeed="300"
                    data-thumb="images/thumbs/thumb1.jpg" data-delay="4000">
                    <img src="http://lpsashokvihar.com/lps-admin/assets/uploads/slider/<?php echo $result[0]['slider_image']; ?>" alt="">

                    <div class="caption randomrotate"
                         data-x="center"
                         data-y="120"
                         data-speed="300"
                         data-start="1200"
                         data-easing="easeOutExpo"><img src="images/slides/logo1.png" alt=""></div>
                </li>
                <!-- THE SECOND SLIDE -->
                <li data-transition="3dcurtain-horizontal" data-slotamount="1" data-masterspeed="300"
                    data-thumb="images/thumbs/thumb2.jpg">
                    <img src="http://lpsashokvihar.com/lps-admin/assets/uploads/slider/<?php echo $result[1]['slider_image']; ?>" alt="lps">

                    <!--<div class="caption randomrotate"
                         data-x="center"
                         data-y="90"
                         data-speed="300"
                         data-start="1000"
                         data-easing="easeOutExpo"><img src="images/slides/diagram.png" alt="Image 9"></div>

                    <div class="caption randomrotate"
                         data-x="150"
                         data-y="80"
                         data-speed="300"
                         data-start="2000"
                         data-easing="easeOutExpo"><img src="images/slides/icon-slide-1.png" alt=""></div>

                    <div class="caption randomrotate"
                         data-x="180"
                         data-y="300"
                         data-speed="300"
                         data-start="2500"
                         data-easing="easeOutExpo"><img src="images/slides/icon-slide-2.png" alt=""></div>

                    <div class="caption randomrotate"
                         data-x="620"
                         data-y="80"
                         data-speed="300"
                         data-start="3000"
                         data-easing="easeOutExpo"><img src="images/slides/icon-slide-3.png" alt=""></div>

                    <div class="caption randomrotate"
                         data-x="605"
                         data-y="300"
                         data-speed="300"
                         data-start="3500"
                         data-easing="easeOutExpo"><img src="images/slides/icon-slide-4.png" alt=""></div>-->
                </li>
                <!-- THE THIRD SLIDE -->
                <li data-transition="3dcurtain-horizontal" data-slotamount="1" data-masterspeed="300"
                    data-thumb="images/thumbs/thumb2.jpg">
                    <img src="http://lpsashokvihar.com/lps-admin/assets/uploads/slider/<?php echo $result[2]['slider_image']; ?>" alt="lps">

                    <!--<div class="caption very_big_white lfl stl"
                            data-x="right"
                            data-y="180"
                            data-speed="300"
                            data-start="500"
                            data-easing="easeOutExpo" data-end="8800" data-endspeed="300" data-endeasing="easeInSine">JOIN THE COMMUNITY</div>-->

                    <!--<div class="caption lfb stl"
                              data-x="right"
                              data-y="250"
                              data-speed="300"
                              data-start="500"
                              data-easing="easeOutExpo" data-end="8800" data-endspeed="300" data-endeasing="easeInSine" ><a href="about.php" class="button_large">Read more</a></div>-->
                </li>
                <!-- THE FOURTH SLIDE -->
                <li data-transition="cube" data-slotamount="1" data-masterspeed="300"
                    data-thumb="images/thumbs/thumb2.jpg">
                    <img src="http://lpsashokvihar.com/lps-admin/assets/uploads/slider/<?php echo $result[3]['slider_image']; ?>" alt="lps">

                    <!--<div class="caption very_big_white lfl stl"
                            data-x="right"
                            data-y="180"
                            data-speed="300"
                            data-start="500"
                            data-easing="easeOutExpo" data-end="8800" data-endspeed="300" data-endeasing="easeInSine">DIFFERENT COURSES AVAILABLE</div>-->

                    <!--<div class="caption lfr stl"
                              data-x="right"
                              data-y="250"
                              data-speed="300"
                              data-start="500"
                              data-easing="easeOutExpo" data-end="8800" data-endspeed="300" data-endeasing="easeInSine" ><a href="all-courses.php" class="button_large">Read more</a></div>-->
                </li>
                <!-- THE FIFTH SLIDE -->
                <li data-transition="slideleft" data-slotamount="1" data-masterspeed="300"
                    data-thumb="images/thumbs/thumb2.jpg">
                    <img src="http://lpsashokvihar.com/lps-admin/assets/uploads/slider/<?php echo $result[4]['slider_image']; ?>" alt="lps">
                    <!--<div class="caption very_big_white lfl stl"
                             data-x="30"
                             data-y="180"
                             data-speed="300"
                             data-start="500"
                             data-easing="easeOutExpo" data-end="8800" data-endspeed="300" data-endeasing="easeInSine">IMPROVE YOUR SKILLS</div>-->

                    <!--<div class="caption big_white lfl stl"
                         data-x="30"
                         data-y="250"
                         data-speed="300"
                         data-start="800"
                         data-easing="easeOutExpo" data-end="9100" data-endspeed="300" data-endeasing="easeInSine">with expert teachers</div>-->
                </li>

            </ul>

            <div class="tp-bannertimer tp-bottom"></div>
        </div>
    </div>
</section>
<!--End slider-->


<div class="container">

    <div class="row" id="main-boxes">
        <div class="col-md-4 col-sm-4">
            <div class="box-style-2 green">
                <a href="circulars.php" title="Co- Curriculars">
                    <img src="img/icon-home-course.png" alt="">

                    <h3>Co- Curriculars</h3>

                    <p>The Lions Public School curriculum supports the natural development of the child. The teacher
                        will serve less as an instructor and more as a guide or facilitator.</p>
                </a>
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <div class="box-style-2 orange">
                <a href="admission.php" title="Admission">
                    <img src="img/icon-admission.png" alt="">

                    <h3>Admission</h3>

                    <p>Admission is open to classes Pre Nursery to XII at LPS Ashok Vihar. The school aspires to produce
                        students who are brilliant in academics as well as social values.</p>
                </a>
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <div class="box-style-2 red">
                <a href="sports.php" title="Sports">
                    <img src="img/sports.png" alt="">

                    <h3>Sports</h3>

                    <p>"Physical Education" has for its purpose to develop the powers of the body in such a way so as to
                        make them co-operate with those of the mind and soul.</p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- end container-->


<div class="container">
    <div class="row">
        <aside class="col-md-4 col-sm-4">

            <div class="box-style-1 ribbon borders">

                <div class="feat">
                    <i class="icon-time   icon-3x"></i>

                    <h3>School Timings</h3>

                    <p>Mon to Sat 8:00 AM to 2:20 PM <br>
                        Last Working Day 11:00 AM
                    </p>
                </div>

                <hr class="double">

                <div class="feat">
                    <i class="icon-forward icon-3x"></i>

                    <h3>Admission Form (2015-2016)</h3>
                    <a href="Admission_Form.pdf" target="_blank"><img src="img/download-form.png"/></a>

                    <p></p>
                </div>

                <hr class="double">

                <div class="feat">
                    <i class="icon-book icon-3x"></i>

                    <h3>Notice Board</h3>
                    <marquee direction="up" scrollamount="2" onmouseover="this.stop();" onmouseout="this.start();">
                        <?php
                          $result_notice =  $db_handle->runQuery("SELECT * FROM noticeboard WHERE status = 'Active'  ORDER BY id DESC ");
                          while($row_notice = mysql_fetch_object($result_notice)){


                        ?>
                        <p><a href="notice_board.php?id=<?php echo $row_notice->id; ?>"> <?php echo $row_notice->title; ?></a></p>


                       <?php } ?>
                    </marquee>
                </div>

                <!--<hr class="double">

                <div class="feat last">
                  <i class="icon-laptop icon-3x"></i>
                     <h3>Online courses</h3>
                  <p>An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi fabellas ut sit, mea ea ullum epicurei. </p>
                </div>-->

            </div>
            <p><?php include('includes/month_update_calendar.php'); ?></p>
        </aside>

        <section class="col-md-8 col-sm-8">
            <div class="col-right">
                <h2>Welcome to Our School</h2>
                <?php $sql = "SELECT page_content FROM content WHERE page_name = 'index'";
                   $result_index = $db_handle->runObjectQuery($sql);

               // print_r($result_index);
                echo $result_index[0]->page_content;

                ?>
                <hr>
                <div class="strip-lessons">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <div class="box-style-one borders"><img src="img/lessons.png" alt=""><h5>Academics</h5>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-md-9">
                            <h4>Academics</h4>

                            <?php $sql = "SELECT page_content FROM content WHERE page_name = 'academics'";
                            $result_index = $db_handle->runObjectQuery($sql);

                            // print_r($result_index);
                            echo substr($result_index[0]->page_content,0,736);

                            ?>
                            <ul class="data-lessons">
                                <!--<li><i class="icon-time"></i>Duration: 3 hours</li>
                                <li><i class="icon-film"></i><a class="fancybox-media" href="http://www.youtube.com/watch?v=pgk-719mTxM">Play video</a></li>-->
                                <li><i class="icon-arrow-right"></i><a href="academics.php">Read More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Strip course -->


                <div class="strip-lessons">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <div class="box-style-one borders"><img src="img/icon-user-default.png" alt=""
                                                                    class="picture img-responsive"><h5>R. N. Grover</h5>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-md-9">
                            <h4>Chairman Message</h4>

                            <?php $sql = "SELECT page_content FROM content WHERE page_name = 'chairman_message'";
                            $result_index = $db_handle->runObjectQuery($sql);

                            // print_r($result_index);
                            echo substr($result_index[0]->page_content,0,1000);

                            ?>
                            <ul class="data-lessons">
                                <li><i class="icon-arrow-right"></i><a href="chairman_message.php">Read More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Strip course -->

                <div class="strip-lessons">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <div class="box-style-one borders"><img src="img/icon-user-default.png" alt=""
                                                                    class="picture img-responsive"><h5>S. C.
                                    Thareja</h5></div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-md-9">
                            <h4>Vice Chairman Message</h4>
                            <?php $sql = "SELECT page_content FROM content WHERE page_name = 'vice_chairman_message'";
                            $result_index = $db_handle->runObjectQuery($sql);

                            // print_r($result_index);
                            echo substr($result_index[0]->page_content,0,1000);

                            ?>
                            <ul class="data-lessons">
                                <li><i class="icon-arrow-right"></i><a href="vice_chairman_message.php">Read More</a>
                                </li>
                        </div>
                    </div>
                </div>
                <!-- End Strip course -->

                <div class="strip-lessons">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <div class="box-style-one borders"><img src="img/icon-user-default.png" alt=""
                                                                    class="picture img-responsive"><h5>Mrs. Neena Singh</h5></div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-md-9">
                            <h4>Vice Principal Message</h4>

                            <?php $sql = "SELECT page_content FROM content WHERE page_name = 'vice_principal_message'";
                            $result_index = $db_handle->runObjectQuery($sql);

                            // print_r($result_index);
                            echo substr($result_index[0]->page_content,0,1000);

                            ?>
                            <ul class="data-lessons">
                                <li><i class="icon-arrow-right"></i><a href="vice_principal_message.php">Read More</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Strip course -->

                <!--<p class="text-center"><a href="contact.php" class="button_large">About Us</a></p>-->

            </div>
        </section>
    </div>
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

<!-- REVOLUTION SLIDER -->
<script src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolutio-slider-func.js"></script>

</body>
</html>