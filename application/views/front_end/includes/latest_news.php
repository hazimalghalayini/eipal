<div class="cell-9 blog-thumbs">
    <h3 class="block-head" style="text-indent:15px;">أحدث المواضيع </h3>		
    <div class="blog-posts">
        <div class="post-item fx animated fadeInLeft" data-animate="fadeInLeft">
            <div class="post-image">
                <a href="<?= base_url() . 'home/post?id=' . $latest_news[0]->news_id ?>">
                    <div class="mask"></div>
                    <div class="post-lft-info">
                        <?php $pieces = explode("-", date('Y-m-d', strtotime($latest_news[0]->publish_date))); ?>
                        <div class="main-bg"><?= $pieces[2] ?><br><?= $pieces[1] ?><br><?= $pieces[0] ?></div>
                    </div>
                    <img style="width: 393px;height: 178px;" src="<?= base_url() . 'uploads/news/thumbs/' . $latest_news[0]->news_picture ?>" alt="Our Blog post image goes here">
                </a>
            </div>
            <article class="post-content">
                <div class="post-info-container">
                    <div class="post-info">
                        <h2><a class="main-color" href="<?= base_url() . 'home/post?id=' . $latest_news[0]->news_id ?>"><?= $latest_news[0]->news_title ?></a></h2>
                        <ul class="post-meta">
                            <li><i class="fa fa-folder-open"></i>التصنيف: <a href="#"><?= $latest_news[0]->category_name ?></a></li>
                            <li class="meta-user"><i class="fa fa-eye"></i>المشاهدات: <a href="#"><?= $latest_news[0]->views ?></a></li>
                            <li class="meta-comments"><i class="fa fa-comments"></i>عدد التعليقات: <a href="<?= base_url() . 'home/post?id=' . $latest_news[0]->news_id ?>"><?= $latest_news[0]->comments_count ?></a></li>
                        </ul>
                    </div>
                </div>
                <p>
                    <?= mb_substr($latest_news[0]->news_description, 0, 350) . '...' ?>
                    <a class="read-more" href="<?= base_url() . 'home/post?id=' . $latest_news[0]->news_id ?>">قراءة المزيد</a>
                </p>
            </article>
        </div>

        <div class="small_news">
            <div class="small_items">
                <div class="row">
                    <div class="cell-6">
                        <div class="post-item fx animated fadeInLeft" data-animate="fadeInLeft">
                            <div class="cell-3">
                                <div class="row">
                                    <a href="<?= base_url() . 'home/post?id=' . $latest_news[1]->news_id ?>">
                                        <img src="<?= base_url() . 'uploads/news/thumbs/' . $latest_news[1]->news_picture ?>" alt="Our Blog post image goes here">
                                    </a>
                                </div>
                            </div>
                            <article class="cell-9">
                                <h2><a class="main-color" href="<?= base_url() . 'home/post?id=' . $latest_news[1]->news_id ?>"><?= $latest_news[1]->news_title ?></a></h2>
                                <ul class="post-meta">
                                    <li><i class="fa fa-folder-open"></i>التصنيف: <a href="#"><?= $latest_news[1]->category_name ?></a></li>
                                    <li class="meta-user"><i class="fa fa-eye"></i>المشاهدات: <a href="#"><?= $latest_news[1]->views ?></a></li>
                                    <li class="meta-comments"><i class="fa fa-comments"></i>عدد التعليقات: <a href="<?= base_url() . 'home/post?id=' . $latest_news[1]->news_id ?>"><?= $latest_news[1]->comments_count ?></a></li>
                                </ul>
                            </article>
                        </div>
                    </div>
                    <div class="cell-6">
                        <div class="post-item fx animated fadeInLeft" data-animate="fadeInLeft">
                            <div class="cell-3">
                                <div class="row">
                                    <a href="<?= base_url() . 'home/post?id=' . $latest_news[2]->news_id ?>">
                                        <img src="<?= base_url() . 'uploads/news/thumbs/' . $latest_news[2]->news_picture ?>" alt="Our Blog post image goes here">
                                    </a>
                                </div>
                            </div>
                            <article class="cell-9">
                                <h2><a class="main-color" href="<?= base_url() . 'home/post?id=' . $latest_news[2]->news_id ?>"><?= $latest_news[2]->news_title ?></a></h2>
                                <ul class="post-meta">
                                    <li><i class="fa fa-folder-open"></i>التصنيف: <a href="#"><?= $latest_news[2]->category_name ?></a></li>
                                    <li class="meta-user"><i class="fa fa-eye"></i>المشاهدات: <a href="#"><?= $latest_news[2]->views ?></a></li>
                                    <li class="meta-comments"><i class="fa fa-comments"></i>عدد التعليقات: <a href="<?= base_url() . 'home/post?id=' . $latest_news[2]->news_id ?>"><?= $latest_news[2]->comments_count ?></a></li>
                                </ul>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="small_items">
                <div class="row">
                    <div class="cell-6">
                        <div class="post-item fx animated fadeInLeft" data-animate="fadeInLeft">
                            <div class="cell-3">
                                <div class="row">
                                    <a href="<?= base_url() . 'home/post?id=' . $latest_news[3]->news_id ?>l">
                                        <img src="<?= base_url() . 'uploads/news/thumbs/' . $latest_news[3]->news_picture ?>" alt="Our Blog post image goes here">
                                    </a>
                                </div>
                            </div>
                            <article class="cell-9">
                                <h2><a class="main-color" href="<?= base_url() . 'home/post?id=' . $latest_news[3]->news_id ?>"><?= $latest_news[3]->news_title ?></a></h2>
                                <ul class="post-meta">
                                    <li><i class="fa fa-folder-open"></i>التصنيف: <a href="#"><?= $latest_news[3]->category_name ?></a></li>
                                    <li class="meta-user"><i class="fa fa-eye"></i>المشاهدات: <a href="#"><?= $latest_news[3]->views ?></a></li>
                                    <li class="meta-comments"><i class="fa fa-comments"></i>عدد التعليقات: <a href="<?= base_url() . 'home/post?id=' . $latest_news[3]->news_id ?>"><?= $latest_news[3]->comments_count ?></a></li>
                                </ul>
                            </article>
                        </div>
                    </div>
                    <div class="cell-6">
                        <div class="post-item fx animated fadeInLeft" data-animate="fadeInLeft">
                            <div class="cell-3">
                                <div class="row">
                                    <a href="<?= base_url() . 'home/post?id=' . $latest_news[4]->news_id ?>">
                                        <img src="<?= base_url() . 'uploads/news/thumbs/' . $latest_news[4]->news_picture ?>" alt="Our Blog post image goes here">
                                    </a>
                                </div>
                            </div>
                            <article class="cell-9">
                                <h2><a class="main-color" href="<?= base_url() . 'home/post?id=' . $latest_news[4]->news_id ?>"><?= $latest_news[4]->news_title ?></a></h2>
                                <ul class="post-meta">
                                    <li><i class="fa fa-folder-open"></i>التصنيف: <a href="#"><?= $latest_news[4]->category_name ?></a></li>
                                    <li class="meta-user"><i class="fa fa-eye"></i>المشاهدات: <a href="#"><?= $latest_news[4]->views ?></a></li>
                                    <li class="meta-comments"><i class="fa fa-comments"></i>عدد التعليقات: <a href="<?= base_url() . 'home/post?id=' . $latest_news[4]->news_id ?>"><?= $latest_news[4]->comments_count ?></a></li>
                                </ul>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="padd-bottom-10">
                <span class="cell-4"></span>
                <a class="btn btn-small cell-5" href="<?= base_url() . 'home/page' ?>">عرض المزيد من الأخبار</a>
        </div>
    </div>
</div>