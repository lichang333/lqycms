<!DOCTYPE html><html><head><meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<title><?php echo $post['title']; ?> - 微商城</title><meta content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0" name="viewport">
<link href="<?php echo env('APP_URL'); ?>/css/weixin/style.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?php echo env('APP_URL'); ?>/js/jquery.min.js"></script><script type="text/javascript" src="<?php echo env('APP_URL'); ?>/js/weixin/mobile.js"></script>
<meta name="keywords" content="<?php echo $post['keywords']; ?>"><meta name="description" content="<?php echo $post['description']; ?>"></head><body>
<div class="classreturn loginsignup">
    <div class="ds-in-bl return"><a href="javascript:history.back(-1);"><img src="<?php echo env('APP_URL'); ?>/images/weixin/return.png" alt="返回"></a></div>
    <div class="ds-in-bl tit center"><span>文章详情</span></div>
    <div class="ds-in-bl nav_menu"><a href="javascript:void(0);"><img src="<?php echo env('APP_URL'); ?>/images/weixin/class1.png" alt="菜单"></a></div>
</div>

@include('weixin.common.headerNav')

<h1 class="arc_tit"><?php echo $post['title']; ?></h1>

<div class="arc_content box">
<div class="ainfo"><?php echo $post['pubdate']; ?> <a style="color:#ee5b03;" href="<?php echo route('weixin_article_category',array('cat'=>$post['typeid'])); ?>"><?php echo $post['typename']; ?></a></div>
<?php echo $post['body']; ?>
<div class="arcnext cl mb10" style="margin-top:10px;color:#999;">阅读 <?php echo $post['click']; ?><!-- <a class="red" href="" rel="prev"></a> --></div></div>

@include('weixin.common.footer')
</body></html>