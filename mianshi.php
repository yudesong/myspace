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
<h1>程序员面试宝典</h1>
</div>
<div class="entry">
<strong>第一章 程序设计基本概念</strong></br>
<span>赋值语句</span></br>
<span>(1)下面C++语句的输出结果是什么？</span>
<pre class="brush:javascript;gutter:true">
int i = 1;
void main()
{
	int i = i;
}
</pre>
A.mian里面的i是一个未定义值<br>
B.mian里面的i为1<br>
C.编译器不允许这种写法<br>
D.mian里面的i为0<br>
<span>(2)下面程序的结果是什么？</span>
<pre class="brush:javascript;gutter:true">
int main()
{
	int x=2,y,z;
	x *=(y=z=5); cout&lt;&lt;x&lt;&lt;endl;
	z=3;
	x ==(y=z); cout&lt;&lt;x&lt;&lt;endl;
	x =(y==z); cout&lt;&lt;x&lt;&lt;endl;
	x =(y&amp;z); cout&lt;&lt;x&lt;&lt;endl;
	x =(y&amp;&amp;z); cout&lt;&lt;x&lt;&lt;endl;
	y =4;
	x =(y|z); cout&lt;&lt;x&lt;&lt;endl;
	x =(y||z); cout&lt;&lt;x&lt;&lt;endl;	
	return 0;
}
</pre>
<!--
A.<br>
B.<br>
C.<br>
D.<br>
-->
<span>(3)下面程序的结果是什么？</span>
<pre class="brush:javascript;gutter:true">
int func(int x)
{
	int count=0;
	while(x)
	{
		count ++;
		x=x&amp;(x-1);
	}
	return count;
}
int main()
{
	cout&lt;&lt;func(9999)&lt;&lt;endl;
	return 0;
}
</pre>
A.8
&nbsp;&nbsp;&nbsp;B.9
&nbsp;&nbsp;&nbsp;C.10
&nbsp;&nbsp;&nbsp;D.11</br>
<strong>i++</strong></br>
<span>(1)下面两段代码输出结果有什么不同？</span></br>
<span>第一段</span>
<pre class="brush:javascript;gutter:true">
int main()
{
	int a,x;
	for(a=0,x=0;a&lt;=1 &amp;&amp; !x++;a++)
	a++;
	cout&lt;&lt;a&lt;&lt;x&lt;&lt;endl;
	return 0;
}
</pre>
<span>第二段</span>
<pre class="brush:javascript;gutter:true">
int main()
{
	int a,x;
	for(a=0,x=0;a&lt;=1 &amp;&amp; !x++;)
	a++;
	cout&lt;&lt;a&lt;&lt;x&lt;&lt;endl;
	return 0;
}
</pre>
<span>(2)下面C代码输出结果是什么？</span></br>
<pre class="brush:javascript;gutter:true">
int main()
{
	int b =3;
	int arr[]={6,7,8,9,10};
	int *ptr=arr;
	*(ptr++)+=123;
	printf("%d %d \n",*ptr,*(++ptr));
	return 0;
}
</pre>
A. 8 8 &nbsp;&nbsp; B. 130 8 &nbsp;&nbsp; C.7 7 &nbsp;&nbsp;D. 7 8 </br>
<span>编程风格</span>
A</br>
<pre class="brush:javascript;gutter:true">
if('A'==a){
	a++;
}

if(a=='A'){
	a++;
}
</pre>
B.</br>
<pre class="brush:javascript;gutter:true">
for(i=0;i&lt;8;i++){
	X=i+Y+J*7;
	printf("%d\n",X);
}

