$(function(){

 	var baseurl = $("#base_url").val();
 	/*---------------------JS FOR SELECT ------------*/
 	 $('select').material_select();
/*-------------js for date piker------------------*/
	  $('.datepicker').pickadate({
	    selectMonths: true, // Creates a dropdown to control month
	    selectYears: 15, // Creates a dropdown of 15 years to control year,
	    today: 'Today',
	    clear: 'Clear',
	    close: 'Ok',
	    closeOnSelect: false // Close upon selecting a date,
	  });

/*---------------------open model js-------------------*/	  

	 	$(".addbtn").on("click",function(){
	 		$(".modal").modal();
	 		$("#addid").modal("open");
	 	});
/*--------------------add data js--------------------*/
		$(".adddata").on("click",function(){
			var formdata = new FormData($("#addform")[0]);

			$.ajax({
				url : baseurl+"circular/addcircular",
				data :formdata,
				type:"POST",
				contentType:false,
				processData:false,
				success :function(res)
				{
					window.location.reload();
				}
			});
		});
/*---------------------open update  model js-------------------*/	
$(".updateBtn").on("click",function(){

		$(".modal").modal();
		$("#upid .modal-content").html("");

		var upid = $(this).data("id");
		$.post(baseurl+"circular/up_reg_data/"+upid,function(data){
			$("#upid .modal-content").html(data);
			 Materialize.updateTextFields();
		});
		$("#upid").modal("open");
	});	

/*------------------------------updatee teachure data-------------------*/	
$(".updata").on("click",function(){

		var upform = new FormData($("#uppform")[0]);

		$.ajax({

			url : baseurl+"circular/up_register",
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
		  $.post(baseurl+"circular/deletedata/"+delid,function()
		  {
		  		window.location.reload();
		  });
		}
	  });		
});

  $(document).ready(function() {
    $('select').material_select();
  });
