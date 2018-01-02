$(function(){

	   $('.parallax').parallax();
	   $('select').material_select();
     
     var baseurl = $("#base_url").val();

	$(".loginbtn").on("click",function(){

		 var data = {
		 	'teach_login_id' : $("#teach_login_id").val(),
		 	'password' : $("#password").val(),
		 	'class' :$("#class").val(),
		 	'division' :$("#division").val()
		 };
		 $.post(baseurl+"teacher_login/tech_log/",{data:data},function(data){

		 		var check =  jQuery.parseJSON(data);
         	if(check.status=="ok")
         	{
                /*window.location=baseurl+'change';*/
         		alert("login ok");
                window.location.href=baseurl+'attendance';
                
         	}
         	/*else if(check.status=="fail")
         	{
         		alert("fail");	
         	}*/
         	else
         	{
         		console.log(data);
                alert("Please Check you Login Details.");
                window.location.reload();
         	}
		 });
	});
});