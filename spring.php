<!DOCTYPE html>   
<head>
  <title>Spring基础</title>
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
<div class="entry">
<h1>Spring基础</h1>
<p>spring是J2EE应用程序框架，是轻量级的IoC和AOP的容器框架，主要是针对javaBean的生命周期进行管理的轻量级容器，可以单独使用，也可以和Struts框架，ibatis框架等组合使用。
<img src="images/spring-1.png">
<p>1）IoC(Inversion of Control)控制反转，对象创建责任的反转，在spring中BeanFacotory是IoC容器的核心接口，负责实例化，定位，配置应用程序中的对象及建立这些对象间的依赖。XmlBeanFacotory实现BeanFactory接口，通过获取xml配置文件数据，组成应用对象及对象间的依赖关系。
spring中有三种注入方式，一种是set注入，一种是接口注入，另一种是构造方法注入。
<p>2）AOP面向切面编程</br>
aop就是纵向的编程，如下图所示，业务1和业务2都需要一个共同的操作，与其往每个业务中都添加同样的代码，不如写一遍代码，让两个业务共同使用这段代码。
spring中面向切面变成的实现有两种方式，一种是动态代理，一种是CGLIB，动态代理必须要提供接口，而CGLIB实现是有继承。</>
<p> spring框架为我们提供了三种注入方式，分别是set注入，构造方法注入，接口注入。接口注入不作要求，下面介绍前两种方式。</br>
<strong>set注入方式</strong>
<pre class="brush:javascript;gutter:true">
public class User {
	private String name;
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
}
</pre>
配置applicationContext.xml
<pre class="brush:javascript;gutter:true">
<bean id="user" class="com.bean.User">
	<property name="name">
		<value>yudesong</value>
	</property>
</bean>
</pre>
<strong>给对象赋值</strong>
<pre class="brush:javascript;gutter:true">
public class User{  
     private UserService userservice;  
     public UserServicegetUserservice() {  
          returnuser;  
     }  
     public void setUserservice(UserService userservice){  
         this.userservice= userservice;  
     }  
} 
</pre>
配置applicationContext.xml
<pre class="brush:javascript;gutter:true">
<!--对象的声明-->  
<bean id="userService" class="com.service.UserService"></bean>  
<bean id="userAction"class="com.lsz.spring.action.User" >  
   <property name="userservice" ref="userService"></property>  
</bean>
</pre>
<strong>给list集合赋值</strong>
<pre class="brush:javascript;gutter:true">
public class User{  
    private List&lt;String&gt; username;  
    public List&lt;String&gt; getUsername() {  
        returnusername;  
    }  
    public void setUsername(List&lt;String&gt; username) {  
        this.username= username;  
    }  
}
</pre>
配置applicationContext.xml
<pre class="brush:javascript;gutter:true">
<bean id="userAction"class="com.lsz.spring.action.User" >  
     <property name="username">  
           <list>  
               <value>zhang,san</value>  
               <value>lisi</value>  
               <value>wangwu</value>                                  
           </list>  
    </property>  
</bean>
</pre>
<strong>给属性文件中的字段赋值</strong>
<pre class="brush:javascript;gutter:true">
public class User{  
    private Properties props ;  
    public  Properties getProps() {  
        returnprops;  
    }  
    public  void setProps(Properties props) {  
        this.props= props;  
    }  
} 
</pre>
配置applicationContext.xml
<pre class="brush:javascript;gutter:true">
<bean>  
    <property name="props">  
        <props>  
           <prop key="url">jdbc:oracle:thin:@localhost:orl</prop>  
           <prop key="driverName">oracle.jdbc.driver.OracleDriver</prop>  
           <prop key="username">scott</prop>  
           <prop key="password">tiger</prop>  
        </props>  
    </property>  
</bean> 
</pre>
<strong>构造方法注入</strong>
<pre class="brush:javascript;gutter:true">
public class User{  
    private String name;
    private int age  
    publicUser(String name,int age) {  
        this.name = name;
        this.age = age;  
    }  
}
</pre>
配置applicationContext.xml
<pre class="brush:javascript;gutter:true">
<constructor-arg value="admin"index="0"></constructor-arg>                  
<constructor-arg value="23" type="int"index="1"></constructor-arg>  
</pre>








<h3>创建Spring步骤：</h3>
【1】在项目右键选择MyEclipse选择Add Spring capabilities 选中要加入的包</br>
【2】新建Java Bean 类HelloWorld添加get/set方法</br>
【3】在applicationContext.xml添加bean配置</br>
【4】BeanFactory bf = new XmlBeanFactory(new ClassPathResource("applicationContext.xml"));</br>&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
ApplicationContext ac = new ClassPathXmlApplicationContext("applicationContext.xml");
  </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;  HelloWorld hw = (HelloWorld) bf.getBean("test");  </br>  
</div>
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
"applescript  js/shBrushAppleScript.js"
  ,"as3 actionscript3 js/shBrushAS3.js"
  ,"bash shell  js/shBrushBash.js"
  ,"cf coldfusion js/shBrushColdFusion.js"
  ,"cpp c js/shBrushCpp.js"
  ,"c# c-sharp csharp js/shBrushCSharp.js"
  ,"css js/shBrushCss.js"
  ,"delphi pas pascal  js/shBrushDelphi.js"
  ,"diff patch  js/shBrushDiff.js"
  ,"erl erlang  js/shBrushErlang.js"
  ,"java  js/shBrushJava.js"
  ,"jfx javafx  js/shBrushJavaFX.js"
  ,"js jscript javascript js/shBrushJScript.js"
  ,"perl pl js/shBrushPerl.js"
  ,"php js/shBrushPhp.js"
  ,"plain text  js/shBrushPlain.js"
  ,"ps powershell js/shBrushPowerShell.js"
  ,"py python js/shBrushPython.js"
  ,"rails ror ruby rb js/shBrushRuby.js"
  ,"sass scss js/shBrushSass.js"
  ,"scala js/shBrushScala.js"
  ,"sql js/shBrushSql.js"
  ,"vb vbnet   js/shBrushVb.js"
  ,"xml xhtml xslt html js/shBrushXml.js"
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