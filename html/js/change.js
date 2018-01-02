
$(document).on('change', 'input.select-dropdown', function() {
    console.log($(this).val());
});


$(function(){

$('select').material_select();
	var baseurl = $("#base_url").val();
	$('.parallax').parallax();

	$("#reg").on("click",function(){
		$(".modal").modal();
		$("#register").modal("open")
	});

  $("#tech_reg").on("click",function(){
    $(".modal").modal();
    $("#tech_register").modal("open")
  });



   $(".add_reg_data").on("click",function(){

   		var regform = new FormData($("#regformm")[0]);


       var x = document.forms["regformm"]["user_reg_id"].value;
        if (x == "") {
            alert("Use Register Id must be filled out");
            return false;
        }

         var x = document.forms["regformm"]["fname"].value;
        if (x == "") {
            alert("First Name must be filled out");
            return false;
        }

         var x = document.forms["regformm"]["lname"].value;
        if (x == "") {
            alert("Last Name must be filled out");
            return false;
        }

         var x = document.forms["regformm"]["rollno"].value;
        if (x == "") {
            alert("User Id must be filled out");
            return false;
        }

         var x = document.forms["regformm"]["class"].value;
        if (x == "") {
            alert("Class must be filled out");
            return false;
        }

         var x = document.forms["regformm"]["division"].value;
        if (x == "") {
            alert("Div must be filled out");
            return false;
        }

         var x = document.forms["regformm"]["mobile"].value;
        if (x == "") {
            alert("Mobile must be filled out");
            return false;
        }

         var x = document.forms["regformm"]["password"].value;
        if (x == "") {
            alert("Password must be filled out");
            return false;
        }

         var x = document.forms["regformm"]["address"].value;
        if (x == "") {
            alert("User Address must be filled out");
            return false;
        }



   		$.ajax({

   			url : baseurl+"Change/add_reg_data",
   			data:regform,
   			type:"POST",
   			contentType:false,
   			processData:false,
   			success:function(res)
   			{
   				alert("ok");
   			}
   		});
   });
   $("#change").on("click",function(){

      $(".modal").modal();
      $("#changee").modal("open");
   });



/*--------------------------teachure register js------------------------*/
 $(".add_teach_data").on("click",function(){

      var regformm = new FormData($("#teachformm")[0]);
      $.ajax({
        url : baseurl+"change/add_teachreg_data",
        data:regformm,
        type:"POST",
        contentType:false,
        processData:false,
        success:function(res)
        {
           window.location.reload();
        }
      });
   });


});
/*---------------------varify js----------------*/
$(function(){

    var baseurl = $("#base_url").val();

    $(".varify").on("click",function(){
     var data = {
         "email":$("#email").val(),
         "mobile":$("#mobile").val()
      };
    $.post(baseurl+"change/varifyy/",{data:data},function(data){
         var check = jQuery.parseJSON(data);
         if(check.status=="ok")
            {
                /*window.location=baseurl+'change';*/
               alert("login ok");   
            }
            else if(check.status=="fail")
            {
                alert("Please Check you Login Details.");
               alert("fail"); 
            }
            else
            {
               console.log(data);
              
               /* window.location.reload();*/
            }
    });
  });
});

/**
 * Function to produce UUID.
 * See: http://stackoverflow.com/a/8809472
 */
function generateUUID()
{
   var d = new Date().getTime();
   
   if( window.performance && typeof window.performance.now === "function" )
   {
      d += performance.now();
   }
   
   var uuid = 'User_Id_'+'xx-xxx-4xx-yxx-xx'.replace(/[xy]/g, function(c)
   {
      var r = (d + Math.random()*16)%16 | 0;
      d = Math.floor(d/16);
      return (c=='x' ? r : (r&0x3|0x8)).toString(16);
   });

return uuid;
}

/**
 * Generate new key and insert into input value
 */
$( '#keygen' ).on('click',function()
{
   $( '#apikey' ).val( generateUUID() );
});

/*--------------------------js for teachure password----------------*/

function generateUUID()
{
   var d = new Date().getTime();
   
   if( window.performance && typeof window.performance.now === "function" )
   {
      d += performance.now();
   }
   
   var uuid = 'User_Id_'+'xx-xxx-4xx-yxx-xx'.replace(/[xy]/g, function(c)
   {
      var r = (d + Math.random()*16)%16 | 0;
      d = Math.floor(d/16);
      return (c=='x' ? r : (r&0x3|0x8)).toString(16);
   });

return uuid;
}

/**
 * Generate new key and insert into input value
 */
$( '#key' ).on('click',function()
{
   $( '#api' ).val( generateUUID() );
});




