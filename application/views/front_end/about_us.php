<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?= $this->config->item('website_name').'-'.'من نحن'?></title>
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
                                <h1 class="fx" data-animate="fadeInLeft">من <span>نحن</span></h1>
                                <div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
                                    <span class="bold">أنت داخل:</span><a href="#">الرئيسية</a><span class="line-separate">/</span><span>من نحن</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sectionWrapper">
                    <div class="container">
                        <div class="cell-9 blog-thumbs">
                            <div class="fx" data-animate="fadeInUp">
                                <h3 class="block-head">النشأة</h3>
                                <p>
                                    تأسس المتاجر الذهبي في مطلع عام 2010 واضعاً نصب عينيه خدمة المستثمر العربي في منطقة الشرق الاوسط ، وذلك بتوفير كافة السبل والأدوات التي تساعده على تحقيق خططه الاستثمارية بأعلى أداء وأقل مخاطرة.

                                    يهتم المتاجر الذهبي بأسواق المال كافة ( عملات - سلع - أسهم ) العالمية منها والمحلية، ويسعى بقوة لتوفير أفضل الخيارات من شركات الوساطة العالمية لتقديم منتجاتها لعملائه بشكل احترافي يضمن وصول الخدمة للمستثمر بأعلى جودة سعيا لبيئة استثمارية أكثر شفافية يكون أداء المستثمر فيها هو العامل الأول والأخير الذي يحدد نجاح خططه الاستثمارية.

                                    يضع المتاجر الذهبي شروطا قاسية لتحديد شركات الوساطة التي يقدمها لعملائه ، مما اعطى المتاجر الذهبي مصداقية وثقة بين المستثمرين في منطقة الشرق الأوسط على مدار السنوات السابقة.
                                </p>
                            </div>

                            <div class="fx" data-animate="fadeInUp">
                                <h3 class="block-head">المهمة والهدف</h3>
                                <p>
                                    منذ اليوم الأول لنشأة المتاجر الذهبي، وضعت الادارة نصب عينيها تقديم خدماتها بشكل مختلف ومتميز يضمن تحقيق اعلى معدلات النجاح في عالم أسواق المال، وكان ولا يزال هدفنا هو توفير أفضل خدمة بأقل تكلفة على المستثمر.

                                    ولتحقيق اهدافنا ، تقوم الادارة دوريا بعمل تقييم مهني لشركات الوساطة المتعاقد معها من قبلنا، وذلك للوقوف على الايجابيات والسلبيات، ومن ثم اتخاذ القرارت الهامة من حيث استمرار التعاقد مع شركات الوساطة أو اضافة شركات وساطة اخرى تعطي للمستثمر بدائل ومنتجات أكثر تنوعا وشمولية سعيا لتحقيق المزيد من النجاح.
                                </p>
                            </div>

                            <div class="fx" data-animate="fadeInUp">
                                <h3 class="block-head">الادارة</h3>
                                <p>
                                    يقود سفينة المتاجر الذهبي ادارة ذات خبرة في أسواق المال تتخطى العشرة أعوام، هذه الخبرة نتجت من الاحتكاك المباشر مع الشركات وتكوين شبكة علاقات قوية بيننا وبين الإدارات المختلفة لأكبر شركات الوساطة العالمية، مما كان له من الأثر الواضح في اختيارات الإدارة لشركات الوساطة التي تقدمها للمستثمر في الوطن العربي.

                                    وكان للتأهيل العلمي الدور البارز، فابلاضافة للخبرة الطويلة والعملية في مجال المتاجرة في أسواق المال، فقد حصل المنتمين لمجلس الادارة على أرقى الشهادات الدولية في مجالات :
                                <div class="cell-12 fx animated fadeInLeft" data-animate="fadeInLeft">
                                    <div class="row">
                                        <ul class="list prim list-ok">
                                            <li> التحليل الفني والمالي لأسواق المال.</li>
                                            <li>تخطيط وادارة المشاريع.</li>
                                            <li>الجودة والعايير القياسية.</li>
                                            <li> ادارة المخاطر.</li>
                                        </ul>
                                    </div>
                                </div>
                                وأنعكس ذلك جليا على اختيارات مجلس الادارة للعاملين في المتاجر الذهبي، وذلك لضمان تقديم خدماتنا بشكل يتوافق والمعايير القياسية في مجال أسواق المال.

                                تسعى إدارة المتاجر الذهي في المستقبل القريب لتأكيد تواجدها على أرض الواقع من خلال الحصول على التراخيص اللازمة للعمل في مجال الاستشارات المالية ونظم المعلومات الاقتصادية والتدريب ، وباكتمال هذه الخطوة يكتمل كيان المتاجر الذهبي ويزداد قوة في التحرك على ارض الواقع سعيا لتحقيق اهدافنا لخدمة المستثمر في الوطن العربي.
                                </p>
                            </div>
                        </div>
                        <!-- our skills right block -->
                        <div class="cell-3 fx" data-animate="fadeInRight">
                            <ul class="sidebar_widgets">
                                <!-- Search Widget Start -->
                                    <?php $this->load->view('front_end/includes/search_widget'); ?>
                                    <!-- Search Widget End -->

                                    <!-- Categories Widget Start -->
                                    <?php $this->load->view('front_end/includes/facebook_posts_widget'); ?>
                                    <!-- Categories Widget End -->

                                    <!-- Socials Widget start -->
                                    <?php $this->load->view('front_end/includes/socials_widget'); ?>
                                    <!-- Socials Widget end -->
                            </ul>
                        </div>
                        <!-- our skills right block end -->

                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="sectionWrapper gry-pattern">
                    <div class="container team-boxes">
                        <h3 class="block-head">Meet Our Team</h3>
                        <div class="cell-3 fx" data-animate="bounceIn">
                            <div class="team-box">
                                <div class="team-img">
                                    <img alt="" src="<?php echo base_url(); ?>assets/front_end/images/people/1.jpg">
                                    <h3>Alicia Stewark</h3>
                                </div>
                                <div class="team-details">
                                    <h3 class="gry-bg">Alicia Stewark</h3>
                                    <div class="t-position">Company CEO.</div>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolre eu feugiat nula faciisis at vero eros.</p>
                                    <div class="team-socials">
                                        <ul>
                                            <li><a href="#" title="facebook"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#" title="linkedin"><span class="fa fa-linkedin"></span></a></li>
                                            <li><a href="#" title="skype"><span class="fa fa-skype"></span></a></li>
                                            <li><a href="#" title="twitter"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#" title="vimeo"><span class="fa fa-google-plus"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cell-3 fx" data-animate="bounceIn" data-animation-delay="200">
                            <div class="team-box">
                                <div class="team-img">
                                    <img alt="" src="<?php echo base_url(); ?>assets/front_end/images/people/1.jpg">
                                    <h3>John Martin</h3>
                                </div>
                                <div class="team-details">
                                    <h3 class="gry-bg">John Martin</h3>
                                    <div class="t-position">Chair Man.</div>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolre eu feugiat nula faciisis at vero eros.</p>
                                    <div class="team-socials">
                                        <ul>
                                            <li><a href="#" title="facebook"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#" title="linkedin"><span class="fa fa-linkedin"></span></a></li>
                                            <li><a href="#" title="skype"><span class="fa fa-skype"></span></a></li>
                                            <li><a href="#" title="twitter"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#" title="vimeo"><span class="fa fa-google-plus"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cell-3 fx" data-animate="bounceIn" data-animation-delay="400">
                            <div class="team-box">
                                <div class="team-img">
                                    <img alt="" src="<?php echo base_url(); ?>assets/front_end/images/people/1.jpg">
                                    <h3>Alex Henry</h3>
                                </div>
                                <div class="team-details">
                                    <h3 class="gry-bg">Alex Henry</h3>
                                    <div class="t-position">General Manager.</div>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolre eu feugiat nula faciisis at vero eros.</p>
                                    <div class="team-socials">
                                        <ul>
                                            <li><a href="#" title="facebook"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#" title="linkedin"><span class="fa fa-linkedin"></span></a></li>
                                            <li><a href="#" title="skype"><span class="fa fa-skype"></span></a></li>
                                            <li><a href="#" title="twitter"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#" title="vimeo"><span class="fa fa-google-plus"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cell-3 fx" data-animate="bounceIn" data-animation-delay="600">
                            <div class="team-box">
                                <div class="team-img">
                                    <img alt="" src="<?php echo base_url(); ?>assets/front_end/images/people/1.jpg">
                                    <h3>Maria Adams</h3>
                                </div>
                                <div class="team-details">
                                    <h3 class="gry-bg">Maria Adams</h3>
                                    <div class="t-position">Company CEO.</div>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolre eu feugiat nula faciisis at vero eros.</p>
                                    <div class="team-socials">
                                        <ul>
                                            <li><a href="#" title="facebook"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#" title="linkedin"><span class="fa fa-linkedin"></span></a></li>
                                            <li><a href="#" title="skype"><span class="fa fa-skype"></span></a></li>
                                            <li><a href="#" title="twitter"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#" title="vimeo"><span class="fa fa-google-plus"></span></a></li>
                                        </ul>
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