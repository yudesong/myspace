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

	<div style="float:left;border:1px solid black;border-radius:5px;width:96%;margin-left:20px;margin-top:10px;margin-right:15px;background:white;">
<div class="grid-8">
<div class="post-78738 post type-post status-publish format-standard hentry category-webfront category-programmer tag-javascript tag-1876 odd" id="post-78738">
<div class="entry-header">
<h1>Web 前端面试题</h1>
</div>
<div class="entry">
<strong>1.判断字符串以字母开头，后面可以是数字，下划线，字母，长度为6-30</strong>
<pre class="brush:javascript:gutter:true">
var reg=/^[a-zA-Z]{1}\w{6,30}$/;
</pre>
<strong></strong>
<pre class="brush:javascript:gutter:true">

</pre>
<strong>3.Ajax同步和异步的区别，如何解决跨域问题?</strong>
<p>异步请求，也就是说请求发出去后，不管请求的结果是否返回，都会执行后面的代码.而同步请求则会一直等待服务器响应。
<span>
1. iframe方法：这个适合同一主域名的二级域及主域名之间的相互访问。比如:www.a.com和blog.a.com之间的ajax交互，在两个域下的页面都加上document.domain = "a.com"就可以了。
</br>2.用script的方法比用iframe的优点要多，iframe会产生浏览器的历史记录，这会影响到“前进”“后退”按钮，并且iframe通过设置domain，最多可以跨二级域，而script可以直接跨全域，这一点既是它的优点也是它的缺点，因为别人也可以在他的页面上也轻松的调用你的数据！
</br>
</span>
<strong>4.apply和call方法有形似之处，请说出二者的区别</strong>
<pre class="brush:javascript:gutter:true">

</pre>
<strong>5.以下代码中 end字符串什么时候输出</strong>
<pre class="brush:javascript:gutter:true">
var t=true;
setTimeout(function(){
       console.log(123);
        t=false;
    },1000);

while(t)
{ }
console.log('end');
</pre>
<strong>6.以下哪条语句会产生运行错误：（A）</strong></br>
<span>A.var   obj   =   (   );</span></br>
<span>B.var   obj   =   [   ];</span></br>
<span>C.var   obj   =   {   };</span></br>
<span>D.var   obj   =   /   /;</span></br>
</br>
<strong>7.请选择结果为真的表达式：（C）</strong></br>
<span>A. null   instanceof   Object</span></br>
<span>B. null   ===   undefined</span></br>
<span>C. null   ==   undefined</span></br>
<span>D. NaN   ==   NaN</span></br>
</br>
<pre class="brush:javascript:gutter:true">

</pre>
<strong>回答以下代码，alert的值分别是多少？</strong>
<pre class="brush:javascript:gutter:true">
&lt;span style="font-family:Microsoft YaHei;font-size:18px;">&lt;script>  
var a = 10;  
function test() {  
    a = 100;  
    alert(a);  
    alert(this.a);  
    var a;  
    alert(a);  
}  
test();  
&lt;/script>  
&lt;/span>  
</pre>
<strong>写出一下运算结果</strong>
<pre class="brush:javascript:gutter:true">
alert(typeof(null)) // object
alert(typeof(undefined)) // undefined
alert(typeof(NaN)) // number
alert(NaN==undefined) // false
alert(NaN==NaN) // false
var str="123abc";
alert(typeof(str++)) // number
alert(str) // string
</pre>
<strong>写出函数DateDemo的返回结果，系统时间假定为今天</strong>
<pre class="brush:javascript:gutter:true">
function DateDemo(){
var d, s="今天日期是：";
d = new Date();
s += d.getMonth() + "/";
s += d.getDate() + "/";
s += d.getYear();
return s;
}
</pre>
<strong>写出程序运行的结果？</strong>
<pre class="brush:javascript:gutter:true">
for(i=0, j=0; i&lt;10, j&lt;6; i++, j++){
k = i + j;
}
</pre>
<strong></strong>
<pre class="brush:javascript:gutter:true">
</pre>

