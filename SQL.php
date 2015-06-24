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
<h1>SQL基础</h1>
</div>
<div class="entry">
<p><strong>SQL SELECT 语句</strong></p>
<span>SELECT 语句用于从数据库中选取数据。结果被存储在一个结果表中，称为结果集。</span>
<pre class="brush:javascript;gutter:true">
SELECT column_name,column_name
FROM table_name;
//or
SELECT * FROM table_name;
</pre>
<p><strong>SQL SELECT DISTINCT 语句</strong></p>
<span>在表中，一个列可能会包含多个重复值，有时您也许希望仅仅列出不同（distinct）的值。</br>
DISTINCT 关键词用于返回唯一不同的值。</span>
<pre class="brush:javascript;gutter:true">
SELECT DISTINCT column_name,column_name
FROM table_name;
</pre>
<p><strong>SQL WHERE 子句</strong></p>
<span>WHERE 子句用于提取那些满足指定标准的记录。</span>
<pre class="brush:javascript;gutter:true">
SELECT column_name,column_name
FROM table_name
WHERE column_name operator value;
</pre>
<img src="images/sql1.png"/>
<p><strong>SQL AND & OR 运算符</strong></p>
<span>
如果第一个条件和第二个条件都成立，则 AND 运算符显示一条记录。</br>
如果第一个条件和第二个条件中只要有一个成立，则 OR 运算符显示一条记录。
</span>
<pre class="brush:javascript;gutter:true">
SELECT * FROM Customers
WHERE Country='Germany'
AND (City='Berlin' OR City='München');
</pre>
<p><strong>SQL ORDER BY 关键字</strong></p>
<span>
ORDER BY 关键字用于对结果集按照一个列或者多个列进行排序。</br>
ORDER BY 关键字默认按照升序对记录进行排序。如果需要按照降序对记录进行排序，您可以使用 DESC 关键字。
</span>
<pre class="brush:javascript;gutter:true">
SELECT column_name,column_name
FROM table_name
ORDER BY column_name,column_name ASC|DESC;
</pre>
<p><strong>SQL INSERT INTO 语句</strong></p>
<span>INSERT INTO 语句用于向表中插入新记录。</span>
<pre class="brush:javascript;gutter:true">
INSERT INTO table_name
VALUES (value1,value2,value3,...);
//or
INSERT INTO table_name (column1,column2,column3,...)
VALUES (value1,value2,value3,...);
</pre>
<p><strong>SQL UPDATE 语句</strong></p>
<span>UPDATE 语句用于更新表中已存在的记录。</span>
<pre class="brush:javascript;gutter:true">
UPDATE table_name
SET column1=value1,column2=value2,...
WHERE some_column=some_value;
</pre>
<p><strong>SQL DELETE 语句</strong></p>
<span>DELETE 语句用于删除表中的行。</span>
<pre class="brush:javascript;gutter:true">
DELETE FROM table_name
WHERE some_column=some_value;
</pre>
<span>您可以在不删除表的情况下，删除表中所有的行。这意味着表结构、属性、索引将保持不变：</span>
<pre class="brush:javascript;gutter:true">
DELETE FROM table_name;
or
DELETE * FROM table_name;
</pre>
<p><strong>SQL SELECT TOP 子句</strong></p>
<span>
SELECT TOP 子句用于规定要返回的记录的数目。</br>
SELECT TOP 子句对于拥有数千条记录的大型表来说，是非常有用的。</br>
注释：并非所有的数据库系统都支持 SELECT TOP 子句。</br>
</span>
<span><strong>SQL Server / MS Access 语法</strong></span>
<pre class="brush:javascript;gutter:true">
SELECT TOP number|percent column_name(s)
FROM table_name;
</pre>
<span><strong>MySQL 语法</strong></span>
<pre class="brush:javascript;gutter:true">
SELECT column_name(s)
FROM table_name
LIMIT number;
</pre>
<span><strong>Oracle 语法</strong></span>
<pre class="brush:javascript;gutter:true">
SELECT column_name(s)
FROM table_name
WHERE ROWNUM <= number;
</pre>
<p><strong>SQL LIKE 操作符</strong></p>
<span>LIKE 操作符用于在 WHERE 子句中搜索列中的指定模式。</span>
<pre class="brush:javascript;gutter:true">
SELECT column_name(s)
FROM table_name
WHERE column_name LIKE pattern;
</pre>
<img src="images/sql2.png"/>
<p><strong>IN 操作符</strong></p>
<span>IN 操作符允许您在 WHERE 子句中规定多个值。</span>
<pre class="brush:javascript;gutter:true">
SELECT column_name(s)
FROM table_name
WHERE column_name IN (value1,value2,...);
</pre>

