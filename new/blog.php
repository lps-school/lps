<?php
error_reporting('0');
require 'includes/dbcontroller.php';
require 'includes/function.php';
$db_handle = new Db_Controller();
if(isset($_GET["type"]))
    $table = $_GET["type"];
if(isset($_GET["page"]))
    $page = (int)$_GET["page"];
else
    $page = 1;

$setLimit = 5;
$pageLimit = ($page * $setLimit) - $setLimit;

if($table == '')
    header('location:index.php');
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
    <style type="text/css">
        .navi {
            width: 500px;
            margin: 5px;
            padding:2px 5px;
            border:1px solid #eee;
        }

        .show {
            color: blue;
            margin: 5px 0;
            padding: 3px 5px;
            cursor: pointer;
            font: 15px/19px Arial,Helvetica,sans-serif;
        }
        .show a {
            text-decoration: none;
        }
        .show:hover {
            text-decoration: underline;
        }


        ul.setPaginate li.setPage{
            padding:15px 10px;
            font-size:14px;
        }

        ul.setPaginate{
            margin:0px;
            padding:0px;
            height:100%;
            overflow:hidden;
            font:12px 'Tahoma';
            list-style-type:none;
        }

        ul.setPaginate li.dot{padding: 3px 0;}

        ul.setPaginate li{
            float:left;
            margin:0px;
            padding:0px;
            margin-left:5px;
        }



        ul.setPaginate li a
        {
            background: none repeat scroll 0 0 #ffffff;
            border: 1px solid #cccccc;
            color: #999999;
            display: inline-block;
            font: 15px/25px Arial,Helvetica,sans-serif;
            margin: 5px 3px 0 0;
            padding: 0 5px;
            text-align: center;
            text-decoration: none;
        }

        ul.setPaginate li a:hover,
        ul.setPaginate li a.current_page
        {
            background: none repeat scroll 0 0 #0d92e1;
            border: 1px solid #000000;
            color: #ffffff;
            text-decoration: none;
        }

        ul.setPaginate li a{
            color:black;
            display:block;
            text-decoration:none;
            padding:5px 8px;
            text-decoration: none;
        }




    </style>
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
        <div class="com-md-12">
            <h1>Blog</h1>
            <ul class="breadcrumb">
                <li><a href="#">Home</a> <span class="divider">/</span></li>
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
                <div class="sidebar">

                    <!--<div class="widget">
                        <div class="form-group">
                            <form class="form-search form-inline">
                                <input type="text" class="input-medium form-control">
                                <button type="submit" class="button_medium" style="position:relative; top:2px;">Search
                                </button>
                            </form>
                        </div>
                    </div>-->
                    <!-- End Search -->

                    <!-- End widget -->

                    <hr>

                    <div class="widget">
                        <h4>Recent post</h4>
                        <ul class="recent_post">
                            <?php  $sql = "SELECT blog_id,blog_title,created_at FROM $table WHERE blog_status = 'Active'  ORDER  BY blog_id DESC  LIMIT 5 ";
                            $result = $db_handle->runQuery($sql);
                            //$blog_type = 'kindergarten_blog';
                            // print_r($result);
                            while($row = mysql_fetch_object($result)){
                                //print_r($row);


                            ?>
                            <li>
                                <i class="icon-calendar-empty"></i> <?php $date = $row->created_at; echo date('F j, Y, g:i a', strtotime($date)); ?>
                                <div><a href="blog_post.php?id=<?php echo $row->blog_id;  ?>&type=<?php echo $table; ?>"><?php echo $row->blog_title;  ?></a>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!-- End widget -->

                    <hr>
                    <!-- End widget -->

                </div>
                <!-- end siedebar  -->
            </div>
            <!-- end  col left -->
            <p><?php include('includes/month_update_calendar.php'); ?></p>
        </aside>

        <section class="col-md-8 col-sm-8">
            <div class="col-right">
                <?php
                $sql_blog = "SELECT * FROM $table WHERE blog_status = 'Active' LIMIT $pageLimit,$setLimit";
                $result_blog = $db_handle->runQuery($sql_blog);
                // print_r($result);
                while($row_blog = mysql_fetch_object($result_blog)){
                //print_r($row);
                ?>
                <div class="post">
                    <h2><a href="blog_post.php?id=<?php echo $row_blog->blog_id;  ?>&type=<?php echo $table; ?>"><?php echo $row_blog->blog_title; ?></a></h2>
                    <a href="blog_post.php?id=<?php echo $row_blog->blog_id;  ?>&type=<?php echo $table; ?>"><img src="http://lpsashokvihar.com/lps-admin/assets/uploads/blogs/<?php if($row_blog->blog_image == '') echo 'blog_default_image.jpg'; else echo $row_blog->blog_image; ?>" alt="" class="img-responsive"></a>

                    <div class="post_info clearfix">
                        <div class="post-left">
                            <ul>
                                <li><i class="icon-calendar-empty"></i>On <span><?php  $date = $row_blog->created_at; echo date('F j, Y, g:i a', strtotime($date));?></span></li>
                                <li><i class="icon-user"></i>By <a href="#">Admin</a></li>
                            </ul>
                        </div>
                        <!--<div class="post-right"><i class="icon-comments"></i><a href="#">25 </a>Comments</div>-->
                    </div>
                    <p><?php $content = $row_blog->blog_content; echo substr($content,0,500); ?>....</p>

                    <p><a href="blog_post.php?id=<?php echo $row_blog->blog_id;  ?>&type=<?php echo $table; ?>" class="button_medium">Read more</a></p>
                </div>
                <!-- end post -->
                <?php } ?>





                <hr>

                <div class="text-center">
                    <?php
                    // Call the Pagination Function to load Pagination.
                    //$table = 'kindergarten_blog';
                    echo displayPaginationBelow($setLimit,$page,$table);
                    ?>
                </div>
                <!-- end pagination-->

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