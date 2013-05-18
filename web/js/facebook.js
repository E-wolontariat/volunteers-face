

$(document).ready(function() {

    FB.init({
      appId  : fb_app_id,
      status : true, 
      cookie : true, 
      xfbml  : true  
    });
    //FB.Canvas.setAutoGrow();
    fbApiInit = true; 
	
	FB.Event.subscribe('edge.create', function(response) {
		//alert("like!");
		$.ajax({
		  url: canvas_url+"ajax/ispagefan",
		  type: "POST",
		  dataType: 'json',
		  data: {
			  'signed_request': signed_request
		  },
		  context: document.body,
		  success: function(data) {
			  if(data.is_fan==1) {
				  goTo(previous_page);
			  }
		  }
		});
	});
	
});


