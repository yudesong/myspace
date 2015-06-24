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
					</ul>		
			</div>			
			</div>	
	
	</div>
	<div style="float:right;border:1px solid black;border-radius:5px;width:67%;margin-top:20px;margin-right:15px;background:white;">
<div class="grid-8">
<div class="post-78738 post type-post status-publish format-standard hentry category-webfront category-programmer tag-javascript tag-1876 odd" id="post-78738">
<div class="entry-header">
<h1></h1>
</div>
<div class="entry">
<h1>Mapreduce编程系列</h1>
<h3>MapReduce基本流程</h3>
<span>
MapReduce的基本流程是，框架会使用FileInputFormat读取文件，默认会根据文件大小的进行记录拆分，这里拆分器叫做InputSplitter。通过InputSplitter将文件拆成若干块，后面也就有若干个mapper与之对应。</br>
InputSplitter里面使用RecordReader对文件块的记录进行读取，生成key/value的pair，调用mapper的map函数去处理。</br>
当然这些流程中有些可以定制，比如InputSplitter的算法可以修改，RecordReader也是可以定制。</br>
而且还有一个非常有效的方法，可以避免mapper将过多的数据传递给reducer。</br>
比如有个例子都是1, 其实可以先用一个HashMap对key做分组，有则value加1, 无则添加到HashMap中。最后将分组统计后的key/value数据通过context.write方法发送给reducer，能够大大提高效率。
</span></br>
<strong>用户及用户组</strong></br>
1.添加用户及用户组
<pre class="brush:javascript;gutter:true">
sudo adduser hadoop
</pre>
2.添加sudo权限
<pre class="brush:javascript;gutter:true">
sudo usermod -G sudo hadoop
</pre>
<strong>安装及配置依赖的软件包</strong></br>
<pre class="brush:javascript;gutter:true">
sudo apt-get update
sudo apt-get install openssh-server rsync
sudo service ssh restart
sudo apt-get install openjdk-7-jdk
java -version
</pre>
<strong>配置ssh免密码登录</strong></br>
切换到hadoop用户，需要输入添加hadoop用户时配置的密码。后续步骤都将在hadoop用户的环境中执行。</br>
<pre class="brush:javascript;gutter:true">
su -l hadoop
</pre>
配置ssh环境免密码登录。</br>
<pre class="brush:javascript;gutter:true">
ssh-keygen -t rsa -P ""
</pre>
在/home/hadoop/.ssh目录下生成了id_rsa（私钥）和id_rsa.pub（公钥）两个文件,将公钥追加到authorized_keys中，该文件保存所有允许以当前用户身份登录到ssh客户端用户的公钥内容。</br>
<pre class="brush:javascript;gutter:true">
cat ~/.ssh/id_rsa.pub >> ~/.ssh/authorized_keys
</pre>
验证登录本机是否还需要密码，配置正确的话是可以不需密码登录的。</br>
<pre class="brush:javascript;gutter:true">
ssh localhost
</pre>
<strong>下载并安装Hadoop</strong></br>
下载并安装Hadoop</br>
<pre class="brush:javascript;gutter:true">
wget http://labfile.oss.aliyuncs.com/hadoop-2.6.0.tar.gz
</pre>
解压并安装</br>
<pre class="brush:javascript;gutter:true">
tar zxvf hadoop-2.6.0.tar.gz
sudo mv hadoop-2.6.0 /usr/local/hadoop
sudo chmod 774 /usr/local/hadoop
</pre>
配置Hadoop</br>
<pre class="brush:javascript;gutter:true">
vim /home/hadoop/.bashrc
</pre>
在/home/hadoop/.bashrc文件末尾添加下列内容：
<pre class="brush:javascript;gutter:true">
#HADOOP START
export JAVA_HOME=/usr/lib/jvm/java-7-openjdk-amd64
export HADOOP_INSTALL=/usr/local/hadoop
export PATH=$PATH:$HADOOP_INSTALL/bin
export PATH=$PATH:$HADOOP_INSTALL/sbin
export HADOOP_MAPRED_HOME=$HADOOP_INSTALL
export HADOOP_COMMON_HOME=$HADOOP_INSTALL
export HADOOP_HDFS_HOME=$HADOOP_INSTALL
export YARN_HOME=$HADOOP_INSTALL
export HADOOP_COMMON_LIB_NATIVE_DIR=$HADOOP_INSTALL/lib/native
export HADOOP_OPTS="-Djava.library.path=$HADOOP_INSTALL/lib"
#HADOOP END
</pre>
保存退出后，激活新加的环境变量</br>
<pre class="brush:javascript;gutter:true">
source ~/.bashrc
</pre>
至此，Hadoop单机模式安装完成，</br>
<strong>测试验证</strong></br>
创建输入的数据，暂时采用/etc/protocols文件作为测试</br>
<pre class="brush:javascript;gutter:true">
$ cd /usr/local/hadoop
$ sudo mkdir input
$ sudo cp /etc/protocols ./input
</pre>
执行Hadoop WordCount应用（词频统计）</br>
<pre class="brush:javascript;gutter:true">
$ bin/hadoop jar share/hadoop/mapreduce/sources/hadoop-mapreduce-examples-2.6.0-sources.jar 
org.apache.hadoop.examples.WordCount input output
</pre>
查看生成的单词统计数据</br>
<pre class="brush:javascript;gutter:true">
$ cat output/*
</pre>
<strong>Hadoop伪分布式模式配置</strong>
1. 相关配置文件修改</br>
&nbsp;&nbsp;1)修改core-site.xml:</br>
<pre class="brush:javascript;gutter:true">
$ sudo gvim /usr/local/hadoop/etc/hadoop/core-site.xml
</pre>
<pre class="brush:javascript;gutter:true">
&lt;?xml version="1.0"?&gt;
&lt;?xml-stylesheet type="text/xsl" href="configuration.xsl"?&gt;

&lt;!-- Put site-specific property overrides in this file. --&gt;

&lt;configuration&gt;
    &lt;property&gt;
        &lt;name&gt;fs.default.name&lt;/name&gt;
        &lt;value&gt;hdfs://localhost:9000&lt;/value&gt;
    &lt;/property&gt;
    &lt;property&gt;
        &lt;name&gt;hadoop.tmp.dir&lt;/name&gt;
        &lt;value&gt;/home/hadoop/tmp&lt;/value&gt;
   &lt;/property&gt;
&lt;/configuration&gt;
</pre>
常用配置项说明：</br>
<ul>
	<li>fs.default.name这是一个描述集群中NameNode结点的URI(包括协议、主机名称、端口号)，集群里面的每一台机器都需要知道NameNode的地址。DataNode结点会先在NameNode上注册，这样它们的数据才可以被使用。独立的客户端程序通过这个URI跟DataNode交互，以取得文件的块列表。</li>
	<li>hadoop.tmp.dir 是hadoop文件系统依赖的基础配置，很多路径都依赖它。如果hdfs-site.xml中不配置namenode和datanode的存放位置，默认就放在/tmp/hadoop-${user.name}这个路径中</li>
</ul>
2)修改hdfs-site.xml:
<pre class="brush:javascript;gutter:true">
$ sudo gvim /usr/local/hadoop/etc/hadoop/hdfs-site.xml
</pre>
<pre class="brush:javascript;gutter:true">
&lt;?xml version="1.0"?&gt;
&lt;?xml-stylesheet type="text/xsl" href="configuration.xsl"?&gt;

&lt;!-- Put site-specific property overrides in this file. --&gt;

&lt;configuration&gt;
    &lt;property&gt;
        &lt;name&gt;dfs.replication&lt;/name&gt;
        &lt;value&gt;1&lt;/value&gt;
    &lt;/property&gt;
&lt;/configuration&gt;
</pre>
常用配置项说明：</br>
<ul>
	<li>dfs.replication它决定着系统里面的文件块的数据备份个数。对于一个实际的应用，它应该被设为3（这个数字并没有上限，但更多的备份可能并没有作用，而且会占用更多的空间）。少于三个的备份，可能会影响到数据的可靠性(系统故障时，也许会造成数据丢失)</li>
	<li>dfs.data.dir这是DataNode结点被指定要存储数据的本地文件系统路径。DataNode结点上的这个路径没有必要完全相同，因为每台机器的环境很可能是不一样的。但如果每台机器上的这个路径都是统一配置的话，会使工作变得简单一些。默认的情况下，它的值为file://${hadoop.tmp.dir}/dfs/data这个路径只能用于测试的目的，因为它很可能会丢失掉一些数据。所以这个值最好还是被覆盖。</li>
	<li>dfs.name.dir这是NameNode结点存储hadoop文件系统信息的本地系统路径。这个值只对NameNode有效，DataNode并不需要使用到它。上面对于/temp类型的警告，同样也适用于这里。在实际应用中，它最好被覆盖掉</li>	
</ul>
3)修改mapred-site.xml:</br>
<pre class="brush:javascript;gutter:true">
$ sudo cp /usr/local/hadoop/etc/hadoop/mapred-site.xml.template /usr/local/hadoop/etc/hadoop/mapred-site.xml
$ sudo gvim /usr/local/hadoop/etc/hadoop/mapred-site.xml
</pre>
<pre class="brush:javascript;gutter:true">
&lt;?xml version="1.0"?&gt;
&lt;?xml-stylesheet type="text/xsl" href="configuration.xsl"?&gt;

&lt;!-- Put site-specific property overrides in this file. --&gt;

&lt;configuration&gt;
    &lt;property&gt;
        &lt;name&gt;mapreduce.framework.name&lt;/name&gt;
        &lt;value&gt;yarn&lt;/value&gt;
    &lt;/property&gt;
&lt;/configuration&gt;
</pre>
常用配置项说明：</br>
<ul>
	<li>mapred.job.trackerJobTracker的主机（或者IP）和端口。</li>
</ul>
4).修改yarn-site.xml:</br>
<pre class="brush:javascript;gutter:true">
<configuration>
    <property>
        <name>yarn.nodemanager.aux-services</name>
        <value>mapreduce_shuffle</value>
    </property>
    <property>
        <name>yarn.nodemanager.aux-services.mapreduce.shuffle.class</name>
        <value>org.apache.hadoop.mapred.ShuffleHandler</value>
    </property>
</configuration>
</pre>
常用配置项说明：</br>
<ul>
	<li>yarn.nodemanager.aux-services通过该配置，用户可以自定义一些服务</li>
</ul>
5).修改yarn-site.xml:</br>
<pre class="brush:javascript;gutter:true">
$ sudo vim /usr/local/hadoop/etc/hadoop/hadoop-env.sh
</pre>
修改 JAVA_HOME 如下：</br>
<pre class="brush:javascript;gutter:true">
24 # The java implementation to use
25 export JAVA_HOME=/usr/lib/jvm/java-7-openjdk-amd64
</pre>
这样简单的伪分布式模式就配置好了。</br>
<strong>格式化HDFS文件系统</strong>
在使用hadoop前，必须格式化一个全新的HDFS安装，通过创建存储目录和NameNode持久化数据结构的初始版本，格式化过程创建了一个空的文件系统。由于NameNode管理文件系统的元数据，而DataNode可以动态的加入或离开集群，因此这个格式化过程并不涉及DataNode。同理，用户也无需关注文件系统的规模。集群中DataNode的数量决定着文件系统的规模。DataNode可以在文件系统格式化之后的很长一段时间内按需增加。</br>
1.先切换到hadoop账户，按照提示输入账户密码</br>
<pre class="brush:javascript;gutter:true">
#su hadoop
</pre>
2.格式化HDFS文件系统</br>
<pre class="brush:javascript;gutter:true">
$ hadoop namenode -format
</pre>
<strong>Hadoop集群启动</strong>
1.启动hdfs守护进程，分别启动NameNode和DataNode</br>
<pre class="brush:javascript;gutter:true">
$ hadoop-daemon.sh start namenode
$ hadoop-daemon.sh start datanode
</pre>
或者一次启动</br>
<pre class="brush:javascript;gutter:true">
$ start-dfs.sh
</pre>
2.启动yarn,使用如下命令启ResourceManager和NodeManager:
<pre class="brush:javascript;gutter:true">
$ yarn-daemon.sh start resourcemanager
$ yarn-daemon.sh start nodemanager
</pre>
3.检查是否运行成功
打开浏览器</br>
(1)http://localhost:8088 进入ResourceManager管理页面
(2)输入：http://localhost:50070进入HDFS页面
<strong>测试验证</strong>
首先创建相关文件夹（要一步一步的创建）：
<pre class="brush:javascript;gutter:true">
$ hadoop dfs -mkdir /user
$ hadoop dfs -mkdir /user/hadoop
$ hadoop dfs -mkdir /user/hadoop/input
</pre>
1.创建输入的数据，采用/etc/protocols文件作为测试</br>
先将文件拷贝到 hdfs 上：
<pre class="brush:javascript;gutter:true">
$ hadoop dfs -put /etc/protocols /user/hadoop/input
</pre>
2.执行Hadoop WordCount应用（词频统计）
<pre class="brush:javascript;gutter:true">
# 如果存在上一次测试生成的output，由于hadoop的安全机制，直接运行可能会报错，所以请手动删除上一次生成的output文件夹
$ bin/hadoop jar share/hadoop/mapreduce/sources/hadoop-mapreduce-examples-2.6.0-sources.jar 
org.apache.hadoop.examples.WordCount input output
</pre>
3.查看生成的单词统计数据
<pre class="brush:javascript;gutter:true">
$ hadoop dfs -cat /user/hadoop/output/*
</pre>
<strong>关闭服务</strong></br>
输入命令
<pre class="brush:javascript;gutter:true">
$ hadoop-daemon.sh stop namenode
$ hadoop-daemon.sh stop datanode
$ yarn-daemon.sh stop resourcemanager
$ yarn-daemon.sh stop nodemanager
或者
$ stop-dfs.sh
$ stop-yarn.sh
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