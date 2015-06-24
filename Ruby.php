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
<h1>Ruby基础</h1>
</div>
<div class="entry">
<p><strong>编译/执行 Ruby 程序</strong></p></p>
<span>对于大多数编程语言，第一个入门实例便是 "Hello World!"，下面的实例使用 Ruby 输出 "Hello World!"：</span>
<pre class="brush:javascript;gutter:true">
#!/usr/bin/ruby
puts "Hello World!";
</pre>
<p><strong>Ruby 的特性</strong></p>
<span>
<ul>
	<li>Ruby 是开源的，在 Web 上免费提供，但需要一个许可证。</li>
	<li>Ruby 是一种通用的、解释的编程语言。</li>
	<li>Ruby 是一种真正的面向对象编程语言。</li>
	<li>Ruby 是一种类似于 Python 和 Perl 的服务器端脚本语言。</li>
	<li>Ruby 可以用来编写通用网关接口（CGI）脚本。</li>
	<li>Ruby 可以被嵌入到超文本标记语言（HTML）。</li>
	<li>Ruby 与 C++ 和 Perl 等许多编程语言有着类似的语法。</li>
	<li>Ruby 可扩展性强，用 Ruby 编写的大程序易于维护.</li>
	<li>Ruby 可用于开发的 Internet 和 Intranet 应用程序。</li>
	<li>Ruby 可以安装在 Windows 和 POSIX 环境中。</li>
	<li>Ruby 支持许多 GUI 工具，比如 Tcl/Tk、GTK 和 OpenGL。</li>
	<li>Ruby 可以很容易地连接到 DB2、MySQL、Oracle 和 Sybase。</li>
	<li>Ruby 有丰富的内置函数，可以直接在 Ruby 脚本中使用。</li>
</ul>
</span>
<p><strong>交互式 Ruby（IRb）</strong></p>
<span>只需要在命令提示符中键入 irb，一个交互式 Ruby Session 将会开始，如下所示：</span>
<pre class="brush:javascript;gutter:true">
$irb
irb 0.6.1(99/09/16)
irb(main):001:0> def hello
irb(main):002:1> out = "Hello World"
irb(main):003:1> puts out
irb(main):004:1> end
nil
irb(main):005:0> hello
Hello World
nil
irb(main):006:0>
</pre>
<p><strong>Ruby 安装 - Unix</strong></p>
<span>下面列出了在 Unix 机器上安装 Ruby 的步骤。</br>
<em>注意：</em>
<span>在安装之前，请确保您有 root 权限。
	<ul>
		<li>下载最新版的 Ruby 压缩文件。</li>
		<li>下载 Ruby 之后，解压到新创建的目录下：</li>
	</ul>
</span>
</span>
<pre class="brush:javascript;gutter:true">
$ tar -xvzf ruby-1.6.7.tgz
$ cd ruby-1.6.7
$ ./configure
$ make
$ su -l root # 使用root用户
$ make install
$ exit       # 切换回普通用户
$ruby -v
ruby 1.6.7 (2002-06-04) [i386-netbsd]

$使用 yum 安装 Ruby
$ yum install ruby
</pre>
<p><strong>Ruby 命令行选项</strong></p>
<span>Ruby 一般是从命令行运行，方式如下：</span>
<pre class="brush:javascript;gutter:true">
$ ruby [ options ] [.] [ programfile ] [ arguments ... ]
</pre>
<img src="images/ruby1.png"/>
<p><strong>Ruby 语法</strong></p>
<span>让我们编写一个简单的 Ruby 程序。所有的 Ruby 文件扩展名都是 .rb。所以，把下面的源代码放在 test.rb 文件中。</span>
<pre class="brush:javascript;gutter:true">
#!/usr/bin/ruby -w
puts "Hello, Ruby!";
</pre>
<span>在这里，假设您的 /usr/bin 目录下已经有可用的 Ruby 解释器。现在，尝试运行这个程序，如下所示：</span>
<pre class="brush:javascript;gutter:true">
$ ruby test.rb
</pre>
<p><strong>Ruby 标识符</strong></p>
<span>
标识符是变量、常量和方法的名称。Ruby 标识符是大小写敏感的。这意味着 Ram 和 RAM 在 Ruby 中是两个不同的标识符。
</br>
Ruby 标识符的名称可以包含字母、数字和下划线字符（ _ ）。
</span>
<img src="images/ruby2.png"/>
<p><strong>Ruby 中的 Here Document</strong></p>
<span>
"Here Document" 是指建立多行字符串。在 &lt;&lt;之后，您可以指定一个字符串或标识符来终止字符串，且当前行之后直到终止符为止的所有行是字符串的值。
</br>
如果终止符用引号括起，引号的类型决定了面向行的字符串类型。请注意&lt;&lt;和终止符之间必须没有空格。
</br>
下面是不同的实例：
</span>
<pre class="brush:javascript;gutter:true">
#!/usr/bin/ruby -w
print &lt;&lt;EOF
    This is the first way of creating
    here document ie. multiple line string.
