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
<h1>数据结构基础</h1>
</div>
<div class="entry">
<p><strong>算法基础部分</strong></p> 
算法是对特定问题求解步骤的一种描述，算法是指令的有限序列，其中每一条指令表示一个或多个操作。 </br>
算法具有以下5个属性：   </br>
<strong>有穷性：</strong>一个算法必须总是在执行有穷步之后结束，且每一步都在有穷时间内完成。 </br>
<strong>确定性：</strong>算法中每一条指令必须有确切的含义。不存在二义性。只有一个入口和一个出口</br>
<strong>可行性：</strong>一个算法是可行的就是算法描述的操作是可以通过已经实现的基本运算执行有限次来实现的。</br> 
<strong>输入：</strong>一个算法有零个或多个输入，这些输入取自于某个特定对象的集合。</br>
<strong>输出：</strong>一个算法有一个或多个输出，这些输出同输入有着某些特定关系的量。 </br>
所以对应的算法设计的要求：    </br>
<strong>正确性：</strong>算法应满足具体问题的需求； </br>
<strong>可读性：</strong>算法应该好读，以有利于读者对程序的理解；</br>
<strong>健壮性：</strong>算法应具有容错处理，当输入为非法数据时，算法应对其作出反应，而不是产生莫名其妙的输出结果。</br>
<strong>效率与存储量需求：</strong>效率指的是算法执行的时间；存储量需求指算法执行过程中所需要的最大存储空间。一般这两者与问题的规模有关。</br>
<img src="images/datastruct.png"/>
<p></p>
<p><strong>顺序表：</strong></p>
线性表（a1，a2…，an）有唯一的第一个和最后一个元素（n≥0）。其余的有唯一的前驱和后继。</br>
顺序表定义：用一组地址连续的存储单元依次存放的数据元素。</br>
在顺序表的第i个位置前插入一个数据元素，需要向后移动n － i ＋1个元素，删除第i个位置的元素需要向前移动n－ i个元素。</br>
<pre class="brush:javascript;gutter:true">
#include &lt;stdio.h&gt;
#include &lt;malloc.h&gt; 
typedef char ElemType;
typedef struct 
{
	ElemType data[MAX_SIZE];
	int len;
}SqList;
//初始化顺序表
void initList(SqList *&amp;L)
{
	L=(SqList *)malloc(sizeof(SqList));
	L->len=0;
}
//插入元素
void insertList(SqList *&amp;L,int i,ElemType e)
{
	i--;
	int j;
	for(j=L->len;j>i;j--)
		L->data[j]=L->data[j-1];
	L->data[i]=e;
	L->len++;
}
//删除第i个位置的元素
void deleteList(SqList *&amp;L,int i)
{
	i--;
	ElemType e=L->data[i];
	for(int j=i;j&lt;L->len-1;j++)
		L->data[j]=L->data[j+1];
	L->len--;
	printf("%c",e);
}
//输出元素
void disPlay(SqList *L)
{
	int i;
	for(i=0;i&lt;;L-&gt;len;i++)
		printf("%c   ",L->data[i]);
}
//释放顺序表
void freeList(SqList *L)
{
	free(L);
}
</pre>
<p><strong>链表</strong></p>
链表是一种物理存储单元上非连续、非顺序的存储结构，数据元素的逻辑顺序是通过链表中的指针链接次序实现的.
<pre class="brush:javascript;gutter:true">
typedef char ElemType;
typedef struct  Node 
{
	ElemType data;
	struct Node *next;
}LinkList;
//初始化链表
void initLink(LinkList *&amp;L)
{
	L=(LinkList *)malloc(sizeof(LinkList));
	L->next=NULL;
}
//链表插入
int insertLink(LinkList *&amp;L,int i,ElemType e)
{
	LinkList *p=L,*s;
	int j=0;
	while(j&lt;i-1 &amp;&amp; p!=NULL)
	{
	j++;
	p=p->next;
	}

	if(p==NULL) return 0;
	else
	{
	s=(LinkList *)malloc(sizeof(LinkList));
	s->data=e;
	s->next=p->next;
	p->next=s;
	}
	return 1;
}
//删除链表中元素
void deleteList(LinkList *L)
{
	LinkList *p=L,*q=p->next;
	while(q!=NULL)
	{
		free(p);
		p=q;
		q=p->next;
	}
}
//输出链表
void disPlsy(LinkList *L)
{
	LinkList *p=L->next;
	while(p!=NULL)
	{
		printf("%c ",p->data);
		p=p->next;
	}
}
</pre>
<p></p>
<p><strong>栈</strong></p>

