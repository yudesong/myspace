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
<h1>算法基础</h1>
</div>
<div class="entry">
<strong>试题1:</strong></br>
在笼子里面关了鸡和兔子（鸡有2只脚，兔子有4只脚），已经知道了笼子里面脚的总数a,问笼子里面至少有多少只动物，至多有多少只动物？
<pre class="brush:javascript;gutter:true">
#include &lt;stdio.h&gt;
int main()
{
	int i,j,k;
	printf("请输入测试用例：");
	scanf("%d",&i);
	for(k=0;k&lt;i;k++)
	{
		printf("\n请输入笼子里脚的总数:%d");
		scanf("%d",&j);
		if(j%2!=0) printf("0 0\n");
		else if(j%4!=0) printf("%d %d",j/4+1,j/2);
		else printf("%d %d",j/4,j/2);
	}
	return 0;
}
</pre>
<strong>试题2:</strong></br>
国际象棋的棋盘是黑白相间的 8 * 8 的方格，棋子放在格子中间。</br>
王、后、车、象的走子规则如下：</br>
王：横、直、斜都可以走，但每步限走一格。</br>
后：横、直、斜都可以走，每步格数不受限制。</br>
车：横、竖均可以走，不能斜走，格数不限。</br>
象：只能斜走，格数不限。</br>
写一个程序，给定起始位置和目标位置，计算王、后、车、象从起始位置走到目标位置所需的最少步数。
<pre class="brush:javascript;gutter:true">
#include &lt;stdio.h>
#include &lt;math.h>
#define MAX_SIZE 10
int main()
{
int testCase;
int i;
scanf("%d",&testCase);
for(i=0;i&lt;testCase;i++)
{
	char begin[MAX_SIZE],end[MAX_SIZE];
	int x,y;
	scanf("%s %s",begin,end);
	x=abs(end[0]-begin[0]);    //x方向的距离
	y=abs(end[1]-begin[1]); 
	if(x==0 && y==0) printf("0 0 0 0 \n");
	else
	{
		if(x&lt;y) printf("%d",y);    //王的步数
		else printf("%d",x);
		
		if(x==y || x==0 || y==0) printf("1");       //后的步数
		else printf("2");
		
		if(x==0 || y==0) printf("1");               //车的步数
		else printf("2");
		
		if(abs(x-y)%2!=0) printf("Inf\n");       //象的步数
		if(x==y) printf("1");
		else printf("2");
	}
}
return 0;
}

</pre>
<strong>试题3:</strong></br>
某校大门外长度为 L 的马路上有一排树，每两棵相邻的树之间的间隔都是1 米。我们可以把马路看成一个数轴，马路的一端在数轴0 的位置，另一端在L 的位置；数轴上的每
个整数点，即0，1，2，……，L，都种有一棵树。由于马路上有一些区域要用来建地铁。这些区域用它们在数轴上的起始点和终止点表示。已知任一区域的起始点和终止点的坐标都是整数，区域之间可能有重合的部分。现在要把这些
区域中的树（包括区域端点处的两棵树）移走。你的任务是计算将这些树都移走后，马路上还有多少棵树。
<pre class="brush:javascript;gutter:true">
#include &lt;stdio.h>
int main()
{
int L,i,n,j,count;
bool trees[10001];
for(i=0;i&lt;10001;i++)
	trees[i]=true;
scanf("%d %d",&L,&n);
for(i=0;i&lt;n;i++)
{
int begin,end;
scanf("%d %d",&begin,&end);
for(j=begin;j&lt;=end;j++)
	trees[j]=false;
}
count=0;
for(i=0;i&lt;=L;i++)
	if(trees[i]) count++;
printf("%d ",count);	
return 0;
}
</pre>
<strong>试题4:</strong></br>
输出所有小于等于n(n为一个大于2的正整数)的素数
<pre class="brush:javascript;gutter:true">
#include &lt;stdio.h>
#include &lt;math.h>
int prime(int x)
{
	int i;
	for(i=2;i&lt;sqrt(x);i++)
		if(x%i==0) return 0;
	return 1;
}

