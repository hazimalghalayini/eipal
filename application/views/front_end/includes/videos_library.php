<?php
error_reporting(E_ALL);
$feedURL = 'http://gdata.youtube.com/feeds/api/users/Arabicbroker1/uploads?max-results=10';
$sxml = simplexml_load_file($feedURL);
$i = 0;
?>
<div class="cell-8">
    <div  style="direction: ltr;" class="fx" data-animate="fadeInLeft">
        <h3 class="block-head"  style="padding-bottom: 8px;padding-top: 6px;direction: rtl;">مكتبة الفيديو</h3>
        <ul class="bxslider" style="padding-top: 11px;">
            <?php
            foreach ($sxml->entry as $entry) {
                $media = $entry->children('media', true);
                parse_str(parse_url((string) $media->group->player->attributes()->url, PHP_URL_QUERY), $my_array_of_vars);
                $watch = $my_array_of_vars['v'];
                //$thumbnail = (string) $media->group->thumbnail[0]->attributes()->url;
                ?>

                <li>
                    <iframe width="560" height="315" src="//www.youtube.com/embed/<?= $watch; ?>" frameborder="0" allowfullscreen></iframe>
                </li>

                <?php
                $i++;
            }
            ?>

        </ul>
    </div>
</div>