EOF
print &lt;&lt;"EOF";                # 与上面相同
    This is the second way of creating
    here document ie. multiple line string.
EOF
print &lt;&lt;`EOC`                 # 执行命令
	echo hi there
	echo lo there
EOC
print &lt;&lt;"foo", &lt;&lt;"bar"	      # 您可以把它们进行堆叠
	I said foo.
foo
	I said bar.
bar
</pre>
<p><strong>Ruby END 语句</strong></p>
<span>语法</span>
<pre class="brush:javascript;gutter:true">
#!/usr/bin/ruby
puts "This is main Ruby Program"
END {
   puts "Terminating Ruby Program"
}
BEGIN {
   puts "Initializing Ruby Program"
}
</pre>
<p><strong>Ruby 注释</strong></p>
<span>
注释会对 Ruby 解释器隐藏一行，或者一行的一部分，或者若干行。您可以在行首使用字符（ # ）：
</br>
下面是另一种形式。这种块注释会对解释器隐藏 =begin/=end 之间的行：
</span>
<p><strong>Ruby 数据类型</strong></p>
<span>Ruby支持的数据类型包括基本的Number、String、Ranges、Symbols，以及true、false和nil这几个特殊值，同时还有两种重要的数据结构——Array和Hash。</span>
<pre class="brush:javascript;gutter:true">
a=2
b=4
puts a+b
puts a-b
puts a*b
puts a/b
puts a%b
puts a**b
puts "#{12*12}"

str="abcd"
#puts str
arr=["yu","de","so","ng"]

arr.each do |i|
	print i
end

hs={"red"=>"0xf00","green"=>"0x0f0","blue"=>"0x00f"}
hs.each do |key,value|
	print key," is",value,"\n"
end

(10..15).each do |n|
	print n," "
end
</pre>

<p><strong>Ruby 类和对象</strong></p>
<span>在 Ruby 中，类总是以关键字 class 开始，后跟类的名称。类名的首字母应该大写。</span>
<pre class="brush:javascript;gutter:true">
module Animals

class  Animal
	
	def initialize(name,speices)
		@name=name
		@speices=speices
	end
	
	def getName
		@name
	end
	
	def setName(value)
		@name=value
	end
	
	def getSpeices
		@speices
	end
	
	def setSpeices(value)
		@speices=value
	end
end

class DogAnimal&lt;Animal

	def initialize(voice)
		super('Dog','mammal')
		@voice=voice
	end
	
	def getVoice
		@voice
	end
	
	def  setVoice(value)
		@voice=value
	end
end
end

cat=Animals::Animal.new('cat','mammal')
dog=Animals::DogAnimal.new('wangwang')

3.times{
	print cat.getName+"  is a  "+cat.getSpeices+"\r\n"
	print dog.getName+"'s voices is:   "+dog.getVoice+"\r\n"
}
</pre>

<p><strong>Ruby 类中的变量</strong></p>
<span>Ruby 提供了四种类型的变量：</br>
<ul>
	<li><strong>局部变量：</strong>局部变量是在方法中定义的变量。局部变量在方法外是不可用的。在后续的章节中，您将看到有关方法的更多细节。局部变量以小写字母或 _ 开始。</li>
	<li><strong>实例变量：</strong>实例变量可以跨任何特定的实例或对象中的方法使用。这意味着，实例变量可以从对象到对象的改变。实例变量在变量名之前放置符号（@）。</li>
	<li><strong>类变量：</strong>类变量可以跨不同的对象使用。类变量属于类，且是类的一个属性。类变量在变量名之前放置符号（@@）。</li>
	<li><strong>全局变量：</strong>类变量不能跨类使用。如果您想要有一个可以跨类使用的变量，您需要定义全局变量。全局变量总是以美元符号（$）开始。</li>
</ul>
</span>
<pre class="brush:javascript;gutter:true">
class Customer
   @@no_of_customers=0
   def initialize(id, name, addr)
      @cust_id=id
      @cust_name=name
      @cust_addr=addr
   end
end