int main()
{
	int num,i,j=0;
	scanf("%d",&num);
	if(num>2)
	{
		printf("%4d",2);
		j++;
	}
	if(num==1) printf("1");
	for(i=3;i&lt;lnum;i+=2)
	if(prime(i)) {
		printf("%4d ",i);
		if(j!=0 && ++j%10==0)
		printf("\n");
}	
	return 0;
}

</pre>
<strong>试题5:</strong></br>
求一个正整数的各位数之和
<pre class="brush:javascript;gutter:true">
#include &lt;stdio.h>
int main()
{
int num,m,sum=0;
scanf("%d",&num);
while(num)
{
m=num%10;
sum+=m;
num=num/10;
}
printf("%4d\n",sum);
return 0;
}

</pre>
<strong>试题6:</strong></br>
求一个字符串是否为回文
<pre class="brush:javascript;gutter:true">
#include &lt;stdio.h>
#include &lt;string.h>
#define MAX_SIZE 100
int main()
{
char num[MAX_SIZE];
int i,j,flag;
scanf("%s",num);
flag=0;
for(i=0,j=strlen(num)-1;i&lt;=j;i++,j--)
{
	if(num[i]!=num[j])
	{
	flag=1;
	break;
	}
}
if(flag==0) printf("是回文数");
else printf("不是回文数");
return 0;
}
</pre>
<strong>试题7:</strong></br>
sicily 1020. Big Integer</br>
给出n个整数，和一个大整数x。
求x对每个数取模的结果
n&lt;=100, 1&lt;bi&lt;=1000, x的长度不超过400
<pre class="brush:javascript;gutter:true">
#include &lt;iostream>
#include &lt;string>
#define MAX_SIZE 100
using namespace std;
int mod(string input,int m)
{
	int res=0;
	for(int i=0;i&lt;input.size();i++)
		res=(res*10+(input[i]-'0'))%m;
	return res;
}	

int main()
{
	int testCase;
	int str[100];
	cin>>testCase;
	while(testCase--)
	{
		int num;
		cin>>num;
		for(int i=0;i&lt;num;i++)
			cin>>str[i];
		
		string bignum;
		cin>>bignum;
		cout&lt;&lt;"(";
		for(int j=0;j&lt;num;j++)
		{
			if(j!=num-1) cout&lt;&lt;mod(bignum,str[j])&lt;&lt;",";
			else cout&lt;&lt;mod(bignum,str[j])&lt;&lt;")"&lt;&ltendl;
		}	
	}
	return 0;
}

</pre>

<strong>试题8:</strong></br>
求：5*5阶螺旋方阵
<pre class="brush:javascript;gutter:true">
#include &lt;stdio.h>
#define MAX_SIZE 100
void func(int a[MAX_SIZE][MAX_SIZE],int n)
{
	int i,j,m,k=0;
	if(n%2==0) m=n/2;
	else m=n/2+1;
	for(i=0;i&lt;m;i++)
	{
		for(j=i;j&lt;n-i;j++)
		{
			k++;
			a[i][j]=k;
		}

		for(j=i+1;j&lt;n-i;j++)
		{
			k++;
			a[j][n-i-1]=k;
		}

		for(j=n-i-2;j>=i;j--)
		{
			k++;
			a[n-i-1][j]=k;
		}

		for(j=n-i-2;j>=i+1;j--)
		{
			k++;
			a[j][i]=k;
		}
	}
}

int main()
{
	int num,i,j;
	scanf("%d",&num);
	int a[MAX_SIZE][MAX_SIZE];
	func(a,num);
	for(i=0;i&lt;num;i++)
	{	
		for(j=0;j&lt;num;j++)	printf("%3d ",a[i][j]);
		printf("\n");
	}	
	return 0;
}
</pre>

<strong>试题9:</strong></br>
求解n皇后问题
<pre class="brush:javascript;gutter:true">
#include &lt;iostream.h>
#include &lt;math.h>
bool place(int k, int *X)
{
        int i;
        i=1;
        while(i&lt;k)
        {
                  if((X[i]==X[k])||(abs(X[i]-X[k])==abs(i-k)))
                  return false;
                  i++;
         }
        return true;
}

