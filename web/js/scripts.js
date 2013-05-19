
function goTo(location) {
	top.location.href = facebook_url+''+location; 
}

function sendAnswer() {
	var answer = $("textarea#answer_text").val();
	var termsAccepted = $("input#terms_accept").is(":checked");
	var error = false;

	if(!termsAccepted) {
		$("label#terms_accept_label").addClass("error");
		error = true;
	} else {
		$("label#terms_accept_label").removeClass("error");
	}
	
	if(answer=="") {
		$("textarea#answer_text").addClass("error");
		error = true;
	} else {
		$("textarea#answer_text").removeClass("error");
	}
	
	if(!error) {
		$.ajax({
		  url: canvas_url+"ajax/save",
		  type: "POST",
		  dataType: 'json',
		  data: {
			  'answer': answer,
			  'signed_request': signed_request
		  },
		  context: document.body,
		  success: function(data) {
		  	goTo('app/sent');
		  }
		});
	}
	
}

$(document).ready(function() {
	
	$("input#terms_accept").change(function() {
		if($(this).is(':checked'))
		{
			$("label#terms_accept_label").addClass('clicked');
		}
		else {
			$("label#terms_accept_label").removeClass('clicked');
		}
			
	});
	


});


function ajaxJoin(event_id,e) {
	$.ajax({
		url: canvas_url+"/ajax/join",
		dataType: "json",
		type: "post",
		data: {
			'event_id': event_id,
			'signed_request': signed_request
		},
		success: function(data) {
			if(data.success) {
				$(e).hide();
					
			}
		}
	})
} 


function addPage(e) {
	e = $(e);
	var input = e.prev();

	$.ajax({
		url: canvas_url+"/ajax/addpage",
		dataType: "json",
		type: "post",
		data: {
			'page_id': input.val(),
			'signed_request': signed_request
		},
		success: function(data) {
			top.location.href = facebook_url+'/profile/index';
		}
	})	
} 


