<div id="sidebar" class="nav-collapse collapse">

    <div class="sidebar-toggler hidden-phone"></div>

    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
    <div class="navbar-inverse">
        <form class="navbar-search visible-phone">
            <input type="text" class="search-query" placeholder="Search" />
        </form>
    </div>
    <!-- END RESPONSIVE QUICK SEARCH FORM -->
    <!-- BEGIN SIDEBAR MENU -->
    <ul class="sidebar-menu">
        <li><a class="" href="<?php echo base_url() . "admin/news"; ?>"><span class="icon-box"><i class="icon-dashboard"></i></span>الرئيسية</a></li>
        <li><a class="" href="<?php echo base_url() . "admin/news/add_news"; ?>"><span class="icon-box"><i class="icon-pencil"></i></span>إضافة خبر</a></li>
        <li><a class="" href="<?php echo base_url() . "admin/news/manage_news"; ?>"><span class="icon-box"><i class="icon-list"></i></span>إدارة الأخبار</a></li>
        <li><a class="" href="<?php echo base_url() . "admin/news/manage_agenda"; ?>"><span class="icon-box"><i class="icon-th"></i></span>الأجندة الإقتصادية</a></li>
        <li><a class="" href="<?php echo base_url() . "admin/news/recent_comments"; ?>"><span class="icon-box"><i class="icon-comment"></i></span>أحدث التعليقات</a></li>
        <li><a class="" href="<?php echo base_url() . "admin/settings"; ?>"><span class="icon-box"><i class="icon-cogs"></i></span>إعدادات الموقع</a></li>
    </ul>
    <!-- END SIDEBAR MENU -->
</div>