<p><strong>SQL BETWEEN 操作符</strong></p>
<span>BETWEEN 操作符选取介于两个值之间的数据范围内的值。这些值可以是数值、文本或者日期。</span>
<pre class="brush:javascript;gutter:true">
SELECT column_name(s)
FROM table_name
WHERE column_name BETWEEN value1 AND value2;
</pre>

<p><strong>NOT BETWEEN 操作符实例</strong></p>
<span>如需显示不在上面实例范围内的产品，请使用 NOT BETWEEN：</span>
<pre class="brush:javascript;gutter:true">
SELECT * FROM Products
WHERE Price NOT BETWEEN 10 AND 20;
</pre>

<p><strong>SQL 别名（Aliases）</strong></p>
<span>通过使用 SQL，可以为表名称或列名称指定别名（Alias）</br>
基本上，创建别名是为了让列名称的可读性更强。
</span>
<pre class="brush:javascript;gutter:true">
//列的 SQL Alias 语法
SELECT column_name AS alias_name
FROM table_name;

//表的 SQL Alias 语法
SELECT column_name(s)
FROM table_name AS alias_name;
</pre>

<p><strong>SQL 连接（Joins）</strong></p>
<span>SQL join 用于把来自两个或多个表的行结合起来。</span>
<pre class="brush:javascript;gutter:true">
SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate
FROM Orders
INNER JOIN Customers
ON Orders.CustomerID=Customers.CustomerID;
</pre>

<p><strong>SQL INNER JOIN 关键字</strong></p>
<span>INNER JOIN 关键字在表中存在至少一个匹配时返回行.</br>
SQL INNER JOIN 语法
</span>
<pre class="brush:javascript;gutter:true">
SELECT column_name(s)
FROM table1
INNER JOIN table2
ON table1.column_name=table2.column_name;
//或：
SELECT column_name(s)
FROM table1
JOIN table2
ON table1.column_name=table2.column_name;
//注释：INNER JOIN 与 JOIN 是相同的。
</pre>
<p><strong>SQL LEFT JOIN 关键字</strong></p>
<span>LEFT JOIN 关键字从左表（table1）返回所有的行，即使右表（table2）中没有匹配。如果右表中没有匹配，则结果为 NULL。</br>
SQL LEFT JOIN 语法
</span>
<pre class="brush:javascript;gutter:true">
SELECT column_name(s)
FROM table1
LEFT JOIN table2
ON table1.column_name=table2.column_name;
//or
SELECT column_name(s)
FROM table1
LEFT OUTER JOIN table2
ON table1.column_name=table2.column_name;
//在某些数据库中，LEFT JOIN 称为 LEFT OUTER JOIN。
</pre>

<p><strong>SQL RIGHT JOIN 关键字</strong></p>
<span>RIGHT JOIN 关键字从右表（table2）返回所有的行，即使左表（table1）中没有匹配。如果左表中没有匹配，则结果为 NULL。
</br>
SQL RIGHT JOIN 语法</span>
<pre class="brush:javascript;gutter:true">
SELECT column_name(s)
FROM table1
RIGHT JOIN table2
ON table1.column_name=table2.column_name;
//或：

SELECT column_name(s)
FROM table1
RIGHT OUTER JOIN table2
ON table1.column_name=table2.column_name;
//在某些数据库中，RIGHT JOIN 称为 RIGHT OUTER JOIN。
</pre>

<p><strong>SQL FULL OUTER JOIN 关键字</strong></p>
<span>
FULL OUTER JOIN 关键字只要左表（table1）和右表（table2）其中一个表中存在匹配，则返回行.
</br>
FULL OUTER JOIN 关键字结合了 LEFT JOIN 和 RIGHT JOIN 的结果。</br>
</span>
<pre class="brush:javascript;gutter:true">
SELECT column_name(s)
FROM table1
FULL OUTER JOIN table2
ON table1.column_name=table2.column_name;
</pre>

