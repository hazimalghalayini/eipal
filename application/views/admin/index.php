<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title><?= $this->config->item('website_name') . '-' . 'الصفحة الرئيسية' ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <link href="<?php echo base_url(); ?>assets/admin/assets/bootstrap-rtl/css/bootstrap-rtl.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/admin/assets/bootstrap-rtl/css/bootstrap-responsive-rtl.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/admin/css/style_responsive.css" rel="stylesheet" />
        <link href="<?php echo base_url() . 'assets/admin/css/' . CUSTOM_THEME . '.css' ?>" rel="stylesheet" id="style_color" />

        <link href="<?php echo base_url(); ?>resource/assets/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="fixed-top">
        <!-- BEGIN HEADER -->
        <?php $this->load->view('admin/includes/header_view'); ?>
        <!-- END HEADER -->
        <!-- BEGIN CONTAINER -->
        <div id="container" class="row-fluid">
            <!-- BEGIN SIDEBAR -->
            <?php $this->load->view('admin/includes/sidebar_view'); ?>
            <!-- END SIDEBAR -->
            <!-- BEGIN PAGE -->
            <div id="main-content">
                <!-- BEGIN PAGE CONTAINER-->
                <div class="container-fluid">
                    <!-- BEGIN PAGE HEADER-->
                    <div class="row-fluid">
                        <div class="span12">
                            <!-- BEGIN THEME CUSTOMIZER-->
                            <?php $this->load->view('admin/includes/themes_view'); ?>
                            <!-- END THEME CUSTOMIZER-->
                            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                            <h3 class="page-title">
                                إحصائيات
                            </h3>
                            <ul class="breadcrumb">
                                <li>
                                    <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                                </li>
                                <li>
                                    <a href="#">الرئيسية</a> <span class="divider">&nbsp;</span>
                                </li>
                                <li><a href="#">إحصائيات</a><span class="divider-last">&nbsp;</span></li>
                            </ul>
                            <!-- END PAGE TITLE & BREADCRUMB-->
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN PAGE CONTENT-->
                    <div id="page" class="dashboard">
                        <!-- BEGIN OVERVIEW STATISTIC BARS-->
                        <div class="span3"></div>
                        <div class="row-fluid metro-overview-cont">
                            <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                                <div class="circle-wrap">
                                    <div class="stats-circle red-color">
                                        <i class="icon-tags"></i>
                                    </div>
                                    <p>
                                        <strong><?= $news_count ?></strong>
                                        الأخبار
                                    </p>
                                </div>
                            </div>
                            <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                                <div class="circle-wrap">
                                    <div class="stats-circle gray-color">
                                        <i class="icon-comments-alt"></i>
                                    </div>
                                    <p>
                                        <strong><?= $comments_count ?></strong>
                                        التعليقات
                                    </p>
                                </div>
                            </div>
                            <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                                <div class="circle-wrap">
                                    <div class="stats-circle purple-color">
                                        <i class="icon-envelope"></i>
                                    </div>
                                    <p>
                                        <strong><?= $messages_count ?></strong>
                                        بريد الرسائل
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- END OVERVIEW STATISTIC BARS-->
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="widget">
                                    <div class="widget-title">
                                        <h4><i class="icon-comments"></i>الأخبار الأكثر مشاهدة</h4>
                                        <span class="tools">
                                            <a href="javascript:;" class="icon-chevron-down"></a>
                                        </span>
                                    </div>
                                    <div id="news" class="widget-body" style="position: relative; overflow: hidden; width: auto;" class="slimScrollDiv">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>الخبر</th>
                                                    <th>تاريخ الإضافة</th>
                                                    <th>عدد المشاهدات</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($news as $value) { ?>
                                                    <tr>
                                                        <td><a title="<?= $value['news_title'] ?>" href="<?= base_url() . 'home/post?id=' . $value['news_id'] ?>"><?= substr($value['news_title'], 0, 100) ?></a></td>
                                                        <td><?= $value['publish_date'] ?></td>
                                                        <td><strong><?= $value['views'] ?></strong></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div><span class="span5"></span><a href="<?= base_url() . 'admin/news/manage_news' ?>">مراجعه جميع الأخبار</a></div>
                                </div>
                            </div>
                            <div class="span6">
                                <div class="widget">
                                    <div class="widget-title">
                                        <h4><i class="icon-comments"></i>أحدث 10 تعليقات</h4>
                                        <span class="tools">
                                            <a href="javascript:;" class="icon-chevron-down"></a>
                                        </span>
                                    </div>
                                    <div id="comments" class="widget-body" style="position: relative; overflow: hidden; width: auto;" class="slimScrollDiv">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>الخبر</th>
                                                    <th>التعليق</th>
                                                    <th>إسم الشخص</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($comments as $comment) { ?>
                                                    <tr>
                                                        <td><a title="<?= $comment['news_title'] ?>" href="<?= base_url() . 'news/post?id=' . $comment['news_id'] ?>"><?= substr($comment['news_title'], 0, 70) ?></a></td>
                                                        <td><?= substr($comment['comment'], 0, 80) ?></td>
                                                        <td><strong><?= $comment['name'] ?></strong></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div><span class="span5"></span><a href="<?= base_url() . 'admin/news/recent_comments' ?>">مراجعه جميع التعليقات</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE CONTENT-->
                </div>
                <!-- END PAGE CONTAINER-->
            </div>
        </div>
        <!-- END PAGE -->
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <?php $this->load->view('admin/includes/footer_view'); ?>
        <!-- END FOOTER -->
        <!-- BEGIN JAVASCRIPTS -->
        <!-- Load javascripts at bottom, this will reduce page load time -->
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery-1.8.3.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/assets/bootstrap-rtl/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.blockui.js"></script>
        <!-- ie8 fixes -->
        <!--[if lt IE 9]>
        <script src="js/excanvas.js"></script>
        <script src="js/respond.js"></script>
        <![endif]-->
        <script src="<?php echo base_url(); ?>assets/admin/assets/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/scripts.js"></script>
        <script>
            jQuery(document).ready(function() {
                // initiate layout and plugins
                App.init();
                $('#comments,#news').slimscroll({
                    height: '350px'
                });
                // Build the chart
            });
        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>