S=Y+J*7;
for(i=0;i&lt;8;i++){
	printf("%d\n",i+S);
}
</pre>
<span>类型转换</span></br>
<span>(1)下面程序的输出结果是什么？</span>
<pre class="brush:javascript;gutter:true">
int main()
{
	float a=1.0f;
	cout&lt;&lt;(int)a&lt;&lt;endl;
	cout&lt;&lt;&amp;a&lt;&lt;endl;
	cout&lt;&lt;(int&amp;)a&lt;&lt;endl;
	cout&lt;&lt;boolalpha&lt;&lt;((int)a==(int&amp;)a)&lt;&lt;endl;
	float b=0.0f;
	cout&lt;&lt;(int)b&lt;&lt;endl;
	cout&lt;&lt;&amp;b&lt;&lt;endl;
	cout&lt;&lt;(int&amp;)b&lt;&lt;endl;
	cout&lt;&lt;boolalpha&lt;&lt;((int)b==(int&amp;)b)&lt;&lt;endl;
	return 0;
}
</pre>
<span>(2)下面程序的输出结果是什么？</span>
<pre class="brush:javascript;gutter:true">
int main()
{
	unsigned int a=0xFFFFFFF7;
	unsigned char i=(unsigned char)a; 
	char *b=(char *)&amp;a;
	printf("%08x, %08x",i,*b);
	return 0;
}
</pre>
<span>运算符问题</span></br>
<span>(1)下面程序的结果是什么？</span>
<pre class="brush:javascript;gutter:true">
int main()
{
	unsigned char a=0xA5;
	unsigned char b=~a>>4+1;
	cout&lt;&lt;b&lt;&lt;" ";
	return 0;
}
</pre>
A.245  &nbsp;&nbsp;B.246  &nbsp;&nbsp;C.250  &nbsp;&nbsp;D.2
<span>(2)用一个表达式判断一个数X是否是2^N(2,4,8,16,...)不可用循环语句</span></br>
<span>(3)下面代码</span></br>
<pre class="brush:javascript;gutter:true">
int f(int x,int y)
{
	return (x&amp;y)+((x^y)>>1);
}
</pre>
(729,271)=_____</br>
<span>a,b交换</span></br>
<span>(1)有两个变量a,b,不用"if","?:","switch"找出较大者</span></br>
<span>(2)a,b交换,不使用任何中间变量</span></br>
<span>C和C++的关系</span></br>
<span>(1)在C++程序中调用被C编译器编译后的函数，为什么要加extern"C"？</span></br>
<span>(2)头文件中的ifndef/define/endif是干什么用的？</span></br>
<span>(3)</span></br>
<span>预处理、const 、sizeof</span></br>
<span>(1)用一个宏定义FIND求一个结构体struct里某个变量相对struct的偏移量</span></br>
<pre class="brush:javascript;gutter:true">
struct
{
	int a;
	char b[20];
	double cc;
}
则:
FIND(student,a)	//0
FIND(student,b)	//4
</pre>
<span>(2)用预处理指令#define声明一个常量，用以表明1年中有多少秒？</span></br>
<span>(3)写一个标准宏MIN，这个宏输入两个参数并返回较小的一个</span></br>
<span>const</span></br>
<span>(1)const有什么用途</span></br>
<span>(2)const与#define相比有什么不同？</span></br>
<span>(3)</span></br>
<span></span></br>
<span></span></br>
<span>sizeof</span></br>
<span>(1)下面程序的结果是什么？</span></br>
<pre class="brush:javascript;gutter:true">
struct
{
	short a1,a2,a3;
}A;
struct
{
	long a1;
	short a2;
}B;
int main()
{
	char *ss1="0123456789";
	char ss2[]="0123456789";
	char ss3[100]="0123456789";	
	int ss4[100];
	char q1[]="abc";
	char q2[]="a\n";
	char *q3="a\n";
	char *str1=(char *)malloc(100);
	void *str2=(void *)malloc(100);
	cout&lt;&lt;sizeof(ss1)&lt;&lt;" ";
	cout&lt;&lt;sizeof(ss2)&lt;&lt;" ";	
	cout&lt;&lt;sizeof(ss3)&lt;&lt;" ";	
	cout&lt;&lt;sizeof(ss4)&lt;&lt;" ";	
	cout&lt;&lt;sizeof(q1)&lt;&lt;" ";	
	cout&lt;&lt;sizeof(q2)&lt;&lt;" ";	
	cout&lt;&lt;sizeof(q3)&lt;&lt;" ";
	cout&lt;&lt;sizeof(A)&lt;&lt;" ";
	cout&lt;&lt;sizeof(B)&lt;&lt;" ";
	cout&lt;&lt;sizeof(str1)&lt;&lt;" ";
	cout&lt;&lt;sizeof(str2)&lt;&lt;" ";	
	return  0;	
}
</pre>
<span>(2)下面程序的输出结果是什么？</span></br>
<pre class="brush:javascript;gutter:true">
class B
{
	private :
	bool m_bTemp;
	int m_nTemp;
	bool m_bTemp2;
};
class C
{
	private :
	int m_nTemp;
	bool m_bTemp;
	bool m_bTemp2;	
};
cout&lt;&lt;sizeof(B)&lt;&lt;endl;
cout&lt;&lt;sizeof(C)&lt;&lt;endl;
</pre>


