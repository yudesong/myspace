<!DOCTYPE html>   
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel='stylesheet'  href='css/shCoreDefault.css' type='text/css' media='all' />
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
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
					</ul>		
			</div>			
			</div>
	</div>
	<div style="float:right;border:1px solid black;border-radius:5px;width:67%;margin-top:20px;margin-right:15px;background:white;">
<div class="grid-8">
<div class="post-78738 post type-post status-publish format-standard hentry category-webfront category-programmer tag-javascript tag-1876 odd" id="post-78738">
<div class="entry-header">
<h1>JavaScript基础</h1>
</div>
<div class="entry">
<strong>JavaScript 数据类型</strong></br>
字符串（String）、数字(Number)、布尔(Boolean)、数组(Array)、对象(Object)、空（Null）、未定义（Undefined）。
<strong>JavaScript 拥有动态类型</strong></br>
JavaScript 拥有动态类型。这意味着相同的变量可用作不同的类型：
<pre class="brush:javascript;gutter:true">
var x;               // x 为 undefined
var x = 5;           // 现在 x 为数字
var x = "John";      // 现在 x 为字符串
</pre>
<strong>JavaScript 的 typeof 的用途</strong></br>
typeof在两种情况下会返回 "undefined":</br>
<ol>
	<li>变量没有被声明</li>
	<li>变量的值是 undefined</li>
</ol>




<pre class="brush:javascript;gutter:true">
	var num3;
	console.log(typeof num3);  //undefined 
	num3=null;
	console.log(typeof num3);  //object
	var num1=10;
	console.log(typeof num1);  //number
	var num2=23.45;
	var res;
	res=num1+num2;
	console.log("num+num2="+res);  //num+num2=33.45 
	res=num1-num2;
	console.log("num-num2="+res);  //num-num2=-13.45 
	res=num1*num2;
	console.log("num1*num2="+res);  //num1*num2=234.5
	res=num1/num2;
	console.log("num1/num2="+res);  //num1/num2=0.4264392324093817
	res=num1%num2;
	console.log("num1/num2="+res);  //num1/num2=10 

	var str="this is a test string";
	console.log(typeof str);  //string

	var str_1=new String("yudesong");
	console.log(typeof str_1);  //object

	var bool=true;
	console.log(typeof bool);  //boolean 

	var arr=[1,2,3,4,5,6];
	for(i in arr)
		console.log(arr[i]);

	arr_1=new Array();
	arr_1[0]=1;
	arr_1[1]=2;

	arr_2=new Array("y","u","d","e","s","n","o","g");
	console.log(typeof arr);  //object

	var person={
		"name":"yu",
		"age":20,
		"sex":"男"
	};

	console.log(person.sex);
	console.log(person["name"]);  //男

	var foo=[1,2];
	var bar=foo;
	console.log(bar);
	bar[0]=9;
	console.log(foo[0]+"-"+foo[1]);
	
	var myArray = [];
	console.log(typeof myArray);  //object
	if (myArray instanceof Array) {
  		 console.log("myArray is an instance of Array.");  //myArray is an instance of Array
	}else{
  		 console.log("myArray is not an instance of Array.");
	}
	
	var person={
		name:"于德松",
		age:25,
		sex:"男",
		res:function(){
			console.log(this.name+this.age+this.sex);
		}

	};

	person.res();	
	
