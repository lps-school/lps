<!DOCTYPE html>
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="ie ie9" lang="en"> <![endif]-->
<html lang="en">
<!--<![endif]-->
<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>LPS</title>
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
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
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
            <h1>Contact Us</h1>
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a><span class="divider">/</span></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
        <!-- =========================Start Col left section ============================= -->
        <aside class="col-md-4 col-sm-4">
            <div class="col-left">
                <h3>Address</h3>
                <ul>
                    <li><i class="icon-home"></i> I-BLOCK ASHOK VIHAR,PHASE-1, NEW DELHI-110052</li>
                    <li><i class="icon-phone"></i> Telephone: 011-47062575</li>
                    <li><i class="icon-phone-sign"></i> Fax: 011-47062575</li>
                    <li><i class="icon-envelope"></i> Email: <a href="#">lions@ipsashokvihar.com</a></li>
                </ul>
                <hr>
                <!--<iframe height="250" src="https://maps.google.it/maps?f=q&amp;source=s_q&amp;hl=it&amp;geocode=&amp;q=new+york&amp;sll=40.714353,-74.005973&amp;sspn=0.868126,2.422485&amp;ie=UTF8&amp;hq=&amp;hnear=New+York,+Stati+Uniti&amp;t=m&amp;z=10&amp;iwloc=A&amp;ll=40.714353,-74.005973&amp;output=embed" style="border:0;">
                </iframe>-->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.09935853577!2d77.16340321444822!3d28.686674288380576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0240e0b6ebb5%3A0x3ed00fbb6e07d3af!2sLions+Public+School!5e0!3m2!1sen!2sin!4v1455183199847"
                    width="200" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                <br/>
                <!--<small><a href="https://maps.google.it/maps?f=q&amp;source=embed&amp;hl=it&amp;geocode=&amp;q=new+york&amp;sll=40.714353,-74.005973&amp;sspn=0.868126,2.422485&amp;ie=UTF8&amp;hq=&amp;hnear=New+York,+Stati+Uniti&amp;t=m&amp;z=10&amp;iwloc=A&amp;ll=40.714353,-74.005973" style="text-align:left">View bigger</a></small>-->
                <small><a
                        href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.09935853577!2d77.16340321444822!3d28.686674288380576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0240e0b6ebb5%3A0x3ed00fbb6e07d3af!2sLions+Public+School!5e0!3m2!1sen!2sin!4v1455183199847"
                        target="_blank">View Bigger</a></small>
                <hr>
                <p>Get directions writing your start point.</p>

                <form action="http://maps.google.com/maps" method="get" target="_blank">
                    <input type="text" name="saddr" placeholder="Enter your location" class="form-control"/>
                    <input type="hidden" name="daddr" value="Lions Public School
I-BLOCK ASHOK VIHAR,PHASE-1, Block I, Block-G, Phase 1, Ashok Vihar, New Delhi,"/> <!-- Write here your end point -->
                    <input type="submit" value="Get directions" class=" button_medium"/>
                </form>
            </div>
            <p><?php include('includes/month_update_calendar.php'); ?></p>
        </aside>

        <!-- =========================Start Col right section ============================= -->
        <section class="col-md-8 col-sm-8">
            <div class="col-right">
                <p class="lead">
                    Please contact us to arrange a visit to the school or to ask us any questions you may have.
                    Alternatively, you can call Reception on 011-47062575.
                </p>
                <hr>
                <h4>General Enquire or Apply</h4>

                <div id="message-contact"></div>
                <form method="post" action="assets/contact.php" id="contactform">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name <span class="required">* </span></label>
                            <input type="text" class="form-control ie7-margin" id="name_contact">
                        </div>
                        <div class="col-md-6">
                            <label>Last name <span class="required">* </span></label>
                            <input type="text" class="form-control ie7-margin" id="lastname_contact">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Email <span class="required">* </span></label>
                            <input type="email" id="email_contact" class="form-control ie7-margin">
                        </div>
                        <div class="col-md-6">
                            <label>Phone <span class="required">* </span></label>
                            <input type="text" id="phone_contact" class="form-control ie7-margin">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Select a department</label>
                            <select id="subject_contact" class="form-control">
                                <option value="Administration">Administration</option>
                                <option value="Admissions">Admissions</option>
                                <option value="Courses">Courses</option>
                                <option value="Apply">Apply</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Message <span class="required">*</span></label>
                            <textarea rows="5" id="message_contact" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label><span class="required">*</span> Are you human? 3 + 1 =</label>
                            <input type="text" id="verify_contact" class="form-control">
                        </div>
                        <div class="button-align col-md-9">
                            <input type="submit" id="submit-contact" value="Submit" class=" button_medium">
                        </div>
                    </div>
                    <hr>
                </form>

                <h4>Plan a visit</h4>

                <div id="message-visit"></div>
                <form method="post" action="assets/visit.php" id="visit">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name <span class="required">* </span></label>
                            <input type="text" class="form-control ie7-margin" id="name_visit">
                        </div>
                        <div class="col-md-6">
                            <label>Last name <span class="required">* </span></label>
                            <input type="text" class="form-control ie7-margin" id="lastname_visit">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Email <span class="required">* </span></label>
                            <input type="email" id="email_visit" class="form-control ie7-margin">
                        </div>
                        <div class="col-md-6">
                            <label>Phone <span class="required">* </span></label>
                            <input type="text" id="phone_visit" class="form-control ie7-margin">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div id="datetimepicker" class="input-append" style="position:relative;">
                                <label>Select a date <span class="required">* </span></label>
                                <input type="text" class=" dateinput form-control" id="date_visit">
                                <span class="add-on" style="position:absolute; top:34px; right:5px; cursor:pointer"><i
                                        data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label><span class="required">*</span> Are you human? 3 + 1 =</label>
                            <input type="text" id="verify_visit" class="form-control">
                        </div>
                    </div>
                    <!-- end row-->
                    <input type="submit" id="submit-visit" value="Submit" class=" button_medium">
                </form>

            </div>
            <!-- end col right-->
        </section>
    </div>
    <!-- end row-->
</div>
<!-- end container-->

<?php include('includes/footer.php') ?>
<div id="toTop">Back to Top</div>

<!-- DATEPICKER -->
<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
    $('#datetimepicker').datetimepicker({
        format: 'dd/MM/yyyy hh:mm',
        pick12HourFormat: false,   // enables the 12-hour format time picker
        pickSeconds: false,
        language: 'en'
    });
</script>
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