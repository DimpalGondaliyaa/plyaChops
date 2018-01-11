$(function(){

	 $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
         $('select').material_select();
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
						window.location.reload();
					}
				});
		});

	$(".usernextdata").on("click",function(){

		var reg_form = new FormData($("#nextform")[0]);
		$.ajax({

			url : baseurl+"RegisterNext/addnextdata",
			type :"POST",
			data :reg_form,	
			contentType:false,
			processData:false,
			success:function(res)
			{
				window.location.href = baseurl+"Hobbie";
				/*window.location.reload();*/
			}
		});
	});


	$(".edit-personal").on("click",function(){

		var reg_form = new FormData($("#up_personal_info")[0]);
		$.ajax({

			url : baseurl+"RegisterNext/updatenextdata",
			type :"POST",
			data :reg_form,	
			contentType:false,
			processData:false,
			success:function(res)
			{
				
				window.location.reload();
			}
		});
	});
/*---------------------edit hobbiy details---------------*/
$(".edit-hobbie").on("click",function(){

	var reg_form = new FormData($("#hobbyform")[0]);
	$.ajax({

		url : baseurl+"RegisterNext/updatehobbiedata",
		type :"POST",
		data :reg_form,	
		contentType:false,
		processData:false,
		success:function(res)
		{
			
			window.location.reload();
		}
	});
});
/*---------------------edit hobbiy details---------------*/
$(".edit-education").on("click",function(){

	var reg_form = new FormData($("#eduvcationform")[0]);
	$.ajax({

		url : baseurl+"RegisterNext/updateeducationdata",
		type :"POST",
		data :reg_form,	
		contentType:false,
		processData:false,
		success:function(res)
		{
			
			window.location.reload();
		}
	});
});



$('.edit-pro-btn').on("click",function(){
	$(".modal").modal();
	$("#personal-model").modal("open");
});


/*------------------OPEN HOBBIE MODEL------------------*/

$('.edit-hobbie-btn').on("click",function(){
		$(".modal").modal();
		$("#hobby-model").modal("open");
});
/*------------------OPEN education MODEL------------------*/
$('.edit-education-btn').on("click",function(){
		$(".modal").modal();
		$("#education-model").modal("open");
});

$('.updateData').on("click",function(){
		$(".modal").modal();
		$("#updateprofile").modal("open");
});

   


});