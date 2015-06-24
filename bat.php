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
        
      <div style="background:white;margin-top:20px;width:90%;height:160px;border-radius:5px;border:1px solid black;">
      <div style="background:#ccc"><img src="images/link.png">&nbsp;友情链接</div>
      <div style="padding:6px;margin-top:10px;">
          <ul>
              <li><a href="https://github.com/yudesong">GitHub网址</a>
              <li><a href="http://weibo.com/u/2377011405">新浪博客</a>
              <li><a href="http://www.oschina.net/">开源中国</a>
              <li><a href="http://www.csdn.net/">CSDN</a>
              <li><a href="http://guides.ruby-china.org/">Rails入门</a>
          </ul>   
      </div>
      </div>  
  </div>
  <div style="float:right;border:1px solid black;border-radius:5px;width:67%;margin-top:20px;margin-right:15px;background:white;">
<div class="grid-8">
<div class="post-78738 post type-post status-publish format-standard hentry category-webfront category-programmer tag-javascript tag-1876 odd" id="post-78738">
<div class="entry-header">
<h1>BAT及各大互联网公司2014前端笔试面试题：JavaScript篇</h1>
</div>
<div class="entry">
<h1><span style="color: #3366ff;"><strong>初级Javascript：</strong></span></h1>
<p><strong>1.JavaScript是一门什么样的语言，它有哪些特点？</strong></p>
<p>没有标准答案。</p>
<p><strong>2.JavaScript的数据类型都有什么？</strong></p>
<p>基本数据类型：String,boolean,Number,Undefined, Null</p>
<p>引用数据类型：Object(Array,Date,RegExp,Function)</p>
<p>那么问题来了，如何判断某变量是否为数组数据类型？</p>
<ul>
<li>方法一.判断其是否具有“数组性质”，如slice()方法。可自己给该变量定义slice方法，故有时会失效</li>
<li>方法二.obj instanceof Array 在某些IE版本中不正确</li>
<li>方法三.方法一二皆有漏洞，在ECMA Script5中定义了新方法Array.isArray(), 保证其兼容性，最好的方法如下：</li>
</ul>
<pre class="brush: javascript; gutter: true">if(typeof Array.isArray===&quot;undefined&quot;)
{
  Array.isArray = function(arg){
        return Object.prototype.toString.call(arg)===&quot;[object Array]&quot;
    };  
}</pre>
<p><strong>3.已知ID的Input输入框，希望获取这个输入框的输入值，怎么做？(不使用第三方框架)</strong></p>
<pre class="brush: javascript; gutter: true">document.getElementById(“ID”).value</pre>
<p><strong>4.希望获取到页面中所有的checkbox怎么做？(不使用第三方框架)</strong></p>
<pre class="brush: javascript; gutter: true">var domList = document.getElementsByTagName(‘input’)
var checkBoxList = [];
var len = domList.length;　　//缓存到局部变量
while (len--) {　　//使用while的效率会比for循环更高
　　if (domList[len].type == ‘checkbox’) {
    　　checkBoxList.push(domList[len]);
　　}
}</pre>
<p><strong>5.设置一个已知ID的DIV的html内容为xxxx，字体颜色设置为黑色(不使用第三方框架)</strong></p>
<pre class="brush: javascript; gutter: true">var dom = document.getElementById(“ID”);
dom.innerHTML = “xxxx”
dom.style.color = “#000”</pre>
<p><strong>6.当一个DOM节点被点击时候，我们希望能够执行一个函数，应该怎么做？</strong></p>
<ul>
<li> 直接在DOM里绑定事件：&lt;div onclick=”test()”&gt;&lt;/div&gt;</li>
<li> 在JS里通过onclick绑定：xxx.onclick = test</li>
<li> 通过事件添加进行绑定：addEventListener(xxx, ‘click’, test)</li>
</ul>
<p>那么问题来了，Javascript的事件流模型都有什么？</p>
<ul>
<li>“事件冒泡”：事件开始由最具体的元素接受，然后逐级向上传播</li>
<li>“事件捕捉”：事件由最不具体的节点先接收，然后逐级向下，一直到最具体的</li>
<li>“DOM事件流”：三个阶段：事件捕捉，目标阶段，事件冒泡</li>
</ul>
<p><strong>7.什么是Ajax和JSON，它们的优缺点。</strong></p>
<p>Ajax是异步JavaScript和XML，用于在Web页面中实现异步数据交互。</p>
<p>优点：</p>
<ul>
<li>　可以使得页面不重载全部内容的情况下加载局部内容，降低数据传输量</li>
<li>　避免用户不断刷新或者跳转页面，提高用户体验</li>
</ul>
<p>缺点：</p>
<ul>
<li>　对搜索引擎不友好（</li>
<li>　要实现ajax下的前后退功能成本较大</li>
<li>　可能造成请求数的增加</li>
<li>　跨域问题限制</li>
</ul>
<p>JSON是一种轻量级的数据交换格式，ECMA的一个子集</p>
<p>优点：轻量级、易于人的阅读和编写，便于机器（JavaScript）解析，支持复合数据类型（数组、对象、字符串、数字）</p>
<p><strong> 8.看下列代码输出为何？解释原因。</strong></p>
<pre class="brush: javascript; gutter: true">var a;
alert(typeof a); // undefined
alert(b); // 报错</pre>
<p>解释：Undefined是一个只有一个值的数据类型，这个值就是“undefined”，在使用var声明变量但并未对其赋值进行初始化时，这个变量的值就是undefined。而b由于未声明将报错。注意未申明的变量和声明了未赋值的是不一样的。</p>
<p><strong> 9.看下列代码,输出什么？解释原因。</strong></p>
<pre class="brush: javascript; gutter: true">var a = null;
alert(typeof a); //object</pre>
<p>解释：null是一个只有一个值的数据类型，这个值就是null。表示一个空指针对象，所以用typeof检测会返回”object”。</p>
<p><strong> 10.看下列代码,输出什么？解释原因。</strong></p>
<pre class="brush: javascript; gutter: true">var undefined;
undefined == null; // true
1 == true;   // true
2 == true;   // false
0 == false;  // true
0 == &#039;&#039;;     // true
NaN == NaN;  // false
[] == false; // true
[] == ![];   // true</pre>
<ul>
<li>undefined与null相等，但不恒等（===）</li>
<li>一个是number一个是string时，会尝试将string转换为number</li>
<li>尝试将boolean转换为number，0或1</li>
<li>尝试将Object转换成number或string，取决于另外一个对比量的类型</li>
<li>所以，对于0、空字符串的判断，建议使用 “===” 。“===”会先判断两边的值类型，类型不匹配时为false。</li>
</ul>
<p>那么问题来了，看下面的代码，输出什么，foo的值为什么？</p>
<pre class="brush: javascript; gutter: true">var foo = &quot;11&quot;+2-&quot;1&quot;;
console.log(foo);
console.log(typeof foo);</pre>
<p>执行完后foo的值为111，foo的类型为String。</p>
<p><strong> 11.看代码给答案。</strong></p>
<pre class="brush: javascript; gutter: true">var a = new Object();
a.value = 1;
b = a;
b.value = 2;
alert(a.value);</pre>
<p>答案：2（<span style="color: #ff00ff;">考察引用数据类型细节</span>）</p>
<p><strong>12.已知数组var stringArray = [“This”, “is”, “Baidu”, “Campus”]，Alert出”This is Baidu Campus”。</strong></p>
<p>答案：alert(stringArray.join(&#8220;&#8221;))</p>
<p>已知有字符串foo=&#8221;get-element-by-id&#8221;,写一个function将其转化成驼峰表示法&#8221;getElementById&#8221;。</p>
<pre class="brush: javascript; gutter: true">function combo(msg){
    var arr=msg.split(&quot;-&quot;);
    for(var i=1;i&lt;arr.length;i++){
        arr[i]=arr[i].charAt(0).toUpperCase()+arr[i].substr(1,arr[i].length-1);
    }
    msg=arr.join(&quot;&quot;);
    return msg;
}</pre>
<p>(<span style="color: #ff00ff;">考察基础API</span>)</p>
<p>13.var numberArray = [3,6,2,4,1,5]; （<span style="color: #ff00ff;">考察基础API</span>）</p>
<p>1) 实现对该数组的倒排，输出[5,1,4,2,6,3]</p>
<p>2) 实现对该数组的降序排列，输出[6,5,4,3,2,1]</p>
<pre class="brush: javascript; gutter: true">function combo(msg){
    var arr=msg.split(&quot;-&quot;);
    for(var i=1;i&lt;arr.length;i++){
        arr[i]=arr[i].charAt(0).toUpperCase()+arr[i].substr(1,arr[i].length-1);
    }
    msg=arr.join(&quot;&quot;);
    return msg;
}</pre>
<p><strong>14.输出今天的日期，以YYYY-MM-DD的方式，比如今天是2014年9月26日，则输出2014-09-26</strong></p>
<pre class="brush: javascript; gutter: true">var d = new Date();
// 获取年，getFullYear()返回4位的数字
var year = d.getFullYear();
// 获取月，月份比较特殊，0是1月，11是12月
var month = d.getMonth() + 1;
// 变成两位
month = month &lt; 10 ? &#039;0&#039; + month : month;
// 获取日
var day = d.getDate();
day = day &lt; 10 ? &#039;0&#039; + day : day;
alert(year + &#039;-&#039; + month + &#039;-&#039; + day);</pre>
<p><strong>15.将字符串”&lt;tr&gt;&lt;td&gt;{$id}&lt;/td&gt;&lt;td&gt;{$name}&lt;/td&gt;&lt;/tr&gt;”中的{$id}替换成10，{$name}替换成Tony （使用正则表达式）</strong></p>
<p>答案：&#8221;&lt;tr&gt;&lt;td&gt;{$id}&lt;/td&gt;&lt;td&gt;{$id}_{$name}&lt;/td&gt;&lt;/tr&gt;&#8221;.replace(/{\$id}/g, &#8217;10&#8242;).replace(/{\$name}/g, ‘Tony’);</p>
<p><strong>16.为了保证页面输出安全，我们经常需要对一些特殊的字符进行转义，请写一个函数escapeHtml，将&lt;, &gt;, &amp;, “进行转义</strong></p>
<pre class="brush: javascript; gutter: true">function escapeHtml(str) {
return str.replace(/[&lt;&gt;”&amp;]/g, function(match) {
    switch (match) {
                   case “&lt;”:
                      return “&amp;lt;”;
                   case “&gt;”:
                      return “&amp;gt;”;
                   case “&amp;”:
                      return “&amp;amp;”;
                   case “\””:
                      return “&amp;quot;”;
      }
  });
}</pre>
<p><strong>17.foo = foo||bar ，这行代码是什么意思？为什么要这样写？</strong></p>
<p>答案：if(!foo) foo = bar; //如果foo存在，值不变，否则把bar的值赋给foo。</p>
<p>短路表达式：作为&#8221;&amp;&amp;&#8221;和&#8221;||&#8221;操作符的操作数表达式，这些表达式在进行求值时，只要最终的结果已经可以确定是真或假，求值过程便告终止，这称之为短路求值。</p>
<p><strong>18.看下列代码，将会输出什么?</strong>(<span style="color: #ff00ff;">变量声明提升</span>)</p>
<pre class="brush: javascript; gutter: true">var foo = 1;
function(){
    console.log(foo);
    var foo = 2;
    console.log(foo);
}</pre>
<p>答案：输出undefined 和 2。上面代码相当于：</p>
<pre class="brush: javascript; gutter: true">var foo = 1;
function(){
    var foo;
    console.log(foo); //undefined
    foo = 2;
    console.log(foo); // 2;   
}</pre>
<p>函数声明与变量声明会被JavaScript引擎隐式地提升到当前作用域的顶部，但是只提升名称不会提升赋值部分。</p>
<p><strong>19.用js实现随机选取10&#8211;100之间的10个数字，存入一个数组，并排序。</strong></p>
<pre class="brush: javascript; gutter: true">var iArray = []; 
funtion getRandom(istart, iend){
        var iChoice = istart - iend +1;
        return Math.floor(Math.random() * iChoice + istart;
}
for(var i=0; i&lt;10; i++){
        iArray.push(getRandom(10,100));
}
iArray.sort();</pre>
<p><strong>20.把两个数组合并，并删除第二个元素。</strong></p>
<pre class="brush: javascript; gutter: true">var array1 = [&#039;a&#039;,&#039;b&#039;,&#039;c&#039;];
var bArray = [&#039;d&#039;,&#039;e&#039;,&#039;f&#039;];
var cArray = array1.concat(bArray);
cArray.splice(1,1);</pre>
<p><strong>21.怎样添加、移除、移动、复制、创建和查找节点（原生JS，实在基础，没细写每一步）</strong></p>
<p>1）创建新节点</p>
<p>createDocumentFragment()    //创建一个DOM片段</p>
<p>createElement()   //创建一个具体的元素</p>
<p>createTextNode()   //创建一个文本节点</p>
<p>2）添加、移除、替换、插入</p>
<p>appendChild()      //添加</p>
<p>removeChild()      //移除</p>
<p>replaceChild()      //替换</p>
<p>insertBefore()      //插入</p>
<p>3）查找</p>
<p>getElementsByTagName()    //通过标签名称</p>
<p>getElementsByName()     //通过元素的Name属性的值</p>
<p>getElementById()        //通过元素Id，唯一性</p>
<p><strong>22.有这样一个URL：http://item.taobao.com/item.htm?a=1&amp;b=2&amp;c=&amp;d=xxx&amp;e，请写一段JS程序提取URL中的各个GET参数(参数名和参数个数不确定)，将其按key-value形式返回到一个json结构中，如{a:&#8217;1&#8242;, b:&#8217;2&#8242;, c:&#8221;, d:&#8217;xxx&#8217;, e:undefined}。</strong></p>
<p>答案：</p>
<pre class="brush: javascript; gutter: true">function serilizeUrl(url) {
    var result = {};
    url = url.split(&quot;?&quot;)[1];
    var map = url.split(&quot;&amp;&quot;);
    for(var i = 0, len = map.length; i &lt; len; i++) {
        result<script>jQuery(function($) {$("#google-maps-1").gMap({controls: false,scrollwheel: false,markers: [{address: "",icon: {image: "http://blog.jobbole.com/wp-content/themes/jobboleblogv3/_assets/img/_colors/red/pin.png",iconsize: [32, 32],iconanchor: [16,27],infowindowanchor: [16, 27]}}],address: "",zoom: 15,icon: {image: "http://blog.jobbole.com/wp-content/themes/jobboleblogv3/_assets/img/_colors/red/pin.png",iconsize: [32, 32],iconanchor: [16,27],infowindowanchor: [16, 27]}});});</script><div id="google-maps-1" class="google-maps" style="width: 100%; height: 200px;"></div>.split(&quot;=&quot;)[0]] = map[i].split(&quot;=&quot;)[1];
    }
    return result;
}</pre>
<p><strong>23.正则表达式构造函数var reg=new RegExp(&#8220;xxx&#8221;)与正则表达字面量var reg=//有什么不同？匹配邮箱的正则表达式？</strong></p>
<p><strong>答案：当使用RegExp()构造函数的时候，不仅需要转义引号（即\&#8221;表示&#8221;），并且还需要双反斜杠（即\\表示一个\）。使用正则表达字面量的效率更高。 </strong></p>
<p><b>邮箱</b>的正则匹配：</p>
<pre class="brush: javascript; gutter: true">var regMail = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((.[a-zA-Z0-9_-]{2,3}){1,2})$/;</pre>
<p><strong>24.看下面代码，给出输出结果。</strong></p>
<pre class="brush: javascript; gutter: true">for(var i=1;i&lt;=3;i++){
  setTimeout(function(){
      console.log(i);    
  },0);  
};</pre>
<p>答案：4 4 4。</p>
<p>原因：<span style="color: #ff00ff;">Javascript事件处理器在线程空闲之前不会运行。追问</span>，如何让上述代码输出1 2 3？</p>
<pre class="brush: javascript; gutter: true">for(var i=1;i&lt;=3;i++){
   setTimeout((function(a){  //改成立即执行函数
       console.log(a);    
   })(i),0);  
};

1           //输出
2
3</pre>
<p><strong>25.写一个function，清除字符串前后的空格。（兼容所有浏览器）</strong></p>
<p>使用自带接口trim()，考虑兼容性：</p>
<pre class="brush: javascript; gutter: true">if (!String.prototype.trim) { 
 String.prototype.trim = function() { 
 return this.replace(/^\s+/, &quot;&quot;).replace(/\s+$/,&quot;&quot;);
 } 
} 

// test the function 
var str = &quot; \t\n test string &quot;.trim(); 
alert(str == &quot;test string&quot;); // alerts &quot;true&quot;</pre>
<p>26.Javascript中callee和caller的作用？</p>
<p>答案：</p>
<p>caller是返回一个对函数的引用，该函数调用了当前函数；</p>
<p>callee是返回正在被执行的function函数，也就是所指定的function对象的正文。</p>
<p><b>那么问题来了？</b>如果一对兔子每月生一对兔子；一对新生兔，从第二个月起就开始生兔子；假定每对兔子都是一雌一雄，试问一对兔子，第n个月能繁殖成多少对兔子？（<span style="color: #ff00ff;">使用callee完成</span>）</p>
<pre class="brush: javascript; gutter: true">var result=[];
function fn(n){  //典型的斐波那契数列
   if(n==1){
        return 1;
   }else if(n==2){
           return 1;
   }else{
        if(result[n]){
                return result[n];
        }else{
                //argument.callee()表示fn()
                result[n]=arguments.callee(n-1)+arguments.callee(n-2);
                return result[n];
        }
   }
}</pre>
<h1><span style="color: #3366ff;"><strong>中级Javascript：</strong></span></h1>
<p><strong>1.实现一个函数clone，可以对JavaScript中的5种主要的数据类型（包括Number、String、Object、Array、Boolean）进行值复制</strong></p>
<ul>
<li>考察点1：对于基本数据类型和引用数据类型在内存中存放的是值还是指针这一区别是否清楚</li>
<li>考察点2：是否知道如何判断一个变量是什么类型的</li>
<li>考察点3：递归算法的设计</li>
</ul>
<pre class="brush: javascript; gutter: true">// 方法一：
Object.prototype.clone = function(){
        var o = this.constructor === Array ? [] : {};
        for(var e in this){
                o[e] = typeof this[e] === &quot;object&quot; ? this[e].clone() : this[e];
        }
        return o;
}

//方法二：
  /**
     * 克隆一个对象
     * @param Obj
     * @returns
     */ 
    function clone(Obj) {   
        var buf;   
        if (Obj instanceof Array) {   
            buf = [];                    //创建一个空的数组 
            var i = Obj.length;   
            while (i--) {   
                buf[i] = clone(Obj[i]);   
            }   
            return buf;    
        }else if (Obj instanceof Object){   
            buf = {};                   //创建一个空对象 
            for (var k in Obj) {           //为这个对象添加新的属性 
                buf[k] = clone(Obj[k]);   
            }   
            return buf;   
        }else{                         //普通变量直接赋值
            return Obj;   
        }   
    }</pre>
<p>&nbsp;</p>
<p><strong>2.如何消除一个数组里面重复的元素？</strong></p>
<pre class="brush: javascript; gutter: true">var arr=[1,2,3,3,4,4,5,5,6,1,9,3,25,4];
        function deRepeat(){
            var newArr=[];
            var obj={};
            var index=0;
            var l=arr.length;
            for(var i=0;i&lt;l;i++){
                if(obj[arr[i]]==undefined)
                  {
                    obj[arr[i]]=1;
                    newArr[index++]=arr[i];
                  }
                else if(obj[arr[i]]==1)
                  continue;
            }
            return newArr;

        }
        var newArr2=deRepeat(arr);
        alert(newArr2); //输出1,2,3,4,5,6,9,25</pre>
<p><strong>3.小贤是一条可爱的小狗(Dog)，它的叫声很好听(wow)，每次看到主人的时候就会乖乖叫一声(yelp)。从这段描述可以得到以下对象：</strong></p>
<pre class="brush: javascript; gutter: true">function Dog() {
       this.wow = function() {
               alert(’Wow’);
      }
       this.yelp = function() {
              this.wow();
      }
}</pre>
<p>小芒和小贤一样，原来也是一条可爱的小狗，可是突然有一天疯了<b>(MadDog)，一看到人就会每隔半秒叫一声(wow)地不停叫唤(yelp)。请根据描述，按示例的形式用代码来实。</b>（<span style="color: #ff00ff;">继承，原型，setInterval</span>）</p>
<p>答案：</p>
<pre class="brush: javascript; gutter: true">function MadDog() {
    this.yelp = function() {
          var self = this;          
          setInterval(function() {
                self.wow();      
          }, 500);
      }
}
MadDog.prototype = new Dog();         

//for test
var dog = new Dog();
dog.yelp();
var madDog = new MadDog();
madDog.yelp();</pre>
<p><strong>4.下面这个ul，如何点击每一列的时候alert其index?（</strong><span style="color: #ff00ff;">闭包</span>）</p>
<pre class="brush: html; gutter: true">&lt;ul id=”test”&gt;
&lt;li&gt;这是第一条&lt;/li&gt;
&lt;li&gt;这是第二条&lt;/li&gt;
&lt;li&gt;这是第三条&lt;/li&gt;
&lt;/ul&gt;</pre>
<p>答案：</p>
<pre class="brush: javascript; gutter: true">// 方法一：
var lis=document.getElementById(&#039;2223&#039;).getElementsByTagName(&#039;li&#039;);
for(var i=0;i&lt;3;i++)
{
    lis[i].index=i;
    lis[i].onclick=function(){
        alert(this.index);
    };
}

//方法二：
var lis=document.getElementById(&#039;2223&#039;).getElementsByTagName(&#039;li&#039;);
for(var i=0;i&lt;3;i++)
{
    lis[i].index=i;
    lis[i].onclick=(function(a){
        return function() {
            alert(a);
        }
    })(i);
}</pre>
<p><strong>5.编写一个JavaScript函数，输入指定类型的选择器(仅需支持id，class，tagName三种简单CSS选择器，无需兼容组合选择器)可以返回匹配的DOM节点，需考虑浏览器兼容性和性能。</strong></p>
<p>/*** @param selector {String} 传入的CSS选择器。* @return {Array}*/</p>
<p>答案：</p>
<pre class="brush: javascript; gutter: true">var query = function(selector) {
                var reg = /^(#)?(\.)?(\w+)$/img;
                var regResult = reg.exec(selector);
                var result = [];
                //如果是id选择器
                if(regResult[1]) {
                    if(regResult[3]) {
                        if(typeof document.querySelector === &quot;function&quot;) {
                            result.push(document.querySelector(regResult[3]));
                        }
                        else {
                            result.push(document.getElementById(regResult[3]));
                        }
                    }
                }
                //如果是class选择器
                else if(regResult[2]) {
                    if(regResult[3]) {
                        if(typeof document.getElementsByClassName === &#039;function&#039;) {
                            var doms = document.getElementsByClassName(regResult[3]);
                            if(doms) {
                                result = converToArray(doms);
                            }
                        }
                        //如果不支持getElementsByClassName函数
                        else {
                            var allDoms = document.getElementsByTagName(&quot;*&quot;) ;
                            for(var i = 0, len = allDoms.length; i &lt; len; i++) {
                                if(allDoms[i].className.search(new RegExp(regResult[2])) &gt; -1) {
                                    result.push(allDoms[i]);
                                }
                            }
                        }
                    }
                }
                //如果是标签选择器
                else if(regResult[3]) {
                    var doms = document.getElementsByTagName(regResult[3].toLowerCase());
                    if(doms) {
                        result = converToArray(doms);
                    }
                }
                return result;
            }

            function converToArray(nodes){
                  var array = null;         
                  try{        
                        array = Array.prototype.slice.call(nodes,0);//针对非IE浏览器         
                  }catch(ex){
                      array = new Array();         
                      for( var i = 0 ,len = nodes.length; i &lt; len ; i++ ) { 
                          array.push(nodes[i])         
                      }         
                  }      
                  return array;
          }</pre>
<p><strong>6.请评价以下代码并给出改进意见。</strong></p>
<pre class="brush: javascript; gutter: true">if(window.addEventListener){
    var addListener = function(el,type,listener,useCapture){
        el.addEventListener(type,listener,useCapture);
  };
}
else if(document.all){
    addListener = function(el,type,listener){
        el.attachEvent(&quot;on&quot;+type,function(){
          listener.apply(el);
      });
   }  
}</pre>
<p>评价：</p>
<ul>
<li>　不应该在if和else语句中声明addListener函数，应该先声明；</li>
<li>　不需要使用window.addEventListener或document.all来进行检测浏览器，应该使用能力检测；</li>
<li>　由于attachEvent在IE中有this指向问题，所以调用它时需要处理一下</li>
</ul>
<p>改进如下：</p>
<pre class="brush: javascript; gutter: true">function addEvent(elem, type, handler){
　　if(elem.addEventListener){
　　　　elem.addEventListener(type, handler, false);
　　}else if(elem.attachEvent){
　　　　elem[&#039;temp&#039; + type + handler] = handler;
　　　　elem[type + handler] = function(){
　　　　elem[&#039;temp&#039; + type + handler].apply(elem);
　　};
　　elem.attachEvent(&#039;on&#039; + type, elem[type + handler]);　
  }else{
　　elem[&#039;on&#039; + type] = handler;
　　}
}</pre>
<p><strong>7.给String对象添加一个方法，传入一个string类型的参数，然后将string的每个字符间价格空格返回，例如：</strong></p>
<p><strong>addSpace(&#8220;hello world&#8221;) // -&gt; &#8216;h e l l o  w o r l d&#8217;</strong></p>
<pre class="brush: javascript; gutter: true">String.prototype.spacify = function(){
      return this.split(&#039;&#039;).join(&#039; &#039;);
    };</pre>
<p>接着上述问题答案提问，1）直接在对象的原型上添加方法是否安全？尤其是在Object对象上。(<span style="color: #ff00ff;">这个我没能答出？希望知道的说一下。</span>)　2）函数声明与函数表达式的区别？</p>
<p>答案：在js中，解析器在向执行环境中加载数据时，对函数声明和函数表达式并非是一视同仁的，解析器会率先读取函数声明，并使其在执行任何代码之前可用（可以访问），至于函数表达式，则必须等到解析器执行到它所在的代码行，才会真正被解析执行。</p>
<p><strong>8.定义一个log方法，让它可以代理console.log的方法。</strong></p>
<p>可行的方法一：</p>
<pre class="brush: javascript; gutter: true">function log(msg)　{
    console.log(msg);
}

log(&quot;hello world!&quot;) // hello world!</pre>
<p>如果要传入多个参数呢？显然上面的方法不能满足要求，所以更好的方法是：</p>
<pre class="brush: javascript; gutter: true">function log(){
    console.log.apply(console, arguments);
};</pre>
<p>到此，追问apply和call方法的异同。</p>
<p>答案：</p>
<p>对于apply和call两者在作用上是相同的，即是调用一个对象的一个方法，以另一个对象替换当前对象。将一个函数的对象上下文从初始的上下文改变为由 thisObj 指定的新对象。</p>
<p>但两者在参数上有区别的。对于第一个参数意义都一样，但对第二个参数： apply传入的是一个参数数组，也就是将多个参数组合成为一个数组传入，而call则作为call的参数传入（从第二个参数开始）。 如 func.call(func1,var1,var2,var3)对应的apply写法为：func.apply(func1,[var1,var2,var3]) 。</p>
<p><strong>9.在Javascript中什么是伪数组？如何将伪数组转化为标准数组？</strong></p>
<p>答案：</p>
<p>伪数组（类数组）：无法直接调用数组方法或期望length属性有什么特殊的行为，但仍可以对真正数组遍历方法来遍历它们。典型的是函数的argument参数，还有像调用getElementsByTagName,document.childNodes之类的,它们都返回NodeList对象都属于伪数组。可以使用Array.prototype.slice.call(fakeArray)将数组转化为真正的Array对象。</p>
<p>假设接第八题题干，我们要给每个log方法添加一个&#8221;(app)&#8221;前缀，比如&#8217;hello world!&#8217; -&gt;&#8217;(app)hello world!&#8217;。方法如下：</p>
<pre class="brush: javascript; gutter: true">function log(){
      var args = Array.prototype.slice.call(arguments);  //为了使用unshift数组方法，将argument转化为真正的数组
      args.unshift(&#039;(app)&#039;);

      console.log.apply(console, args);
    };</pre>
<p><strong>10.对作用域上下文和this的理解，看下列代码：</strong></p>
<pre class="brush: javascript; gutter: true">var User = {
  count: 1,

  getCount: function() {
    return this.count;
  }
};

console.log(User.getCount());  // what?

var func = User.getCount;
console.log(func());  // what?</pre>
<p>问两处console输出什么？为什么？</p>
<p>答案是1和undefined。</p>
<p>func是在winodw的上下文中被执行的，所以会访问不到count属性。</p>
<p>继续追问，那么如何确保Uesr总是能访问到func的上下文，即正确返回1。正确的方法是使用Function.prototype.bind。兼容各个浏览器完整代码如下：</p>
<pre class="brush: javascript; gutter: true">Function.prototype.bind = Function.prototype.bind || function(context){
   var self = this;

   return function(){
      return self.apply(context, arguments);
   };
}

var func = User.getCount.bind(User);
console.log(func());</pre>
<p><strong>11.原生JS的window.onload与Jquery的$(document).ready(function(){})有什么不同？如何用原生JS实现Jq的ready方法？</strong></p>
<p>window.onload()方法是必须等到页面内包括图片的所有元素加载完毕后才能执行。</p>
<p>$(document).ready()是DOM结构绘制完毕后就执行，不必等到加载完毕。</p>
<pre class="brush: javascript; gutter: true">/*
 * 传递函数给whenReady()
 * 当文档解析完毕且为操作准备就绪时，函数作为document的方法调用
 */
var whenReady = (function() {               //这个函数返回whenReady()函数
    var funcs = [];             //当获得事件时，要运行的函数
    var ready = false;          //当触发事件处理程序时,切换为true

    //当文档就绪时,调用事件处理程序
    function handler(e) {
        if(ready) return;       //确保事件处理程序只完整运行一次

        //如果发生onreadystatechange事件，但其状态不是complete的话,那么文档尚未准备好
        if(e.type === &#039;onreadystatechange&#039; &amp;&amp; document.readyState !== &#039;complete&#039;) {
            return;
        }

        //运行所有注册函数
        //注意每次都要计算funcs.length
        //以防这些函数的调用可能会导致注册更多的函数
        for(var i=0; i&lt;funcs.length; i++) {
            funcs[i].call(document);
        }
        //事件处理函数完整执行,切换ready状态, 并移除所有函数
        ready = true;
        funcs = null;
    }
    //为接收到的任何事件注册处理程序
    if(document.addEventListener) {
        document.addEventListener(&#039;DOMContentLoaded&#039;, handler, false);
        document.addEventListener(&#039;readystatechange&#039;, handler, false);            //IE9+
        window.addEventListener(&#039;load&#039;, handler, false);
    }else if(document.attachEvent) {
        document.attachEvent(&#039;onreadystatechange&#039;, handler);
        window.attachEvent(&#039;onload&#039;, handler);
    }
    //返回whenReady()函数
    return function whenReady(fn) {
        if(ready) { fn.call(document); }
        else { funcs.push(fn); }
    }
})();</pre>
<p>如果上述代码十分难懂，下面这个简化版：</p>
<pre class="brush: javascript; gutter: true">function ready(fn){
    if(document.addEventListener) {        //标准浏览器
        document.addEventListener(&#039;DOMContentLoaded&#039;, function() {
            //注销事件, 避免反复触发
            document.removeEventListener(&#039;DOMContentLoaded&#039;,arguments.callee, false);
            fn();            //执行函数
        }, false);
    }else if(document.attachEvent) {        //IE
        document.attachEvent(&#039;onreadystatechange&#039;, function() {
            if(document.readyState == &#039;complete&#039;) {
                document.detachEvent(&#039;onreadystatechange&#039;, arguments.callee);
                fn();        //函数执行
            }
        });
    }
};</pre>
<p>12.（设计题）想实现一个对页面某个节点的拖曳？如何做？（使用原生JS）</p>
<p>回答出概念即可，下面是几个要点</p>
<ol>
<li>给需要拖拽的节点绑定mousedown, mousemove, mouseup事件</li>
<li>mousedown事件触发后，开始拖拽</li>
<li>mousemove时，需要通过event.clientX和clientY获取拖拽位置，并实时更新位置</li>
<li>mouseup时，拖拽结束</li>
<li>需要注意浏览器边界的情况</li>
</ol>
<p><strong>13.</strong></p>
<p></a></p>
<p>&nbsp;</p>
<pre class="brush: javascript; gutter: true">
function setcookie(name,value,days){  //给cookie增加一个时间变量
　　var exp = new Date(); 
　　exp.setTime(exp.getTime() + days*24*60*60*1000); //设置过期时间为days天
　　document.cookie = name + &quot;=&quot;+ escape (value) + &quot;;expires=&quot; + exp.toGMTString(); 
} 
function getCookie(name){
　　var result = &quot;&quot;;
　　var myCookie = &quot;&quot;+document.cookie+&quot;;&quot;; 
　　var searchName = &quot;+name+&quot;=&quot;;
　　var startOfCookie = myCookie.indexOf(searchName);
　　var endOfCookie;
　　if(satrtOfCookie != -1){
　　　　startOfcookie += searchName.length;
　　　　endOfCookie = myCookie.indexOf(&quot;;&quot;,startOfCookie);
　　　　result = (myCookie.substring(startOfCookie,endOfCookie));
　　}
　　return result;
}
(function(){
　　var oTips = document.getElementById(&#039;tips&#039;);//假设tips的id为tips
　　var page = {
　　check: function(){//检查tips的cookie是否存在并且允许显示
　　　　var tips = getCookie(&#039;tips&#039;);
　　　　if(!tips || tips == &#039;show&#039;) return true;//tips的cookie不存在
　　　　if(tips == &quot;never_show_again&quot;) return false;
　　},
　　hideTip: function(bNever){
　　　　if(bNever) setcookie(&#039;tips&#039;, &#039;never_show_again&#039;, 365);
　　　　oTips.style.display = &quot;none&quot;;//隐藏
　　},
　　showTip: function(){
　　oTips.style.display = &quot;inline&quot;;//显示，假设tips为行级元素
　　},
　　init: function(){
　　　　var _this = this;
　　　　if(this.check()){
　　　　_this.showTip();
　　　　setcookie(&#039;tips&#039;, &#039;show&#039;, 1);
　　}
　　oTips.onclick = function(){
　　　　_this.hideTip(true);
　　};
　　}
　　};
  page.init();
})();</pre>
<p><strong>14.说出以下函数的作用是？空白区域应该填写什么？</strong></p>
<pre class="brush: javascript; gutter: true">//define 
(function(window){
    function fn(str){
        this.str=str;
    }

    fn.prototype.format = function(){
        var arg = ______;
        return this.str.replace(_____,function(a,b){
             return arg[b]||&quot;&quot;;
      });
    }
    window.fn = fn;
})(window);

//use
(function(){
    var t = new fn(&#039;&lt;p&gt;&lt;a href=&quot;{0}&quot;&gt;{1}&lt;/a&gt;&lt;span&gt;{2}&lt;/span&gt;&lt;/p&gt;&#039;);
    console.log(t.format(&#039;http://www.alibaba.com&#039;,&#039;Alibaba&#039;,&#039;Welcome&#039;));
})();</pre>
<p>答案：访函数的作用是使用format函数将函数的参数替换掉{0}这样的内容，返回一个格式化后的结果：</p>
<p>第一个空是：arguments</p>
<p>第二个空是：/\{(\d+)\}/ig</p>
<p><strong> 15.用面向对象的Javascript来介绍一下自己。（没答案哦亲，自己试试吧）</strong></p>
<p>答案： 对象或者Json都是不错的选择哦，</p>
</div>
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