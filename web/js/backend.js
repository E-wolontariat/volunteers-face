$(document).ready(function() {
	$('a').click(function(e) {
		goTo($(this).attr('href'));
		e.stopPropagation();
		return false;
	});

	$('form').each(function() {
		var signedElement = $("<input name='signed_request' type='hidden'>");
		signedElement.val(signed_request);
		$(this).append(signedElement);

	});
});