<pre class="brush:javascript;gutter:true">
#define MAX_SIZE 100
typedef char ElemType;
typedef struct
{
	ElemType data[MAX_SIZE];
	int top;
}Stack;
//初始化栈
void initStack(Stack *&S)
{
	S=(Stack *)malloc(sizeof(Stack));
	S->top=-1;
}
//元素进栈
int push(Stack *&S,ElemType e)
{
	if(S->top==MAX_SIZE-1) return 0;
	S->top++;
	S->data[S->top]=e;
	return 1;
}
//出栈
int pop(Stack *&S)
{
	if(S->top==-1) return 0;
	ElemType e=S->data[S->top];
	S->top--;
	return e;
}
//输出栈表
void disPlay(Stack *S)
{
	int i;
	for(i=S->top;i>=0;i--)
	printf("%c ",S->data[i]);
}

</pre>
<p></p>
<p><strong>队列</strong></p>
<pre class="brush:javascript;gutter:true">
#define MAXSIZE 10
typedef char ElemType;
typedef struct 
{
	ElemType data[MAXSIZE];
	int font,rear;
}Queue;
//初始化队列
void initQueue(Queue *&amp;Q)
{
	Q=(Queue *)malloc(sizeof(Queue));
	Q->font=Q->rear=0;
}
//入队
int enQueue(Queue *&Q,ElemType e)
{
	if((Q->rear+1)%MAXSIZE==Q->font) return 0;
	Q->rear=(Q->rear+1)%MAXSIZE;
	Q->data[Q->rear]=e;
	return 1;
}
//出队
void deQueue(Queue *&Q)
{
	ElemType e;
//	if(Q->font==Q->rear)  ;
	Q->font=(Q->font+1)%MAXSIZE;
	e=Q->data[Q->font];
	printf("%c ",e);
}
</pre>
<p></p>
<p><strong>二叉树</strong></p>
<pre class="brush:javascript;gutter:true">
typedef char ElemType;
typedef struct node
{
	ElemType data;
	struct node *left,*right;
}BTNode;
//建立二叉树
void createBTNode(BTNode *&b,char *str)
{
	BTNode *St[MAX_SIZE],*p=NULL;
	int top=-1,k,i=0;
	char ch=str[i];
	b=NULL;
	while(ch!='\0')
	{
		switch(ch)
		{
		case '(':
				top++;
				St[top]=p;
				k=1;
				break;
		case ',':
				k=2;
				break;
		case ')':
				top--;
				break;
		default:
				p=(BTNode *)malloc(sizeof(BTNode));
				p->data=ch;
				p->left=p->right=NULL;
				if(b==NULL) b=p;
				else
				{
					switch(k)
					{
					case 1:
							St[top]->left=p;
							break;
					case 2:
							St[top]->right=p;
							break;
					}
				}
		}
		i++;
		ch=str[i];
	}
}
//先序遍历
void disPlay(BTNode *&b)
{
	if(b!=NULL)
	{
	printf("%c ",b->data);
	disPlay(b->left);
	disPlay(b->right);
	}
}
//先序遍历的非递归方法
void preOrder(BTNode *b)
{
	BTNode *St[MAX_SIZE];
	BTNode *p;
	int top=-1;
	if(b!=NULL)
	{
		top++;
		St[top]=b;
		while(top>-1)
		{
			p=St[top];
			top--;
			printf("%c ",p->data);
			if(p->right!=NULL)
			{
				top++;
				St[top]=p->right;
			}
			if(p->left!=NULL)
			{
				top++;
				St[top]=p->left;
			}
		}
	}
}
</pre>
<p></p>
<p><strong>图</strong></p>
<pre class="brush:javascript;gutter:true">
#define MAX_SIZE 100
#include "queue"
typedef char VertexType;
typedef int EdgeType;
typedef enum {FALSE,TRUE} Boolean;
Boolean visited[MAX_SIZE];
typedef struct
{
VertexType verx[MAX_SIZE]; //顶点表
EdgeType edges[MAX_SIZE][MAX_SIZE];//邻接矩阵
int n,e;//定点数和边数
}MGraph;

