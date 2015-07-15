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
<h1>Kafka教程</h1>
<strong>简介</strong></br>
Kafka是一个分布式的、可分区的、可复制的消息系统。它提供了普通消息系统的功能，但具有自己独特的设计。</br>
基本的消息系统术语：
<ul>
	<li>Kafka将消息以topic为单位进行归纳。</li>
	<li>将向Kafka topic发布消息的程序成为producers.</li>
	<li>将预订topics并消费消息的程序成为consumer.</li>
	<li>Kafka以集群的方式运行，可以由一个或多个服务组成，每个服务叫做一个broker.</li>
</ul>
producers通过网络将消息发送到Kafka集群，集群向消费者提供消息。如下图所示：</br>
<img src="images/kafka-1.png"/></br>
客户端和服务端通过TCP协议通信</br>
<strong>Topics 和Logs</strong></br>
一个topic是对一组消息的归纳。对每个topic，Kafka 对它的日志进行了分区，如下图所示：</br>
<img src="images/kafka-2.png"/></br>
每个分区都由一系列有序的、不可变的消息组成，这些消息被连续的追加到分区中。分区中的每个消息都有一个连续的序列号叫做offset,用来在分区中唯一的标识这个消息。</br>
在一个可配置的时间段内，Kafka集群保留所有发布的消息，不管这些消息有没有被消费。比如，如果消息的保存策略被设置为2天，那么在一个消息被发布的两天时间内，它都是可以被消费的。之后它将被丢弃以释放空间。Kafka的性能是和数据量无关的常量级的，所以保留太多的数据并不是问题。</br>
实际上每个consumer唯一需要维护的数据是消息在日志中的位置，也就是offset.这个offset有consumer来维护：一般情况下随着consumer不断的读取消息，这offset的值不断增加，但其实consumer可以以任意的顺序读取消息，比如它可以将offset设置成为一个旧的值来重读之前的消息。</br>
以上特点的结合，使Kafka consumers非常的轻量级：它们可以在不对集群和其他consumer造成影响的情况下读取消息。你可以使用命令行来"tail"消息而不会对其他正在消费消息的consumer造成影响。</br>
将日志分区可以达到以下目的：首先这使得每个日志的数量不会太大，可以在单个服务上保存。另外每个分区可以单独发布和消费，为并发操作topic提供了一种可能。</br>
<strong>分布式</strong></br>
每个分区在Kafka集群的若干服务中都有副本，这样这些持有副本的服务可以共同处理数据和请求，副本数量是可以配置的。副本使Kafka具备了容错能力。</br>
每个分区都由一个服务器作为“leader”，零或若干服务器作为“followers”,leader负责处理消息的读和写，followers则去复制leader.如果leader down了，followers中的一台则会自动成为leader。集群中的每个服务都会同时扮演两个角色：作为它所持有的一部分分区的leader，同时作为其他分区的followers，这样集群就会据有较好的负载均衡。
</br><strong>Producers</strong></br>
Producer将消息发布到它指定的topic中,并负责决定发布到哪个分区。通常简单的由负载均衡机制随机选择分区，但也可以通过特定的分区函数选择分区。使用的更多的是第二种。
</br><strong>Consumers</strong></br>
<p>发布消息通常有两种模式：队列模式（queuing）和发布-订阅模式(publish-subscribe)。队列模式中，consumers可以同时从服务端读取消息，每个消息只被其中一个consumer读到；发布-订阅模式中消息被广播到所有的consumer中。<p>
Consumers可以加入一个consumer 组，共同竞争一个topic，topic中的消息将被分发到组中的一个成员中。同一组中的consumer可以在不同的程序中，也可以在不同的机器上。如果所有的consumer都在一个组中，这就成为了传统的队列模式，在各consumer中实现负载均衡。
<p>
如果所有的consumer都不在不同的组中，这就成为了发布-订阅模式，所有的消息都被分发到所有的consumer中。
<p>
更常见的是，每个topic都有若干数量的consumer组，每个组都是一个逻辑上的“订阅者”，为了容错和更好的稳定性，每个组由若干consumer组成。这其实就是一个发布-订阅模式，只不过订阅者是个组而不是单个consumer。
</br><img src="images/kafka-3.png"/></br>
<p>
相比传统的消息系统，Kafka可以很好的保证有序性。
传统的队列在服务器上保存有序的消息，如果多个consumers同时从这个服务器消费消息，服务器就会以消息存储的顺序向consumer分发消息。虽然服务器按顺序发布消息，但是消息是被异步的分发到各consumer上，所以当消息到达时可能已经失去了原来的顺序，这意味着并发消费将导致顺序错乱。为了避免故障，这样的消息系统通常使用“专用consumer”的概念，其实就是只允许一个消费者消费消息，当然这就意味着失去了并发性。
<p>
在这方面Kafka做的更好，通过分区的概念，Kafka可以在多个consumer组并发的情况下提供较好的有序性和负载均衡。将每个分区分只分发给一个consumer组，这样一个分区就只被这个组的一个consumer消费，就可以顺序的消费这个分区的消息。因为有多个分区，依然可以在多个consumer组之间进行负载均衡。注意consumer组的数量不能多于分区的数量，也就是有多少分区就允许多少并发消费。
<p> 
Kafka只能保证一个分区之内消息的有序性，在不同的分区之间是不可以的，这已经可以满足大部分应用的需求。如果需要topic中所有消息的有序性，那就只能让这个topic只有一个分区，当然也就只有一个consumer组消费它。
<h3>搭建Kafka运行环境</h3>
<pre>
Step 1: 下载Kafka
点击下载最新的版本并解压.
> tar -xzf kafka_2.9.2-0.8.1.1.tgz
> cd kafka_2.9.2-0.8.1.1
Step 2: 启动服务