void Nqueens(int n,int *X)
{
       int k;
       X[1]=0;k=1;
       while(k>0)
       {
             X[k]=X[k]+1; //不断的在解空间里从小到大的试探
 
             while((X[k]&lt;=n)&&(!place(k, X)))
                      X[k]=X[k]+1;                     //不符合条件的马上再取解空间的下一个值来试探。
 
             if(X[k]&lt;=n)   //找到了一个位置，而且是合法的
                  if(k==n)   //是不是最后一个皇后，若是则得出一个完整解
                 {
                          for(int i=1;i&lt;=n;i++)
                          cout&lt;&lt;X[i]&lt;&lt;" ";
                          cout&lt;&lt;"\n";
                   }
                  else    //若不是最后一个皇后，则给下一个皇后找位置
                 {
                          k=k+1;
                          X[k]=0;
                 }
  
             else      k=k-1;  //若是找了全部的列都无法放置某个皇后，则回溯到上一个k的情况，让上一个k再往下试
        }
 
}
void main()
{
        cout&lt;&lt;"|--------------N皇后问题--------------|"&lt;&lt;endl;
        cout&lt;&lt;"|-------------------------------------|"&lt;&lt;endl&lt;&lt;endl;
        int n;
        int *X;
        int i;
        while(i)
       {
                 cout&lt;&lt;"请输入皇后的个数:";
                 cin>>n;
                 X=new int[n];
                 cout&lt;&lt;"问题的解有:"&lt;&lt;endl;
                 Nqueens(n,X);
                 cout&lt;&lt;"Press&lt;1> to run again"&lt;&lt;endl;
                 cout&lt;&lt;"Press&lt;0> to exit"&lt;&lt;endl;
                 cin>>i;
         }
}










</pre>

<strong>试题10:</strong></br>
求解背包问题
<pre class="brush:javascript;gutter:true">

</pre>

<strong>试题11:</strong></br>
辗转相除法求整数m与n的最大公约数
<pre class="brush:javascript;gutter:true">
#include &lt;iostream>
using namespace std;
void gcd(int m,int n)
{
	int p=m*n;
	while(m!=0)
	{
		int r;
		r=n%m;
		n=m;	
		m=r;
	}
	cout&lt;&lt;n&lt;&lt;endl;
	cout&lt;&lt;p/n&lt;&lt;endl;
}

int main()
{
	int m,n,temp;
	cin>>m>>n;
	if(m>n)
	{
		temp=m;
		m=n;
		n=temp;
	}
	gcd(m,n);
	return 0;
}
</pre>

<strong>试题12:</strong></br>
汉诺塔问题
<pre class="brush:javascript;gutter:true">
#include &lt;iostream>
using namespace std;
void hanoi(int n,char A,char B,char C)
{
	if(n==1) cout&lt;&lt;n&lt;&lt;A&lt;&lt;"------>"&lt;&lt;C&lt;&lt;endl;
	else
	{
	hanoi(n-1,A,C,B);
	cout&lt;&lt;n&lt;&lt;A&lt;&lt;"------>"&lt;&lt;C&lt;&lt;endl;
	hanoi(n-1,B,A,C);
	}

}

int main()
{
	int num;
	cin>>num;
	hanoi(num,'A','B','C');
	return 0;
} 
</pre>

<strong>试题13:</strong></br>
sicily 1021 	Couple
<pre class="brush:javascript;gutter:true">
#include &lt;iostream>
#include &lt;stack>
using namespace std;
int a[200005];
int main()
{
    int num,i;
    while(cin>>num)
    {
        if(num==0) break;
		int m,n;
        stack&lt;int> st;
		for(i=1;i&lt;=num;i++)
        {
            cin>>m>>n;
            a[m]=a[n]=i;
        }

        for(i=1;i&lt;=2*num;i++)
        {
            if(st.empty() || a[st.top()]!=a[i]) st.push(i);
            else if(a[st.top()]==a[i]) st.pop();
        }

        if(st.empty()) cout&lt;&lt;"Yes"&lt;&lt;endl;
        else cout&lt;&lt;"No"&lt;&lt;endl;
    }

    return 0;
}
</pre>

