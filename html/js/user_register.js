$(function(){

		var baseurl = $("#base_url").val();

		$(".user_Register").on("click",function(){

				var reg_form = new FormData($("#user_reg")[0]);
				$.ajax({

					url : baseurl+"user_register/user_reg_data",
					type :"POST",
					data :reg_form,	
					contentType:false,
					processData:false,
					success:function(res)
					{
						window.location.href = baseurl+"RegisterNext";
						/*window.location.href=baseurl+"RegisterNext";*/
						/*window.location.reload();*/
					}
				});
		});
});