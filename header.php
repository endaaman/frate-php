<?php
// deny direct access
if(count(get_included_files()) == 1) {
  http_response_code(400);
  exit();
}
?><!DOCTYPE html>
<html lang="ja">
<title>フラテ山の会 - トップ</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="shortcut icon" href="/static/favicon.ico"></link>
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans" type="text/css">
<link rel="stylesheet" href="/static/css/normalize.css" type="text/css" />
<link rel="stylesheet" href="/static/css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="/static/css/jquery.fancybox.css" type="text/css"/>
<link rel="stylesheet" href="/static/css/jquery.fancybox-buttons.css" type="text/css"/>
<link rel="stylesheet" href="/static/css/slick.css" type="text/css"/>
<link rel="stylesheet" href="/static/css/slick-theme.css" type="text/css"/>
<link rel="stylesheet" href="/static/css/common.css" />

<script src="/static/js/jquery.min.js"></script>
<script src="/static/js/jquery-migrate.min.js"></script>
<script src="/static/js/slick.min.js"></script>
<script src="/static/js/jquery.fancybox.pack.js"></script>
<script src="/static/js/common.js"></script>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-50080183-1', 'auto');
  ga('send', 'pageview');
</script>

<body>

<div id="bg-container">
  <img id="bg-a" class="bg" style="opacity:1;" />
  <img id="bg-b" class="bg" style="opacity:1;" />
</div>

<nav id="g-nav">
  <ul class="nav-list">
    <li class="nav-menu">
      <a class="link" href="/"><i class="fa fa-home"></i> ホーム</a>
    </li>
    <li class="nav-menu">
      <a class="link" href="/member.php"><i class="fa fa-group"></i> 部員紹介</a>
    </li>
    <li class="nav-menu">
      <a class="link" href="http://8208.teacup.com/frate/bbs"><i class="fa fa-external-link"></i> 掲示板</a>
    </li>
    <li class="nav-menu">
      <a class="link" href="http://frate.bbs.fc2.com/"><i class="fa fa-lock"></i> 掲示板(パス付き)</a>
    </li>
  </ul>
</nav>