<strong>试题14:</strong></br>
1027 	MJ, Nowhere to Hide
<pre class="brush:javascript;gutter:true">
#include &lt;iostream>
#include &lt;map>
#include &lt;string>
using namespace std;
int main() {
  int n;
  while (cin>>n && n) {
    string name, id;
	map&lt;string, string>s1, s2;
	map&lt;string, string>::iterator it;
	while (n--) {
	  cin>>name>>id;
	  it = s1.find(id);  // 首先给it初始化
	  if (it == s1.end()) {
	    s1.insert(pair&lt;string, string>(id, name));
	  }
	  else {
		  s2.insert(pair&lt;string, string>(it->second, name));
	  }
	}
	for (it = s2.begin() ; it != s2.end() ; it++) {
		cout&lt;&lt;it->second&lt;&lt;" is the MaJia of "&lt;&lt;it->first&lt;&lt;endl;
	}
	cout&lt;&lt;endl;
  }
  return 0;
}
//方法二
#include &lt;iostream>
#include &lt;string>
#include &lt;vector>
#pragma warning(disable:4786)
#include &lt;map>
using namespace std;
int main()
{
	int num,i;
	while(cin>>num &amp;&amp; num)
	{
		map&lt;string,vector&lt;string> > record;
		map&lt;string,string> majia;
		for(i=0;i&lt;num;i++)
		{
			string id,ip;
			cin>>id>>ip;
			record[ip].push_back(id);
			if(record[ip].size()==2) 
			majia[record[ip][0]]=record[ip][1];
		}
		for(map&lt;string,string>::iterator it=majia.begin();it!=majia.end();it++)
		cout&lt;&lt;it->second&lt;&lt;" is the MaJia of "&lt;&lt;it->first&lt;&lt;endl;
		cout&lt;&lt;endl;
	}
return 0;
}
</pre>

<strong>试题15:</strong></br>
数字反转   给定一个整数，请将该数各个位上数字反转得到一个新数。新数也应满足整数的常见形式，即除非给定的原数为零，否则反转后得到的新数的最高位数字不应为零 
<pre class="brush:javascript;gutter:true">
# include &lt;stdio.h>  
int main()  
{  
    int f;  
    long int str,i,a,a_back;  
    while(scanf("%ld",&amp;str)!=EOF)  
    {  
        f=1;  
        if(str&lt;0)  
        {  
            printf("-");  
            str=-str;     
        }  
        if(str==0)  
            printf("0");  
        a_back=str%10;  
        for(i=0;str>0;i++)  
        {  
            a=str%10;  
            str/=10;  
  
            if(a==0&amp;&amp;a_back==0)  
                f=0;  
            else  
                f=1;  
            if(f==1)  
            {  
                printf("%d",a);  
                if(a!=0)  
                    a_back=a;  
            }  
        }  
        printf("\n");  
    }  
    return 0;  
} 
</pre>

<strong>试题16:</strong></br>
<pre class="brush:javascript;gutter:true">

</pre>

<strong>试题17:</strong></br>
1486. 统计数字
<pre class="brush:javascript;gutter:true">
#include &lt;iostream>
#include &lt;cstdio>
#include &lt;map>
#include &lt;vector>
#include &lt;set>
#include &lt;algorithm>
using namespace std;
int main()
{
    long long t,n;
	bool b=true;
    while(scanf("%lld",&amp;t)!=EOF)
    {
		if(!b) printf("\n");
		b=0;
        map&lt;long long,long long>m;
        set&lt;long long>s;
        vector&lt;long long>v;
        while(t--)
        {
            scanf("%lld",&amp;n);
            if(s.count(n)==0)
            {
                s.insert(n);
                v.push_back(n);
                m[n]=1;
            }
            else m[n]++;
        }
        sort(v.begin(),v.end());
        for(int i=0;i&lt;v.size();i++)
            printf("%lld %lld\n",v[i],m[v[i]]);
    }
    return 0;
}                                 
</pre>