<pre>
一、单选题
1、以下哪条语句会产生运行错误：（A）
A.var   obj   =   (   );
B.var   obj   =   [   ];
C.var   obj   =   {   };
D.var   obj   =   /   /;
2、以下哪个单词不属于javascript保留字：（B）
A. with
B. parent
C. class
D. void
3、请选择结果为真的表达式：（C）
A. null   instanceof   Object
B. null   ===   undefined
C. null   ==   undefined
D. NaN   ==   NaN
二、不定项选择题
4、请选择对javascript理解有误的：(ABCD)
A. JScript是javascript的简称
B. javascript是网景公司开发的一种Java脚本语言，其目的是为了简化Java的开发难度
C. FireFox和IE存在大量兼容性问题的主要原因在于他们对javascript的支持不同上
D. AJAX技术一定要使用javascript技术
5、 foo对象有att属性，那么获取att属性的值，以下哪些做法是可以的：（ACE）
A. foo.att
B. foo(“att”)
C. foo[“att”]
D. foo{“att”}
E. foo[“a”+”t”+”t”]
6、在不指定特殊属性的情况下，哪几种HTML标签可以手动输入文本：（AB）
A. &lt;TEXTAREA>&lt;/TEXTAREA>
B. &lt;INPUT   type=”text”/>
C. &lt;INPUT   type=”hidden”/>
D. &lt;DIV>&lt;/DIV>
7、以下哪些是javascript的全局函数：（ABC）
A. escape
B. parseFloat
C. eval
D. setTimeout
E. alert
8、关于IFrame表述正确的有：(ABCD)
A. 通过IFrame，网页可以嵌入其他网页内容，并可以动态更改
B. 在相同域名下，内嵌的IFrame可以获取外层网页的对象
C. 在相同域名下，外层网页脚本可以获取IFrame网页内的对象
D. 可以通过脚本调整IFrame的大小
9、关于表格表述正确的有：（ABCDE）
A. 表格中可以包含TBODY元素
B. 表格中可以包含CAPTION元素
C. 表格中可以包含多个TBODY元素
D. 表格中可以包含COLGROUP元素
E. 表格中可以包含COL元素
10、关于IE的window对象表述正确的有：（ACD）
A. window.opener属性本身就是指向window对象
B. window.reload()方法可以用来刷新当前页面
C. window.location=”a.html”和window.location.href=”a.html”的作用都是把当前页面替换成a.html页面
D. 定义了全局变量g；可以用window.g的方式来存取该变量
三、问答题：
1、谈谈javascript数组排序方法sort()的使用，重点介绍sort()参数的使用及其内部机制
   sort的实现的功能类似JAVA的比较器，数据排序从多维数组的第一维开始排序可以自己定义排序方法，很不错的函数。
2、简述DIV元素和SPAN元素的区别。
   DIV有回车，SPAN没有。
3、结合<span   id=”outer”><span   id=”inner”>text</span></span>这段结构，谈谈innerHTML，outerHTML 和 innerText之间的区别。
   这个问题只要写一下看的很清楚，innerHTML包括对象里面的HTML,outerHTML包括对象和里面的innerText对象里面的文本。
4、说几条XHTML规范的内容（至少3条）
   属性加引号，不能有不匹配的标签，加定义。
5、对Web标准化（或网站重构）知道哪些相关的知识，简述几条你知道的Web标准？
   W3C标准等。
四、程序题：
1、完成foo()函数的内容，要求能够弹出对话框提示当前选中的是第几个单选框。
&lt;html>
&lt;body>
&lt;script>
function   foo()   
{
   //在此处添加代码
   var rg = document.getElementsByName(”radioGroup”);
   for(var i = 0;i &lt; rg.length;i++)
    {
		if(rg[i].checked)    
		{
			alert(”你选择了第”   +   (i+1)   +   “个单选框”);
		}                                        
	}                                                                                               
	return   false;                                                                                  
}                                                                                            </script>                                                                                    <body>
&lt;form   name=”form1″   onsubmit=”return   foo();”>
&lt;input   type=”radio”   name=”radioGroup”/>
&lt;input   type=”radio”   name=”radioGroup”/>
&lt;input   type=”radio”   name=”radioGroup”/>
&lt;input   type=”radio”   name=”radioGroup”/>
&lt;input   type=”radio”   name=”radioGroup”/>
&lt;input   type=”radio”   name=”radioGroup”/>
&lt;input   type=”submit”/>
&lt;/form>
&lt;/body>
&lt;/html>
2、填充注释部分的函数体，使得foo()函数调用弹出”成功”的对话框。代码应尽量简短。
&lt;html>
&lt;body>
&lt;script>
function   foo()   {
var   str   =   reverse(’a,b,c,d,e,f,g’);
alert(str);
if   (str   ==   ‘g,f,e,d,c,b,a’)   alert(’成功’);
else   alert(’失败’);
}
function   reverse(str)
{
//   在此处加入代码，完成字符串翻转功能
var   spl   =   str.split(’,');
var   newstr=”";
for(i=spl.length-1;i>=0;i–)
{
newstr+=spl[i]+’,';
}
newstr=newstr.substring(0,newstr.length-1)
return   newstr;
}
&lt;/script>
&lt;/HEAD>
&lt;BODY>
&lt;INPUT   type=”button”   value=”str”   onclick=”foo()”/>
&lt;/BODY>
&lt;/HTML>
function   reverse(str)   {
//   在此处加入代码，完成字符串翻转功能
var temp=[];   
for(var i=str.length-1;i>-1;i--)                                                                    
{	 temp.push(str.charAt(i));}                                                                          
	return temp.join("").toString();
}  
 function reverse(srcString){  
    var temp = [];  
    for(var i=srcString.length-1;i>-1;i--){  
        temp.push(srcString.charAt(i));  
    }  
    return temp.join("").toString();  
 }  

</pre>


</div>
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