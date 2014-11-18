<?php
session_start();

require_once(BASEPATH . "libraries/twitteroauth/twitteroauth/twitteroauth.php"); //Path to twitteroauth library

$twitteruser = "arabicbroker1";
$notweets = 1;
$consumerkey = "XOs4Ul1zqJYzWtQD1i3s9DPuO";
$consumersecret = "WvPCXnFyOcoO72Cr6AA0jSx9dvK6rsSgtRRqMDPlfwN3hpNH8D";
$accesstoken = "221728953-ZQ4PwsBnzh3X3P55Xi0ibuTexvArCDHiy9jfROKe";
$accesstokensecret = "5f3IHGmCP4WYMXFdcScewrwOVte4YlrF9BXoQBmPWsVLY";

function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
    $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
    return $connection;
}

$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);

$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=" . $twitteruser . "&count=" . $notweets);
?>



<li class="widget search-w fx animated fadeInRight" data-animate="fadeInRight" style="margin-bottom: 0px;">
    <h3 class="widget-head">مواقع التواصل الإجتماعي</h3>
    <div style="border-right: 1px solid #DDD;
         border-width: 0px 1px 1px;
         border-style: none solid solid;
         border-color: -moz-use-text-color #DDD #DDD;border-image: none;
         padding: 10px;">
        <div id="fb-root"></div>
        <div class=" clearfix">
            <div class="wdg-social-counter clearfix socialicons">
                <ul class="social-counter clearfix">
                    <a href="https://www.facebook.com/goldentrader1?ref=ts&fref=ts">
                        <li>
                            <div class="facebook">
                                <i class="zoc-facebook border-radius-50-per"><span class="fa fa-facebook skew-0"></span></i>

                                <span class="fans-word">معجب</span>
                                <span class="fans-count"></span> <!-- 10,000 -->

                            </div>
                        </li>
                    </a>
                    <a href="https://twitter.com/GoldenTrader_Fx"> 
                        <li>
                            <div class="twitter">
                                <i class="zoc-twitter border-radius-50-per"><span class="fa fa-twitter skew-0"></span></i>

                                <span class="fans-word">متابع</span>
                                <span class="fans-count"><?= $tweets[0]->user->followers_count; ?></span>

                            </div>
                        </li>
                    </a>
                    <a href="https://www.youtube.com/user/Arabicbroker1">
                        <li>
                            <div class="youtube">
                                <i class="zoc-youtube border-radius-50-per"><span class="fa fa-youtube skew-0"></span></i>

                                <span class="fans-word">مشترك</span>
                                <span class="fans-count"></span>
                            </div>
                        </li>
                    </a>
                    <a href="http://www.goldentraderfx.com/vb/external.php?type=rss2">
                        <li>
                            <div class="rss">
                                <i class="zoc-rss border-radius-50-per"><span class="fa fa-rss skew-0"></span></i>

                                <span class="fans-word">To RSS Feed</span>
                                <span class="fans-count">تابعنا</span>
                            </div>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
</li>
