<li class="widget blog-cat-w fx animated fadeInRight" data-animate="fadeInRight">
    <h3 class="widget-head">التصنيفات الرئيسية</h3>
    <div class="widget-content">
        <ul class="list list-ok alt">
            <?php
            if (empty($categories_count)) {
                'لا يوجد أخبار';
            } else {
                foreach ($categories_count as $category) {
                    echo '<li><a href = "' . base_url() . 'home/page' . '">' . $category->category_name . '</a><span>[' . $category->news_count . ']</span></li>';
                }
            }
            ?>
        </ul>
    </div>
</li>