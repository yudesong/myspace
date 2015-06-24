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
<h1>Linux基础</h1>
</div>
<div class="entry">
<p><strong>Linux 简介</strong></p>
Linux内核最初只是由芬兰人李纳斯·托瓦兹（Linus Torvalds）在赫尔辛基大学上学时出于个人爱好而编写的。
</br>
Linux是一套免费使用和自由传播的类Unix操作系统，是一个基于POSIX和UNIX的多用户、多任务、支持多线程和多CPU的操作系统。
</br>
Linux能运行主要的UNIX工具软件、应用程序和网络协议。它支持32位和64位硬件。Linux继承了Unix以网络为核心的设计思想，是一个性能稳定的多用户网络操作系统。
</br>
Linux的发行版</br>
Linux的发行版说简单点就是将Linux内核与应用软件做一个打包。
</br>
目前市面上较知名的发行版有：Ubuntu、RedHat、CentOS、Debain、Fedora、SuSE、OpenSUSE、TurboLinux、BluePoint、RedFlag、Xterm、SlackWare等。
</br>
Linux应用领域</br>
今天各种场合都有使用各种Linux发行版，从嵌入式设备到超级计算机，并且在服务器领域确定了地位，通常服务器使用LAMP（Linux + Apache + MySQL + PHP）或LNMP（Linux + Nginx+ MySQL + PHP）组合。
</br>
目前Linux不仅在家庭与企业中使用，并且在政府中也很受欢迎。
</br>
巴西联邦政府由于支持Linux而世界闻名。</br>
有新闻报道俄罗斯军队自己制造的Linux发布版的，做为G.H.ost项目已经取得成果.</br>
印度的Kerala联邦计划在向全联邦的高中推广使用Linux。</br>
中华人民共和国为取得技术独立，在龙芯过程中排他性地使用Linux。</br>
在西班牙的一些地区开发了自己的Linux发布版，并且在政府与教育领域广泛使用，如Extremadura地区的gnuLinEx和Andalusia地区的Guadalinex。</br>
葡萄牙同样使用自己的Linux发布版Caixa Mágica，用于Magalh?es笔记本电脑和e-escola政府软件。</br>
法国和德国同样开始逐步采用Linux。</br>
<img src="images/linux1.png">
<img src="images/linux2.png">
<img src="images/linux3.png">
<p><strong>Linux 系统目录结构</strong></p>
<strong>/bin：</strong>
bin是Binary的缩写, 这个目录存放着最经常使用的命令。
</br>
<strong> /boot：</strong>
这里存放的是启动Linux时使用的一些核心文件，包括一些连接文件以及镜像文件。</br>
<strong>/dev ：</strong>
dev是Device(设备)的缩写, 该目录下存放的是Linux的外部设备，在Linux中访问设备的方式和访问文件的方式是相同的。
</br>
<strong>/etc：</strong>
这个目录用来存放所有的系统管理所需要的配置文件和子目录。Linux内核引导时，从文件/etc/fstab中读取要加载的文件系统。
【文件fstab包含了你的电脑上的存储设备及其文件系统的信息。它是决定一个硬盘（分区）被怎样使用或者说整合到整个系统中的唯一文件。
用fstab可以自动挂载各种文件系统格式的硬盘、分区、可移动设备和远程设备等。对于Windows与arch双操作系统用户，用fstab挂载FAT格式和NTFS格式的分区，可以在Linux中共享windows系统下的资源。】
</br>
<strong>/home：</strong>
用户的主目录，在Linux中，每个用户都有一个自己的目录，一般该目录名是以用户的账号命名的。
</br>
<strong>/lib：</strong>
这个目录里存放着系统最基本的动态连接共享库，其作用类似于Windows里的DLL文件。几乎所有的应用程序都需要用到这些共享库。
</br>
<strong>/lost+found：</strong>
这个目录一般情况下是空的，当系统非法关机后，这里就存放了一些文件。
</br>
<strong>/media:</strong> linux系统会自动识别一些设备，例如U盘、光驱等等，当识别后，linux会把识别的设备挂载到这个目录下。
</br>
<strong>/mnt：</strong>
系统提供该目录是为了让用户临时挂载别的文件系统的，我们可以将光驱挂载在/mnt/上，然后进入该目录就可以查看光驱里的内容了。
</br>
<strong>/opt：</strong>
 这是给主机额外安装软件所摆放的目录。比如你安装一个ORACLE数据库则就可以放到这个目录下。默认是空的。
