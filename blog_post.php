<?php
error_reporting('0');
if(isset($_GET["type"]))
    $table = $_GET["type"];

if(isset($_GET["id"]))
    $id = $_GET["id"];
require 'includes/dbcontroller.php';

$db_handle = new Db_Controller();

if($table == '')
 header('location:index.php');

if($id == '')
header('location : index.php');
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
            <h1><?php if ('kindergarten_blog' == $table) {
                    echo "Kindergarten Blog";
                } elseif ('class_2_3_blogs' == $table) {
                    echo "Class II & III Blogs";
                } elseif ('class_4_5_6_blogs' == $table) {
                    echo "Class IV, V & VI Blogs";
                } elseif ('lead_on_blog' == $table) {
                    echo "Lead On Blog";
                } elseif ('library_blog' == $table) {
                    echo "Library Blog";
                }
                ?></h1>
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a> <span class="divider">/</span></li>
                <li class="active"><?php if ('kindergarten_blog' == $table) {
                        echo "Kindergarten Blog";
                    } elseif ('class_2_3_blogs' == $table) {
                        echo "Class II & III Blogs";
                    } elseif ('class_4_5_6_blogs' == $table) {
                        echo "Class IV, V & VI Blogs";
                    } elseif ('lead_on_blog' == $table) {
                        echo "Lead On Blog";
                    } elseif ('library_blog' == $table) {
                        echo "Library Blog";
                    }
                    ?></li>
            </ul>
        </div>

        <!-- =========================Start Col left section ============================= -->
        <aside class="col-md-4 col-sm-4">
            <div class="col-left">
                <h3>Blogs</h3>
                <ul class="submenu-col">
                    <li><a href="blog.php?type=kindergarten_blog"<?php if ('kindergarten_blog' == $table) {
                            echo "id=\"active\"";
                        } ?>>Kindergarten Blog</a></li>
                    <li><a href="blog.php?type=class_2_3_blogs" <?php if ('class_2_3_blogs' == $table) {
                            echo "id=\"active\"";
                        } ?>>Class II & III Blogs</a></li>
                    <li><a href="blog.php?type=class_4_5_6_blogs" <?php if ('class_4_5_6_blogs' == $table) {
                            echo "id=\"active\"";
                        } ?>>Class IV, V & VI Blogs</a></li>
                    <li><a href="blog.php?type=lead_on_blog" <?php if ('lead_on_blog' == $table) {
                            echo "id=\"active\"";
                        } ?>>Lead On Blog</a></li>
                    <li><a href="blog.php?type=library_blog" <?php if ('library_blog' == $table) {
                            echo "id=\"active\"";
                        } ?>>Library Blog</a></li>
                </ul>
                <!-- end siedebar  -->
            </div>
            <!-- end  col left -->
            <p><?php include('includes/month_update_calendar.php'); ?></p>
        </aside>

        <!-- =========================Start Col right section ============================= -->
        <section class="col-md-8 col-sm-8">
            <div class="col-right">
                <div class="post">
                    <?php
                    $sql_blog = "SELECT * FROM $table WHERE blog_id = $id";
                    $result_blog = $db_handle->runArrayQuery($sql_blog);


                    //print_r($result_blog);


                    ?>
                    <h2><a href="blog_post.php?id=<?php echo $result_blog[0]['blog_id'];  ?>&type=<?php echo $table; ?>"><?php  echo $result_blog[0]['blog_title']; ?></a></h2>
                    <img src="http://lpsashokvihar.com/lps-admin/assets/uploads/blogs/<?php if($result_blog[0]['blog_image'] == '') echo 'blog_default_image.jpg'; else echo $result_blog[0]['blog_image']; ?>" alt="" class="img-responsive">

                    <div class="post_info clearfix">
                        <div class="post-left">
                            <ul>
                                <li><i class="icon-calendar-empty"></i>On <span><?php  $date = $result_blog[0]['created_at']; echo date('F j, Y, g:i a', strtotime($date));?></span></li>
                                <li><i class="icon-user"></i>By <a href="#">Admin</a></li>
                            </ul>
                        </div>
                    </div>
                    <p>
                       <?php echo $result_blog[0]['blog_content'];  ?>
                    </p>

                </div>
                <!-- end post -->
                <hr>


                <!-- End Comments -->

            </div>
            <!-- end col-right-->
        </section>
        <!-- end section-->
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