</pre>
<strong>JavaScript 字符串方法</strong></br>
字符串长度：可以使用内置属性 length 来计算字符串的长度</br>
<img src="images/js6.png"/></br>
<strong>JavaScript 运算符</strong></br>
<img src="images/js7.png"/></br>
<strong>JavaScript If...Else 语句</strong></br>
在 JavaScript 中，我们可使用以下条件语句：</br>
<ul>
<li>if 语句 - 只有当指定条件为 true 时，使用该语句来执行代码</li>
<li>if...else 语句 - 当条件为 true 时执行代码，当条件为 false 时执行其他代码</li>
<li>if...else if....else 语句- 使用该语句来选择多个代码块之一来执行</li>
<li>switch 语句 - 使用该语句来选择多个代码块之一来执行</li>
</ul>
<strong>JavaScript switch 语句</strong></br>
<pre class="brush:javascript;gutter:true">
switch(n)
{
case 1:
  执行代码块 1
break;
case 2:
  执行代码块 2
break;
default:
 n 与 case 1 和 case 2 不同时执行的代码
}
</pre>
<strong>JavaScript for 循环</strong>
JavaScript 支持不同类型的循环：
<ul>
	<li>for - 循环代码块一定的次数</li>
	<li>for/in - 循环遍历对象的属性</li>
	<li>while - 当指定的条件为 true 时循环指定的代码块</li>
	<li>do/while - 同样当指定的条件为 true 时循环指定的代码块</li>
</ul>

<strong>JavaScript 函数定义</strong></br>
JavaScript 使用关键字 function 定义函数。
<pre class="brush:javascript;gutter:true">
	function add(x,y)
	{
		return x+y;
	}
	console.log(add(2,3));
	
	var add=function(x,y)
	{
		return x+y;
	}
	console.log(add(1,10));
	
	var myFunction = new Function("a", "b", "return a * b");
	var x = myFunction(4, 3);
</pre>
<strong>自调用函数</strong></br>
<pre class="brush:javascript;gutter:true">
(function () {
    var x = "Hello!!";      // 我将调用自己
})();
</pre>
<strong>JavaScript 内嵌函数</strong></br>
所有函数都能访问全局变量。  </br>
实际上，在 JavaScript 中，所有函数都能访问它们上一层的作用域。</br>
JavaScript 支持嵌套函数。嵌套函数可以访问上一层的函数变量。</br>
该实例中，内嵌函数 plus() 可以访问父函数的 counter 变量：
<pre class="brush:javascript;gutter:true">
function add() {
    var counter = 0;
    function plus() {counter += 1;}
    plus();    
    return counter; 
}
</pre>
<strong>JavaScript 闭包</strong></br>
<pre class="brush:javascript;gutter:true">
var add = (function () {
    var counter = 0;
    return function () {return counter += 1;}
})();

add();
add();
add();

// 计数器为 3
</pre>
实例解析</br>
变量 add 指定了函数自我调用的返回字值。</br>
自我调用函数只执行一次。设置计数器为 0。并返回函数表达式。</br>
add变量可以作为一个函数使用。非常棒的部分是它可以访问函数上一层作用域的计数器。</br>
这个叫作 JavaScript 闭包。它使得函数拥有私有变量变成可能。</br>
计数器受匿名函数的作用域保护，只能通过 add 方法修改。</br>
<p><strong>JavaScript HTML DOM</strong></p>
查找 HTML 元素</br>
<ul>
	<li>通过 id 找到 HTML 元素  document.getElementById("intro");</li>
	<li>通过标签名找到 HTML 元素  document.getElementsByTagName("p");</li>
	<li>通过类名找到 HTML 元素</li>
</ul>
在 JavaScript 中，document.write() 可用于直接向 HTML 输出流写内容。</br>
改变 HTML 内容:document.getElementById(id).innerHTML=new HTML</br>
改变 HTML 属性:document.getElementById(id).attribute=new value</br>
改变 HTML 样式:document.getElementById(id).style.property=new style</br>
<strong>JavaScript HTML DOM 事件</strong>
<ul>
	<li>onclick   例子：document.getElementById("myBtn").onclick=function(){displayDate()};</li>
	<li>onload 和 onunload 事件</br>
	<pre class="brush:javascript;gutter:true">
	&lt;body onload="checkCookies()"&gt;
	function checkCookies()
	{
	if (navigator.cookieEnabled==true)
		{
			alert("Cookies 可用")
		}else{
			alert("Cookies 不可用")
	}
}	
	</pre>
	
	
	</li>
	<li>onchange 事件&lt;input type="text" id="fname" onchange="upperCase()"></li>
	<li>onmouseover 和 onmouseout 事件</li>
	<li>onmousedown、onmouseup 以及 onclick 、onfocus事件</li>