</br>
<strong>/proc：</strong>
这个目录是一个虚拟的目录，它是系统内存的映射，我们可以通过直接访问这个目录来获取系统信息。
</br>这个目录的内容不在硬盘上而是在内存里，我们也可以直接修改里面的某些文件，比如可以通过下面的命令来屏蔽主机的ping命令，使别人无法ping你的机器：
echo 1 > /proc/sys/net/ipv4/icmp_echo_ignore_all</br>
<strong>/root：</strong>
该目录为系统管理员，也称作超级权限者的用户主目录。</br>
<strong>/sbin：</strong>
s就是Super User的意思，这里存放的是系统管理员使用的系统管理程序。
</br>
<strong>/selinux：</strong>
 这个目录是Redhat/CentOS所特有的目录，Selinux是一个安全机制，类似于windows的防火墙，但是这套机制比较复杂，这个目录就是存放selinux相关的文件的。
</br>
<strong>/srv：</strong>
 该目录存放一些服务启动之后需要提取的数据。</br>
<strong>/sys：</strong>
 这是linux2.6内核的一个很大的变化。该目录下安装了2.6内核中新出现的一个文件系统 sysfs 。
</br>
sysfs文件系统集成了下面3种文件系统的信息：针对进程信息的proc文件系统、针对设备的devfs文件系统以及针对伪终端的devpts文件系统。
</br>该文件系统是内核设备树的一个直观反映。</br>
当一个内核对象被创建的时候，对应的文件和目录也在内核对象子系统种被创建。
</br>
<strong>/tmp：</strong>
这个目录是用来存放一些临时文件的。
</br>
<strong>/usr：</strong>
 这是一个非常重要的目录，用户的很多应用程序和文件都放在这个目录下，类似与windows下的program files目录。
