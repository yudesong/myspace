<!DOCTYPE html>   
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel='stylesheet' href='css/shCoreDefault.css' type='text/css' media='all'/>
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
<h1>XML基础</h1>
</div>
<div class="entry">
<span>XML 指可扩展标记语言（eXtensible Markup Language）。</br>
XML 被设计用来传输和存储数据。
</span>
<pre class="brush:javascript;gutter:true">
&lt;?xml version="1.0"?&gt;
&lt;note&gt;
&lt;to&gt;Tove&lt;/to&gt;
&lt;from&gt;Jani&lt;/from&gt;
&lt;heading&gt;Reminder&lt;/heading&gt;
&lt;body&gt;Don't forget me this weekend!&lt;/body&gt;
&lt;/note&gt;
</pre>
<p><strong>XML 语法规则</strong></p>
<span>
	<ul>
		<li>所有的 XML 元素都必须有一个关闭标签</li>
		<li>XML 标签对大小写敏感</li>
		<li>XML 必须正确嵌套</li>
		<li>XML 文档必须有根元素</li>
		<li>XML 属性值必须加引号</li>
	</ul>
</span>
<p><strong>实体引用</strong></p>
<img src="images/xml1.png" />
<p><strong>XML 中的注释</strong></p>
<span>
在 XML 中编写注释的语法与 HTML 的语法很相似。</br>
&lt;!-- This is a comment --&gt;
</span>
<p><strong>什么是 XML 元素</strong></p>
<span>
XML 元素指的是从（且包括）开始标签直到（且包括）结束标签的部分。&lt;!-- This is a comment --&gt;
一个元素可以包含：</br>
<ul>
	<li>其他元素</li>
	<li>文本</li>
	<li>属性</li>
	<li>或混合以上所有...</li>
</ul>
</span>
<p><strong>XML 命名规则</strong></p>
<span>
<ul>
	<li>名称可以包含字母、数字以及其他的字符</li>
	<li>名称不能以数字或者标点符号开始</li>
	<li>名称不能以字母 xml（或者 XML、Xml 等等）开始</li>
	<li>名称不能包含空格</li>
</ul>
</span>
<p><strong>XML 属性</strong></p>
<span>
属性通常提供不属于数据组成部分的信息。
</span>
<pre class="brush:javascript;gutter:true">
&lt;file type="gif"&gt;computer.gif&lt;/file&gt;
</pre>
<span>
XML 属性必须加引号,属性值必须被引号包围，不过单引号和双引号均可使用
</span>
<p><strong>XML 验证</strong></p>
<span>
"形式良好"的 XML 文档拥有正确的语法。</br>
在前面的章节描述的语法规则：</br></span>
<ul>
	<li>XML 文档必须有一个根元素</li>
	<li>XML元素都必须有一个关闭标签</li>
	<li>XML 标签对大小写敏感</li>
	<li>XML 元素必须被正确的嵌套</li>
	<li>XML 属性值必须加引号</li>
</ul>

