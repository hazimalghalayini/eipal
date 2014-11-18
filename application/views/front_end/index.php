<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?= $this->config->item('website_name') . '-' . 'الرئيسية' ?></title>
        <meta name="description" content="EXCEPTION – Responsive Business HTML Template">
        <meta name="author" content="EXCEPTION">

        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/front_end/images/favicon.ico">

        <!-- bxSlider CSS file -->
        <link href="<?php echo base_url(); ?>assets/front_end/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />

        <!-- CSS StyleSheets -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&amp;amp;subset=latin,latin-ext">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/css/animate.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/css/prettyPhoto.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/css/slick.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/rs-plugin/css/settings.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/css/responsive.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_end/css/news.css">

        <link href="<?php echo base_url(); ?>assets/front_end/css/social.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <link rel="stylesheet" href="css/ie.css">
        <script type="text/javascript" src="js/html5.js"></script>
    <![endif]-->


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

        <div class="pageWrapper fixedPage" id="wrap">

            <!-- Revolution slider start -->
            <?php $this->load->view('front_end/includes/revolution_slider'); ?>
            <!-- Revolution slider end -->

            <!-- Header Start -->
            <?php $this->load->view('front_end/includes/header'); ?>
            <!-- Header End -->

            <!-- Content Start -->
            <div id="contentWrapper">
                <!-- Welcome Box start -->
                <?php $this->load->view('front_end/includes/welcome_msg'); ?>
                <!-- Welcome Box end -->

                <!-- We are Agents for these companies -->
                <div>
                    <?php $this->load->view('front_end/includes/agents'); ?>
                </div>
                <!-- End Agents -->

                <!-- advertise start -->
                <?php $this->load->view('front_end/includes/ads3'); ?>
                <!-- advertise end -->

                <!-- Agents Section with some Sidebar Widgets -->
                <div class="sectionWrapper news-site" style="padding-bottom: 0px;">
                    <div class="container">
                        <div class="row">
                            <!-- Latest News -->
                            <?php $this->load->view('front_end/includes/latest_news'); ?>
                            <!-- End Latest News -->

                            <!-- Sidbar Widgets Start-->
                            <div class="cell-3 fx" data-animate="fadeInRight">
                                <ul class="sidebar_widgets">
                                    <!-- Search Widget Start -->
                                    <?php $this->load->view('front_end/includes/search_widget'); ?>
                                    <!-- Search Widget End -->

                                    <!-- Categories Widget Start -->
                                    <?php $this->load->view('front_end/includes/categories_widget'); ?>
                                    <!-- Categories Widget End -->
                                </ul>
                            </div>
                            <!-- Sidbar Widgets End -->							
                        </div>
                    </div>
                </div>
                <!-- Agents Section with some Sidebar Widgets End -->				

                <!-- Our Quality Start -->
                <?php $this->load->view('front_end/includes/our_quality'); ?>
                <!-- Our Quality End -->

                <!-- advertise start -->
                <?php $this->load->view('front_end/includes/ads2'); ?>
                <!-- advertise end -->

                <!-- videos and socials widgets start -->
                <div class="sectionWrapper">
                    <div class="container">
                        <div class="row">
                            <!-- Videos Library start -->
                            <?php $this->load->view('front_end/includes/videos_library'); ?>
                            <!-- Videos Library end -->

                            <!-- social widget start -->
                            <div class="cell-4 fx" data-animate="fadeInRight">
                                <ul class="sidebar_widgets">
                                    <!-- Socials Widget start -->
                                    <?php $this->load->view('front_end/includes/socials_widget'); ?>
                                    <!-- Socials Widget end -->

                                    <!-- Facebook Widget start -->
                                    <?php $this->load->view('front_end/includes/facebook_widget'); ?>
                                    <!-- Facebook Widget end -->
                                </ul>
                            </div>
                            <!-- social widget end -->
                        </div>
                    </div>
                </div>
                <!-- videos and socials widgets end -->

            </div>
            <!-- Content End -->

            <!-- advertise start -->
            <?php $this->load->view('front_end/includes/ads1'); ?>
            <!-- advertise end -->

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


        <!-- bxSlider Javascript file -->
        <script src="<?php echo base_url(); ?>assets/front_end/jquery.bxslider/jquery.bxslider.js"></script>
        <script src="<?php echo base_url(); ?>assets/front_end/jquery.bxslider/plugins/jquery.fitvids.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('.bxslider').bxSlider({
                    video: true,
                    useCSS: false
                });
            });
        </script>
    </body>
</html>