</ul>

<p><strong>JavaScript Date（日期） 对象</strong></p>
<table>
	<tr>
		<td>getFullYear()</td>
		<td>使用 getFullYear() 获取年份。</td>
	</tr>
	<tr>
		<td>getTime()</td>
		<td>getTime() 返回从 1970 年 1 月 1 日至今的毫秒数。</td>
	</tr>
	<tr>
		<td>setFullYear()</td>
		<td>如何使用 setFullYear() 设置具体的日期。</td>
	</tr>
	<tr>
		<td>toUTCString()</td>
		<td>如何使用 toUTCString() 将当日的日期（根据 UTC）转换为字符串。</td>
	</tr>	
	<tr>
		<td>getDay()</td>
		<td>如何使用 getDay() 和数组来显示星期，而不仅仅是数字。</td>
	</tr>
	<tr>
		<td>getMonth()</td>
		<td>取得月份</td>
	</tr>
	<tr>
		<td>getDate()</td>
		<td>取得日期</td>
	</tr>
	<tr>
		<td>getHours()</td>
		<td>取得时</td>
	</tr>
	<tr>
		<td>getMinutes()</td>
		<td>取得分</td>
	</tr>	
	<tr>
		<td>getSeconds()</td>
		<td>取得秒</td>
	</tr>		
</table>

 <p><strong>JavaScript RegExp 对象</strong></p>
修饰符用于执行不区分大小写和全文的搜索。</br>
i - 修饰符是用来执行不区分大小写的匹配。</br>
g - 修饰符是用于执行全文的搜索（而不是在找到第一个就停止查找,而是找到所有的匹配）。
 <pre class="brush:javascript;gutter:true">
 语法
var patt=new RegExp(pattern,modifiers);
var patt=/pattern/modifiers;
 </pre>
<table>
	<tr>
		<td>test()</td>
		<td>test()方法搜索字符串指定的值，根据结果并返回真或假。</td>
	</tr>
	<tr>
		<td>exec()</td>
		<td>exec() 方法检索字符串中的指定值。返回值是被找到的值。如果没有发现匹配，则返回 null。</td>
	</tr>
</table>
<p><strong>JS 浏览器BOM</strong></p>
window.open() - 打开新窗口
<pre class="brush:javascript;gutter:true">
window.open(pageURL,name,parameters) 
其中：
pageURL 为子窗口路径 
name 为子窗口句柄 
parameters 为窗口参数(各参数用逗号分隔) 
window.open ('page.html','newwindow',
'height=100,width=400,toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no, status=no') 
</pre>
window.close() - 关闭当前窗口</br>
window.moveTo() - 移动当前窗口</br>
window.resizeTo() - 调整当前窗口的尺寸</br>
<strong>JavaScript 弹窗</strong></br>
可以在 JavaScript 中创建三种消息框：警告框、确认框、提示框。</br>
window.confirm("sometext");</br>
window.alert("sometext");</br>
window.prompt("sometext","defaultvalue");</br>
<p><strong>JavaScript 计时事件</strong></p>
<ul>
	<li>setInterval() - 间隔指定的毫秒数不停地执行指定的代码</li>
	<li>setTimeout() - 暂停指定的毫秒数后执行指定的代码</li>
	<li>clearInterval() 方法用于停止 setInterval() 方法执行的函数代码。</li>
	<li>clearTimeout() 方法用于停止执行setTimeout()方法的函数代码。</li>
</ul>
<p><strong>JavaScript Cookies</strong></p>
JavaScript 可以使用 document.cookie 属性来创建 、读取、及删除 cookies。</br>
JavaScript 中，创建 cookie 如下所示：</br>
document.cookie="username=John Doe";</br>
您还可以为 cookie 添加一个过期时间（以 UTC 或 GMT 时间）。默认情况下，cookie 在浏览器关闭时删除：</br>
document.cookie="username=John Doe; expires=Thu, 18 Dec 2013 12:00:00 GMT";</br>


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