<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>设置 - <?php
echo $_obj['PHPSayConfig']['sitename'];
?>
</title>
  <link rel="stylesheet" type="text/css" media="screen" href="static/phpsay.css" />
  <script type="text/javascript" src="static/jquery.js"></script>
  <script type="text/javascript" src="static/phpsay.global.js"></script>
  <?php
if ($_obj['settingType'] == "avatar"){
?>
  <script type="text/javascript" src="static/jquery.uploadify.min.js"></script>
  <script type="text/javascript" src="static/phpsay.upload.js"></script>
  <link rel="stylesheet" type="text/css" media="screen" href="static/uploadify.css" />
  <?php
}
?>
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
      <div class="mini-profile">
  <div class="profile-summary">
    <a href="user.php">
      <div class="profile-content">
        <img src="<?php
echo $_obj['loginInfo']['avatar'];
?>
" id="profile-avatar"><b><?php
echo $_obj['loginInfo']['nickname'];
?>
</b><small>查看我的个人页</small>
      </div>
    </a>
  </div>
  <div class="profile-bottom">
    <script type="text/javascript">showNotifications();</script>
    <a href="javascript:;" onclick="notificationRequest();" class="notify-count"><strong><?php
echo $_obj['notificationNumber'];
?>
</strong>提醒</a>
    <a href="user.php?list=favorite" class="favorite-count"><strong><?php
echo $_obj['favoriteNumber'];
?>
</strong>收藏</a>
    <a href="balance.php" class="balance-count"><strong><?php
echo $_obj['memberBalance'];
?>
</strong>社区币</a>
  </div>
</div>
      <div class="bar-nav">
        <ul class="nav-links">
          <li><a class="first-child<?php
if ($_obj['settingType'] == "avatar"){
?> active<?php
}
?>" href="settings.php">头像<i class="web-icon chev-right"></i></a></li>
          <li><a<?php
if ($_obj['settingType'] == "email"){
?> class="active"<?php
}
?> href="settings.php?with=email">邮箱<i class="web-icon chev-right"></i></a></li>
          <li><a class="last-child<?php
if ($_obj['settingType'] == "password"){
?> active<?php
}
?>" href="settings.php?with=password">密码<i class="web-icon chev-right"></i></a></li>
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
      <?php
if ($_obj['settingType'] == "avatar"){
?>
        <div class="content-header">
          <div class="header-inner">
            <h2>头像</h2>
          </div>
        </div>
        <div class="setting-profile">
          <div class="setting-inner">
            <label class="avatar-label">头像</label>
            <img src="<?php
echo $_obj['userInfo']['avatar'];
?>
" class="current-avatar">
            <div class="select-avatar">
              <input type="file" name="avatar-file" id="avatar-file">
            </div>
          </div>
        </div>
        <div class="setting-footer">
          <div class="setting-end-inner">
            <button type="button" class="setting-button">开始上传</button>
          </div>
        </div>
        <script type="text/javascript">uploadAvatar();</script>
      <?php
} elseif ($_obj['settingType'] == "email"){
?>
        <?php
if ($_obj['userInfo']['password'] == ""){
?>
          <div class="content-header">
            <div class="header-inner">
              <h2>邮箱</h2>
            </div>
          </div>
          <div class="setting-footer">
            <div class="setting-end-text">
              设置邮箱前需要先设置个人<a href="settings.php?with=password">密码</a>
            </div>
          </div>
        <?php
} else {
?>
          <form id="emailSetting" name="emailSetting" method="post">
            <div class="content-header">
              <div class="header-inner">
                <h2>邮箱</h2>
              </div>
            </div>
            <div class="setting-profile">
              <div class="setting-inner">
                <fieldset id="email_fieldset" class="control-group">
                  <label class="control-label" for="user_email" data="<?php
echo $_obj['userInfo']['email'];
?>
">邮件地址</label>
                  <div class="controls">
                    <input id="user_email" type="text" name="user_email" value="<?php
echo $_obj['userInfo']['email'];
?>
" maxlength="36">
                    <p>邮件地址为登录账号，不会公开显示。</p>
                  </div>
                </fieldset>
                <fieldset class="control-group" id="control-current-password">
                  <label class="control-label" for="current_password">当前密码</label>
                  <div class="controls">
                    <input id="current_password" type="password" name="current_password" maxlength="26">
                  </div>
                </fieldset>
              </div>
            </div>
            <div class="setting-footer">
              <div class="setting-end-inner">
                <button type="submit" class="setting-button" disabled="disabled">保存设置</button>
              </div>
            </div>
          </form>
          <script type="text/javascript">$("#emailSetting input").keyup(checkEmailInput);$("#emailSetting").submit(settingEmail);</script>
        <?php
}
?>
      <?php
} elseif ($_obj['settingType'] == "password"){
?>
      <form id="passwdSetting" name="passwdSetting" method="post">
        <div class="content-header">
          <div class="header-inner">
            <h2>密码</h2>
          </div>
        </div>
        <div class="setting-profile">
          <div class="setting-inner">
            <fieldset class="control-group<?php
if ($_obj['userInfo']['password'] == ""){
?> hidden<?php
}
?>" id="control-current-password">
              <label class="control-label" for="current_password">当前密码</label>
              <div class="controls">
                <input id="current_password" type="password" name="current_password" maxlength="26">
              </div>
            </fieldset>
            <fieldset class="control-group" id="control-user-password">
              <label class="control-label" for="user_password"><?php
if ($_obj['userInfo']['password'] == ""){
?>设置<?php
} else {
?>新<?php
}
?>密码</label>
              <div class="controls">
                <input id="user_password" type="password" name="user_password" maxlength="26">
              </div>
            </fieldset>
            <fieldset class="control-group">
              <label class="control-label" for="user_password_confirmation">确认密码</label>
              <div class="controls">
                <input id="user_password_confirmation" type="password" name="user_password_confirmation" maxlength="26">
              </div>
            </fieldset>
          </div>
        </div>
        <div class="setting-footer">
          <div class="setting-end-inner">
            <button type="submit" class="setting-button" disabled="disabled">保存设置</button>
          </div>
        </div>
      </form>
      <script type="text/javascript">$("#passwdSetting input").keyup(checkPasswordInput);$("#passwdSetting").submit(settingPassword);</script>
      <?php
}
?>
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