<p><strong>SQL UNION 操作符</strong></p>
<span>
UNION 操作符用于合并两个或多个 SELECT 语句的结果集。</br>
请注意，UNION 内部的每个 SELECT 语句必须拥有相同数量的列。列也必须拥有相似的数据类型。同时，每个 SELECT 语句中的列的顺序必须相同。
</br>SQL UNION 语法</br>
</span>
<pre class="brush:javascript;gutter:true">
SELECT column_name(s) FROM table1
UNION
SELECT column_name(s) FROM table2;
//默认地，UNION 操作符选取不同的值。如果允许重复的值，请使用 UNION ALL。
</pre>
<span>SQL UNION ALL 语法</span>
<pre class="brush:javascript;gutter:true">
SELECT column_name(s) FROM table1
UNION ALL
SELECT column_name(s) FROM table2;
注释：UNION 结果集中的列名总是等于 UNION 中第一个 SELECT 语句中的列名。
</pre>

<p><strong>SQL SELECT INTO 语句</strong></p>
<span>SELECT INTO 语句从一个表复制数据，然后把数据插入到另一个新表中。</span>
<pre class="brush:javascript;gutter:true">
SELECT *
INTO newtable [IN externaldb]
FROM table1;

//或者只复制希望的列插入到新表中：

SELECT column_name(s)
INTO newtable [IN externaldb]
FROM table1;
</pre>

<p><strong>SQL INSERT INTO SELECT 语句</strong></p>
<span>INSERT INTO SELECT 语句从一个表复制数据，然后把数据插入到一个已存在的表中。目标表中任何已存在的行都不会受影响。</span>
<pre class="brush:javascript;gutter:true">
INSERT INTO table2
SELECT * FROM table1;
//或者我们可以只复制希望的列插入到另一个已存在的表中：

INSERT INTO table2
(column_name(s))
SELECT column_name(s)
FROM table1;
</pre>

<p><strong>SQL CREATE DATABASE 语句</strong></p>
<span>CREATE DATABASE 语句用于创建数据库。</span>
<pre class="brush:javascript;gutter:true">
CREATE DATABASE dbname;
</pre>

<p><strong>SQL CREATE TABLE 语句</strong></p>
<span>CREATE TABLE 语句用于创建数据库中的表。</br>
表由行和列组成，每个表都必须有个表名。</span>
<pre class="brush:javascript;gutter:true">
CREATE TABLE table_name
(
column_name1 data_type(size),
column_name2 data_type(size),
column_name3 data_type(size),
....
);

column_name 参数规定表中列的名称。
data_type 参数规定列的数据类型（例如 varchar、integer、decimal、date 等等）。
size 参数规定表中列的最大长度。
</pre>

<p><strong>SQL 约束（Constraints）</strong></p>
<span>
SQL 约束用于规定表中的数据规则。</br>
如果存在违反约束的数据行为，行为会被约束终止。</br>
约束可以在创建表时规定（通过 CREATE TABLE 语句），或者在表创建之后规定（通过 ALTER TABLE 语句）。
</span>
<pre class="brush:javascript;gutter:true">
CREATE TABLE table_name
(
column_name1 data_type(size) constraint_name,
column_name2 data_type(size) constraint_name,
column_name3 data_type(size) constraint_name,
....
);
</pre>

<p><strong>SQL NOT NULL 约束</strong></p>
<span>
NOT NULL 约束强制列不接受 NULL 值。</br>
NOT NULL 约束强制字段始终包含值。这意味着，如果不向字段添加值，就无法插入新记录或者更新记录。
</span>
<pre class="brush:javascript;gutter:true">
CREATE TABLE Persons
(
P_Id int NOT NULL,
LastName varchar(255) NOT NULL,
FirstName varchar(255),
Address varchar(255),
City varchar(255)
)
</pre>

<p><strong>SQL UNIQUE 约束</strong></p>
<span>
UNIQUE 约束唯一标识数据库表中的每条记录。</br>
UNIQUE 和 PRIMARY KEY 约束均为列或列集合提供了唯一性的保证。</br>
PRIMARY KEY 约束拥有自动定义的 UNIQUE 约束。</br>
请注意，每个表可以有多个 UNIQUE 约束，但是每个表只能有一个 PRIMARY KEY 约束。
</span>
<pre class="brush:javascript;gutter:true">
MySQL：

CREATE TABLE Persons
(
P_Id int NOT NULL,
LastName varchar(255) NOT NULL,
FirstName varchar(255),
Address varchar(255),
City varchar(255),
UNIQUE (P_Id)
)
SQL Server / Oracle / MS Access：

CREATE TABLE Persons
(
P_Id int NOT NULL UNIQUE,
LastName varchar(255) NOT NULL,
FirstName varchar(255),
Address varchar(255),
City varchar(255)
)
如需命名 UNIQUE 约束，并定义多个列的 UNIQUE 约束，请使用下面的 SQL 语法：

MySQL / SQL Server / Oracle / MS Access：

