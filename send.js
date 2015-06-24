$(function(){
	$("#send").click(function(){
		var name=$("#name").val();
		var email=$("#email").val();
		var msg=$("#msg").val();	
        if(name=="" || email=="" || msg=="") alert("不能有空项!");
        
        else
        {
			$.post("addMessage.php",{name:name,email:email,msg:msg},function(data,status){
                if(data=="0") 
            	{
                    alert("发送成功！");
					$("#name").attr("value",'');
                	$("#email").attr("value",'');
                	$("#msg").attr("value",'');
            	}else if(data=="1")
                {
                    alert("发送失败！");
                }
                
			});
        }
	});


})