<strong>试题18:</strong></br>
Matrix multiplication
<pre class="brush:javascript;gutter:true">
#include &lt;iostream>
using namespace std;

int main ()
{
    int n;
    while (cin >> n)
    {
        int a1[100][100],a2[100][100],a3[100][100];
        for (int i = 0 ; i &lt; n ; i++)
        {
            for (int j = 0 ; j &lt; n ; j++)
            {
                cin >> a1[i][j];
            }
        }
        for (int i = 0 ; i &lt; n ; i++)
        {
            for (int j = 0 ; j &lt; n ; j++)
            {
                cin >> a2[i][j];
            }
        }
        for (int i = 0 ; i &lt; n ; i++)
        {
            for (int j = 0 ; j &lt; n ; j++)
            {
                a3[i][j] = 0;
            }
        }
        for (int i = 0; i &lt; n ; i++)
        {
            for (int j = 0 ; j &lt; n ; j++)
            {
                for (int k = 0; k &lt; n ; k++)
                {
                    a3[i][j] += (a1[i][k] * a2[k][j]);
                }
            }        
         }
         for (int i = 0 ; i &lt; n ; i++)
        {
            for (int j = 0 ; j &lt; n ; j++)
            {
                if (j != n - 1)
                    cout &lt;&lt; a3[i][j] &lt;&lt; " ";
                else 
                    cout &lt;&lt; a3[i][j];
            }
            cout &lt;&lt; endl;
        }
    }
    return 0;                
}
</pre>
<strong>试题19:</strong></br>
<pre class="brush:javascript;gutter:true">

</pre>
<strong>试题20:</strong></br>
<pre class="brush:javascript;gutter:true">

</pre>

<strong>试题21:</strong></br>
<pre class="brush:javascript;gutter:true">

</pre>

<strong>试题22:</strong></br>
<pre class="brush:javascript;gutter:true">

</pre>

<strong>试题23:</strong></br>
某城市有一个火车站，铁轨铺设如图所示。有n节车厢从A方向驶入车站，按进站顺序编号1～n。现让这些火车按照某种特定的顺序进入B方向的铁轨并驶出车站。
为了重组车厢，可以借助中转站C。C是一个可以停放任意多节车厢的车站，但由于末端封顶，驶入C的车厢必须按照相反的顺序驶出C。对于每个车厢，一旦从A移入C，就不能再回到A了；一旦从C移入B，就不能回到C了。换句话说，在任意时刻，只有两种选择：A→C和C→B。请编程判断判断：按给定的出站顺序，火车能否出站。</br>
<pre class="brush:javascript;gutter:true">
#include &lt;iostream>
#include &lt;stack>
using namespace std;
const int N=100;
int main()
{
	int n,i;
	stack&lt;char > stack;
	cin>>n;
	int num[N];
	for(i=1;i&lt;=n;i++)
		cin>>num[i];	
	int A=1,B=1,ok=1;
	while(B&lt;=n)
	{
		if(A==num[B])
		{
			A++;
			B++;
		}
		else if(!stack.empty() &amp;&amp; stack.top()==num[B])
		{
			stack.pop();
			B++;
		}else if(A&lt;=n)	 
		{
			stack.push(A);
			A++;
		}else 
		{
			ok=0;
			break;
		}
	}
	if(ok==1) cout&lt;&lt;"Yes"&lt;&lt;endl;
	else cout&lt;&lt;"No"&lt;&lt;endl;
	return 0;
}
</pre>

<strong>试题24:</strong></br>
进制转换</br>
<pre class="brush:javascript;gutter:true">
void conversion(int N,int d)
{
	stack&lt;int > stack;
	while(N)
	{
		stack.push(N%d);
		N=N/d;
	}
	while(!stack.empty())
	{
		cout&lt;&lt;stack.top()&lt;&lt;" ";
		stack.pop();
	}
}
</pre>

