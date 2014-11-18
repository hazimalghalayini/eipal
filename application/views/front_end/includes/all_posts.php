<div class="blog-posts">

<?php
    
    echo empty($all_news) ? 'لا يوجد أخبار' : '';
    
    foreach ($all_news as $news) {
        $pieces = explode("-", date('Y-m-d', strtotime($news->publish_date)));
        echo '<div class="post-item fx" data-animate="fadeInLeft">
        <div class="post-image">
            <a href="' . base_url() . 'home/post?id=' . $news->news_id . '">
                <div class="mask"></div>
                <div class="post-lft-info">
                    <div class="main-bg">'.$pieces[2].'<br>'.$pieces[1].'<br>'.$pieces[0].'</div>
                </div>
                <img style="width:300px;height:177px;" src="'.base_url() . 'uploads/news/' . $news->news_picture.'" alt="Our Blog post image goes here">
            </a>
        </div>
        <article class="post-content">
            <div class="post-info-container">
                <div class="post-info">
                    <h2><a class="main-color" href="'.base_url().'home/post?id='.$news->news_id.'">'.mb_substr($news->news_title, 0, 150).'</a></h2>
                    <ul class="post-meta">
                        <li><i class="fa fa-folder-open"></i>التصنيف: <a href="#">'.$news->category_name.'</a></li>
                        <li class="meta-user"><i class="fa fa-user"></i>عدد المشاهدات: <a href="#">'.$news->views.'</a></li>
                        <li class="meta-comments"><i class="fa fa-comments"></i>عدد التعليقات: <a href="'.base_url().'home/post?id='.$news->news_id.'">'.$news->comments_count.'</a></li>
                    </ul>
                </div>
            </div>
            <p>'.mb_substr($news->news_description, 0, 350).'<a class="read-more" href="'.base_url().'home/post?id='.$news->news_id.'">Read more</a> </p>
        </article>
    </div>';
    }?>
    <div class="pager skew-25">
        <ul>
            <?= $pageNumber ?>
        </ul>
    </div>
</div>