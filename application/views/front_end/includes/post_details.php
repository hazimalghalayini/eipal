<div id="fb-root"></div>
<div class="blog-posts">
    <div class="post-item fx animated fadeInLeft" data-animate="fadeInLeft">
        <div class="details-img">
            <div class="post-lft-info">
                <?php $pieces = explode("-", date('Y-m-d', strtotime($postInfo['publish_date']))); ?>
                <div class="main-bg"><?= $pieces[2] ?><br><?= $pieces[1] ?><br><?= $pieces[0] ?><span class="tri-col"></span></div>
            </div>
            <img style="width:1170px;height: 350px;" src="<?= base_url() . 'uploads/news/' . $postInfo['news_picture'] ?>" alt="Our Blog post image goes here">
        </div>
        <article class="post-content">
            <div class="post-info-container">
                <h1 class="main-color"><?= $postInfo['news_title'] ?></h1>

                <div class="post-info">
                    <ul class="post-meta">
                        <li><i class="fa fa-folder-open"></i>التصنيف: <a href="#"><?= $postInfo['category_name'] ?></a></li>
                        <li class="meta-user"><i class="fa fa-user"></i>المشاهدات: <a href="#"><?= $postInfo['views'] ?></a></li>
                        <li class="meta-comments"><i class="fa fa-comments"></i>التعليقات: <a href="blog-single.html"><?= $postInfo['comments_count'] ?></a></li>
                    </ul>
                </div>
            </div>
            <p>
                <?= $postInfo['news_description'] ?>
            </p>
            <div class="post-tags">
                <i class="fa fa-tags"></i><span>Tags: </span><a href="#">Responsive</a>,<a> Business</a>,<a href="#"> HTML</a>,<a> Design</a>,<a> WordPress</a>
            </div>
            <div class="share-post">
                <span class="sh">شارك هذا الخبر على :</span>
                <div id="shareme" data-text="شارك هذا الخبر" class="sharrre"></div>
            </div>
        </article>
    </div><!-- .post-item end -->

    <div class="comments">
        <h3 class="block-head">التعليقات</h3>
        <p class="hint marginBottom bold">يوجد <span class="main-color"><?= $postInfo['comments_count'] ?></span> تعليقات على هذا الخبر</p>
        <?= !empty($postComment) ? '' : 'لا يوجد تعليقات'; ?>
        <ul class="comment-list">

            <?php
            foreach ($postComment as $comment) {
                echo '<li>';
                echo '<article class="comment">';
                echo '<img src="' . base_url() . 'assets/front_end/images/people/1.jpg" alt="avatar" class="comment-avatar">';
                echo '<div class="comment-content">';
                echo '<h5 class="comment-author skew-25">';
                echo '<span class="author-name skew25">' . $comment->name . '</span>';
                echo '<a href="#" class="comment-reply main-bg"><span class="skew25"><i class="fa fa-comment"></i>reply</span></a>';
                echo '<span class="comment-date skew25">' . date('Y-m-d', strtotime($comment->publishDate)) . '</span>';
                echo '</h5>';
                echo '<p>' . $comment->comment . '</p>';
                echo '</div>';
                echo '</article>';
                echo '</li>';
            }
            ?>

            <!--            <li>
                            <article class="comment">
                                <img src="<?php //echo base_url();  ?>assets/front_end/images/people/1.jpg" alt="avatar" class="comment-avatar">
                                <div class="comment-content">
                                    <h5 class="comment-author skew-25">
                                        <span class="author-name skew25">John Martin</span>
                                        <a href="#" class="comment-reply main-bg"><span class="skew25"><i class="fa fa-comment"></i>reply</span></a>
                                        <span class="comment-date skew25">Jan 15, 2014</span>
                                    </h5>
                                    <p></p>
                                </div>
                            </article> End .comment 
                        </li>-->
        </ul><!-- End .comment-list -->
    </div>

    <div id="fb-comments">
        <!--<div  class="fb-comments" data-href="https://www.facebook.com/arabicbroker" data-width="100%" data-numposts="5" data-colorscheme="light"></div>-->
    </div>
    <form id="comment_Form" action="<?= base_url() . 'home/doComment' ?>" method="post" class="leave-comment contact-form">
        <h3 class="block-head">أترك تعليقاً</h3>
        <div class="row">
            <div class="cell-6">
                <div class="form-input">
                    <input type="text" name="name" placeholder="الإسم بالكامل" required="">
                </div>
            </div>
            <div class="cell-6">
                <div class="form-input">
                    <input type="email" name="email" placeholder="البريد الإلكتروني" required="">
                </div>
            </div>
            <div class="cell-12">
                <div class="form-input">
                    <textarea class="txt-box textArea" name="message" cols="40" rows="7" id="messageTxt" placeholder="نص الرسالة" spellcheck="true" required=""></textarea>
                </div>
            </div>
            <div class="cell-12">
                <input type="submit" name="doComment" class="btn btn-large main-bg" value="تعليق">
                <input type="hidden" name="postId" value="<?= $postInfo['news_id'] ?>"/>
                <input type="button" onclick="apperFacebookCommentBox();
                        return false;" id="facebookComment" name="facebookComment" class="btn btn-large main-bg" value="تعليق بواسطة الفيس بوك">
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    function apperFacebookCommentBox() {

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        $("#comment_Form").hide('slow');
        $("#fb-comments").html('<div class="fb-comments" data-href="<?= current_url(); ?>" data-width="100%" data-numposts="5" data-colorscheme="light"></div>');
        FB.XFBML.parse();
    }

</script>
