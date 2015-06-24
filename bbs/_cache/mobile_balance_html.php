<?php
include "./extensions/order_status.php";
include "./extensions/balance_type.php";
include "./extensions/abs.php";

?><!DOCTYPE html>
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
          <a class="tab" href="./user.php">主题</a>
          <a class="tab" href="./user.php?list=reply">回复</a>
          <a class="tab" href="./user.php?list=favorite">收藏</a>
          <a class="tab<?php
if ($_obj['balanceType'] == ""){
?> current<?php
}
?>" href="./balance.php">账户</a>
          <a class="tab<?php
if ($_obj['balanceType'] == "0"){
?> current<?php
}
?>" href="./balance.php?type=recharge">充值记录</a>
        </div>
        <div class="cell">
          <h3>账户余额：<?php
echo $_obj['memberBalance'];
?>
</h3>
        </div>
        <?php
if ($_obj['balanceType'] == "0"){
?>
          <?php
if (!empty($_obj['resultsList']['list'])){
if (!is_array($_obj['resultsList']['list']))
$_obj['resultsList']['list']=array(array('list'=>$_obj['resultsList']['list']));
$_tmp_arr_keys=array_keys($_obj['resultsList']['list']);
if ($_tmp_arr_keys[0]!='0')
$_obj['resultsList']['list']=array(0=>$_obj['resultsList']['list']);
$_stack[$_stack_cnt++]=$_obj;
foreach ($_obj['resultsList']['list'] as $rowcnt=>$v) {
if (is_array($v)) $list=$v; else $list=array();
$list['ROWVAL']=$v;
$list['ROWCNT']=$rowcnt;
$list['ROWBIT']=$rowcnt%2;
$_obj=&$list;
?>
            <div class="cell">
              <div class="item">
                  <span class="item-column"><?php
echo $_obj['dateline'];
?>
</span>
                  <span class="item-point">•</span>
                  <span class="item-column"><?php
echo $_obj['currency'];
?>
 <?php
echo $_obj['amount'];
?>
 / 社区币 <?php
echo $_obj['coin'];
?>
</span>
                  <span class="item-point">•</span>
                  <span class="item-column"><?php
echo _order_status($_obj['status']);
?>
</span>
              </div>
            </div>
          <?php
}
$_obj=$_stack[--$_stack_cnt];}
?>
        <?php
} else {
?>
          <?php
if (!empty($_obj['resultsList']['list'])){
if (!is_array($_obj['resultsList']['list']))
$_obj['resultsList']['list']=array(array('list'=>$_obj['resultsList']['list']));
$_tmp_arr_keys=array_keys($_obj['resultsList']['list']);
if ($_tmp_arr_keys[0]!='0')
$_obj['resultsList']['list']=array(0=>$_obj['resultsList']['list']);
$_stack[$_stack_cnt++]=$_obj;
foreach ($_obj['resultsList']['list'] as $rowcnt=>$v) {
if (is_array($v)) $list=$v; else $list=array();
$list['ROWVAL']=$v;
$list['ROWCNT']=$rowcnt;
$list['ROWBIT']=$rowcnt%2;
$_obj=&$list;
?>
            <div class="cell">
              <div class="item">
                  <span class="item-column"><?php
echo $_obj['dateline'];
?>
</span>
                  <span class="item-point">•</span>
                  <span class="item-column">
                  <?php
if ($_obj['tid'] > "0"){
?><a href="./t.php?id=<?php
echo $_obj['tid'];
?>
"><?php
echo _balance_type($_obj['typeid']);
?>
</a><?php
} else {
?><?php
echo _balance_type($_obj['typeid']);
?>
<?php
}
?>
                  </span>
                  <span class="item-point">•</span>
                  <span class="item-column"><?php
if ($_obj['amount'] > "0"){
?>收入 <?php
echo $_obj['amount'];
?>
<?php
} else {
?>支出 <?php
echo _abs($_obj['amount']);
?>
<?php
}
?></span>
                  <span class="item-point">•</span>
                  <span class="item-column">余额 <?php
echo $_obj['balance'];
?>
</span>
              </div>
            </div>
          <?php
}
$_obj=$_stack[--$_stack_cnt];}
?>
        <?php
}
?>
        <div class="inner">
          <?php
if ($_obj['resultsList']['page']['Total'] > "1"){
?>
            <?php
if ($_obj['resultsList']['page']['Prev'] != ""){
?>
            <a href="<?php
echo $_obj['resultsList']['page']['Prefix'];
?>
<?php
echo $_obj['resultsList']['page']['Prev'];
?>
" class="page prev">上一页</a>
            <?php
}
?>
            <?php
if ($_obj['resultsList']['page']['Next'] != ""){
?>
            <a href="<?php
echo $_obj['resultsList']['page']['Prefix'];
?>
<?php
echo $_obj['resultsList']['page']['Next'];
?>
" class="page next">下一页</a>
            <?php
}
?>
            <strong><?php
echo $_obj['resultsList']['page']['Current'];
?>
 / <?php
echo $_obj['resultsList']['page']['Total'];
?>
</strong>
          <?php
} else {
?>
            <strong><?php
if ($_obj['resultsList']['count'] > "0"){
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