<p><strong>验证 XML 文档</strong></p>
<span>合法的 XML 文档是"形式良好"的 XML 文档，这也符合文档类型定义（DTD）的规则：</span>
<pre class="brush:javascript;gutter:true">
&lt;?xml version="1.0" encoding="ISO-8859-1"?&gt;
&lt;!DOCTYPE note SYSTEM "Note.dtd"&gt;
&lt;note&gt;
&lt;to>Tove&lt;/to&gt;
&lt;from&gt;Jani&lt;/from&gt;
&lt;heading&gt;Reminder&lt;/heading&gt;
&lt;body&gt;Don't forget me this weekend!&lt;/body&gt;
&lt;/note>
</pre>
<p><strong>XML DTD</strong></p>
<span>DTD 的目的是定义 XML 文档的结构。它使用一系列合法的元素来定义文档结构：</span>
<pre class="brush:javascript;gutter:true">
&lt;!DOCTYPE note
[
&lt;!ELEMENT note (to,from,heading,body)&gt;
&lt;!ELEMENT to (#PCDATA)&gt;
&lt;!ELEMENT from (#PCDATA)&gt;
&lt;!ELEMENT heading (#PCDATA)&gt;
&lt;!ELEMENT body (#PCDATA)&gt;
]&gt;
</pre>
<p><strong>XML Schema</strong></p>
<span>W3C 支持一种基于 XML 的 DTD 代替者，它名为 XML Schema：</span>
<pre class="brush:javascript;gutter:true">
&lt;xs:element name="note"&gt;
&lt;xs:complexType&gt;
&lt;xs:sequence&gt;
&lt;xs:element name="to" type="xs:string"/&gt;
&lt;xs:element name="from" type="xs:string"/&gt;
&lt;xs:element name="heading" type="xs:string"/&gt;
&lt;xs:element name="body" type="xs:string"/&gt;
&lt;/xs:sequence&gt;
&lt;/xs:complexType&gt;
&lt;/xs:element&gt;
</pre>
<p><strong>XMLHttpRequest 对象</strong></p>
<span>
XMLHttpRequest 对象用于在后台与服务器交换数据。</br>
XMLHttpRequest 对象是开发者的梦想，因为您能够：</br>
<ul>
<li>在不重新加载页面的情况下更新网页</li>
<li>在页面已加载后从服务器请求数据</li>
<li>在页面已加载后从服务器接收数据</li>
<li>在后台向服务器发送数据</li>
</ul>
</span>
<p><strong>创建一个 XMLHttpRequest 对象</strong></p>
<span>创建 XMLHttpRequest 对象的语法：</span>
<pre class="brush:javascript;gutter:true">
xmlhttp=new XMLHttpRequest();
</pre>
<p><strong>解析 XML 文档</strong></p>
<span>下面的代码片段把 XML 文档解析到 XML DOM 对象中：</span>
<pre class="brush:javascript;gutter:true">
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.open("GET","books.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML;
</pre>
<p><strong>解析 XML 字符串</strong></p>
<span>下面的代码片段把 XML 字符串解析到 XML DOM 对象中：</span>
<pre class="brush:javascript;gutter:true">
txt="<bookstore><book>";
txt=txt+"<title>Everyday Italian</title>";
txt=txt+"<author>Giada De Laurentiis</author>";
txt=txt+"<year>2005</year>";
txt=txt+"</book></bookstore>";
if (window.DOMParser)
{
parser=new DOMParser();
xmlDoc=parser.parseFromString(txt,"text/xml");
}
else // Internet Explorer
{
xmlDoc=new ActiveXObject("Microsoft.XMLDOM");
xmlDoc.async=false;
xmlDoc.loadXML(txt); 
}
</pre>
<p><strong>加载一个 XML 文件</strong></p>
<pre class="brush:javascript;gutter:true">
//XML文件
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>
</note>
//HTML文档
&lt;html&gt;
&lt;body&gt;
<h1>W3Schools Internal Note</h1>
<div>
<b>To:</b> <span id="to"></span><br />
<b>From:</b> <span id="from"></span><br />
<b>Message:</b> <span id="message"></span>
</div>
<script>
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.open("GET","note.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML;

document.getElementById("to").innerHTML=
xmlDoc.getElementsByTagName("to")[0].childNodes[0].nodeValue;
document.getElementById("from").innerHTML=
xmlDoc.getElementsByTagName("from")[0].childNodes[0].nodeValue;
document.getElementById("message").innerHTML=
xmlDoc.getElementsByTagName("body")[0].childNodes[0].nodeValue;
</script>
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p><strong>加载一个 XML 字符串</strong></p>
<pre class="brush:javascript;gutter:true">
&lt;html&gt;
&lt;body&gt;
<h1>W3Schools Internal Note</h1>
<div>
<b>To:</b> <span id="to"></span><br />
<b>From:</b> <span id="from"></span><br />
<b>Message:</b> <span id="message"></span>
</div>

<script>
txt="<note>";
txt=txt+"<to>Tove</to>";
txt=txt+"<from>Jani</from>";
txt=txt+"<heading>Reminder</heading>";
txt=txt+"<body>Don't forget me this weekend!</body>";
txt=txt+"</note>";

if (window.DOMParser)
{
parser=new DOMParser();
xmlDoc=parser.parseFromString(txt,"text/xml");
}
else // Internet Explorer
{
xmlDoc=new ActiveXObject("Microsoft.XMLDOM");
xmlDoc.async=false;
xmlDoc.loadXML(txt);
}

document.getElementById("to").innerHTML=
xmlDoc.getElementsByTagName("to")[0].childNodes[0].nodeValue;
document.getElementById("from").innerHTML=
xmlDoc.getElementsByTagName("from")[0].childNodes[0].nodeValue;
document.getElementById("message").innerHTML=
xmlDoc.getElementsByTagName("body")[0].childNodes[0].nodeValue;
</script>
&lt;/body&gt;
&gt;/html&gt;
</pre>
<p><strong>在 HTML 页面中显示 XML 数据</strong></p>
<span>在下面的实例中，我们打开一个 XML 文件（"cd_catalog.xml"），然后遍历每个 CD 元素，并显示HTML 表格中的 ARTIST 元素和 TITLE 元素的值：</span>
<pre class="brush:javascript;gutter:true">
&lt;html&gt;
&lt;body&gt;
&lt;script&gt;
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.open("GET","cd_catalog.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML; 

document.write("<table border='1'>");
var x=xmlDoc.getElementsByTagName("CD");
for (i=0;i&lt;x.length;i++)
{ 
document.write("<tr><td>");
document.write(x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue);
document.write("</td><td>");
document.write(x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue);
document.write("</td></tr>");
}
document.write("</table>");
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
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