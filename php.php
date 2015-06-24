<!DOCTYPE html>   
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel='stylesheet'  href='css/shCoreDefault.css' type='text/css' media='all' />
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link href="css/bootstrap-theme.css" rel="stylesheet"/>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>	
	<style type='text/css'>
	.syntaxhighlighter,
	.syntaxhighlighter a,
	.syntaxhighlighter div,
	.syntaxhighlighter code,
	.syntaxhighlighter table,
	.syntaxhighlighter table td,
	.syntaxhighlighter table tr,
	.syntaxhighlighter table tbody,
	.syntaxhighlighter table thead,
	.syntaxhighlighter table caption,
	.syntaxhighlighter textarea {
	font-size: 12px !important; /* Set the font size in pixels */  
	font-family: "Consolas", "Bitstream Vera Sans Mono", "Courier New", Courier, monospace !important; /* Set the font type */  
	}
.syntaxhighlighter table caption {
/* For Title(Caption) */  
font-size: 14px !important; /* Set the font size in pixels */  
font-family: "Consolas", "Bitstream Vera Sans Mono", "Courier New", Courier, monospace !important; /* Set the font type */  
}
.syntaxhighlighter.nogutter td.code .line {
/* Set the left padding space when no-gutter in ver. 3.0 */  
padding-left: 3px !important;
}
.syntaxhighlighter {
/* For Chrome/Safari(WebKit) */  
/* Hide the superfluous vertical scrollbar in ver. 3.0 */  
overflow-y: hidden !important;
padding: 1px !important;
}
.widget-area.syntaxhighlighter a,
.widget-area.syntaxhighlighter div,
.widget-area.syntaxhighlighter code,
.widget-area.syntaxhighlighter table,
.widget-area.syntaxhighlighter table td,
.widget-area.syntaxhighlighter table tr,
.widget-area.syntaxhighlighter table tbody,
.widget-area.syntaxhighlighter table thead,
.widget-area.syntaxhighlighter table caption,
.widget-area.syntaxhighlighter textarea {
/* For Widget */  
font-size: 14px !important; /* Set the font size in pixels */  
font-family: "Consolas", "Bitstream Vera Sans Mono", "Courier New", Courier, monospace !important; /* Set the font type */  
}
.widget-area table caption {
/* For Widget */  
/* For Title(Caption) */  
font-size: 10px !important; /* Set the font size in pixels */  
font-family: "Consolas", "Bitstream Vera Sans Mono", "Courier New", Courier, monospace !important; /* Set the font type */  
}
</style>
<!-- WP SyntaxHighlighter Ver.1.7.3 CSS for code End -->
	
	<!-- CSS -->
	<link rel="stylesheet" href="css/style.css" media="screen" />
	<!-- link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noticia+Text:400,700italic,700,400italic" media="screen" / -->
	<style>
		*::selection { background: #0099cc; }
		*::-moz-selection { background: #0099cc; }
		body { background: #ffffff  }
		a, .tabs ul.nav li a:hover, .tabs ul.nav li.active a, .dropcap, .toggle.hover .toggle-title, li.comment cite a:hover, h3.widget-title, .post-meta .meta-title:hover, .the-latest a:hover h4, .aw_socialcounter_widget li a:hover, .aw_tabbed_widget #tab-latest-comments a:hover { color: #0099cc; }
		a:hover { color: #b30000; }
		input:focus, textarea:focus { border-color: #0099cc; }
		#searchsubmit, .highlight, .aw_tabbed_widget .tabs ul.nav li.active a, footer .aw_tabbed_widget .tabs ul.nav li.active a, #top .aw_tabbed_widget .tabs ul.nav li.active a, .aw_tabbed_widget .tabs ul.nav li a:hover, footer .aw_tabbed_widget .tabs ul.nav li a:hover, #top .aw_tabbed_widget .tabs ul.nav li a:hover, .aw_twitter_widget .twitter-icon, .testimonial-icon, #top-closed:hover, .flex-control-nav a:hover, .flex-control-nav a.flex-active { background-color: #0099cc; }
		.submit { background-color: #0099cc; border-color: #007399; }
		.submit:hover { background-color: #b30000; border-color: #860000; }
		#searchsubmit:hover { background-color: #b30000; }
		.toggle.hover .toggle-icon { border-top-color: #0099cc; }
		.toggle.hover.active .toggle-icon { border-bottom-color: #0099cc; }
		.flex-direction-nav li .flex-prev:hover { border-right-color: #0099cc; }
		.flex-direction-nav li .flex-next:hover { border-left-color: #0099cc; }
		@media only screen and (min-width: 768px) and (max-width: 959px) {
			.aw_tabbed_widget .tabs ul.nav li a:hover, .tabs ul.nav li.active a { color: #0099cc; }
		}
		@media screen and (max-width: 767px) {
			.tabs ul.nav li a:hover, .tabs ul.nav li.active a { color: #0099cc; }
		}
	</style>
</head>
<body style="background-image:url(images/background1.jpg)">
	<?php
		include("background.php");
	?>
<div>
	<div style="margin-left:20px;float:left;width:30%;padding:0px;">
			<div style="background:white;margin-top:20px;width:90%;height:300px;border-radius:5px;border:1px solid black;">
			<div style="background:#ccc"><img src="images/link.png">&nbsp;日历</div>	
			<div style="margin-top:0px;">
			<Script LANGUAGE="JavaScript">
 var months = new Array("一", "二", "三","四", "五", "六", "七", "八", "九","十", "十一", "十二");
 var daysInMonth = new Array(31, 28, 31, 30, 31, 30, 31, 31,30, 31, 30, 31);
 var days = new Array("日","一", "二", "三","四", "五", "六");
 var classTemp;
 var today=new getToday();
 var year=today.year;
 var month=today.month;
 var newCal; 

 function getDays(month, year) {
  if (1 == month) return ((0 == year % 4) && (0 != (year % 100))) ||(0 == year % 400) ? 29 : 28;
  else return daysInMonth[month];
 }

 function getToday() {
  this.now = new Date();
  this.year = this.now.getFullYear();
  this.month = this.now.getMonth();
  this.day = this.now.getDate();
 }

 function Calendar() {
  newCal = new Date(year,month,1);
  today = new getToday();   
  var day = -1;
  var startDay = newCal.getDay();
  var endDay=getDays(newCal.getMonth(), newCal.getFullYear());
  var daily = 0;
  if ((today.year == newCal.getFullYear()) &&(today.month == newCal.getMonth()))
  {
   day = today.day;
  }
  var caltable = document.all.caltable.tBodies.calendar;
  var intDaysInMonth =getDays(newCal.getMonth(), newCal.getFullYear());

  for (var intWeek = 0; intWeek < caltable.rows.length;intWeek++)
   for (var intDay = 0;intDay < caltable.rows[intWeek].cells.length;intDay++)
   {
    var cell = caltable.rows[intWeek].cells[intDay];
    var montemp=(newCal.getMonth()+1)<10?("0"+(newCal.getMonth()+1)):(newCal.getMonth()+1);         
    if ((intDay == startDay) && (0 == daily)){ daily = 1;}
    var daytemp=daily<10?("0"+daily):(daily);
    var d="<"+newCal.getFullYear()+"-"+montemp+"-"+daytemp+">";
    if(day==daily) cell.className="DayNow";
    else if(intDay==6) cell.className = "DaySat";
    else if (intDay==0) cell.className ="DaySun";
    else cell.className="Day";
    if ((daily > 0) && (daily <= intDaysInMonth))
    {
     cell.innerText = daily;
     daily++;
    } else
    {
     cell.className="CalendarTD";
     cell.innerText = "";
    }
  }
  document.all.year.value=year;
  document.all.month.value=month+1;
 }

 function subMonth()
 {
  if ((month-1)<0)
  {
   month=11;
   year=year-1;
  } else
  {
   month=month-1;
  }
  Calendar();
 }

 function addMonth()
 {
  if((month+1)>11)
  {
   month=0;
   year=year+1;
  } else
  {
   month=month+1;
  }
  Calendar();
 }

 function setDate() 
 {
  if (document.all.month.value<1||document.all.month.value>12)
  {
   alert("月的有效范围在1-12之间!");
   return;
  }
  year=Math.ceil(document.all.year.value);
  month=Math.ceil(document.all.month.value-1);
  Calendar();
 }
</Script>

<Script>
function buttonOver()
{
 var obj = window.event.srcElement;
 obj.runtimeStyle.cssText = "background-color:#FFFFFF";
// obj.className="Hover";
}

function buttonOut()
{
 var obj = window.event.srcElement;
 window.setTimeout(function(){obj.runtimeStyle.cssText = "";},300);
}
</Script>

<Style>
Input {font-family: verdana;font-size: 9pt;text-decoration: none;background-color: #FFFFFF;height: 20px;border: 1px solid #666666;color:#000000;}

.Calendar {font-family: verdana;text-decoration: none;width: 170;background-color: #C0D0E8;font-size: 9pt;border:0px dotted #1C6FA5;}
.CalendarTD {font-family: verdana;font-size: 7pt;color: #000000;background-color:#f6f6f6;height: 20px;width:11%;text-align: center;}

.Title {font-family: verdana;font-size: 11pt;font-weight: normal;height: 24px;text-align: center;color: #333333;text-decoration: none;background-color: #A4B9D7;border-top-width: 1px;border-right-width: 1px;border-bottom-width: 1px;border-left-width: 1px;border-bottom-style:1px;border-top-color: #999999;border-right-color: #999999;border-bottom-color: #999999;border-left-color: #999999;}

.Day {font-family: verdana;font-size: 7pt;color:#243F65;background-color: #E5E9F2;height: 20px;width:11%;text-align: center;}
.DaySat {font-family: verdana;font-size: 7pt;color:#FF0000;text-decoration: none;background-color:#E5E9F2;text-align: center;height: 18px;width: 12%;}
.DaySun {font-family: verdana;font-size: 7pt;color: #FF0000;text-decoration: none;background-color:#E5E9F2;text-align: center;height: 18px;width: 12%;}
.DayNow {font-family: verdana;font-size: 7pt;font-weight: bold;color: #000000;background-color: #FFFFFF;height: 20px;text-align: center;}

.DayTitle {font-family: verdana;font-size: 9pt;color: #000000;background-color: #C0D0E8;height: 20px;width:11%;text-align: center;}
.DaySatTitle {font-family: verdana;font-size: 9pt;color:#FF0000;text-decoration: none;background-color:#C0D0E8;text-align: center;height: 20px;width: 12%;}
.DaySunTitle {font-family: verdana;font-size: 9pt;color: #FF0000;text-decoration: none;background-color: #C0D0E8;text-align: center;height: 20px;width: 12%;}

.DayButton {font-family: Webdings;font-size: 9pt;font-weight: bold;color: #243F65;cursor:hand;text-decoration: none;}

</Style>


<table border="0" cellpadding="0" cellspacing="1" class="Calendar" id="caltable">
<thead>
     <tr align="center" valign="middle"> 
  <td colspan="7" class="Title">
   <a href="javaScript:subMonth();" title="上一月" Class="DayButton">3</a> <input name="year" type="text" style="width:40px;" size="4" maxlength="4" onkeydown="if (event.keyCode==13){setDate()}" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"  onpaste="this.value=this.value.replace(/[^0-9]/g,'')"> 年 <input name="month" type="text" style="width:20px;" size="1" maxlength="2" onkeydown="if (event.keyCode==13){setDate()}" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"  onpaste="this.value=this.value.replace(/[^0-9]/g,'')"> 月 <a href="JavaScript:addMonth();" title="下一月" Class="DayButton">4</a>
  </td>
 </tr>
 <tr align="center" valign="middle"> 
  <Script LANGUAGE="JavaScript">  
   document.write("<TD class=DaySunTitle id=diary >" + days[0] + "</TD>"); 
   for (var intLoop = 1; intLoop < days.length-1;intLoop++) 
    document.write("<TD class=DayTitle id=diary>" + days[intLoop] + "</TD>"); 
    document.write("<TD class=DaySatTitle id=diary>" + days[intLoop] + "</TD>"); 
  </Script>
 </TR> 
</thead>
<TBODY border=1 cellspacing="0" cellpadding="0" ID="calendar" ALIGN=CENTER ONCLICK="getDiary()">
 <Script LANGUAGE="JavaScript">
  for (var intWeeks = 0; intWeeks < 6; intWeeks++)
  {
   document.write("<TR style='cursor:hand'>");
   for (var intDays = 0; intDays < days.length;intDays++) document.write("<TD class=CalendarTD onMouseover='buttonOver();' onMouseOut='buttonOut();'></TD>");
   document.write("</TR>");
  } 
 </Script>
</TBODY>
</TABLE>
<Script  LANGUAGE="JavaScript">
 Calendar();
</Script>
			</div>			
			</div>	

			<div style="background:white;margin-top:20px;width:90%;height:160px;border-radius:5px;border:1px solid black;">
			<div style="background:#ccc"><img src="images/link.png">&nbsp;公告</div>	
			<div style="padding:6px;margin-top:10px;">欢迎来到德隆的博客, 本人是程序员，热爱技术，从事互联网开发工作。没有特殊说明，博客中所有文章均为本人原创，参考的资料均保留出处，尊重版权。
			</div>
			<div style="padding:6px;">位置：中国--广州</div>
			</div>
				
			<div style="background:white;margin-top:20px;width:90%;border-radius:5px;border:1px solid black;">
			<div style="background:#ccc"><img src="images/link.png">&nbsp;友情链接</div>
			<div style="padding:6px;margin-top:10px;">
					<ul>
							<li><a href="https://github.com/yudesong">GitHub网址</a>
							<li><a href="http://weibo.com/u/2377011405">新浪博客</a>
							<li><a href="http://www.oschina.net/">开源中国</a>
							<li><a href="http://www.csdn.net/">CSDN</a>					
					</ul>		
			</div>
			</div>	
	
	</div>
	<div style="float:right;border:1px solid black;border-radius:5px;width:67%;margin-top:20px;margin-right:15px;background:white;">
<div class="grid-8">
<div class="post-78738 post type-post status-publish format-standard hentry category-webfront category-programmer tag-javascript tag-1876 odd" id="post-78738">
<div class="entry-header">
<h1>PHP基础</h1>
</div>
<div class="entry">
<h1><span style="color: #3366ff;"><strong>PHP语法</strong></span></h1>
<p><strong>基本的 PHP 语法</p></strong>
PHP 脚本以 &lt;?php 开始，以 ?&gt; 结束：</br>
<pre class="brush: javascript; gutter: true">
&lt;?php
// PHP code goes here
?&gt;
</pre>
PHP 文件通常包含 HTML 标签和一些 PHP 脚本代码。下面，我们提供了一个简单的 PHP 文件实例，它可以向浏览器输出文本 "Hello World!"：
<pre class="brush: javascript; gutter: true">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;
&lt;h1&gt;My first PHP page&lt;/h1&gt;
&lt;?php
echo "Hello World!";
?&gt;
</pre>
<p><strong>PHP 中的注释</p></strong>
<pre class="brush:javascript;gutter:true">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;
&lt;?php
//This is a PHP comment line
/*
This is
a PHP comment
block
*/
?&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p><strong>PHP 变量</p></strong>
<pre class="brush:javascript;gutter:true">
&lt;?php
$x=5;
$x=5;
$y=6;
$z=$x+$y;
echo $z;
?&gt;
</pre>
<p><strong>PHP 变量</p></strong>
PHP 变量规则：
<ul>
	<li>变量以 $ 符号开始，后面跟着变量的名称</li>
	<li>变量名必须以字母或者下划线字符开始</li>
	<li>变量名只能包含字母数字字符以及下划线（A-z、0-9 和 _ ）</li>	
	<li>变量名不能包含空格</li>	
	<li>变量名是区分大小写的（$y 和 $Y 是两个不同的变量）</li>	
</ul>
PHP 语句和 PHP 变量都是区分大小写的</br>
<p><strong>创建（声明）PHP 变量</p></strong>
<pre class="brush:javascript;gutter:true">
&lt;?php
$txt="Hello world!";
$x=5;
$y=10.5;
?&gt;
</pre>
<p><strong>PHP 变量作用域</p></strong>
<span>变量的作用域是脚本中变量可被引用/使用的部分。</span></br>
<ul>
	<li>local</li>
	<li>global</li>
	<li>static</li>
	<li>parameter</li>
</ul>
<p><strong>局部和全局作用域</strong></p>
<span>在所有函数外部定义的变量，拥有全局作用域。除了函数外，全局变量可以被脚本中的任何部分访问，要在一个函数中访问一个全局变量，需要使用 global 关键字。</br>
在 PHP 函数内部声明的变量是局部变量，仅能在函数内部访问：</span>
<pre class="brush:javascript;gutter:true">
&lt;?php
$x=5; // 全局变量
function myTest()
{
$y=10; // 局部变量
echo "&lt;p&gt;Test variables inside the function:&lt;p&gt;";
echo "Variable x is: $x";
echo "&lt;br&gt;";
echo "Variable y is: $y";
} 
myTest();
echo "&lt;p&gt;Test variables outside the function:&lt;p&gt;";
echo "Variable x is: $x";
echo "&lt;br&gt;";
echo "Variable y is: $y";
?&gt;
</pre>
<span>运行结果如下：</span>
<pre class="brush:javascript;gutter:true">
Test variables inside the function:

Variable x is: 
Variable y is: 10

Test variables outside the function:

Variable x is: 5
Variable y is:
</pre>
<p><strong>PHP global 关键字</strong></p>
<span>global 关键字用于函数内访问全局变量。</br>在函数内调用函数外定义的全局变量，我们需要在函数中的变量前加上 global 关键字：</span>
<pre class="brush:javascript;gutter:true">
&lt;?php
$x=5;
$y=10;
function myTest()
{
global $x,$y;
$y=$x+$y;
}
myTest();
echo $y; // 输出 15
?&gt;
</pre>
<span>PHP 将所有全局变量存储在一个名为 $GLOBALS[index] 的数组中。 index 保存变量的名称。这个数组可以在函数内部访问，也可以直接用来更新全局变量。</span>
</br><span>上面的实例可以写成这样：</span>
<pre class="brush:javascript;gutter:true">
&lt;?php
$x=5;
$y=10;
function myTest()
{
$GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
} 
myTest();
echo $y;
?&gt;
</pre>
<p><strong>Static 作用域</strong></p>
<span>当一个函数完成时，它的所有变量通常都会被删除。然而，有时候您希望某个局部变量不要被删除。要做到这一点，请在您第一次声明变量时使用 static 关键字：</span>
<pre class="brush:javascript;gutter:true">
&lt;?php
function myTest()
{
static $x=0;
echo $x;
$x++;
}
myTest();
myTest();
myTest();
?&gt;
</pre>
<p><strong>参数作用域</strong></p>
<span>参数是通过调用代码将值传递给函数的局部变量。</br>
参数是在参数列表中声明的，作为函数声明的一部分：</span>
<pre class="brush:javascript;gutter:true">
&lt;?php
function myTest($x)
{
echo $x;
}
myTest(5);
?&gt;
</pre>
<p><strong>PHP echo 和 print 语句</strong></p>
<span>echo 和 print 区别:</span>
<ul>
	<li>echo - 可以输出一个或多个字符串</li>
	<li>print - 只允许输出一个字符串，返回值总为 1</li>	
</ul>
<span>提示：echo 输出的速度比 print 快， echo 没有返回值，print有返回值1。</span>
<p><strong>PHP echo 语句</strong></p>
<span>echo 是一个语言结构，使用的时候可以不用加括号，也可以加上括号： echo 或 echo()。</br>
显示字符串</br>
下面的实例演示了如何使用 echo 命令输出字符串（字符串可以包含 HTML 标签）：
</span>
<pre class="brush:javascript;gutter:true">
&lt;?php
$txt1="Learn PHP";
$txt2="w3cschool.cc";
$cars=array("Volvo","BMW","Toyota");
echo $txt1;
echo "<br>";
echo "Study PHP at $txt2";
echo "My car is a {$cars[0]}";
?&gt;
</pre>
<strong>PHP print 语句</strong></br>
<span>print 同样是一个语言结构，可以使用括号，也可以不使用括号： print 或 print()。</span>
<pre class="brush:javascript;gutter:true">
&lt;?php
$txt1="Learn PHP";
$txt2="w3cschool.cc";
$cars=array("Volvo","BMW","Toyota");
print $txt1;
print "<br>";
print "Study PHP at $txt2";
print "My car is a {$cars[0]}";
?&gt;
</pre>
<p><strong>PHP 5 数据类型</strong></p><span>String（字符串）, Integer（整型）, Float（浮点型）, Boolean（布尔型）, Array（数组）, Object（对象）, NULL（空值）。</span>
<p><strong>PHP 字符串</strong></p><span>一个字符串是一串字符的序列，就像 "Hello world!"。
你可以将任何文本放在单引号和双引号中：</span><pre class='brush:javascript;gutter:true'>
&lt;?php 
$x = "Hello world!"; 
echo $x; 
echo ""; 
$x = 'Hello world!'; 
echo $x; 
?&gt;
</pre>
<p><strong>PHP 整型</strong></p>
<span>整数是一个没有小数的数字。</br>整数规则:</br>
<ul>
	<li>整数必须至少有一个数字 (0-9) </li>
	<li>整数不能包含逗号或空格</li>
	<li>整数是没有小数点的</li>
	<li>整数可以是正数或负数</li>
	<li>整型可以用三种格式来指定：十进制， 十六进制（ 以 0x 为前缀）或八进制（前缀为 0）。</li>
</ul>
在以下实例中我们将测试不同的数字。 PHP var_dump() 函数返回变量的数据类型和值：</span>
<pre class='brush:javascript;gutter:true'>
&lt;?php
$x = 5985;
var_dump($x); 
echo "";
$x = -345; // negative number var_dump($x); 
echo ""; 
$x = 0x8C; // hexadecimal number var_dump($x); 
echo ""; 
$x = 047; // octal number var_dump($x);
?&gt;
</pre>
<p><strong>PHP 浮点型</strong></p>
<span>浮点数是带小数部分的数字，或是指数形式。</br> 在以下实例中我们将测试不同的数字。 PHP var_dump() 函数返回变量的数据类型和值：</span>
<pre class='brush:javascript;gutter:true'>
&lt;?php 
$x = 10.365;
var_dump($x);
echo "";
$x = 2.4e3;
var_dump($x);
echo "";
$x = 8E-5;
var_dump($x);
?&gt;
</pre>
<p><strong>PHP 布尔型</strong></p>
<span>布尔型可以是 TRUE 或 FALSE。</span>
<pre class='brush:javascript;gutter:true'>
$x=true; 
$y=false;
</pre>
<p><strong>PHP 数组</strong></p>
<span>数组可以在一个变量中存储多个值。 </br> 在以下实例中创建了一个数组， 然后使用 PHP var_dump() 函数返回数组的数据类型和值：</span>
<pre class='brush:javascript;gutter:true'>
$cars=array("Volvo","BMW","Toyota");
var_dump($cars);
</pre>
<p><strong>PHP 对象</strong></p>
<span>对象数据类型也可以用于存储数据。 </br> 在 PHP 中，对象必须声明。 </br> 首先，你必须使用class关键字声明类对象。类是可以包含属性和方法的结构。 </br> 然后我们在类中定义数据类型，然后在实例化的类中使用数据类型：</span>
<pre class='brush:javascript;gutter:true'>
class Car 
{
	var $color;
	function Car($color="green") 
	{ 
	$this->color = $color; 
	} 
	function what_color() 
	{
	return $this->color; 
	} 
}</pre>
<p><strong>PHP NULL 值</strong></p>
<span>NULL 值表示变量没有值。NULL 是数据类型为 NULL 的值。 </br> NULL 值指明一个变量是否为空值。 同样可用于数据空值和NULL值的区别。 </br> 可以通过设置变量值为 NULL 来清空变量数据：</span>
<pre class='brush:javascript;gutter:true'>
&lt;?php 
$x="Hello world!"; 
$x=null;
var_dump($x); 
?&gt;
</pre>
<p><strong>设置 PHP 常量</strong></p>
<span>设置常量，使用 define() 函数，函数语法如下：</br>define(string constant_name, mixed value, case_sensitive = true)
该函数有三个参数:</br>
<ul>
	<li>nstant_name：必选参数，常量名称，即标志符。</li>
	<li>value：必选参数，常量的值。</li>
	<li>case_sensitive：可选参数，指定是否大小写敏感，设定为 true 表示不敏感。</li>
	<li>以下实例我们创建一个 区分大小写的常量, 常量值为 "Welcome to W3CSchool.cc!"：</li>
</ul>
</span>
<pre class='brush:javascript;gutter:true'>
&lt;?php 
define("GREETING", "Welcome to W3CSchool.cc!");
echo GREETING;
?&gt;
</pre>
<p><strong>PHP 中的字符串变量</strong></p>
<span>字符串变量用于包含有字符的值。 </br> 在创建字符串之后，我们就可以对它进行操作了。您可以直接在函数中使用字符串，或者把它存储在变量中。 </br> 在下面的实例中，我们创建一个名为 txt 的字符串变量，并赋值为 "Hello world!" 。然后我们输出 txt 变量的值：</span>
<pre class='brush:javascript;gutter:true'>
&lt;?php
$txt="Hello world!"; 
echo $txt;
?&gt;
</pre>
<p><strong>PHP 并置运算符</strong></p>
<span>在 PHP 中，只有一个字符串运算符。 </br>并置运算符 (.) 用于把两个字符串值连接起来。 </br>
下面的实例演示了如何将两个字符串变量连接在一起：</span>
<pre class='brush:javascript;gutter:true'>
&lt;?php
$txt1="Hello world!";
$txt2="What a nice day!";
echo $txt1 . " " . $txt2;
?&gt;
</pre>
<p><strong>PHP strlen() 函数</strong></p>
<span>strlen() 函数返回字符串的长度（字符数）。</span>
<pre class='brush:javascript;gutter:true'>
echo strlen("Hello world!");
</pre>
<span>上面的代码将输出：12</span>
<p><strong>PHP strpos() 函数</strong></p>
<span>strpos() 函数用于在字符串内查找一个字符或一段指定的文本。
</br>
如果在字符串中找到匹配，该函数会返回第一个匹配的字符位置。如果未找到匹配，则返回 FALSE。</span>
<pre class='brush:javascript;gutter:true'>
&lt;?php
echo strpos("Hello world!","world");
?&gt;
</pre>
<span>上面的代码将输出：6</span>
<p><strong></strong></p>
<span><img src="images/php.png"/></span>
<pre class='brush:javascript;gutter:true'>
&lt;?php
$x=10; 
$y=6;
echo ($x + $y); // 输出16
echo ($x - $y); // 输出4
echo ($x * $y); // 输出60
echo ($x / $y); // 输出1.6666666666667 
echo ($x % $y); // 输出4 
?&gt;
</pre>

<p><strong>PHP 赋值运算符</strong></p>
<span>在 PHP 中，基本的赋值运算符是 "="。它意味着左操作数被设置为右侧表达式的值。也就是说，"$x = 5" 的值是 5。</br>
<img src="images/php1.png"/>
</span>
<pre class='brush:javascript;gutter:true'>
&lt;?php
$x=10; 
echo $x; // 输出10

$y=20; 
$y += 100;
echo $y; // 输出120

$z=50;
$z -= 25;
echo $z; // 输出25

$i=5;
$i *= 6;
echo $i; // 输出30

$j=10;
$j /= 5;
echo $j; // 输出2

$k=15;
$k %= 4;
echo $k; // 输出3
?&gt;
//以下实例演示了使用不同字符串运算符得到的不同结果：
&lt;?php
$a = "Hello";
$b = $a . " world!";
echo $b; // 输出Hello world! 

$x="Hello";
$x .= " world!";
echo $x; // 输出Hello world! 
?&gt;
</pre>
<p><strong>PHP 递增/递减运算符</strong></p>
<span><img src="images/php2.png"/></span>
<pre class='brush:javascript;gutter:true'>
&lt;?php
$x=10; 
echo ++$x; // 输出11

$y=10; 
echo $y++; // 输出10

$z=5;
echo --$z; // 输出4

$i=5;
echo $i--; // 输出5
?&gt;
</pre>
<p><strong>PHP 比较运算符</strong></p>
<span><img src="images/php3.png"></span>
<pre class='brush:javascript;gutter:true'>
&lt;?php
$x=100; 
$y="100";

var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";

$a=50;
$b=90;

var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
?&gt;
</pre>
<p><strong>PHP 逻辑运算符</strong></p>
<span><img src="images/php4.png"></span>
<p><strong>PHP 数组运算符</strong></p>
<span><img src="images/php5.png"></span>
<pre class='brush:javascript;gutter:true'>
&lt;?php
$x = array("a" => "red", "b" => "green"); 
$y = array("c" => "blue", "d" => "yellow"); 
$z = $x + $y; // $x 和 $y 数组合并
var_dump($z);
var_dump($x == $y);
var_dump($x === $y);
var_dump($x != $y);
var_dump($x <> $y);
var_dump($x !== $y);
?&gt;
</pre>
<p><strong>PHP 条件语句</strong></p>
<span>
当您编写代码时，您常常需要为不同的判断执行不同的动作。您可以在代码中使用条件语句来完成此任务。</br>
在 PHP 中，提供了下列条件语句：</br>
<ul>
<li>if 语句 - 在条件成立时执行代码</li>
<li>if...else 语句 - 在条件成立时执行一块代码，条件不成立时执行另一块代码</li>
<li>if...else if....else 语句 - 在若干条件之一成立时执行一个代码块</li>
<li>switch 语句 - 在若干条件之一成立时执行一个代码块</li>
</ul>
</span>
<pre class='brush:javascript;gutter:true'>
&lt;?php
$t=date("H");
if ($t&lt;"10")
{
echo "Have a good morning!";
}
else if ($t&lt;"20")
{
echo "Have a good day!";
}
else
{
echo "Have a good night!";
}
?&gt;
</pre>
<p><strong>PHP - switch 语句</strong></p>
<span></span>
<pre class='brush:javascript;gutter:true'>
&lt;?php
$favcolor="red";
switch ($favcolor)
{
case "red":
echo "Your favorite color is red!";
break;
case "blue":
echo "Your favorite color is blue!";
break;
case "green":
echo "Your favorite color is green!";
break;
default:
echo "Your favorite color is neither red, blue, or green!";
}
?&gt;
</pre>
<p><strong>PHP 数组</strong></p>
<span>数组能够在单个变量中存储多个值：</span>
<pre class="brush:javascript;gutter:true">
&lt;?php
$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?&gt;
</pre>
<p><strong>在 PHP 中创建数组</strong></p>
<span>
在 PHP 中，有三种类型的数组：</br>
<ul>
	<li>数值数组 - 带有数字 ID 键的数组</li>
	<li>关联数组 - 带有指定的键的数组，每个键关联一个值</li>
	<li>多维数组 - 包含一个或多个数组的数组</li>
</ul>
</span>
<p><strong>获取数组的长度 - count() 函数</strong></p>
<span>count() 函数用于返回数组的长度（元素的数量）：<span>
<pre class="brush:javascript;gutter:true">
&lt;?php
$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);

for($x=0;$x&lt;$arrlength;$x++)
{
echo $cars[$x];
echo "&lt;br&gt;";
}
?&gt;
</pre>
<p><strong>PHP 关联数组</strong></p>
<span>关联数组是使用您分配给数组的指定的键的数组。</br>
这里有两种创建关联数组的方法：</br>
<pre class="brush:javascript;gutter:true">
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
</pre>
or:
<pre class="brush:javascript;gutter:true">
$age['Peter']="35";
$age['Ben']="37";
$age['Joe']="43";
</pre>
<span>遍历关联数组</span>
<pre class="brush:javascript;gutter:true">
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

foreach($age as $x=>$x_value)
{
echo "Key=" . $x . ", Value=" . $x_value;
echo "&lt;br&gt;";
}
</pre>
</span>
<p><strong>PHP - 数组排序函数</strong></p>
<span>
<ul>
	<li>sort() - 对数组进行升序排列</li>
	<li>rsort() - 对数组进行降序排列</li>
	<li>asort() - 根据关联数组的值，对数组进行升序排列</li>
	<li>ksort() - 根据关联数组的键，对数组进行升序排列</li>
	<li>arsort() - 根据关联数组的值，对数组进行降序排列</li>
	<li>krsort() - 根据关联数组的键，对数组进行降序排列</li>
</ul>
</span>
<p><strong>PHP 超级全局变量</strong></p>
<span>
PHP中预定义了几个超级全局变量（superglobals） ，这意味着它们在一个脚本的全部作用域中都可用。 你不需要特别说明，就可以在函数及类中使用。</br>
PHP 超级全局变量列表:</br>
<ul>
	<li>$GLOBALS</li>
	<li>$_SERVER</li>
	<li>$_REQUEST</li>
	<li>$_POST</li>
	<li>$_GET</li>
	<li>$_FILES</li>
	<li>$_ENV</li>
	<li>$_COOKIE</li>
	<li>$_SESSION</li>
</ul>
</span>
<p><strong>PHP $GLOBAL</strong></p>
<span>$GLOBAL 是PHP的一个超级全局变量组，在一个PHP脚本的全部作用域中都可以访问。</br>
$GLOBAL 是一个包含了全部变量的全局组合数组。变量的名字就是数组的键。</br>
以下实例介绍了如何使用超级全局变量 $GLOBAL:</br>
</span>
<pre class="brush:javascript;gutter:true">
&lt;?php 
$x = 75; 
$y = 25;
 
function addition() 
{ 
$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
}
addition(); 
echo $z; 
?&gt;
</pre>


<p><strong>PHP $_SERVER</strong></p>
<span>
$_SERVER 是一个包含了诸如头信息(header)、路径(path)、以及脚本位置(script locations)等等信息的数组。这个数组中的项目由 Web 服务器创建。不能保证每个服务器都提供全部项目；服务器可能会忽略一些，或者提供一些没有在这里列举出来的项目。
</br>
以下实例中展示了如何使用$_SERVER中的元素:
</span>
<pre class="brush:javascript;gutter:true">
&lt;?php 
echo $_SERVER['PHP_SELF'];
echo "&lt;br&gt;";
echo $_SERVER['SERVER_NAME'];
echo "&lt;br&gt;";
echo $_SERVER['HTTP_HOST'];
echo "&lt;br&gt;";
echo $_SERVER['HTTP_REFERER'];
echo "&lt;br&gt;";
echo $_SERVER['HTTP_USER_AGENT'];
echo "&lt;br&gt;";
echo $_SERVER['SCRIPT_NAME'];
?&gt;
</pre>

<p><strong>PHP $_REQUEST</strong></p>
<span>
PHP $_REQUEST 用于收集HTML表单提交的数据。
</br>
以下实例显示了一个输入字段（input）及提交按钮(submit)的表单(form)。 当用户通过点击 "Submit" 按钮提交表单数据时, 表单数据将发送至<form>标签中 action 属性中指定的脚本文件。 在这个实例中，我们指定文件来处理表单数据。如果你希望其他的PHP文件来处理该数据，你可以修改该指定的脚本文件名。 然后，我们可以使用超级全局变量 $_REQUEST 来收集表单中的 input 字段数据:
</span>
<pre class="brush:javascript;gutter:true">
&lt;html&gt;
&lt;body&gt;

&lt;form method="post" action="&lt;?php echo $_SERVER['PHP_SELF'];?&gt;"&gt;
Name: &lt;input type="text" name="fname"&gt;
&lt;input type="submit"&gt;
&lt;/form&gt;
&lt;?php 
$name = $_REQUEST['fname']; 
echo $name; 
?&gt;
</body>
</html>
</pre>
<p><strong>PHP $POST</strong></p>
<span>
PHP $_POST 被广泛应用于收集表单数据，在HTML form标签的指定该属性："method="post"。
</br>
以下实例显示了一个输入字段（input）及提交按钮(submit)的表单(form)。 当用户通过点击 "Submit" 按钮提交表单数据时, 表单数据将发送至<form>标签中 action 属性中指定的脚本文件。 在这个实例中，我们指定文件来处理表单数据。如果你希望其他的PHP文件来处理该数据，你可以修改该指定的脚本文件名。 然后，我们可以使用超级全局变量 $_POST 来收集表单中的 input 字段数据:
</span>
<pre class="brush:javascript;gutter:true">
&lt;html&gt;
&lt;body&gt;

&lt;form method="post" action="&lt;?php echo $_SERVER['PHP_SELF'];?&gt;"&gt;
Name: &lt;input type="text" name="fname"&gt;
&lt;input type="submit"&gt;
&lt;/form&gt;
&lt;?php 
$name = $_POST['fname']; 
echo $name; 
?&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>

<p><strong>PHP $_GET</strong></p>
<span>PHP $_GET 同样被广泛应用于收集表单数据，在HTML form标签的指定该属性："method="get"。</span>
<pre class="brush:javascript;gutter:true">
&lt;html&gt;
&lt;body&gt;
&lt;?php 
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>

<p><strong>PHP 循环 - While 循环</strong></p>
<span>
在 PHP 中，提供了下列循环语句：
<ul>
	<li>while - 只要指定的条件成立，则循环执行代码块</li>
	<li>do...while - 首先执行一次代码块，然后在指定的条件成立时重复这个循环</li>
	<li>for - 循环执行代码块指定的次数</li>
	<li>foreach - 根据数组中每个元素来循环代码块</li>
</ul>
</span>
<pre class="brush:javascript;gutter:true">
&lt;?php
$i=1;
while($i&lt;=5)
{
echo "The number is " . $i . "<br>";
$i++;
}
?&gt;
</pre>
do...while
<pre class="brush:javascript;gutter:true">
&lt;?php
$i=1;
do
{
$i++;
echo "The number is " . $i . "<br>";
}
while ($i&lt;=5);
?&gt;
</pre>

<p><strong>PHP 循环 - For 循环</strong></p>
<span>循环执行代码块指定的次数，或者当指定的条件为真时循环执行代码块。</span>
<pre class="brush:javascript;gutter:true">
for ($i=1; $i&lt;=5; $i++)
{
echo "The number is " . $i . "<br>";
}

or 
$x=array("one","two","three");
foreach ($x as $value)
{
echo $value . "<br>";
}
</pre>
<p><strong>PHP 函数</strong></p>
<span>函数是通过调用函数来执行的。</br>
语法：</br>
<pre class="brush:javascript;gutter:true">
function functionName()
{
要执行的代码;
}
</pre>
PHP 函数准则：
<ul>
	<li>函数的名称应该提示出它的功能</li>
	<li>函数名称以字母或下划线开头（不能以数字开头）</li>
</ul>
</span>
<pre class="brush:javascript;gutter:true">
function writeName()
{
echo "Kai Jim Refsnes";
}

echo "My name is ";
writeName();
</pre>

<pre class="brush:javascript;gutter:true">
function add($x,$y)
{
$total=$x+$y;
return $total;
} 
echo "1 + 16 = " . add(1,16);
</pre>

</div>
</div>
	</div>
	<div style="clear:both"></div>
	</div>
<script type="text/javascript" src="js/shCore.js"></script>
<script type="text/javascript" src="js/shLegacy.js"></script>
<script type="text/javascript" src="js/shAutoloader.js"></script>
<script type="text/javascript" src="js/shBrushAppleScript.js"></script>
<script type="text/javascript" src="js/shBrushAS3.js"></script>
<script type="text/javascript">//<![CDATA[

	SyntaxHighlighter.autoloader(
"applescript	js/shBrushAppleScript.js"
	,"as3 actionscript3	js/shBrushAS3.js"
	,"bash shell	js/shBrushBash.js"
	,"cf coldfusion	js/shBrushColdFusion.js"
	,"cpp c	js/shBrushCpp.js"
	,"c# c-sharp csharp	js/shBrushCSharp.js"
	,"css	js/shBrushCss.js"
	,"delphi pas pascal  js/shBrushDelphi.js"
	,"diff patch	js/shBrushDiff.js"
	,"erl erlang	js/shBrushErlang.js"
	,"java	js/shBrushJava.js"
	,"jfx javafx	js/shBrushJavaFX.js"
	,"js jscript javascript	js/shBrushJScript.js"
	,"perl pl	js/shBrushPerl.js"
	,"php	js/shBrushPhp.js"
	,"plain text	js/shBrushPlain.js"
	,"ps powershell	js/shBrushPowerShell.js"
	,"py python	js/shBrushPython.js"
	,"rails ror ruby rb	js/shBrushRuby.js"
	,"sass scss	js/shBrushSass.js"
	,"scala	js/shBrushScala.js"
	,"sql	js/shBrushSql.js"
	,"vb vbnet	 js/shBrushVb.js"
	,"xml xhtml xslt html	js/shBrushXml.js"
	);
	SyntaxHighlighter.defaults['auto-links'] = false;
	SyntaxHighlighter.defaults['quick-code'] = true;
	SyntaxHighlighter.defaults['title'] = '';
	SyntaxHighlighter.defaults['class-name'] = 'notranslate';
	SyntaxHighlighter.defaults['collapse'] = false;
	SyntaxHighlighter.defaults['first-line'] = 1;
	SyntaxHighlighter.defaults['gutter'] = true;
	SyntaxHighlighter.defaults['pad-line-numbers'] = false;
	SyntaxHighlighter.defaults['smart-tabs'] = true;
	SyntaxHighlighter.defaults['tab-size'] = 4;
	SyntaxHighlighter.defaults['toolbar'] = false;
	SyntaxHighlighter.config.stripBrs = true;
	SyntaxHighlighter.config.strings.expandSource = '+ expand source';
	SyntaxHighlighter.config.strings.help = '?';
	SyntaxHighlighter.config.strings.alert = 'SyntaxHighlighter\n\n';
	SyntaxHighlighter.config.strings.noBrush = "Can't find brush for: ";
	SyntaxHighlighter.config.strings.brushNotHtmlScript = "Brush wasn't configured for html-script option: ";
	SyntaxHighlighter.all();
	dp.SyntaxHighlighter.HighlightAll('code')
//]]></script>
</body>
</html>