void createMGraph(MGraph &G)
{
	int i,j,k;
	char ch1,ch2;
	cout&lt;&lt;"请输入顶点数和边数:"&lt;&lt;endl;
	cin>>G.n;
	cin>>G.e;
	for(i=0;i&lt;G.n;i++)
	for(j=0;j&lt;G.n;j++)
	G.edges[i][j]=0;
	cout&lt;&lt;"请输入顶点信息";
	for(i=0;i&lt;G.n;i++)
	cin>>G.verx[i];
	cout&lt;&lt;"请输入变的信息:"&lt;&lt;endl;
	for(k=0;k&lt;G.e;k++)
	{
	cin>>ch1>>ch2;
	for(i=0;ch1!=G.verx[i];i++);
	for(j=0;ch2!=G.verx[j];j++);
	G.edges[i][j]=1;
	}
}

void DFSM(MGraph &G,int i)  
{  
    int j;  
    printf("深度优先遍历结点: 结点%c/n",G.verx[i]);   //访问顶点vi  
    visited[i]=TRUE;          
    for(j=0;j&lt;G.n;j++)           //依次搜索vi邻接点  
    if(G.edges[i][j]==1 && !visited[j])  
    DFSM(G,j);  
}  
void DFSTraverseM(MGraph &G)  
{  
    int i;  
    for(i=0;i&lt;G.n;i++)  
    visited[i]=FALSE;     
    for(i=0;i&lt;G.n;i++)
    if(!visited[i])
    DFSM(G,i);
}  

void BFSM(MGraph &G,int i)
{
	queue&lt;char&gt; charqueue;
	visited[i]=TRUE;
	int j;
	printf("%c ",G.verx[i]);
	charqueue.push(i);
	while(!charqueue.empty())
	{
		charqueue.pop();
		j=G.verx[i];
		for(int k=0;k&lt;G.n;k++)
		if(G.edges[j][k]==1 && !visited[k])
		{
			printf("%c ",G.verx[k]);
			visited[i]=TRUE;
			charqueue.push(G.verx[k]);
		}
	}
}

void BFSTraverseM(MGraph &G)  
{  
    int i;  
    for(i=0;i&lt;G.n;i++)  
    visited[i]=FALSE;     
    for(i=0;i&lt;G.n;i++)
    if(!visited[i])
	BFSM(G,i);
}  
</pre>
<p></p>
<p><strong>查找</strong></p>
<pre class="brush:javascript;gutter:true">


</pre>

<p></p>
<p><strong>排序</strong></p>
<pre class="brush:javascript;gutter:true">
//插入排序
void insertSort(int *num,int n)
{
	int i,j,temp;
	for(i=1;i&lt;n;i++)
	{
		 j=i;
		 temp=num[j];
		 while(j>0 && num[j-1]>temp)
			 {
			  num[j]=num[j-1];
			  j--;
			 }
		 num[j]=temp;
	}
}
//冒泡排序
void bollSort(int * num,int n)
{
	int i,j,temp;
	for(i=0;i&lt;n-1;i++)
		for(j=n-1;j>=i;j--)
		{
			if(num[j]&lt;num[j-1])
			{
			temp=num[j];
			num[j]=num[j-1];
			num[j-1]=temp;
			}
		}
}



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