<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta content="width=device-width, height=device-height, user-scalable=no" name="viewport">
  <title><?php
echo $_obj['PHPSayConfig']['sitename'];
?>
</title>
  <meta name="description" content="微社区，轻交流！"/>
  <meta name="keywords" content="微社区, <?php
echo $_obj['PHPSayConfig']['sitename'];
?>
" />
  <link rel="stylesheet" type="text/css" media="screen" href="mobile_static/flat.css" />
  <link rel="apple-touch-icon" href="mobile_static/apple-touch-icon.png" />
  <script type="text/javascript" src="static/jquery.js"></script>
  <script type="text/javascript" src="mobile_static/mobile.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    <?php
if ($_obj['connectArray']['connect'] != ""){
?>
    $("#joinForm").submit(joinPHPSay);
    <?php
} else {
?>
    $("#loginForm").submit(loginPHPSay);
    <?php
}
?>
  });
  </script>
  <script>

</script>
</head>
<body>
  <div class="header"><div class="logo"><a href="./"></a></div></div>
  <div id="wrapper">
    <div class="content">
      <?php
if ($_obj['connectArray']['connect'] != ""){
?>
      <div class="box">
        <div class="cell">
          <div class="navigation">
    			<?php
if ($_obj['connectArray']['connect'] == "QQ"){
?>
    			您已成功使用QQ互联功能连接！
    			<?php
}
?>
          </div>
        </div>
        <div class="inner">
          <form id="joinForm" method="post" action="./connect.php?do=Join">
            <div class="current-avatar">
              <img src="<?php
if ($_obj['connectArray']['avatar'] != ""){
?><?php
echo $_obj['connectArray']['avatar'];
?>
<?php
} else {
?>static/avatar.jpg<?php
}
?>">
              <div class="text-input">
                <input id="nickname" type="text" value="<?php
echo $_obj['connectArray']['nickname'];
?>
" maxlength="12" placeholder="昵称" name="nickname" autocorrect="off" autocapitalize="off">
              </div>
            </div>
            <input class="submit-button" type="submit" value="设定昵称">
          </form>
        </div>
      </div>
      <?php
} else {
?>
      <div class="box">
        <div class="cell">
          <div class="navigation">您需要登录后才能继续访问</div>
        </div>
        <div class="inner">
          <form id="loginForm" method="post" action="./passport.php?do=Login">
            <div class="user-input">
              <input id="account" type="text" maxlength="36" placeholder="邮箱或昵称" name="account" autocorrect="off" autocapitalize="off">
            </div>
            <div class="user-password">
              <div class="input-password">
                <input id="password" type="password" maxlength="26" placeholder="密码" name="password" autocorrect="off" autocapitalize="off">
              </div>
              <a class="find-password" href="./passport.php?do=password">找回密码</a>
            </div>
            <input class="submit-button" type="submit" value="登 录">
          </form>
        </div>
      </div>
      <div class="sep5"></div>
      <div class="box">
        <div class="cell">
          <div class="navigation">使用第三方帐号快速登录</div>
        </div>
        <div class="inner" style="text-align:center">
          <button class="qqconnect" onclick="location.href='./connect.php?do=QQLogin';"></button>
        </div>
      </div>      
      <?php
}
?>
    </div>
  </div>
  <div class="footer">
	&copy; 2014 PHPSay.com
</div>
</body>
</html>