$(function(){

    $('select').material_select();
  

		var baseurl = $("#base_url").val();

		$(".hobbiedata").on("click",function(){

				var reg_form = new FormData($("#hobbyform")[0]);
				$.ajax({

					url : baseurl+"Hobbie/addHobbie",
					type :"POST",
					data :reg_form,	
					contentType:false,
					processData:false,
					success:function(res)
					{
						window.location.href = baseurl+"User_login";
						/*window.location.href=baseurl+"RegisterNext";*/
						/*window.location.reload();*/
					}
				});
		});
});