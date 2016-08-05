<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <base href="<?=@web ?>" >
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>PHP</title>
    <meta name="keywords" content="博客,庞小飞,php,php个人博客">
    <meta name="description" content="庞小飞个人博客">
    <link href="./css/base.css" rel="stylesheet">
    <link href="./css/index.css" rel="stylesheet">
    <script type="text/javascript">
    try {var urlhash = window.location.hash;if (!urlhash.match("fromapp"))
    {if ((navigator.userAgent.match(/(iPhone|iPod|Android|ios|iPad)/i)))
    {window.location="http://m.yangqq.com/";}}}
    catch(err)
    {
    }</script>
    <meta name="mobile-agent" content="format=xhtml;url=http://m.pangxiaofei.com">
    <script src="http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=408409"></script>
    <link rel="stylesheet" href="http://bdimg.share.baidu.com/static/api/css/share_style1_32.css">
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
     <header>
      <div id="logo"><a href="/"></a></div>
      <nav class="topnav" id="topnav">
        <a href="#" id="topnav_current">
            <span>首页</span>
            <span class="en">Protal</span>
        </a>
        </nav>
    </header>
    <div class="container">
        <?= $content ?>
    </div>
</div>
<footer>
  <p>Design by DanceSmile <a href="http://www.miitbeian.gov.cn/" target="_blank">蜀ICP备11002373号-1</a> 
    </p>
</footer>

<?php $this->endBody() ?>
<!-- 
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Ff655f558c510211e38805f6b586e6b15' type='text/javascript'%3E%3C/script%3E"));
</script>
 -->
<script src="@web/js/h.js" type="text/javascript"></script>
</body>
</html>
<?php $this->endPage() ?>