Kafka用到了Zookeeper，所有首先启动Zookper，下面简单的启用一个单实例的Zookkeeper服务。可以在命令的结尾加个&符号，这样就可以启动后离开控制台。
> bin/zookeeper-server-start.sh config/zookeeper.properties &
[2013-04-22 15:01:37,495] INFO Reading configuration from: config/zookeeper.properties (org.apache.zookeeper.server.quorum.QuorumPeerConfig)
...
现在启动Kafka:
> bin/kafka-server-start.sh config/server.properties
[2013-04-22 15:01:47,028] INFO Verifying properties (kafka.utils.VerifiableProperties)
[2013-04-22 15:01:47,051] INFO Property socket.send.buffer.bytes is overridden to 1048576 (kafka.utils.VerifiableProperties)
...
Step 3: 创建 topic

创建一个叫做“test”的topic，它只有一个分区，一个副本。
> bin/kafka-topics.sh --create --zookeeper localhost:2181 --replication-factor 1 --partitions 1 --topic test
可以通过list命令查看创建的topic:
> bin/kafka-topics.sh --list --zookeeper localhost:2181
test
除了手动创建topic，还可以配置broker让它自动创建topic.
Step 4:发送消息.

Kafka 使用一个简单的命令行producer，从文件中或者从标准输入中读取消息并发送到服务端。默认的每条命令将发送一条消息。

运行producer并在控制台中输一些消息，这些消息将被发送到服务端：
> bin/kafka-console-producer.sh --broker-list localhost:9092 --topic test 
This is a messageThis is another message
ctrl+c可以退出发送。
Step 5: 启动consumer

Kafka also has a command line consumer that will dump out messages to standard output.
Kafka也有一个命令行consumer可以读取消息并输出到标准输出：
> bin/kafka-console-consumer.sh --zookeeper localhost:2181 --topic test --from-beginning
This is a message
This is another message
你在一个终端中运行consumer命令行，另一个终端中运行producer命令行，就可以在一个终端输入消息，另一个终端读取消息。
这两个命令都有自己的可选参数，可以在运行的时候不加任何参数可以看到帮助信息。
 
Step 6: 搭建一个多个broker的集群

刚才只是启动了单个broker，现在启动有3个broker组成的集群，这些broker节点也都是在本机上的：
首先为每个节点编写配置文件：
 
> cp config/server.properties config/server-1.properties
> cp config/server.properties config/server-2.properties
在拷贝出的新文件中添加以下参数：
config/server-1.properties:
    broker.id=1
    port=9093
    log.dir=/tmp/kafka-logs-1
 
config/server-2.properties:
    broker.id=2
    port=9094
    log.dir=/tmp/kafka-logs-2
broker.id在集群中唯一的标注一个节点，因为在同一个机器上，所以必须制定不同的端口和日志文件，避免数据被覆盖。
 
