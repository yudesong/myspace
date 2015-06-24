<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>通讯录管理</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>		
    <link rel="stylesheet" href="css/style.css"/>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.min.js"></script>	
</head>
<body>

<div class="container-fluid">
	<form class="form-horizontal" method="post" action="check_user.php">
	  <fieldset>
	    <legend>用户登陆</legend>
	    <div class="control-group">
	      <label class="control-label" for="username">用户名:</label>
	      <div class="controls">
	        <input type="text" class="input-xlarge" id="name" name="name">
	      </div>
	    </div>
	    <div class="control-group">
	      <label class="control-label" for="password">密&nbsp;&nbsp;&nbsp;码:</label>
	      <div class="controls">
	        <input type="password" class="input-xlarge" id="passwd" name="passwd">
	      </div>
	    </div>
	    <div class="form-actions">
	      <button type="submit" class="btn btn-primary">登陆</button>
	      &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary">退出</button>		  
	    </div>
	  </fieldset>
	</form>
 </div>
</body>
<html>