<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>会员管理 - <?php
echo $_obj['PHPSayConfig']['sitename'];
?>
</title>
  <link rel="stylesheet" type="text/css" media="screen" href="static/phpsay.css" />
  <script type="text/javascript" src="static/jquery.js"></script>
  <script type="text/javascript" src="static/phpsay.global.js"></script>
  <script type="text/javascript" src="static/phpsay.admin.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $(".stream-items .stream-item .stream-content").click(function(ev){
      if ( checkIsGoOn(ev) ){
        window.open($(this).children(".item-user").attr("href"),"PHPSayUser");
      }
    });
  });
  </script>
  <script>

</script>
</head>
<body>
  <?php
if ($_obj['loginInfo']['uid'] > "0"){
?>
<div class="header web-bg">
  <div class="top-nav">
    <ul class="left-nav">
      <li>
        <a<?php
if ($_obj['headerNavi'] == "home"){
?> class="home"<?php
}
?> title="主页" href="./"><span class="web-icon nav-home"></span>主页</a>
      </li>
      <li>
        <a<?php
if ($_obj['headerNavi'] == "at"){
?> class="home"<?php
}
?> title="提醒" href="./notification.php"><span class="web-icon nav-at"></span>提醒</a>
      </li>
      <li>
        <a<?php
if ($_obj['headerNavi'] == "me"){
?> class="home"<?php
}
?> title="我" href="./user.php"><span class="web-icon nav-me"></span>我</a>
      </li>
    </ul>
    <div class="right-nav">
      <div class="search">
        <form method="get" action="search.php" onsubmit="return searchPHPSay();">
          <input id="search-query" class="search-input" type="text" spellcheck="false" autocomplete="off" name="q" placeholder="搜索">
          <span class="search-icon">
            <button class="web-icon nav-search" type="submit" tabindex="-1"></button>
          </span>
          <input id="search-query-hint" class="search-input search-hinting-input" type="text" spellcheck="false" autocomplete="off" disabled="disabled">
        </form>
      </div>
      <div class="settings">
        <a id="settings"<?php
if ($_obj['headerNavi'] == "settings"){
?> class="home"<?php
}
?> title="设置" href="./settings.php"><span class="web-icon nav-settings"></span></a>
        <div class="dropdown-menu">
          <div class="arrow-top"></div>
          <ul>
            <li><a href="./settings.php">头像</a></li>
            <li><a href="./settings.php?with=email">邮箱</a></li>
            <li><a href="./settings.php?with=password">密码</a></li>
            <li class="logout"><a href="./passport.php?do=logout">退出</a></li>
          </ul>
        </div>
      </div>
      <div class="web-bg write">
        <a class="web-bg write-btn" title="撰写新微文" href="#write"><i class="web-icon nav-write"></i></a>
      </div>
      <script>rightNavBind();</script>
    </div>
  </div>
</div>
<?php
} else {
?>
<div class="header web-bg">
  <div class="top-nav">
    <ul class="left-nav">
      <li><a title="<?php
echo $_obj['PHPSayConfig']['sitename'];
?>
" href="./"><span class="web-icon nav-home"></span><?php
echo $_obj['PHPSayConfig']['sitename'];
?>
</a></li>
    </ul>
    <div class="right-nav">
      <div class="search">
        <form method="get" action="search.php" onsubmit="return searchPHPSay();">
          <input id="search-query" class="search-input" type="text" spellcheck="false" autocomplete="off" name="q" placeholder="搜索">
          <span class="search-icon">
            <button class="web-icon nav-search" type="submit" tabindex="-1"></button>
          </span>
          <input id="search-query-hint" class="search-input search-hinting-input" type="text" spellcheck="false" autocomplete="off" disabled="disabled">
        </form>
      </div>
      <div class="signin">
        <a onclick="goSignIn();"><small>已有账号?</small>登录</a>
      </div>
    </div>
  </div>
</div>
<?php
}
?>
  <div class="container">
    <div class="dashboard ">
      <div class="bar-nav">
	<ul class="nav-links">
		<li><a class="first-child<?php
if ($_obj['adminNavi'] == "sponsor"){
?> active<?php
}
?>" href="admin_sponsor.php">链接管理<i class="web-icon chev-right"></i></a></li>
		<li><a<?php
if ($_obj['adminNavi'] == "club"){
?> class="active"<?php
}
?> href="admin_club.php">类目管理<i class="web-icon chev-right"></i></a></li>
		<li><a<?php
if ($_obj['adminNavi'] == "member"){
?> class="active"<?php
}
?> href="admin_member.php">会员管理<i class="web-icon chev-right"></i></a></li>
		<li><a class="last-child<?php
