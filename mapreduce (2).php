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
<h1>MapReduce教程</h1>
<strong>MapReduce介绍</strong>
<p>MapReduce是一种编程模型，用于大规模数据集（大于1TB）的并行运算。概念"Map（映射）"和"Reduce（归约）"，和他们的主要思想，都是从函数式编程语言里借来的，还有从矢量编程语言里借来的特性。他极大地方便了编程人员在不会分布式并行编程的情况下，将自己的程序运行在分布式系统上。 当前的软件实现是指定一个Map（映射）函数，用来把一组键值对映射成一组新的键值对，指定并发的Reduce（归约）函数，用来保证所有映射的键值对中的每一个共享相同的键组。</br>
<strong>MapReduce基本流程</strong>
<p>MapReduce的基本流程是，框架会使用FileInputFormat读取文件，默认会根据文件大小的进行记录拆分，这里拆分器叫做InputSplitter。通过InputSplitter将文件拆成若干块，后面也就有若干个mapper与之对应。</p>
<p>InputSplitter里面使用RecordReader对文件块的记录进行读取，生成key/value的pair，调用mapper的map函数去处理。
<p>当然这些流程中有些可以定制，比如InputSplitter的算法可以修改，RecordReader也是可以定制。而且还有一个非常有效的方法，可以避免mapper将过多的数据传递给reducer。
<p>现在想从日志中提取数据，部分日志文件如下：
<div style="background:black;color:white">
2014-05-10 13:36:40,140307000287,536dbacc4700aab274729cca,login</br>
2014-05-10 13:37:46,140310000378,536dbae74700aab274729ccb,login</br>
2014-05-10 13:39:20,140310000382,536dbb284700aab274729ccd,login</br>
2014-05-10 13:39:31,140331001080,536dbb864700aab274729ccf,login</br>
2014-05-10 13:39:45,140331001105,536dbba04700aab274729cd4,login</br>
2014-05-10 13:39:45,140328000969,536dbba04700aab274729ce4,login</br>
2014-05-10 13:39:45,140408001251,536dbba04700aab274729cd8,login</br>
2014-05-10 13:39:45,140328000991,536dbba04700aab274729ce9,login</br>
2014-05-10 13:39:45,140324000633,536dbba14700aab274729cf5,login</br>
2014-05-10 13:39:45,140331001077,536dbba04700aab274729cdd,login</br>
2014-05-10 13:39:45,140408001242,536dbba04700aab274729cd7,login</br>
2014-05-10 13:39:45,140327000941,536dbba14700aab274729cf1,login</br>
2014-05-10 13:39:45,140408001265,536dbba04700aab274729ce5,login</br>
2014-05-10 13:39:45,140324000673,536dbba04700aab274729cd3,login</br>
2014-05-10 13:39:45,140331001066,536dbba04700aab274729cd5,login</br>
2014-05-10 13:39:45,140408001292,536dbba14700aab274729cee,login</br>
2014-05-10 13:39:45,140328000966,536dbba14700aab274729cec,login</br>
2014-05-10 13:39:45,140312000501,536dbba04700aab274729ce1,login</br>
2014-05-10 13:39:45,140306000216,536dbba14700aab274729d02,login</br>
2014-05-10 13:39:45,140327000856,536dbba04700aab274729ce2,login</br>
2014-05-10 13:39:46,140328000985,536dbba14700aab274729cf7,login</br>
2014-05-10 13:39:46,140306000245,536dbba14700aab274729d0d,login</br>
2014-05-10 13:39:46,140326000797,536dbba14700aab274729cf6,login</br>
2014-05-10 13:39:46,140328000993,536dbba14700aab274729d12,login</br>
2014-05-10 13:39:46,140331001115,536dbba14700aab274729d10,login</br>
2014-05-10 13:39:46,140325000744,536dbba04700aab274729ce0,login</br>
2014-05-10 13:39:46,140328000982,536dbba14700aab274729d0a,login</br>
2014-05-10 13:39:46,140331001063,536dbba04700aab274729ce3,login</br>
2014-05-10 13:39:46,140331001067,536dbba14700aab274729d1c,login</br>
2014-05-10 13:39:46,140401001157,536dbba04700aab274729ce8,login</br>
2014-05-10 13:39:46,140408001216,536dbba14700aab274729cef,login</br>
2014-05-10 13:39:46,140401001174,536dbba14700aab274729d27,login</br>
2014-05-10 13:39:46,140306000215,536dbba04700aab274729cde,login</br>
2014-05-10 13:39:46,140331001064,536dbba04700aab274729cdc,login</br>
2014-05-10 13:39:46,140326000825,536dbba04700aab274729cd9,login</br>
2014-05-10 13:39:46,140408001294,536dbba14700aab274729d0f,login</br>
</div>
<p>搭建MapReduce工程
<pre class="brush:javascript;gutter:true">
// LogMapper类，该类负责做数据的Map，前两个模板参数用于KeyIn和ValueIn, 
// 后两个模板参数用于KeyOut和ValueOut，都是代表类型。
public class LogMapper extends Mapper&lt;Object, Text, Text, IntWritable&gt; {
    private final static IntWritable ONE = new IntWritable(1);
    public void map(Object key, Text value, Context context)
            throws IOException, InterruptedException {
        String[] line = value.toString().split(",");
        if (line.length == 4) {
            String dId = line[2];
            context.write(new Text(dId), ONE);
        }
    }
}

// Reduce就是做加和统计
public class LogReducer&lt;Key&gt; extends
        Reducer&lt;Key, IntWritable, Key, IntWritable&gt; {
    private IntWritable result = new IntWritable();

    public void reduce(Key key, Iterable&lt;IntWritable&gt; values, Context context)
            throws IOException, InterruptedException {
        int sum = 0;
        for (IntWritable val : values) {
            sum += val.get();
        }
        result.set(sum);
        context.write(key, result);
    }
}

