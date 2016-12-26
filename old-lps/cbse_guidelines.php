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
            <h1><?php if ('cbse_guidelines' == $page) {
                    echo "C.B.S.E. Guidelines";
                } elseif ('circulars' == $page) {
                    echo "Circulars";
                } elseif ('academic_calendar' == $page) {
                    echo "Academic Calendar";
                } elseif ('syllabus' == $page) {
                    echo "Syllabus";
                } elseif ('time_table' == $page) {
                    echo "Time Table";
                } elseif ('students' == $page) {
                    echo "Students";
                } elseif ('faculty' == $page) {
                    echo "Faculty";
                }elseif('media_coverage' == $page){
                    echo "Media Coverage";
                }
                ?></h1>
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a> <span class="divider">/</span></li>
                <li class="active"><?php if ('cbse_guidelines' == $page) {
                        echo "C.B.S.E. Guidelines";
                    } elseif ('circulars' == $page) {
                        echo "Circulars";
                    } elseif ('academic_calendar' == $page) {
                        echo "Academic Calendar";
                    } elseif ('syllabus' == $page) {
                        echo "Syllabus";
                    } elseif ('time_table' == $page) {
                        echo "Time Table";
                    } elseif ('students' == $page) {
                        echo "Students";
                    } elseif ('faculty' == $page) {
                        echo "Faculty";
                    }elseif('media_coverage' == $page){
                        echo "Media Coverage";
                    }
                    ?></li>
            </ul>
        </div>

        <!-- =========================Start Col left section ============================= -->
        <aside class="col-md-4 col-sm-4">
            <div class="col-left">
                <h3>School</h3>
                <ul class="submenu-col">
                    <li><a href="cbse_guidelines.php"<?php if ('cbse_guidelines' == $page) {
                            echo "id=\"active\"";
                        } ?>>C.B.S.E. Guidelines</a></li>
                    <li><a href="circulars.php" <?php if ('circulars' == $page) {
                            echo "id=\"active\"";
                        } ?>>Circulars</a></li>
                    <li><a href="academic_calendar.php" <?php if ('academic_calendar' == $page) {
                            echo "id=\"active\"";
                        } ?>>Academic Calendar</a></li>
                    <li><a href="syllabus.php" <?php if ('syllabus' == $page) {
                            echo "id=\"active\"";
                        } ?>>Syllabus</a></li>
                    <li><a href="media_coverage.php" <?php if ('media_coverage' == $page) {
                            echo "id=\"active\"";
                        } ?>>Media Coverage</a></li>
                    <li><a href="time_table.php" <?php if ('time_table' == $page) {
                            echo "id=\"active\"";
                        } ?>>Time Table</a></li>
                    <li><a href="students.php" <?php if ('students' == $page) {
                            echo "id=\"active\"";
                        } ?>>Students</a></li>
                    <li><a href="faculty.php" <?php if ('faculty' == $page) {
                            echo "id=\"active\"";
                        } ?>>Faculty</a></li>
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
                            <h4>C.B.S.E. Guidelines</h4>
                            <ul class="list_1">
                                <li>All schools must regularly visit the CBSE website to be updated about various
                                    policies and schemes including latest updates on School Quality Assessment and
                                    Accreditation (SQAA)
                                </li>
                                <li>All schools will have a maximum time-line of three years within which they should
                                    apply to the CBSE for School Quality Assessment & Accreditation.
                                </li>
                                <li>The list of empanelled agencies is available on the CBSE website. The Board would
                                    provide the complete list of agencies (added or blacklisted). Hence, schools should
                                    make reference to the CBSE website from time to time.
                                </li>
                                <li>Schools intending to get accredited must ensure that they have a website with an
                                    'Accreditation Corner'.
                                </li>
                                <li>Schools should upload the 'Mandatory Disclosure Form' on their website before 31st
                                    December, 2012. The 'Mandatory Disclosure Form' is available on the CBSE website
                                    under Academic/Accreditation. Schools should also check their data and continuously
                                    update their status, website details etc on the CBSE Website.
                                </li>
                                <li>The schools on deciding to undergo the SQAA, should make a School Assessment
                                    Committee (SAC) with its principal as head of the team.
                                </li>
                                <li>The decision to form the School Accreditation Committee and resolve to undergo
                                    School Quality Assessment and Accreditation (SQAA) should be appropriately approved
                                    by the Management Committee of each school.
                                </li>
                                <li>The school intending to undergo Accreditation should fill-in the 'Form of Intent'
                                    and submit it to the CBSE. All the agencies listed on CBSE website are equally
                                    authorized to carry out the SQAA – assessment. The CBSE will allocate an agency from
                                    those empanelled with them.
                                </li>
                                <li>The school should normally expect a confirmation letter from the allotted agency
                                    within two weeks of filling in Form of Intent. In case of non-receipt of any
                                    response within three weeks, it should then send a reminder to the CBSE to expedite
                                    the matter.
                                </li>
                                <li>Once, the school receives an acknowledgement from the CBSE/agency, it should then
                                    fill-in the online SQAA Instruments after going through the SQAA Manual and submit
                                    it to the authorized agency.
                                </li>
                                <li>The agency on receiving the SQAAF (Instrument 1) shall conduct the internal scoring.
                                    All schools which get an initial score of 50 and above would qualify for the PAT
                                    visit for SQAA.
                                </li>
                                <li>The agency shall inform the SAC team Head i.e. the Principal for finalizing the PAT
                                    visit dates by email/ phone (the dates are then fixed).
                                </li>
                                <li>The school should make arrangements as per the PAT visit schedule for co-ordinating
                                    the availability of students, teachers etc, apart from access to physical
                                    infrastructure, documents etc. required by the school to be produced for
                                    verification to the team members.
                                </li>
                                <li>The schools should act in a professional manner and not resort to any unwanted
                                    actions which are not desirable as per the broad mandate of the CBSE.
                                </li>
                                <li>The schools should use the visit of PAT as a learning visit and constantly make
                                    notes of suggestions, feedback etc. for improving the school quality irrespective of
                                    the result of SQAA.
                                </li>
                                <li>After the visit; the schools would be given a 'School Quality Enhancement Report'
                                    (SQER) which should be thoroughly gone through and necessary action taken
                                    accordingly for improving the quality of teaching and learning at the school.
                                </li>
                                <li>A school which gets a score of 75 % or above (overall) and minimum 50 % in each
                                    domain; shall be declared 'Accredited' by CBSE. The school's name shall be then
                                    listed on the CBSE website under the list of accredited schools. The school may use
                                    the terminology 'affiliated and accredited CBSE School' instead of only using
                                    “affiliated to CBSE”. The school should not make any other false or over-reaching
                                    claim.
                                </li>
                                <li>The validity period of SQAA accreditation is three years. A fresh application for
                                    renewal should be made before the expiry of the three year period to enjoy the
                                    privilege of being an 'Accredited School of the CBSE' in a continuous manner.
                                </li>
                                <li>In case of any query or feedback; the school should contact Section
                                    Officer(Accreditation) on email - <strong>cbsesqaa@gmail.com</strong></li>
                            </ul>
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