<span>(3)</span></br>
<span>(4)说明sizeof和strlen之间的区别？</span></br>
<span>(5)说明sizeof的使用场合？</span></br>
<span>(6)int **a[3][4] 这个数组占据多大空间？</span></br>
<pre class="brush:javascript;gutter:true">


</pre>

<span></span></br>
<span></span></br>
<span>内联函数和宏定义</span></br>
<span>(1)内联函数和宏的差别是什么？</span></br>
<span>指针基本问题</span></br>
<span>(1)指针和引用的差别？</span></br>
<span>(2)看下面的程序哪里有错？</span></br>
<pre class="brush:javascript;gutter:true">
int main()
{
	int iv;
	int iv2=1024;
	int iv3=999;
	int &reiv;
	int &amp;reiv2=iv;
	int &amp;reiv3=iv;
	int *pi;
	*pi=5;
	pi=&iv3;
	const double di;
	const double maxWag=10.0;
	const double minWage=0.5;
	const double *pc=&maxWage;
	cout&lt;&lt;pi&lt;&lt;endl;
	return 0;
}
</pre>
<span>动态传递内存</span></br>
<span>(1)下面5个函数哪个能够成功进行两个数的交换？</span></br>
<pre class="brush:javascript;gutter:true">
void swap1(int p,int q)
{
	int temp;
	temp=p;
	p=q;
	q=temp;
}
void swap2(int *p.int *q)
{
	int *temp;
	*temp=*p;
	*p=*q;
	*q=*temp;
}
void swap3(int *p,int *q)
{
	int *temp;
	temp=p;
	p=q;
	q=temp;
}
void swap4(int *p,int *q)
{
	int temp;
	temp=*p;
	*p=*q;
	*q=temp;
}
void swap5(int *p,int *q)
{
	int temp;
	temp=p;
	p=q;
	q=temp;
}
int main()
{
	int a=1,b=2;
	swap1(a,b);
	swap2(&a,&b);
	swap3(&a,&b);
	swap4(&a,&b);
	swap5(a,b);
	cout&lt;&lt;a&lt;&lt;" "&lt;&lt;b&lt;&lt;endl;
	return 0;
}
</pre>
<span></span></br>
<span></span></br>
<span></span></br>
<span></span></br>
<span></span></br>
<span></span></br>
<span>static</span></br>
<span>(1)关键字static的作用是什么？</span></br>
<span>(2)写出下面程序的运行结果</span></br>
<pre class="brush:javascript;gutter:true">
int sum()
{
	auto int c=0;
	static int b=3;
	c+=1;
	b+=2;
	return (a+b+c);
}
void main()
{
	int I;
	int a=2;
	for(I=0;I&lt;5;I++)
		cout&lt;&lt;sum(a)&lt;&lt;endl;
}
</pre>
<span></span></br>
<span></span></br>
<span>STL模板与容器</span></br>
<span>介绍一下STL和包容器，如何实现？举例实现Vector</span></br>
<strong>向量Vector(顺序存储元素)</strong>
<pre class="brush:javascript;gutter:true">
#include &lt;vector&gt;
vector&lt;int&gt; c;
c.back()   //返回最后一个元素
c.clear()  //清空元素
c.empty()  //判断容器是否为空
c.push_back(elem)  //添加一个元素
c.pop_back()  //删除最后一个元素
c.front() //返回第一个元素
c[i] //等同于c.at(i)
c.size()  //返回容器大小
</pre>
<strong>列表List(双向链表)</strong></br>
<pre class="brush:javascript;gutter:true">
#include &lt;list&gt;	
list<int> list1(1,2,3,4,5)
list.front()  //返回第一个元素
list.back()   //返回最后一个元素
list.push_back(elem)  //
list.push_front(elem)  //


</pre>

<strong>Stack</strong>
<pre class="brush:javascript;gutter:true">
#include &lt;stack&gt;
stack&lt;int&gt; s
s.push(elem)
s.pop()
s.top()
s.empty()
s.size()
</pre>

<strong>Queue</strong>
<pre class="brush:javascript;gutter:true">
#include &lt;queue&gt;
queue&lt;int&gt; q
q.push(elem)
q.pop()
q.front()
q.back()
q.empty()
q.size()
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