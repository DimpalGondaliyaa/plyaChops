$(function(){

	var baseurl = $("#base_url").val();

/*
	  $(".loginbtn").on("click",function(){

            var maindata = new FormData($('#mainform')[0]);
            $.ajax({
            url: baseurl+"login/dologin/",
            type: 'POST', 
            data: maindata,
            processData: false,
            contentType: false,
           
            success: function(res){
               alert("Inserted Successfully");
           
               window.location.reload();
            }
        });
     });
*/





	$(".loginbtn").on("click",function(){

		var data = {
			"email" : $("#email").val(),
			"password" : $("#password").val()
		};
		$.post(baseurl+"login/dologin/",{data:data},function(data){
         
         	var check =  jQuery.parseJSON(data);
         	if(check.status=="ok")
         	{
                /*window.location=baseurl+'change';*/
         		/*alert("login ok");*/
                window.location.href=baseurl+'admin';
                
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




  $(document).ready(function(){
      $('.parallax').parallax();
    });