public class LogJob {

    public static void main(String[] args) throws Exception {
        Configuration conf = new Configuration();
        Job job = Job.getInstance(conf, "sum_did_from_log_file");
        job.setJarByClass(LogJob.class);

        job.setMapperClass(LogMapper.class);
        job.setCombinerClass(LogReducer.class);
        job.setReducerClass(LogReducer.class);

        job.setOutputKeyClass(Text.class);
        job.setOutputValueClass(IntWritable.class);

        FileInputFormat.addInputPath(job, new Path(args[0]));
        FileOutputFormat.setOutputPath(job, new Path(args[1]));

        System.exit(job.waitForCompletion(true) ? 0 : 1);
    }
}
</pre>
<strong>MapReduce例子程序运行</strong></br>
<p>在Eclipse中将MapReduce1工程打成jar包，取名为MapReduce1.jar，放到主文件夹下。</br>
<p>接下来进入主文件夹的Downloads/hadoop-1.2.1/bin下，右键打开命令行，首先格式化HDFS：</p>
<pre class="brush:javascript;gutter:true">
$ ./hadoop namenode -format
</pre>
<p>然后启动Hadoop所有进程：
<pre class="brush:javascript;gutter:true">
$ ./start-all.sh
</pre>
<p>gitclone下来源代码，在主文件夹新建一个input文件夹，把源代码中的log文件放进去，再把input文件夹上传到HDFS：
<pre class="brush:javascript;gutter:true">
$ ./hadoop dfs -put ~/input input/
</pre>
<p>同时还要确保output目录不存在，该目录会被MapReduce程序创建，用于存放输出结果：
<pre class="brush:javascript;gutter:true">
$ ./hadoop dfs -rmr output
</pre>
<p>运行程序，观察输出结果：
<pre class="brush:javascript;gutter:true">
$ ./hadoop jar ~/MapReduce1.jar com.shiyanlou.mapreduce.LogJob input output
</pre>
<p>现在将output目录都复制到本地磁盘，查看结果：
<pre class="brush:javascript;gutter:true">
$ ./hadoop dfs -get output/ ~/output
</pre>
<p>然后进入本地output目录查看：
<pre class="brush:javascript;gutter:true">
$ cd ~/output
$ ll -alh
$ gedit part-r-00000
</pre>
<strong>MultipleOutputs使用</strong>
在前面的例子中，输出文件名是默认的：
<pre class="brush:javascript;gutter:true">
_logs   part-r-00000    _SUCCESS
</pre>
part-r-00000 还有一个_SUCCESS文件标志job运行成功。 还有一个目录_logs。</br>
但是实际情况中，我们有时候需要根据情况定制我的输出文件名。</br>
<pre class="brush:javascript;gutter:true">
public class LogJob {

    public static void main(String[] args) throws Exception {
        Configuration conf = new Configuration();
        Job job = Job.getInstance(conf, "sum_did_from_log_file");
        job.setJarByClass(LogJob.class);

        job.setMapperClass(LogMapper.class);
        job.setCombinerClass(LogReducer.class);
        job.setReducerClass(LogReducer.class);

        job.setOutputKeyClass(Text.class);
        job.setOutputValueClass(IntWritable.class);
        //添加MultipleOutputs
        MultipleOutputs.addNamedOutput(job, "a", TextOutputFormat.class,Text.class, IntWritable.class);
        MultipleOutputs.addNamedOutput(job, "b", TextOutputFormat.class,Text.class, Text.class);
        MultipleOutputs.addNamedOutput(job, "c", TextOutputFormat.class,Text.class, Text.class);

        FileInputFormat.addInputPath(job, new Path(args[0]));
        FileOutputFormat.setOutputPath(job, new Path(args[1]));

        System.exit(job.waitForCompletion(true) ? 0 : 1);
    }
}
</pre>
MultipleOutputs.addNamedOutput 函数被调用了三次，设置了文件名为a，b和c，最后两个参数分别是output key和output value类型，应该和job.setOutputKeyClass以及job.setOutputValueClass保持一致。 最后修改LogReducer类的代码：
</br>
<pre class="brush:javascript;gutter:true">
public class LogReducer extends Reducer<Text, IntWritable, Text, IntWritable> {

    private IntWritable result = new IntWritable();

    private MultipleOutputs outputs;

    @Override
    public void setup(Context context) throws IOException, InterruptedException {
        System.out.println("enter LogReducer:::setup method");
        outputs = new MultipleOutputs(context);
    }

    @Override
    public void cleanup(Context context) throws IOException,
            InterruptedException {
        System.out.println("enter LogReducer:::cleanup method");
        outputs.close();
    }

    public void reduce(Text key, Iterable<IntWritable> values, Context context)
            throws IOException, InterruptedException {
        System.out.println("enter LogReducer::reduce method");
        int sum = 0;
        for (IntWritable val : values) {
            sum += val.get();
        }
        result.set(sum);
        System.out.println("key: " + key.toString() + " sum: " + sum);
        if ((sum < 60) && (sum >= 0)) {
            outputs.write("a", key, sum);
        } else if (sum < 100) {
            outputs.write("b", key, sum);
        } else {
            outputs.write("c", key, sum);
        }
    }
}
</pre>
根据相同key(did)sum的结果大小，写入到不同的文件中。运行后观察一下结果（运行步骤跟前一节一样）：
<pre class="brush:javascript;gutter:true">
$ ls
a-m-00000  b-m-00000  c-m-00000  _logs  part-r-00000  _SUCCESS
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