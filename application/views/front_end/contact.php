<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?= $this->config->item('website_name').'-'.'إتصل بنا'?></title>
        <meta name="description" content="EXCEPTION – Responsive Business HTML Template">
        <meta name="author" content="EXCEPTION">

        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/front_end/images/favicon.ico">

        <!-- CSS StyleSheets -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&amp;amp;subset=latin,latin-ext">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/css/animate.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/css/prettyPhoto.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/css/slick.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/rs-plugin/css/settings.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/css/responsive.css">
        <link href="<?php echo base_url(); ?>assets/front_end/css/social.css" rel="stylesheet">

        <!-- RTL Support -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/css/rtl.css">

        <!-- Skin style (** you can change the link below with the one you need from skins folder in the css folder **) -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/css/skins/skin9.css">

    </head>
    <body class="bg1">

        <!-- site preloader start -->
        <div class="page-loader">
            <div class="loader-in"></div>
        </div>
        <!-- site preloader end -->

        <div class="pageWrapper fixedPage">

            <!-- Header Start -->
            <div id="headWrapper" class="clearfix">

                <!-- top bar start -->
                <div class="top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="cell-5">
                                 <ul>
                                     <li><a href="<?=base_url().'home/'?>"><i class="fa fa-envelope"></i><?=$settings['email']?></a></li>
                                     <li><span dir="ltr"><?=$settings['phone']?><i class="fa fa-phone"></i></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- top bar end -->

               <!-- Header Start -->
                    <?php $this->load->view('front_end/includes/header'); ?>
                <!-- Header End -->
            </div>
            <!-- Header End -->

            <!-- Content Start -->
            <div id="contentWrapper">
                <div class="page-title title-1">
                    <div class="container">
                        <div class="row">
                            <div class="cell-12">
                                <h1 class="fx" data-animate="fadeInLeft">إتصل <span>بنا</span></h1>
                                <div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
                                    <span class="bold">أنت داخل:</span><a href="#">الرئيسية</a><span class="line-separate">/</span><span>إتصل بنا</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="padd-top-50">
                    <div class="container">
                        <div class="row">
                            <div class="cell-7 contact-form fx" data-animate="fadeInLeft" id="contact">
                                <h3 class="block-head">أرسل رسالة</h3>
                                <form class="form-signin cform" method="post" action="<?=base_url().'home/doContactMsg'?>" id="cform" autocomplete="on">
                                    <mark id="message" style="display: none;"></mark>
                                    <div class="form-input">
                                        <label>الإسم بالكامل<span class="red">*</span></label>
                                        <input type="text" required="required" name="name" id="name">
                                    </div>
                                    <div class="form-input">
                                        <label>الإيميل<span class="red">*</span></label>
                                        <input name="email" type="email" id="email" required="required">
                                    </div>
                                    <div class="form-input">
                                        <label>رقم الهاتف</label>
                                        <input name="phone" type="text" id="phone">			    						
                                        <input name="comp_email" type="hidden" value="<?=$settings['email']?>" id="comp_email">			    						
                                    </div>
                                    <div class="form-input">
                                        <label>نص الرسالة<span class="red">*</span></label>
                                        <textarea required="required" name="message" cols="40" rows="7" id="messageTxt" spellcheck="true"></textarea>
                                    </div>
                                    <div class="form-input">
                                        <input type="submit" class="btn btn-large main-bg" value="إرسال">&nbsp;&nbsp;<input type="reset" class="btn btn-large" value="إلغاء" id="reset">
                                    </div>
                                </form>
                            </div>
                            <div class="cell-5 contact-detalis">
                                <h3 class="block-head">تواصل معنا</h3>
                                <p class="fx" data-animate="fadeInRight">إذا كان لديك إي إستفسار أو سؤال لاتترد في التواصل معنا مباشرة وسيتم الرد على جميع إستفساراتكم في أسرع وقت.</p>
                                <hr class="hr-style4">
                                <div class="clearfix"></div>
                                <div class="padding-vertical">
                                    <div class="cell-12 fx" data-animate="fadeInRight">
                                        <h4 class="main-color bold">مكتبنا في: مصر</h4>
                                        <h5>العنوان:</h5>
                                        <p class="padd-horizontal-50"><?=$settings['place']?></p>
                                        <h5>البريد الإلكتروني:</h5>
                                        <p class="padd-horizontal-50"><?=$settings['email']?></p>
                                        <h5 >الهاتف:</h5>
                                        <p dir="ltr" class="left padd-horizontal-50"><?=$settings['phone']?></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content End -->

            <!-- Footer start -->
            <?php $this->load->view('front_end/includes/footer'); ?>
            <!-- Footer end -->

            <!-- Back to top Link -->
            <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>

        </div>

        <!-- Load JS siles -->	
        <script src="<?php echo base_url(); ?>assets/front_end/js/jquery.min.js"></script>

        <!-- Waypoints script -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front_end/js/waypoints.min.js"></script>

        <!-- SLIDER REVOLUTION SCRIPTS  -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front_end/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front_end/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <!-- Animate numbers increment -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front_end/js/jquery.animateNumber.min.js"></script>

        <!-- slick slider carousel -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front_end/js/slick.min.js"></script>

        <!-- Animate numbers increment -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front_end/js/jquery.easypiechart.min.js"></script>

        <!-- PrettyPhoto script -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front_end/js/jquery.prettyPhoto.js"></script>

        <!-- Share post plugin script -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front_end/js/jquery.sharrre.min.js"></script>

        <!-- Product images zoom plugin -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front_end/js/jquery.elevateZoom-3.0.8.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front_end/js/jquery.totemticker.min.js"></script>

        <!-- Input placeholder plugin -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front_end/js/jquery.placeholder.js"></script>

        <!-- Tweeter API plugin -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front_end/js/twitterfeed.js"></script>

        <!-- MailChimp plugin -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front_end/js/mailChimp.js"></script>

        <!-- NiceScroll plugin -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front_end/js/jquery.nicescroll.min.js"></script>

        <!-- general script file -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/front_end/js/script.js"></script>
    </body>
</html>