We already have Zookeeper and our single node started, so we just need to start the two new nodes:
刚才已经启动可Zookeeper和一个节点，现在启动另外两个节点：
> bin/kafka-server-start.sh config/server-1.properties &
...
> bin/kafka-server-start.sh config/server-2.properties &
...
创建一个拥有3个副本的topic:
> bin/kafka-topics.sh --create --zookeeper localhost:2181 --replication-factor 3 --partitions 1 --topic my-replicated-topic
现在我们搭建了一个集群，怎么知道每个节点的信息呢？运行"describe topics"命令就可以了：
> bin/kafka-topics.sh --describe --zookeeper localhost:2181 --topic my-replicated-topic
Topic:my-replicated-topic       PartitionCount:1        ReplicationFactor:3     Configs:
        Topic: my-replicated-topic      Partition: 0    Leader: 1       Replicas: 1,2,0 Isr: 1,2,0
下面解释一下这些输出。第一行是对所有分区的一个描述，然后每个分区都会对应一行，因为我们只有一个分区所以下面就只加了一行。
leader：负责处理消息的读和写，leader是从所有节点中随机选择的.
replicas：列出了所有的副本节点，不管节点是否在服务中.
isr：是正在服务中的节点.
在我们的例子中，节点1是作为leader运行。
向topic发送消息：

> bin/kafka-console-producer.sh --broker-list localhost:9092 --topic my-replicated-topic
...
my test message 1my test message 2^C 
消费这些消息：
> bin/kafka-console-consumer.sh --zookeeper localhost:2181 --from-beginning --topic my-replicated-topic
...
my test message 1
my test message 2
^C
测试一下容错能力.Broker 1作为leader运行，现在我们kill掉它：
> ps | grep server-1.properties7564 ttys002    0:15.91 /System/Library/Frameworks/JavaVM.framework/Versions/1.6/Home/bin/java...
> kill -9 7564
另外一个节点被选做了leader,node 1 不再出现在 in-sync 副本列表中：
> bin/kafka-topics.sh --describe --zookeeper localhost:218192 --topic my-replicated-topic
Topic:my-replicated-topic       PartitionCount:1        ReplicationFactor:3     Configs:
        Topic: my-replicated-topic      Partition: 0    Leader: 2       Replicas: 1,2,0 Isr: 2,0
虽然最初负责续写消息的leader down掉了，但之前的消息还是可以消费的：
> bin/kafka-console-consumer.sh --zookeeper localhost:2181 --from-beginning --topic my-replicated-topic
...
my test message 1
my test message 2
^C
</pre>
</br><strong>Kafka Java客户端代码示例</strong></br>
消息生产者代码示例
<pre class="brush:javascript;gutter:true">
package kafka.demo;

import java.util.Collections;  
import java.util.Date;  
import java.util.Properties;  
import java.util.Random;  
import kafka.javaapi.producer.Producer;  
import kafka.producer.KeyedMessage;  
import kafka.producer.ProducerConfig;  
public class ProducerDemo {
	public static void main(String[] args) {  
        Random rnd = new Random();  
        int events=100;  
        // 设置配置属性  
        Properties props = new Properties();  
        props.put("metadata.broker.list","127.0.0.1:9092");  
        props.put("serializer.class", "kafka.serializer.StringEncoder");  
        // key.serializer.class默认为serializer.class  
        props.put("key.serializer.class", "kafka.serializer.StringEncoder");  
        // 可选配置，如果不配置，则使用默认的partitioner  
        props.put("partitioner.class", "com.catt.kafka.demo.PartitionerDemo");  
        // 触发acknowledgement机制，否则是fire and forget，可能会引起数据丢失  
        // 值为0,1,-1,可以参考  
        // http://kafka.apache.org/08/configuration.html  
        props.put("request.required.acks", "1");  
        ProducerConfig config = new ProducerConfig(props);  
        // 创建producer  
        Producer&lt;String, String&gt; producer = new Producer&lt;String, String&gt;(config);  
        // 产生并发送消息  
        long start=System.currentTimeMillis();  
        for (long i = 0; i &lt; events; i++) {  
            long runtime = new Date().getTime();  
            String ip = "192.168.2." + i;//rnd.nextInt(255);  
            String msg = runtime + ",www.example.com," + ip;  
            //如果topic不存在，则会自动创建，默认replication-factor为1，partitions为0  
            KeyedMessage&lt;String, String&gt; data = new KeyedMessage&lt;String, String&gt;(  
                    "page_visits", ip, msg);  
            producer.send(data);  
        }  
        System.out.println("耗时:" + (System.currentTimeMillis() - start));  
        // 关闭producer  
        producer.close();  
    }  
}
</pre>
消息消费者代码示例
<pre class="brush:javascript;gutter:true">
package kafka.demo;
import java.util.HashMap;  
import java.util.List;  
import java.util.Map;  
import java.util.Properties;  
import java.util.concurrent.ExecutorService;  
import java.util.concurrent.Executors;  
import kafka.consumer.Consumer;  
import kafka.consumer.ConsumerConfig;  
import kafka.consumer.KafkaStream;  
import kafka.javaapi.consumer.ConsumerConnector;  
public class ConsumerDemo {  
    private final ConsumerConnector consumer;  
    private final String topic;  
    private ExecutorService executor;  
   