CREATE TABLE Persons
(
P_Id int NOT NULL,
LastName varchar(255) NOT NULL,
FirstName varchar(255),
Address varchar(255),
City varchar(255),
CONSTRAINT uc_PersonID UNIQUE (P_Id,LastName)
)
</pre>

<p><strong>撤销 UNIQUE 约束</strong></p>
<span>如需撤销 UNIQUE 约束，请使用下面的 SQL：</span>
<pre class="brush:javascript;gutter:true">
MySQL：

ALTER TABLE Persons
DROP INDEX uc_PersonID
SQL Server / Oracle / MS Access：

ALTER TABLE Persons
DROP CONSTRAINT uc_PersonID
</pre>

<p><strong>SQL PRIMARY KEY 约束</strong></p>
<span>
PRIMARY KEY 约束唯一标识数据库表中的每条记录。</br>
主键必须包含唯一的值。</br>
主键列不能包含 NULL 值。</br>
每个表都应该有一个主键，并且每个表只能有一个主键。
</span>
<pre class="brush:javascript;gutter:true">
MySQL：

CREATE TABLE Persons
(
P_Id int NOT NULL,
LastName varchar(255) NOT NULL,
FirstName varchar(255),
Address varchar(255),
City varchar(255),
PRIMARY KEY (P_Id)
)
SQL Server / Oracle / MS Access：

CREATE TABLE Persons
(
P_Id int NOT NULL PRIMARY KEY,
LastName varchar(255) NOT NULL,
FirstName varchar(255),
Address varchar(255),
City varchar(255)
)
如需命名 PRIMARY KEY 约束，并定义多个列的 PRIMARY KEY 约束，请使用下面的 SQL 语法：

MySQL / SQL Server / Oracle / MS Access：

CREATE TABLE Persons
(
P_Id int NOT NULL,
LastName varchar(255) NOT NULL,
FirstName varchar(255),
Address varchar(255),
City varchar(255),
CONSTRAINT pk_PersonID PRIMARY KEY (P_Id,LastName)
)
</pre>

<p><strong>撤销 PRIMARY KEY 约束</strong></p>
<span>如需撤销 PRIMARY KEY 约束，请使用下面的 SQL：</span>
<pre class="brush:javascript;gutter:true">
MySQL：

ALTER TABLE Persons
DROP PRIMARY KEY
SQL Server / Oracle / MS Access：

ALTER TABLE Persons
DROP CONSTRAINT pk_PersonID
</pre>

<p><strong>SQL FOREIGN KEY 约束</strong></p>
<span>下面的 SQL 在 "Orders" 表创建时在 "P_Id" 列上创建 FOREIGN KEY 约束：</span>
<pre class="brush:javascript;gutter:true">
MySQL：

CREATE TABLE Orders
(
O_Id int NOT NULL,
OrderNo int NOT NULL,
P_Id int,
PRIMARY KEY (O_Id),
FOREIGN KEY (P_Id) REFERENCES Persons(P_Id)
)
SQL Server / Oracle / MS Access：

CREATE TABLE Orders
(
O_Id int NOT NULL PRIMARY KEY,
OrderNo int NOT NULL,
P_Id int FOREIGN KEY REFERENCES Persons(P_Id)
)
如需命名 FOREIGN KEY 约束，并定义多个列的 FOREIGN KEY 约束，请使用下面的 SQL 语法：

MySQL / SQL Server / Oracle / MS Access：

CREATE TABLE Orders
(
O_Id int NOT NULL,
OrderNo int NOT NULL,
P_Id int,
PRIMARY KEY (O_Id),
CONSTRAINT fk_PerOrders FOREIGN KEY (P_Id)
REFERENCES Persons(P_Id)
)
</pre>

<p><strong>SQL CHECK 约束</strong></p>
<span>
CHECK 约束用于限制列中的值的范围。</br>
如果对单个列定义 CHECK 约束，那么该列只允许特定的值。</br>
如果对一个表定义 CHECK 约束，那么此约束会基于行中其他列的值在特定的列中对值进行限制。
</span>
<pre class="brush:javascript;gutter:true">
MySQL：

CREATE TABLE Persons
(
P_Id int NOT NULL,
LastName varchar(255) NOT NULL,
FirstName varchar(255),
Address varchar(255),
City varchar(255),
CHECK (P_Id>0)
)
SQL Server / Oracle / MS Access：