</br>
<strong>/usr/bin：</strong>
系统用户使用的应用程序。
</br>
<strong>/usr/sbin：</strong>
超级用户使用的比较高级的管理程序和系统守护程序。
</br>
<strong>/usr/src：</strong>内核源代码默认的放置目录。
</br>
<strong>/var：</strong>
这个目录中存放着在不断扩充着的东西，我们习惯将那些经常被修改的目录放在这个目录下。包括各种日志文件。
</br>
在linux系统中，有几个目录是比较重要的，平时需要注意不要误删除或者随意更改内部文件.
</br>
<strong>/etc：</strong> 上边也提到了，这个是系统中的配置文件，如果你更改了该目录下的某个文件可能会导致系统不能启动。
</br>
<strong>/bin</strong>, <strong>/sbin</strong>, <strong>/usr/bin</strong>, <strong>/usr/sbin</strong>: 这是系统预设的执行文件的放置目录，比如 ls 就是在/bin/ls 目录下的。
</br>
值得提出的是，/bin, /usr/bin 是给系统用户使用的指令（除root外的通用户），而/sbin, /usr/sbin 则是给root使用的指令。
</br>
<strong>/var：</strong> 这是一个非常重要的目录，系统上跑了很多程序，那么每个程序都会有相应的日志产生，而这些日志就被记录到这个目录下，具体在/var/log 目录下，另外mail的预设放置也是在这里。
<p></p>
<p><strong>Linux 忘记密码解决方法</strong></p>
<span>很多朋友经常会忘记Linux系统的root密码，linux系统忘记root密码的情况该怎么办呢？重新安装系统吗？当然不用！进入单用户模式更改一下root密码即可。</span>
<ul>
	<li>(1)先将系统重启，在读秒的时候按下Enter键，就会出现一个菜单界面，仔细看菜单下的说明，按下e键就能够进入grub的编辑模式。</li>
	<li>(2)此时将光标移动到Kernel那一行再一次按下e键进入Kernel该行的编辑界面中，然后在出现的界面最后方输入中： single(有一个空格)</li>
	<li>(3再按下Enter键确定之后，按下b键就可以进入单用户维护模式，输入passwd修改密码</li>
</ul>
<p><strong>基础命令的操作</strong></p>
<span>下面我们来操作几个简单的命令：</span>
<ul>
	<li>显示日期和时间的命令：date</li>
	<li>显示日历的命令：cal</li>
	<li>计算器命令:bc</li>
	<li>数据同步写入磁盘:sync</li>
	<li>关机命令:shutdown</li>
	<li>重启，关机:reboot halt poweroff</li>
	<li>
</ul>
<pre class="brush:javascript;gutter:true">
date +%Y:%m:%d:%H:%M
cal 10 2014

bc #进入计算器
scale=3 #显示小数点后面的位数
10*2-10
quit #退出计算器

shutdown -h now #立即关机
shutdown -h 10:30 #在10:30关机（活隔天的10:30关机）
shutdown -r now #立刻重启

</pre>
<p></p>
<p><strong>重要的热键</strong></p>
<ul>
	<li>Tab 接在一串命令的第一个命令的后面是"命令补齐"</li>
	<li>Tab 接在一串命令的第二个命令的后面是"文件补齐"</li>
	<li>Ctrl+c 中断目前程序</li>
	<li>Ctrl+d 相当于exit</li>
</ul>
<p></p>
<p><strong>命令在线帮助</strong></p>
<ul>
	<li>man 命令</li>
	<li>info 命令</li>
</ul>

<p><strong>Linux 文件基本属性</strong></p>
<span>
在Linux中第一个字符代表这个文件是目录、文件或链接文件等等。</br>
当为[ d ]则是目录</br>
当为[ - ]则是文件；</br>
若是[ l ]则表示为链接文档(link file)；</br>
若是[ b ]则表示为装置文件里面的可供储存的接口设备(可随机存取装置)；</br>
若是[ c ]则表示为装置文件里面的串行端口设备，例如键盘、鼠标(一次性读取装置)。</br>
接下来的字符中，以三个为一组，且均为『rwx』 的三个参数的组合。其中，[ r ]代表可读(read)、[ w ]代表可写(write)、[ x ]代表可执行(execute)。 要注意的是，这三个权限的位置不会改变，如果没有权限，就会出现减号[ - ]而已。
<img src="images/linux9.png"/>
从左至右用0-9这些数字来表示。</br>
第0位确定文件类型，第1-3位确定属主（该文件的所有者）拥有该文件的权限。</br>
第4-6位确定属组（所有者的同组用户）拥有该文件的权限，第7-9位确定其他用户拥有该文件的权限。</br>
其中，第1、4、7位表示读权限，如果用"r"字符表示，则有读权限，如果用"-"字符表示，则没有读权限；</br>
第2、5、8位表示写权限，如果用"w"字符表示，则有写权限，如果用"-"字符表示没有写权限；第3、6、9位表示可执行权限，如果用"x"字符表示，则有执行权限，如果用"-"字符表示，则没有执行权限。
</span>
<p></p>
<p><strong>Linux文件属主和属组</strong></p>
<pre class="brush:javascript;gutter:true">
[root@www /]# ls -l
total 64
dr-xr-xr-x   2 root root 4096 Dec 14  2012 bin
dr-xr-xr-x   4 root root 4096 Apr 19  2012 boot
</pre>
<span>
对于文件来说，它都有一个特定的所有者，也就是对该文件具有所有权的用户。</br>
同时，在Linux系统中，用户是按组分类的，一个用户属于一个或多个组。</br>
文件所有者以外的用户又可以分为文件所有者的同组用户和其他用户。</br>
因此，Linux系统按文件所有者、文件所有者同组用户和其他用户来规定了不同的文件访问权限。</br>
在以上实例中，bin文件是一个目录文件，属主和属组都为root，属主有可读、可写、可执行的权限；与属主同组的其他用户有可读和可执行的权限；其他用户也有可读和可执行的权限。
</span>
<p></p>
<p><strong>更改文件属性</strong></p>
<pre class="brush:javascript;gutter:true">
#chgrp:更改文件属性
chgrp [-R] 属组名文件名
参数选项：
-R：递归更改文件属组，就是在更改某个目录文件的属组时，如果加上-R的参数，那么该目录下的所有文件的属组都会更改
#chown：更改文件属主，也可以同时更改文件属组
chown [–R] 属主名 文件名
chown [-R] 属主名：属组名 文件名
#chmod：更改文件9个属性
chmod [-R] xyz 文件或目录
选项与参数：
xyz : 就是刚刚提到的数字类型的权限属性，为 rwx 属性数值的相加。(r=4  w=2  x=1)
-R : 进行递归(recursive)的持续变更，亦即连同次目录下的所有文件都会变更
</pre>
<img src="images/linux10.png"/>
<p></p>
<p><strong>Linux 文件与目录管理</strong></p>
<ul>
	<li>绝对路径：路径的写法，由根目录 / 写起，例如： /usr/share/doc 这个目录。</li>
	<li>相对路径：路径的写法，不是由 / 写起，例如由 /usr/share/doc 要到 /usr/share/man 底下时，可以写成： cd ../man 这就是相对路径的写法啦！</li>
</ul>

<p><strong>处理目录的常用命令</strong></p>
<ul>
	<li>ls: 列出目录</li>
		<li>cd：切换目录</li>
			<li>pwd：显示目前的目录</li>
				<li>mkdir：创建一个新的目录</li>
					<li>rmdir：删除一个空的目录</li>
						<li>cp: 复制文件或目录</li>
							<li>rm: 移除文件或目录</li>
								<li>rm: 移动文件或牡蛎</li>
</ul>
<pre class="brush:javascript;gutter:true">
cd #回到自己的主文件夹
cd .. #回到上层目录
cd -  #回到刚才的目录下

</pre>









<p><strong>Linux 文件内容查看</strong></p>
<span>Linux系统中使用以下命令来查看文件的内容：</span>
<ul>
	<li>cat  由第一行开始显示文件内容</li>
		<li>tac  从最后一行开始显示，可以看出 tac 是 cat 的倒著写！</li>
			<li>nl   显示的时候，顺道输出行号！</li>
				<li>more 一页一页的显示文件内容</li>
					<li>less 与 more 类似，但是比 more 更好的是，他可以往前翻页！</li>
						<li>head 只看头几行</li>
							<li>tail 只看尾巴几行</li>
							<li>file 查看文件类型</li>
							<li>which 寻找执行文件</li>
							<li>(locate)whereis(find) 寻找特定文件</li>
							<li>umask 文件默认权限</li>
</ul>
<p><strong>Linux 磁盘管理</strong></p>
<span>
Linux磁盘管理好坏管理直接关系到整个系统的性能问题。</br>
<ul>
	<li>主分区和扩展分区最多可以有4个</li>
	<li>扩展分区最多只能有一个</li>
	<li>逻辑分区室友扩展分区持续分出来的分区</li>
	<li>能够被格式化后作为数据访问的分区为主要分区和逻辑分区，扩展分区无法格式化</li>
	<li>在Linux操作系统中IDE硬盘最多有59个逻辑分区（5号-63号），SATA硬盘则有11个逻辑分区（5号-15号）</li>
	<li>/dev/sd[a-p][1-15] 为SCSI,SATA,USB,Flash等接口的磁盘文件名</li>
	<li>/dev/hd[a-d][1-63] 为IDE接口的磁盘文件名</li>
</ul>
Linux磁盘管理常用三个命令为df、du和fdisk。
</span>
<ul>
	<li>df：列出文件系统的整体磁盘使用量</li>
	<li>du：检查磁盘空间使用量</li>
	<li>fdisk：用于磁盘分区</li>
</ul>
<p></p>
<p><strong>Vim 基本操作</strong></p>
<img src="images/linux4.png"/>
<img src="images/linux5.png"/>
<p></p>
<img src="images/linux6.png"/>
<p></p>
<p><strong>Shell 变量</strong></p>
<span>
注意，变量名和等号之间不能有空格，这可能和你熟悉的所有编程语言都不一样。同时，变量名的命名须遵循如下规则：
</br>
<ul>
<li>首个字符必须为字母（a-z，A-Z）。</li>
<li>中间不能有空格，可以使用下划线（_）。</li>
<li>不能使用标点符号。</li>
<li>不能使用bash里的关键字（可用help命令查看保留关键字）。</li>
</ul>
</span>
<pre class="brush:javascript;gutter:true">
your_name="w3cschool.cc"
</pre>

<p><strong>使用变量</strong></p>
<span>
使用一个定义过的变量，只要在变量名前面加美元符号即可，如：
</span>
<pre class="brush:javascript;gutter:true">
your_name="qinjx"
echo $your_name
echo ${your_name}
//已定义的变量，可以被重新定义，如：
your_name="tom"
echo $your_name
your_name="alibaba"
echo $your_name
</pre>

<p><strong>Shell 字符串</strong></p>
<span>
字符串是shell编程中最常用最有用的数据类型（除了数字和字符串，也没啥其它类型好用了），字符串可以用单引号，也可以用双引号，也可以不用引号。单双引号的区别跟PHP类似。
</span>
<pre class="brush:javascript;gutter:true">
//单引号
str='this is a string'
//单引号字符串的限制：
//单引号里的任何字符都会原样输出，单引号字符串中的变量是无效的；
//单引号字串中不能出现单引号（对单引号使用转义符后也不行）。

//双引号
your_name='qinjx'
str="Hello, I know your are \"$your_name\"! \n"
//双引号的优点：
//双引号里可以有变量
//双引号里可以出现转义字符


//拼接字符串
your_name="qinjx"
greeting="hello, "$your_name" !"
greeting_1="hello, ${your_name} !"
echo $greeting $greeting_1

//获取字符串长度
string="abcd"
echo ${#string} #输出 4

//提取子字符串
string="alibaba is a great company"
echo ${string:1:4} #输出liba

//查找子字符串
string="alibaba is a great company"
echo `expr index "$string" is`
</pre>

<p><strong>Shell 数组</strong></p>
<span>
bash支持一维数组（不支持多维数组），并且没有限定数组的大小。
</br>
类似与C语言，数组元素的下标由0开始编号。获取数组中的元素要利用下标，下标可以是整数或算术表达式，其值应大于或等于0。
</span>
<pre class="brush:javascript;gutter:true">
array_name=(value0 value1 value2 value3)
array_name[0]=value0
array_name[1]=value1
array_name[n]=valuen

//读取数组
valuen=${array_name[n]}

//使用@符号可以获取数组中的所有元素，例如：
echo ${array_name[@]}

//获取数组的长度
# 取得数组元素的个数
length=${#array_name[@]}
# 或者
length=${#array_name[*]}
# 取得数组单个元素的长度
lengthn=${#array_name[n]}
</pre>

<p><strong>Shell echo命令</strong></p>
<span>
Shell 的 echo 指令与 PHP 的 echo 指令类似，都是用于字符串的输出。命令格式：
</span>
<pre class="brush:javascript;gutter:true">
//1.显示普通字符串:
  echo "It is a test"

//2.显示转义字符
  echo "\"It is a test\""

//3.显示变量
//read 命令从标准输入中读取一行,并把输入行的每个字段的值指定给 shell 变量
  #!/bin/sh
  read name 
  echo "$name It is a test"

//4.显示换行
  echo -e "OK!\n" # -e 开启转义
  echo "It it a test"
  
//5.显示不换行
  #!/bin/sh
  echo -e "OK! \c" # -e 开启转义 \c 不换行
  echo "It is a test"  
  
//6.显示结果定向至文件
  echo "It is a test" > myfile  
  
//7.原样输出字符串，不进行转义或取变量(用单引号)
  echo '$name\"'  
    
//8.显示命令执行结果
  echo `date`  
  </pre>

<p><strong>Shell test命令</strong></p>
<span>
Shell中的 test 命令用于检查某个条件是否成立，它可以进行数值、字符和文件三个方面的测试。
</span>
<img src="images/linux7.png">
<pre class="brush:javascript;gutter:true">

</pre>

<p><strong>Shell 流程控制</strong></p>
<span><strong>if</strong></span>
<pre class="brush:javascript;gutter:true">
if condition
then
    command1 
    command2
    ...
    commandN 
fi
</pre>

<span><strong>if else</strong></span>
<pre class="brush:javascript;gutter:true">
if condition
then
    command1 
    command2
    ...
    commandN
else
    command
fi
</pre>

<span><strong>if else-if else</strong></span>
<pre class="brush:javascript;gutter:true">
if condition1
then
    command1
elif condition2
    command2
else
    commandN
fi
</pre>


<span><strong>for 循环</strong></span>
<pre class="brush:javascript;gutter:true">
for var in item1 item2 ... itemN
do
    command1
    command2
    ...
    commandN
done
</pre>

<span><strong>while 语句</strong></span>
<pre class="brush:javascript;gutter:true">
while condition
do
    command
done
</pre>

<span><strong>until 循环</strong></span>
<pre class="brush:javascript;gutter:true">
until condition
do
    command
done
</pre>

<span><strong>case</strong></span>
<pre class="brush:javascript;gutter:true">
case 值 in
模式1)
    command1
    command2
    ...
    commandN
    ;;
模式2）
    command1
    command2
    ...
    commandN
    ;;
esac
</pre>

<span><strong>跳出循环---break命令</strong></span>
<pre class="brush:javascript;gutter:true">
#!/bin/bash
while :
do
    echo -n "Input a number between 1 to 5: "
    read aNum
    case $aNum in
        1|2|3|4|5) echo "Your number is $aNum!"
        ;;
        *) echo "You do not select a number between 1 to 5, game is over!"
            break
        ;;
    esac
done
</pre>

<span><strong>跳出循环---continue</strong></span>
<pre class="brush:javascript;gutter:true">
#!/bin/bash
while :
do
    echo -n "Input a number between 1 to 5: "
    read aNum
    case $aNum in
        1|2|3|4|5) echo "Your number is $aNum!"
        ;;
        *) echo "You do not select a number between 1 to 5!"
            continue
            echo "Game is over!"
        ;;
    esac
done
</pre>

<p><strong>Shell 函数</strong></p>
<span>

</span>
<pre class="brush:javascript;gutter:true">
#!/bin/bash
funWithReturn(){
    echo "The function is to get the sum of two numbers..."
    echo -n "Input first number: "
    read aNum
    echo -n "Input another number: "
    read anotherNum
    echo "The two numbers are $aNum and $anotherNum !"
    return $(($aNum+$anotherNum))
}
funWithReturn
echo "The sum of two numbers is $? !"
</pre>

<p><strong>函数参数</strong></p>
<span>

</span>
<pre class="brush:javascript;gutter:true">
#!/bin/bash
funWithParam(){
    echo "The value of the first parameter is $1 !"
    echo "The value of the second parameter is $2 !"
    echo "The value of the tenth parameter is $10 !"
    echo "The value of the tenth parameter is ${10} !"
    echo "The value of the eleventh parameter is ${11} !"
    echo "The amount of the parameters is $# !"
    echo "The string of the parameters is $* !"
}
funWithParam 1 2 3 4 5 6 7 8 9 34 73
</pre>
<img src="images/linux8.png"/>





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