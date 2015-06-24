var xhr=null;
if(window.XMLHttpRequest)
{
	xhr=new XMLHttpRequest();
}else
{
	xhr=new ActiveXObject("Microsoft.XMLHTTP");
}
xhr.open("GET","ajax.txt",true);