<strong>试题25:</strong></br>
括号匹配  （栈）</br>
<pre class="brush:javascript;gutter:true">
#include &lt;iostream>
#include &lt;string>
#include &lt;stack>
using namespace std;
bool judge_bracket(string str)
{
	int i;
	char ch;
	stack&lt;char > stack;
	for(i=0;i&lt;str.length();i++)
	{
		switch(ch=str[i])
		{
		case '(':	stack.push(ch);
					break;
		case ')':	if(stack.top()=='(')	
					stack.pop();
					else 
					return false;
					break;
		case '[':	stack.push(ch);
					break;
		case ']':	if(stack.top()=='[')	
					stack.pop();
					else 
					return false;
					break;		
		case '{':	stack.push(ch);
					break;
		case '}':	if(stack.top()=='{')	
					stack.pop();
					else 
					return false;
					break;
		default :	break;
		}		
	}
	return true;
}

int main()
{
	string	str;
	cin>>str;
	if(judge_bracket(str))	cout&lt;&lt;"匹配成功!"&lt;&lt;endl;
	else cout&lt;&lt;"匹配不成功!"&lt;&lt;endl;
	return 0;
}

</pre>

<strong>试题26:</strong></br>
1200. Stick</br>
两个相同的数做“异或运算”的结果是0； 0与任何数做“异或运算”得其本身，顾最后剩余的长度就是运算的结果</br>
<pre class="brush:javascript;gutter:true">
#include &lt;iostream>  
using namespace std;  
int main()  
{  
    int n,temp,res;  
    while(cin >> n &amp;&amp; n != 0)  
    {     
        res = 0;  
        while( n-- )  
        {  
            cin >> temp;  
            res ^= temp;  
        }  
        cout &lt;&lt; res &lt;&lt; endl;  
    }  
    return 0;  
}

或者

</pre>

<strong>试题27:</strong></br>
判断数字是否是回文数</br>
<pre class="brush:javascript;gutter:true">
bool ispalindrome(int n)
{
	if(n&lt;=9) retur true;
	char num[N];
	int i=0,j;
	while(n)
	{
		num[i]=n%10;
		n/=10;
		i++;
	}

	for(j=0;j&lt;=i;j++,i--)
		if(num[j]!=num[i])
			return false;
	return true;
}
</pre>

<strong>试题28:</strong></br>
<pre class="brush:javascript;gutter:true">

</pre>

<strong>试题29:</strong></br>
<pre class="brush:javascript;gutter:true">

</pre>

<strong>试题30:</strong></br>
<pre class="brush:javascript;gutter:true">

</pre>

<strong>试题30:</strong></br>
<pre class="brush:javascript;gutter:true">

</pre>

<strong>试题30:</strong></br>
<pre class="brush:javascript;gutter:true">

</pre>

<strong>试题30:</strong></br>
<pre class="brush:javascript;gutter:true">

</pre>

<strong>试题30:</strong></br>
<pre class="brush:javascript;gutter:true">

</pre>

<strong>试题30:</strong></br>
<pre class="brush:javascript;gutter:true">

</pre>

<strong>试题30:</strong></br>
<pre class="brush:javascript;gutter:true">

</pre>

<strong>试题30:</strong></br>
<pre class="brush:javascript;gutter:true">

</pre>

<strong>试题30:</strong></br>
<pre class="brush:javascript;gutter:true">

</pre>

<strong>试题30:</strong></br>
<pre class="brush:javascript;gutter:true">

</pre>

<strong>试题30:</strong></br>
<pre class="brush:javascript;gutter:true">

</pre>

<strong>试题30:</strong></br>
<pre class="brush:javascript;gutter:true">

</pre>

<strong>试题30:</strong></br>
<pre class="brush:javascript;gutter:true">

</pre>

<strong>试题30:</strong></br>
<pre class="brush:javascript;gutter:true">

</pre>

<strong>试题30:</strong></br>
<pre class="brush:javascript;gutter:true">

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