if ($_obj['adminNavi'] == "cache"){
?> active<?php
}
?>" href="admin_cache.php">更新模版缓存<i class="web-icon chev-right"></i></a></li>
	</ul>
</div>    
      <div class="site-footer">
  <div class="footer-inner">
    <div class="footer-copyright">&copy; 2014 PHPSay. Version: <?php
echo $_obj['PHPSayConfig']['version'];
?>
</div>
  </div>
</div>
    </div>
    <div class="content">
      <div class="content-header">
        <div class="header-inner">
          <h2><?php
echo $_obj['memberList']['count'];
?>
 位会员</h2>
        </div>
      </div>
      <ol class="stream-items">
        <?php
if (!empty($_obj['memberList']['list'])){
if (!is_array($_obj['memberList']['list']))
$_obj['memberList']['list']=array(array('list'=>$_obj['memberList']['list']));
$_tmp_arr_keys=array_keys($_obj['memberList']['list']);
if ($_tmp_arr_keys[0]!='0')
$_obj['memberList']['list']=array(0=>$_obj['memberList']['list']);
$_stack[$_stack_cnt++]=$_obj;
foreach ($_obj['memberList']['list'] as $rowcnt=>$v) {
if (is_array($v)) $list=$v; else $list=array();
$list['ROWVAL']=$v;
$list['ROWCNT']=$rowcnt;
$list['ROWBIT']=$rowcnt%2;
$_obj=&$list;
?>
        <li class="stream-item">
          <div class="stream-content">
            <a href="user.php?id=<?php
echo $_obj['uid'];
?>
" class="item-user"><img class="item-avatar" src="<?php
echo $_obj['avatar'];
?>
" alt="<?php
echo $_obj['nickname'];
?>
"><strong class="item-nickname"><?php
echo $_obj['nickname'];
?>
</strong></a>
            <small class="time">社区币：<?php
echo $_obj['balance'];
?>
</small>
            <p class="item-message">
              <span class="web-icon icon-group<?php
echo $_obj['groupid'];
?>
"></span>
              <?php
if ($_obj['qqid'] != ""){
?><span class="icon-qq" title="QQ互联"></span><?php
}
?>
              <?php
if ($_obj['password'] != ""){
?><span class="web-icon icon-password" title="已设置密码"></span><?php
}
?>
              <?php
if ($_obj['email'] != ""){
?><br>邮箱地址：<a href="mailto:<?php
echo $_obj['email'];
?>
"><?php
echo $_obj['email'];
?>
</a><?php
}
?>
              <br>注册时间：<?php
echo $_obj['regtime'];
?>

              <?php
if ($_obj['logintime'] != ""){
?><br>最后登录：<?php
echo $_obj['logintime'];
?>
<?php
}
?>
              <?php
if ($_obj['topictime'] != ""){
?><br>最后主题：<a href="user.php?id=<?php
echo $_obj['uid'];
?>
" target="_blank"><?php
echo $_obj['topictime'];
?>
</a><?php
}
?>
              <?php
if ($_obj['replytime'] != ""){
?><br>最后回复：<a href="user.php?id=<?php
echo $_obj['uid'];
?>
&list=reply" target="_blank"><?php
echo $_obj['replytime'];
?>
</a><?php
}
?>
            </p>
          </div>
        </li>
        <?php
}
$_obj=$_stack[--$_stack_cnt];}
?>
      </ol>
      <div class="stream-footer">
        <div class="stream-end-inner">
          <?php
if ($_obj['memberList']['page']['Total'] > "1"){
?>
            <?php
if ($_obj['memberList']['page']['Prev'] != ""){
?>
            <a href="<?php
echo $_obj['memberList']['page']['Prefix'];
?>
<?php
echo $_obj['memberList']['page']['Prev'];
?>
">上一页</a>
            <?php
if ($_obj['memberList']['page']['Next'] != ""){
?>
            <span class="pagination"><?php
echo $_obj['memberList']['page']['Current'];
?>
 / <?php
echo $_obj['memberList']['page']['Total'];
?>
</span>
            <?php
}
?>
            <?php
}
?>
            <?php
if ($_obj['memberList']['page']['Next'] != ""){
?>
            <a href="<?php
echo $_obj['memberList']['page']['Prefix'];
?>
<?php
echo $_obj['memberList']['page']['Next'];
?>
">下一页</a>
            <?php
}
?>
          <?php
} else {
?>
            <span class="pagination"><?php
if ($_obj['memberList']['count'] > "0"){
?>已加载全部会员<?php
} else {
?>暂无提醒<?php
}
?></span>
          <?php
}
?>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="alert-messages">
    <div class="message">
      <span class="message-text"></span>
    </div>
  </div>
</body>
</html>