    public ConsumerDemo(String a_zookeeper, String a_groupId, String a_topic) {  
        consumer = Consumer.createJavaConsumerConnector(createConsumerConfig(a_zookeeper,a_groupId));  
        this.topic = a_topic;  
    }  
   
    public void shutdown() {  
        if (consumer != null)  
            consumer.shutdown();  
        if (executor != null)  
            executor.shutdown();  
    }  
   
    public void run(int numThreads) {  
        Map&lt;String, Integer&gt; topicCountMap = new HashMap&lt;String, Integer&gt;();  
        topicCountMap.put(topic, new Integer(numThreads));  
        Map&lt;String, List&lt;KafkaStream&lt;byte[], byte[]&gt;&gt;&gt; consumerMap = consumer  
                .createMessageStreams(topicCountMap);  
        List&lt;KafkaStream&lt;byte[], byte[]&gt;&gt; streams = consumerMap.get(topic);  
        // now launch all the threads  
        executor = Executors.newFixedThreadPool(numThreads);  
        // now create an object to consume the messages  
        //  
        int threadNumber = 0;  
        for (final KafkaStream stream : streams) {  
            executor.submit(new ConsumerMsgTask(stream, threadNumber));  
            threadNumber++;  
        }  
    }  
   
    private static ConsumerConfig createConsumerConfig(String a_zookeeper,  
            String a_groupId) {  
        Properties props = new Properties();  
        props.put("zookeeper.connect", a_zookeeper);  
        props.put("group.id", a_groupId);  
        props.put("zookeeper.session.timeout.ms", "400");  
        props.put("zookeeper.sync.time.ms", "200");  
        props.put("auto.commit.interval.ms", "1000"); 
        return new ConsumerConfig(props);  
    }  
   
    public static void main(String[] arg) {  
        String[] args = { "127.0.0.1:2188", "1", "page_visits", "12" };  
        String zooKeeper = args[0];  
        String groupId = args[1];  
        String topic = args[2];  
        int threads = Integer.parseInt(args[3]);  
        ConsumerDemo demo = new ConsumerDemo(zooKeeper, groupId, topic);  
        demo.run(threads);  
        try {  
            Thread.sleep(10000);  
        } catch (InterruptedException ie) {  
        }  
        demo.shutdown();  
    }  
} 
</pre>
消息处理类
<pre class="brush:javascript;gutter:true">
package kafka.demo;

import kafka.consumer.ConsumerIterator;  
import kafka.consumer.KafkaStream;  
   
public class ConsumerMsgTask implements Runnable {  
    private KafkaStream m_stream;  
    private int m_threadNumber;  
   
    public ConsumerMsgTask(KafkaStream stream, int threadNumber) {  
        m_threadNumber = threadNumber;  
        m_stream = stream;  
    }  
   
    public void run() {  
        ConsumerIterator&lt;byte[], byte[]&gt; it = m_stream.iterator();  
        while (it.hasNext())  
            System.out.println("Thread " + m_threadNumber + ": " 
                    + new String(it.next().message()));  
        System.out.println("Shutting down Thread: " + m_threadNumber);  
    }  
} 
</pre>
Partitioner类示例
<pre class="brush:javascript;gutter:true">
package kafka.demo;
import kafka.producer.Partitioner;  
import kafka.utils.VerifiableProperties;  
   
public class PartitionerDemo implements Partitioner {  
    public PartitionerDemo(VerifiableProperties props) { 
    }  
    @Override 
    public int partition(Object obj, int numPartitions) {  
        int partition = 0;  
        if (obj instanceof String) {  
            String key=(String)obj;  
            int offset = key.lastIndexOf('.');  
            if (offset > 0) {  
                partition = Integer.parseInt(key.substring(offset + 1)) % numPartitions;  
            }  
        }else{  
            partition = obj.toString().length() % numPartitions;  
        }
        return partition;  
    }  
} 
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