# 创建对象
cust1=Customer.new("1", "John", "Wisdom Apartments, Ludhiya")
cust2=Customer.new("2", "Poul", "New Empire road, Khandala")

# 调用方法
cust1.display_details()
cust1.total_no_of_customers()
cust2.display_details()
cust2.total_no_of_customers()
</pre>
<p><strong>Ruby 变量</strong></p>
<strong>Ruby 全局变量</strong></br>
<span>全局变量以 $ 开头。未初始化的全局变量的值为 nil，在使用 -w 选项后，会产生警告。
</br>
给全局变量赋值会改变全局状态，所以不建议使用全局变量。</span>
</br>
<strong>Ruby 实例变量</strong></br>
<span>实例变量以 @ 开头。未初始化的实例变量的值为 nil，在使用 -w 选项后，会产生警告。</span>
</br>
<strong>Ruby 类变量</strong></br>
<span>类变量以 @@ 开头，且必须初始化后才能在方法定义中使用。</br>
引用一个未初始化的类变量会产生错误。类变量在定义它的类或模块的子类或子模块中可共享使用。</br>
在使用 -w 选项后，重载类变量会产生警告。</span>
</br>
<strong>Ruby 局部变量</strong>
<span>
局部变量以小写字母或下划线 _ 开头。局部变量的作用域从 class、module、def 或 do 到相对应的结尾或者从左大括号到右大括号 {}。</br>
当调用一个未初始化的局部变量时，它被解释为调用一个不带参数的方法。</br>
对未初始化的局部变量赋值也可以当作是变量声明。变量会一直存在，直到当前域结束为止。局部变量的生命周期在 Ruby 解析程序时确定。</br>
在上面的实例中，局部变量是 id、name 和 addr。</br>
</span>
<strong>Ruby 常量</strong>
<span>
常量以大写字母开头。定义在类或模块内的常量可以从类或模块的内部访问，定义在类或模块外的常量可以被全局访问。</br>
常量不能定义在方法内。引用一个未初始化的常量会产生错误。对已经初始化的常量赋值会产生警告。</br>
</span>
<strong>Ruby 伪变量</strong>
<span>
它们是特殊的变量，有着局部变量的外观，但行为却像常量。您不能给这些变量赋任何值。</br>
<ul>
<li>self: 当前方法的接收器对象。</li>
<li>true: 代表 true 的值。</li>
<li>false: 代表 false 的值。</li>
<li>nil: 代表 undefined 的值。</li>
<li>__FILE__: 当前源文件的名称。</li>
<li>__LINE__: 当前行在源文件中的编号。</li>
</ul>
</span>
<img src="images/ruby3.png"/>
<img src="images/ruby4.png"/>
<img src="images/ruby5.png"/>
<p><strong>Ruby 判断</strong></p>
<pre class="brush:javascript;gutter:true">
x=1
if x>2
	puts "x is greater than 2"
elsif x&lt;=2 and x!=0
	puts "x is 1"
else puts "I can not guess the number"
end

#Ruby unless 语句
x=1
unless x>2
   puts "x is less than 2"
 else
  puts "x is greater than 2"
end

#Ruby case 语句
$age =  5
case $age
when 0 .. 2
    puts "baby"
when 3 .. 6
    puts "little child"
when 7 .. 12
    puts "child"
when 13 .. 18
    puts "youth"
else
    puts "adult"
end

#Ruby while 语句
$i = 0
$num = 5
while $i &lt; $num  do
   puts("Inside the loop i = #$i" )
   $i +=1
end

#Ruby while 修饰符
$i = 0
$num = 5
begin
   puts("Inside the loop i = #$i" )
   $i +=1
end while $i &lt; $num

#Ruby until 语句
$i = 0
$num = 5
until $i &gt; $num  do
   puts("Inside the loop i = #$i" )
   $i +=1;
end

#Ruby until 修饰符
$i = 0
$num = 5
begin
   puts("Inside the loop i = #$i" )
   $i +=1;
end until $i &gt; $num

#Ruby for 语句
for i in 0..5
   puts "Value of local variable is #{i}"
end

#Ruby break 语句
for i in 0..5
   if i &gt; 2 then
      break
   end
   puts "Value of local variable is #{i}"
end

#Ruby next 语句
for i in 0..5
   if i &lt; 2 then
      next
   end
   puts "Value of local variable is #{i}"
end

#Ruby redo 语句
for i in 0..5
   if i &lt; 2 then
      puts "Value of local variable is #{i}"
      redo
   end
end

#Ruby retry 语句
for i in 1..5
   retry if  i > 2
   puts "Value of local variable is #{i}"
end
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