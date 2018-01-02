$(function(){

	var baseurl = $("#base_url").val();

	$(".viewbtn").on("click",function(){

		var viewid = $(this).data("viewid");
		$.post(baseurl+"ViewDetail/viewdataa/"+viewid,function(data){

			var check = parseJSON(data);
		});
	});

	
});