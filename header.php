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
<link rel="shortcut icon" href="/favicon.ico"></link>
<link rel="stylesheet" href="/static/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="/static/css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="/static/css/common.css" />

<script src="/static/js/jquery-3.1.1.min.js"></script>
<script src="/static/js/bootstrap.min.js"></script>
<script src="/static/js/bg.js"></script>
<script src="/static/js/menu.js"></script>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-50080183-1', 'auto');
  ga('send', 'pageview');
</script>

<body>

<!-- 背景 -->
<div id="bg-container">
  <img id="bg-a" class="bg" style="opacity:1;" />
  <img id="bg-b" class="bg" style="opacity:1;" />
</div>

<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">フラテ山の会</a>
    </div>

    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav navbar-right js-menu-items">
        <li data-active-regexp="^/$">
          <a href="/"><i class="fa fa-home"></i>&nbsp;ホーム</a>
        </li>
        <li data-active-regexp="^/member.php">
          <a href="/member.php"><i class="fa fa-group"></i>&nbsp;部員紹介</a>
        </li>
        <li>
          <a href="http://www.yamareco.com/modules/yamareco/clubrecs-1171-listview.html"><i class="fa fa-archive"></i>&nbsp;ヤマレコ</a>
        </li>
        <li>
          <a href="http://8208.teacup.com/frate/bbs"><i class="fa fa-pencil"></i>&nbsp;掲示板</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-lock"></i>&nbsp;掲示板(パス付き)</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

