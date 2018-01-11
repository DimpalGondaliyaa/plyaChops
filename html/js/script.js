$(function(){



$(".mybtn").on("click",function(){
 $(".modal").modal();
    $("#q .modal-content").html("");
	$("#q").modal("open");
	var dataid = $(this).data("messid");
	$.post(baseurl+"ProfileDashboard/getcomm/"+dataid,function(dataid){
		$("#q .modal-content").html(dataid);
	});
});




$(".adddeshcomment").on("click",function(){

	var dasform = new FormData($("#dasform")[0]);
	$.ajax({

		url : "ProfileDashboard/adddashcomment",
		data : dasform,
		type:"POST",
		contentType:false,
		processData:false,
		success:function(res)
		{
			window.location.reload();
		}
	});
});



   $(".postimage").on("click",function(){
    $(".modal").modal();
    $("#imagemodel .modal-content").html("");
    $("#imagemodel").modal("open");
     var data = $(this).data("postid");
    $.post(baseurl+"ProfileAbout/fetchpost/"+data,function(data){
       $("#imagemodel .modal-content").html(data);

    });
});

	$(".imageupdate").on("click",function(){

				var reg_form = new FormData($("#image")[0]);
				$.ajax({

					url : baseurl+"ProfileAbout/updatepostdata",
					type :"POST",
					data :reg_form,	
					contentType:false,
					processData:false,
					success:function(res)
					{
						/*window.location.reload();*/
					}
				});
		});


$(".deletebtn").on("click",function(){

  var delid = $(this).data("delid");
  
  if(confirm("are you sure to delete this?")){
     $.post(baseurl+"ProfileAbout/deletepost/"+delid,function(data){

        window.location.reload();
  });

  }
 
});


	$('.parallax').parallax();


/*Position Fixed On Scroll top */

	var stickySidebar = $('.sticky');

	if (stickySidebar.length > 0) {	
	  var stickyHeight = stickySidebar.height(),
	      sidebarTop = stickySidebar.offset().top;
	}

	// on scroll move the sidebar
	$(window).scroll(function () {
	  if (stickySidebar.length > 0) {	
	    var scrollTop = $(window).scrollTop();
	    if (sidebarTop < scrollTop) {
	      $('.sticky').css('top', scrollTop - sidebarTop);

	      // stop the sticky sidebar at the footer to avoid overlapping
	      var sidebarBottom = stickySidebar.offset().top + stickyHeight,
	          stickyStop = $('.PostContainer').offset().top +  $('.PostContainer').height();
	      if (stickyStop < sidebarBottom) {
	        var stopPosition = $('.PostContainer').height() - stickyHeight;
	        stickySidebar.css('top', stopPosition);
	      }
	    }
	    else {
	      stickySidebar.css('top', '0');
	    } 
	  }
	});


	/*Smooth Scroillig*/

var baseurl = $("#base_url").val();
	/*=================== Like Button for PostBox =======================*/
 $(".like-cnt").on("click",function(){
    var baseurl=$("#base_url").val();  
    var productID=$(this).data("likesid");
    alert(productID);
    $('like-cnt_'+productID).css('background','blue');
  /*  $.post(baseurl+"product/getTowishList"+productID,function(data){
      var data=$.parseJSON(data);  */
    });


});

