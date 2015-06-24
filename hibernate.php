<!DOCTYPE html>   
<head>
  <title>Hibernate基础</title>
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
<h1>Hibernate基础</h1>
</div>
<div class="entry">
<div>
<h3>创建Hibernate步骤：</h3>
【1】在项目右键选择MyEclipse选择Add Hibernate capabilities 选中要加入的包</br>
【2】新建User类Integer id,age;String name,passwd添加get/set方法和一个默认的无参构造器</br>
<pre class="brush:javascript;gutter:true">
package com.hibernate;

public class User {
	Integer id,age;//默认为null
	String name,passwd;
	public User(){}
	public Integer getId() {
		return id;
	}
	public void setId(Integer id) {
		this.id = id;
	}
	public Integer getAge() {
		return age;
	}
	public void setAge(Integer age) {
		this.age = age;
	}
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	public String getPasswd() {
		return passwd;
	}
	public void setPasswd(String passwd) {
		this.passwd = passwd;
	}
}
</pre>
【3】配置User.hbm.xml文件
<pre class="brush:javascript;gutter:true">
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;!DOCTYPE hibernate-mapping PUBLIC
        "-//Hibernate/Hibernate Mapping DTD 3.0//EN"
        "http://www.hibernate.org/dtd/hibernate-mapping-3.0.dtd"&gt;
&lt;hibernate-mapping&gt;
    &lt;class name="com.hibernate.User" table="tb_user"&gt;
    	&lt;id name="id"&gt;
    		&lt;generator class="native"/&gt;
    	&lt;/id&gt;
        &lt;property name="name" type="string" not-null="true" length="30"&gt;
        	&lt;column name="name"&gt;&lt;/column&gt;
        &lt;/property&gt;
        &lt;property name="age" type="integer" not-null="true"&gt;
        	&lt;column name="age"&gt;&lt;/column&gt;
        &lt;/property&gt;
        &lt;property name="passwd" type="string" not-null="true" length="20"&gt;
        	&lt;column name="passwd"&gt;&lt;/column&gt;
        &lt;/property&gt;
	&lt;/class&gt;
&lt;/hibernate-mapping&gt;
</pre>
【4】配置hibernate.cfg.xml
<pre class="brush:javascript;gutter:true">
&lt;?xml version='1.0' encoding='UTF-8'?&gt;
&lt;!DOCTYPE hibernate-configuration PUBLIC
          "-//Hibernate/Hibernate Configuration DTD 3.0//EN"
          "http://hibernate.sourceforge.net/hibernate-configuration-3.0.dtd"&gt;
&lt;hibernate-configuration&gt;
    &lt;session-factory&gt;
        &lt;property name="dialect"&gt;org.hibernate.dialect.MySQLDialect&lt;/property&gt;
        &lt;property name="connection.url"&gt;jdbc:mysql://localhost:3306/hibernate&lt;/property&gt;
        &lt;property name="connection.username"&gt;root&lt;/property&gt;
        &lt;property name="connection.driver_class"&gt;com.mysql.jdbc.Driver&lt;/property&gt;
		&lt;property name="show_sql"&gt;true&lt;/property&gt;
    	&lt;property name="hibernate.hbm2ddl.auto"&gt;update&lt;/property&gt;
    	&lt;mapping resource="com/hibernate/User.hbm.xml"/&gt;
    &lt;/session-factory&gt;
&lt;/hibernate-configuration&gt;
</pre>
【5】操作数据库
<pre class="brush:javascript;gutter:true">
Configuration config = new Configuration().configure();
ServiceRegistry registry = new ServiceRegistryBuilder().applySettings(config.getProperties()).buildServiceRegistry();
SessionFactory sf = config.buildSessionFactory(registry);
Session session = sf.openSession();
session.beginTransaction();		
/*
 * 查询数据
User user = (User)session.get(User.class, 1);	//不会缓存
User user = (User)session.load(User.class, 1);  //缓存
System.out.println(user.getPasswd());
*/	

/*
 *删除数据 ,需要将对象转化为持久状态
session.delete(user);
*/
		
/*
 * 添加数据
 User user = new User();
 user.setId(1);
 user.setName("yu");
 user.setAge(25);
 user.setPasswd("10yu");
 session.save(user);		
*/

/*
 *修改数据
 *【1】自动更新,当通过get()/load()方法加载数据后，持久化对象便处于session管理之内,当数据修改时,Hibernate会自动进行更新 
 *【2】手动更新 ,对没有更新的数据会同步为空值
 * User user= new User();
 * user.setId(1);
 * user.setName("gxp");
 * session.update(user);
 */
session.getTransaction().commit();
session.close();
</pre>
<h3>Hibernate缓存</h3>
【1】一级缓存也叫session级缓存或事务级缓存，一级缓存的生命周期和Session的生命周期一致，也就是当 session关闭时缓存即被清除，一级缓存在Hibernate中是不可配置的，即不能被卸载。
当应用程序调用Session的save()、update()、savaeOrUpdate()、get()或load()，以及调用查询接口的list()、iterate()或filter()方法时，如果在Session缓存中还不存在相应的对象，Hibernate就会把该对象加入到第一级缓存中。当清理缓存时，Hibernate会根据缓存中对象的状态变化来同步更新数据库。
Session为应用程序提供了两个管理缓存的方法：
evict(Object obj)：从缓存中清除参数指定的持久化对象。
clear()：清空缓存中所有持久化对象。</br>
【2】二级缓存也称进程级缓存或SessionFactory级缓存，二级缓存可以被所有的session共享，二级缓存的生命周期和SessionFactory的生命周期一致。二级缓存在Hibernate中是可以配置的，可以通过class-cache配置类粒度级别的缓存(class-cache在class中数据发生任何变化的情况下自动更新)，同时也可通过collection-cache配置集合粒度级别的缓存(collection-cache仅在 collection中增加了元素或者删除了元素的情况下才自动更新，也就是当collection中元素发生值的变化的情况下它是不会自动更新的)。
<h3>关联关系的映射方法</h3>
【1】多对一单向关联 
<pre class="brush:javascript;gutter:true">
        <many-to-one name="category" class="com.hibernate.Category">
        	<column name="categoryId"></column>
        </many-to-one> 
</pre>
【2】多对一双向关联 
<pre class="brush:javascript;gutter:true">
		<set name="books">
			<key column="categoryId"></key>
			<one-to-many class="com.hibernate.Category"/>	
		</set>
</pre>
【3】一对一主键关联 
<pre class="brush:javascript;gutter:true">
//在User.hbm.xml添加
<one-to-one name="cardId"></one-to-one>
//在CardId.hbm.xml添加
<one-to-one name="user" constrained="true"></one-to-one>
</pre>
【4】多对多主键关联 
<pre class="brush:javascript;gutter:true">
//在User.hbm.xml添加
		<set name="course" table="tb_student_course">
			<key column="studentId"></key>
			<many-to-many class="com.hibernate.Course" column="courseId"/>	
		</set>
//在CardId.hbm.xml添加
		<set name="student" table="tb_student_course">
			<key column="courseId"></key>
			<many-to-many class="com.hibernate.Student" column="studentId"/>	
		</set>
</pre>
<h3>HQL检索方式</h3>
<pre class="brush:javascript;gutter:true">
List&lt;User&gt; list;
String hql="from User where id=:userid";
//String hql = "from User where id=?";
Query query = session.createQuery(hql);
query.setParameter("userid", 2);
//query.setParamter(0,2);
list = query.list();
for(User user:list)
{
	System.out.println(user.getName());
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