CREATE TABLE Persons
(
P_Id int NOT NULL CHECK (P_Id>0),
LastName varchar(255) NOT NULL,
FirstName varchar(255),
Address varchar(255),
City varchar(255)
)
如需命名 CHECK 约束，并定义多个列的 CHECK 约束，请使用下面的 SQL 语法：

MySQL / SQL Server / Oracle / MS Access：

CREATE TABLE Persons
(
P_Id int NOT NULL,
LastName varchar(255) NOT NULL,
FirstName varchar(255),
Address varchar(255),
City varchar(255),
CONSTRAINT chk_Person CHECK (P_Id>0 AND City='Sandnes')
)
</pre>

<p><strong>SQL DEFAULT 约束</strong></p>
<span>
DEFAULT 约束用于向列中插入默认值。</br>
如果没有规定其他的值，那么会将默认值添加到所有的新记录。
</span>
<pre class="brush:javascript;gutter:true">
My SQL / SQL Server / Oracle / MS Access：

CREATE TABLE Persons
(
P_Id int NOT NULL,
LastName varchar(255) NOT NULL,
FirstName varchar(255),
Address varchar(255),
City varchar(255) DEFAULT 'Sandnes'
)
通过使用类似 GETDATE() 这样的函数，DEFAULT 约束也可以用于插入系统值：

CREATE TABLE Orders
(
O_Id int NOT NULL,
OrderNo int NOT NULL,
P_Id int,
OrderDate date DEFAULT GETDATE()
)
</pre>

<p><strong>索引</strong></p>
<span>
您可以在表中创建索引，以便更加快速高效地查询数据。</br>
用户无法看到索引，它们只能被用来加速搜索/查询。</br>
注释：更新一个包含索引的表需要比更新一个没有索引的表花费更多的时间，这是由于索引本身也需要更新。因此，理想的做法是仅仅在常常被搜索的列（以及表）上面创建索引。
</span>
<pre class="brush:javascript;gutter:true">
CREATE INDEX index_name
ON table_name (column_name)
</pre>

<p><strong>SQL 撤销索引、撤销表以及撤销数据库</strong></p>
<span></span>
<pre class="brush:javascript;gutter:true">
DROP INDEX 语句
DROP INDEX 语句用于删除表中的索引。

用于 MS Access 的 DROP INDEX 语法：

DROP INDEX index_name ON table_name
用于 MS SQL Server 的 DROP INDEX 语法：

DROP INDEX table_name.index_name
用于 DB2/Oracle 的 DROP INDEX 语法：

DROP INDEX index_name
用于 MySQL 的 DROP INDEX 语法：

ALTER TABLE table_name DROP INDEX index_name

DROP TABLE 语句
DROP TABLE 语句用于删除表。

DROP TABLE table_name

DROP DATABASE 语句
DROP DATABASE 语句用于删除数据库。

DROP DATABASE database_name

TRUNCATE TABLE 语句
如果我们仅仅需要删除表内的数据，但并不删除表本身，那么我们该如何做呢？

请使用 TRUNCATE TABLE 语句：

TRUNCATE TABLE table_name
</pre>

<p><strong>ALTER TABLE 语句</strong></p>
<span>ALTER TABLE 语句用于在已有的表中添加、删除或修改列。</span>
<pre class="brush:javascript;gutter:true">
ALTER TABLE table_name
ADD column_name datatype
如需删除表中的列，请使用下面的语法（请注意，某些数据库系统不允许这种在数据库表中删除列的方式）：

ALTER TABLE table_name
DROP COLUMN column_name

要改变表中列的数据类型，请使用下面的语法：

SQL Server / MS Access：

ALTER TABLE table_name
ALTER COLUMN column_name datatype
My SQL / Oracle：

ALTER TABLE table_name
MODIFY COLUMN column_name datatype
</pre>

<p><strong>AUTO INCREMENT 字段</strong></p>
<span>Auto-increment 会在新记录插入表中时生成一个唯一的数字。</span>
<pre class="brush:javascript;gutter:true">
CREATE TABLE Persons
(
ID int NOT NULL AUTO_INCREMENT,
LastName varchar(255) NOT NULL,
FirstName varchar(255),
Address varchar(255),
City varchar(255),
PRIMARY KEY (ID)
)
</pre>

<p><strong>SQL 视图（Views）</strong></p>
<span>视图是可视化的表。</span>
<pre class="brush:javascript;gutter:true">
CREATE VIEW view_name AS
SELECT column_name(s)
FROM table_name
WHERE condition

SQL DROP VIEW 语法
DROP VIEW view_name
</pre>
<img src="images/sql3.png"/>
<img src="images/sql4.png"/>


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