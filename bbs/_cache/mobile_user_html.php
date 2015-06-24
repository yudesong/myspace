<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta content="width=device-width, height=device-height, user-scalable=no" name="viewport">
  <title><?php
echo $_obj['PHPSayConfig']['sitename'];
?>
</title>
  <link rel="stylesheet" type="text/css" media="screen" href="mobile_static/flat.css" />
  <script type="text/javascript" src="static/jquery.js"></script>
  <script type="text/javascript" src="mobile_static/mobile.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('.item-image img').click(imageZoom);
  });
  </script>
  <script>

</script>
</head>
<body>
  <div class="header">
  <div class="logo"><a href="./"></a></div>
  <div class="navi">
    <?php
if ($_obj['loginInfo']['uid'] > "0"){
?>
      <a class="user" href="user.php"><img src="<?php
echo $_obj['loginInfo']['avatar'];
?>
"></a>
      <a class="setting" href="settings.php"></a>
      <a class="logout" href="passport.php?do=logout"></a>
    <?php
} else {
?>
      <a class="login" href="passport.php">登录</a>
    <?php
}
?>
  </div>
</div>
  <div id="wrapper">
    <div class="content">
      <div class="box">
        <div class="cell">
          <a class="tab<?php
if ($_obj['postType'] == "topic"){
?> current<?php
}
?>" href="./user.php<?php
if ($_obj['userInfo']['uid'] != $_obj['loginInfo']['uid']){
?>?id=<?php
echo $_obj['userInfo']['uid'];
?>
<?php
}
?>">主题</a>
          <a class="tab<?php
if ($_obj['postType'] == "reply"){
?> current<?php
}
?>" href="./user.php?list=reply<?php
if ($_obj['userInfo']['uid'] != $_obj['loginInfo']['uid']){
?>&id=<?php
echo $_obj['userInfo']['uid'];
?>
<?php
}
?>">回复</a>
          <?php
if ($_obj['userInfo']['uid'] == $_obj['loginInfo']['uid']){
?>
          <a class="tab<?php
if ($_obj['postType'] == "favorite"){
?> current<?php
}
?>" href="./user.php?list=favorite">收藏</a>
          <a class="tab" href="./balance.php">账户</a>
          <?php
}
?>
        </div>
        <div class="cell">
          <h3>
          <?php
if ($_obj['postType'] == "topic"){
?>
            <?php
if ($_obj['userInfo']['uid'] == $_obj['loginInfo']['uid']){
?>我<?php
} else {
?><?php
echo $_obj['userInfo']['nickname'];
?>
<?php
}
?>发布的主题
          <?php
} elseif ($_obj['postType'] == "reply"){
?>
            <?php
if ($_obj['userInfo']['uid'] == $_obj['loginInfo']['uid']){
?>我<?php
} else {
?><?php
echo $_obj['userInfo']['nickname'];
?>
<?php
}
?>发表的回复
          <?php
} elseif ($_obj['postType'] == "favorite"){
?>
            我的收藏
          <?php
}
?>
          </h3>
        </div>
        <?php
if (!empty($_obj['postList']['list'])){
if (!is_array($_obj['postList']['list']))
$_obj['postList']['list']=array(array('list'=>$_obj['postList']['list']));
$_tmp_arr_keys=array_keys($_obj['postList']['list']);
if ($_tmp_arr_keys[0]!='0')
$_obj['postList']['list']=array(0=>$_obj['postList']['list']);
$_stack[$_stack_cnt++]=$_obj;
foreach ($_obj['postList']['list'] as $rowcnt=>$v) {
if (is_array($v)) $list=$v; else $list=array();
$list['ROWVAL']=$v;
$list['ROWCNT']=$rowcnt;
$list['ROWBIT']=$rowcnt%2;
$_obj=&$list;
?>
          <div class="cell" id="topic-<?php
echo $_obj['tid'];
?>
">
            <div class="item">
              <div class="item-avatar"><a href="./user.php?id=<?php
echo $_obj['uid'];
?>
"><img src="<?php
echo $_obj['avatar'];
?>
" alt="<?php
echo $_obj['nickname'];
?>
"></a></div>
              <?php
if ($_stack[0]['postType'] == "favorite"){
?><div class="item-nickname"><a href="./user.php?id=<?php
echo $_obj['uid'];
?>
"><?php
echo $_obj['nickname'];
?>
</a></div><?php
}
?>
               <div class="item-message"><?php
echo $_obj['message'];
?>
</div>
               <?php
if ($_obj['smallimg'] != ""){
?><div class="item-image"><img src="<?php
echo $_obj['smallimg'];
?>
" rel="<?php
echo $_obj['bigimage'];
?>
"></div><?php
}
?>
               <div class="item-info">
                <?php
if ($_stack[0]['postType'] == "topic"){
?>
                  <a href="./?cid=<?php
echo $_obj['cid'];
?>
"><?php
echo $_obj['clubname'];
?>
</a>
                  <span class="point">•</span>
                  <a href="./t.php?id=<?php
echo $_obj['tid'];
?>
"><?php
echo $_obj['posttime'];
?>
</a>
                  <span class="point">•</span>
                  <a href="./t.php?id=<?php
echo $_obj['tid'];
?>
"><?php
if ($_obj['comments'] > "0"){
?><strong><?php
echo $_obj['comments'];
?>
</strong> <?php
} else {
?>暂无<?php
}
?>回复</a>
                <?php
} elseif ($_stack[0]['postType'] == "reply"){
?>
                  <a href="./t.php?id=<?php
echo $_obj['tid'];
?>
#reply<?php
echo $_obj['pid'];
?>
"><?php
echo $_obj['posttime'];
?>
</a>
                <?php
} elseif ($_stack[0]['postType'] == "favorite"){
?>
                  <a href="./t.php?id=<?php
echo $_obj['tid'];
?>
"><?php
echo $_obj['posttime'];
?>
</a>
                  <div class="action">
                    <a id="topicFav" onclick="unFavoriteTopic(<?php
echo $_obj['tid'];
?>
);" class="favorited">取消收藏</a>
                  </div>
                <?php
}
?>
              </div>
            </div>
          </div>
        <?php
}
$_obj=$_stack[--$_stack_cnt];}
?>
        <div class="inner">
          <?php
if ($_obj['postList']['page']['Total'] > "1"){
?>
            <?php
if ($_obj['postList']['page']['Prev'] != ""){
?>
            <a href="<?php
echo $_obj['postList']['page']['Prefix'];
?>
<?php
echo $_obj['postList']['page']['Prev'];
?>
" class="page prev">上一页</a>
            <?php
}
?>
            <?php
if ($_obj['postList']['page']['Next'] != ""){
?>
            <a href="<?php
echo $_obj['postList']['page']['Prefix'];
?>
<?php
echo $_obj['postList']['page']['Next'];
?>
" class="page next">下一页</a>
            <?php
}
?>
            <strong><?php
echo $_obj['postList']['page']['Current'];
?>
 / <?php
echo $_obj['postList']['page']['Total'];
?>
</strong>
          <?php
} else {
?>
            <strong><?php
if ($_obj['postList']['count'] > "0"){
?>已加载全部数据<?php
} else {
?>暂无数据<?php
}
?></strong>
          <?php
}
?>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
	&copy; 2014 PHPSay.com
</div>
</body>
</html>