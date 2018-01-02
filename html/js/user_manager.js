$(function(){

    $('select').material_select();
  
	 $('.parallax').parallax();
	var baseurl = $("#base_url").val();

	$(".updateBtn").on("click",function(){
		$(".modal").modal();
		$("#upmodel .modal-content").html("");

		var upid = $(this).data("id");
		$.post(baseurl+"user_manager/up_reg_data/"+upid,function(data){
			$("#upmodel .modal-content").html(data);
			 Materialize.updateTextFields();
		});
		$("#upmodel").modal("open");
	});

	$(".updatemodel").on("click",function(){

		var upform = new FormData($("#upres")[0]);

		$.ajax({

			url : baseurl+"user_manager/up_register",
			data: upform,
			type:"POST",
			contentType : false,
			processData:false,
			success:function(res)
			{
				window.location.reload();
			}
		});
	});

	$(".deletebtn").on("click",function(){

		var delid = $(this).data("id");

		if(confirm("are you sure to delete this???"))
		{
		  $.post(baseurl+"user_manager/deletedata/"+delid,function()
		  {
		  		window.location.reload();
		  });
		}
	  });
/*---------------------------------------fetch data for circulal event--------------------*/
$("").on("click",function(){

});	
});


