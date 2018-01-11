$(function(){

	var baseurl = $("#base_url").val();

	/*parallax effect*/
    $('.parallax').parallax();


$(".updatepost").on("click",function(){

      var modeldata = new FormData($('#updatepost')[0]);
      $.ajax({
        url : baseurl+"ProfileAbout/updateimages",
        type : 'POST',
        data : modeldata,
        processData :false,
        contentType : false,
        success : function(res)
        {
          /*alert("Update Successfully ");
          window.location.reload();*/
        }

      });

    });  
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
	      stickySidebar.css('top', scrollTop - sidebarTop);

	      // stop the sticky sidebar at the footer to avoid overlapping
	      var sidebarBottom = stickySidebar.offset().top + stickyHeight,
	          stickyStop = $('.profile-area').offset().top + $('.profile-area').height();
	      if (stickyStop < sidebarBottom) {
	        var stopPosition = $('.profile-area').height() - stickyHeight;
	        stickySidebar.css('top', stopPosition);
	      }
	    }
	    else {
	      stickySidebar.css('top', '0');
	    } 
	  }
	});



});